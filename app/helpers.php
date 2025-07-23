<?php

use Illuminate\Support\Facades\Storage;

if (! function_exists('webpOrOriginal')) {
    function webpOrOriginal($path)
    {
        $webp = preg_replace('/\.(jpg|jpeg|png)$/i', '.webp', $path);

        if (Storage::disk('public')->exists($webp)) {
            return Storage::url($webp);
        }

        return Storage::url($path);
    }
}
