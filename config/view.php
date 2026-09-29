<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Compiled view path
    |--------------------------------------------------------------------------
    |
    | Vercel's filesystem is read-only after the build step, so Blade cannot
    | compile views into the default storage/framework/views at runtime. Point
    | the compiled-view cache at the writable /tmp directory instead.
    |
    | SOURCE views (resources/views) are unaffected: they come from the merged
    | framework defaults, which Laravel combines with this file.
    |
    */

    'compiled' => env('VIEW_COMPILED_PATH', sys_get_temp_dir() . '/views'),
];
