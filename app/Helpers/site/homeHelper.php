<?php

if (!function_exists('home_banner_title')) {

    function home_banner_title()
    {
        return config('home.banner.title');
    }
}

if (!function_exists('home_banner_description')) {

    function home_banner_description()
    {
        return config('home.banner.description');
    }
}
if (!function_exists('home_banner_title_company')) {

    function home_banner_title_company()
    {
        return config('home.banner.title-company');
    }
}
