<?php

if (!function_exists('our_services')) {
    function our_services()
    {
        return config('site.our_services.items');
    }
}
