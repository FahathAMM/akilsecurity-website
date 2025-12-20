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


if (!function_exists('cta_title')) {
    function cta_title()
    {
        return config('site.home.cta.title');
    }
}

if (!function_exists('cta_image')) {
    function cta_image()
    {
        return config('site.home.cta.image');
    }
}

if (!function_exists('cta_contacts')) {
    function cta_contacts()
    {
        return config('site.home.cta.contacts');
    }
}


if (!function_exists('feature_section_title')) {
    function feature_section_title()
    {
        return config('site.home.feature.section_title');
    }
}

if (!function_exists('feature_title')) {
    function feature_title()
    {
        return config('site.home.feature.title');
    }
}

if (!function_exists('feature_images')) {
    function feature_images()
    {
        return config('site.home.feature.images');
    }
}

if (!function_exists('feature_experience')) {
    function feature_experience()
    {
        return config('site.home.feature.experience');
    }
}

if (!function_exists('feature_clients')) {
    function feature_clients()
    {
        return config('site.home.feature.clients');
    }
}

if (!function_exists('feature_list')) {
    function feature_list()
    {
        return config('site.home.feature.features');
    }
}

if (!function_exists('projects_section_title')) {
    function projects_section_title()
    {
        return config('site.home.projects.section_title');
    }
}

if (!function_exists('projects_title')) {
    function projects_title()
    {
        return config('site.home.projects.title');
    }
}

if (!function_exists('projects_items')) {
    function projects_items()
    {
        return config('site.home.projects.items');
    }
}

if (!function_exists('projects_footer_text')) {
    function projects_footer_text()
    {
        return config('site.home.projects.footer_text');
    }
}

if (!function_exists('projects_footer_link')) {
    function projects_footer_link()
    {
        return config('site.home.projects.footer_link');
    }
}
