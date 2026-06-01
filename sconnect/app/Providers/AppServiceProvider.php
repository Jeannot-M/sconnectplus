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
        //
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
                public function isSupported(): bool
                {
                    return true;
                }

                public function guessMimeType(string $path): ?string
                {
                    if (!is_file($path) || !is_readable($path)) {
                        return null;
                    }

                    $extension = strtolower(pathinfo($path, PATHINFO_EXTENSION));
                    
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

                    return $map[$extension] ?? 'application/octet-stream';
                }
            });
        }
    }
}
