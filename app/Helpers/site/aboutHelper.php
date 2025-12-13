<?php

if (!function_exists('about_main_title')) {

    function about_main_title()
    {
        return config('about.main-title');
    }
}

if (!function_exists('home_banner_description')) {

    function home_banner_description()
    {
        return config('home.banner.description');
    }
}

if (!function_exists('about_title')) {

    function about_title()
    {
        return config('about.title');
    }
}

if (!function_exists('about_points')) {

    function about_points()
    {
        return config('about.points');
    }
}

if (!function_exists('about_support_description')) {

    function about_support_description()
    {
        return config('about.support-description');
    }
}
