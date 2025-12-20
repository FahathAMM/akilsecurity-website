<?php

if (!function_exists('contact_page')) {
    function contact_page()
    {
        return config('site.contact_page');
    }
}


if (!function_exists('google_map')) {
    function google_map()
    {
        return config('site.google_map');
    }
}
