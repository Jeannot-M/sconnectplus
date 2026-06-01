<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        require_once __DIR__ . '/finfo_helper.php';
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if (!extension_loaded('fileinfo')) {
            \Symfony\Component\Mime\MimeTypes::getDefault()->registerGuesser(new class implements \Symfony\Component\Mime\MimeTypeGuesserInterface {
                public function isGuesserSupported(): bool
                {
                    return true;
                }

                public function guessMimeType(string $path): ?string
                {
                    if (!is_file($path) || !is_readable($path)) {
                        return null;
                    }

                    // 1. Try to find the file in Laravel's request files
                    try {
                        if (!app()->runningInConsole()) {
                            $request = request();
                            if ($request) {
                                $flatten = function ($array) use (&$flatten) {
                                    $result = [];
                                    foreach ($array as $item) {
                                        if (is_array($item)) {
                                            $result = array_merge($result, $flatten($item));
                                        } else {
                                            $result[] = $item;
                                        }
                                    }
                                    return $result;
                                };

                                $files = $flatten($request->allFiles());
                                foreach ($files as $file) {
                                    if ($file instanceof \Symfony\Component\HttpFoundation\File\UploadedFile) {
                                        if ($file->getRealPath() === $path || $file->getPathname() === $path) {
                                            $extension = strtolower($file->getClientOriginalExtension());
                                            if ($extension) {
                                                $map = [
                                                    'pdf' => 'application/pdf',
                                                    'doc' => 'application/msword',
                                                    'docx' => 'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
                                                    'xls' => 'application/vnd.ms-excel',
                                                    'xlsx' => 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
                                                    'png' => 'image/png',
                                                    'jpg' => 'image/jpeg',
                                                    'jpeg' => 'image/jpeg',
                                                    'gif' => 'image/gif',
                                                    'txt' => 'text/plain',
                                                    'zip' => 'application/zip',
                                                ];
                                                if (isset($map[$extension])) {
                                                    return $map[$extension];
                                                }
                                            }
                                            return $file->getClientMimeType();
                                        }
                                    }
                                }
                            }
                        }
                    } catch (\Throwable $e) {
                        // Fallback silently if request is not available
                    }

                    // 2. Fallback to reading file headers (magic bytes)
                    $handle = @fopen($path, 'rb');
                    if ($handle) {
                        $bytes = @fread($handle, 4);
                        @fclose($handle);
                        if ($bytes !== false) {
                            if (strpos($bytes, '%PDF') === 0) {
                                return 'application/pdf';
                            }
                            if (bin2hex($bytes) === '89504e47') {
                                return 'image/png';
                            }
                            if (bin2hex(substr($bytes, 0, 3)) === 'ffd8ff') {
                                return 'image/jpeg';
                            }
                            if (substr($bytes, 0, 3) === 'GIF') {
                                return 'image/gif';
                            }
                            if (bin2hex($bytes) === '504b0304') {
                                return 'application/zip';
                            }
                        }
                    }

                    return 'application/octet-stream';
                }
            });
        }
    }
}
