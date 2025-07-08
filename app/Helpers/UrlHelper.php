<?php

namespace App\Helpers;

use Illuminate\Support\Str;

class UrlHelper
{
    /**
     * Return canonical URL for current page.
     * Ensures trailing slash ONLY for frontpage.
     */
    public static function canonical(): string
    {
        $current = url()->current();
        $root = rtrim(config('app.url'), '/');

        return $current === $root
            ? Str::finish($root, '/')   // kun forsiden
            : $current;                 // alle andre: uændret
    }
}