@extends('layout.app-site')
@section('title', $title)

@section('content')

    <x-site.home.banner />

    <x-site.home.about-us />

    {{-- <x-site.home.cat-banner />
    <x-site.home.popular-category :categories="$categories" />
    <x-site.home.display-product :products="$products" />
    <x-site.home.iconbox /> --}}

    home page

@endsection
