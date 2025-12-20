@extends('layout.app-site')
@section('title', $title)

@section('content')

    <x-site.home.banner />

    <x-site.home.about-us />

    <!-- CTA Box Start -->
    <x-site.home.cta-box />
    <!-- CTA Box End -->

    <!-- Our Feature Section Start -->
    <x-site.home.feature />
    <!-- Our Feature Section End -->

    <!-- Our Projects Section Start -->
    <x-site.home.projects />
    <!-- Our Projects Section End -->


    {{-- <x-site.home.client-icons /> --}}
@endsection
