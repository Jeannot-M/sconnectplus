<?php

use App\Models\Setting;
use Illuminate\Support\Facades\Cache;

if (! function_exists('setting')) {
    function setting($key)
    {
        $setting = Cache::remember('setting', now()->addMinute(1), function() {
            return Setting::first();
        });

        if (!is_null($setting)) {
            return $setting->{$key};
        } else {
            return '';
        }

    }
}

if (! function_exists('page_title')) {

    function page_title($title) {

        $base_title = 'Sconnect Plus';

        if ($title === '') {
            return $base_title;
        } else {
            return $title . ' | ' . $base_title;
        }
    }
}