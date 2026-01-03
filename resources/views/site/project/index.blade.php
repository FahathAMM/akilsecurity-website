@extends('layout.app-site')
@section('title', 'Projects')

@section('content')
    <!-- Page Header Start -->
    <div class="page-header parallaxie">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="wow fadeInUp" data-cursor="-opaque">Projects</h1>
                        <nav class="wow fadeInUp" data-wow-delay="0.2s">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="./">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Projects</li>
                            </ol>
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- FILTER BUTTONS -->

    @php
        // Define your categories
        $categories = [
            'amc' => 'AMC',
            'cctv' => 'CCTV',
            'access' => 'Access Control',
            'qms' => 'Queue Management',
            'intruder' => 'Intruder Alarm',
            'nurse' => 'Nurse Calling',
            'gate' => 'Gate Barrier',
            'solution' => 'Solutions',
            'attendance' => 'Time Attendance',
        ];

        // Base path for customer images
        $basePath = public_path('site/images/customer');
    @endphp

    <div class="filter-wrapper text-center my-4">
        <button class="filter-btn active" data-filter="all">Show all</button>
        @foreach ($categories as $key => $name)
            <button class="filter-btn" data-filter="{{ $key }}">{{ $name }}</button>
        @endforeach
    </div>

    {{-- <div class="portfolio-grid py-4">
        @foreach ($categories as $key => $name)
            @php
                $folder = $basePath . '/' . $key; // e.g., public/site/images/customer/cctv
                $images = [];

                if (file_exists($folder)) {
                    $images = array_filter(scandir($folder), function ($file) use ($folder) {
                        return !in_array($file, ['.', '..']) && preg_match('/\.(jpg|jpeg|png|gif)$/i', $file);
                    });
                }
            @endphp

            @if (!empty($images))
                <div class="portfolio-item {{ $key }}">
                    @foreach ($images as $image)
                        <div class="portfolio-box">
                            <img src="{{ asset('site/images/customer/' . $key . '/' . $image) }}" alt="{{ $name }}">
                        </div>
                    @endforeach
                </div>
            @endif
        @endforeach
    </div> --}}

    <div class="portfolio-grid py-4">
        @foreach ($categories as $key => $name)
            @php
                $folder = $basePath . '/' . $key; // e.g., public/site/images/customer/cctv
                $images = [];

                if (file_exists($folder)) {
                    $images = array_filter(scandir($folder), function ($file) use ($folder) {
                        return !in_array($file, ['.', '..']) && preg_match('/\.(jpg|jpeg|png|gif)$/i', $file);
                    });
                }

                // Add to global unique array
                foreach ($images as $img) {
                    $allImages[$img] = [
                        'category' => $key,
                        'name' => $name,
                        'path' => 'site/images/customer/' . $key . '/' . $img,
                    ];
                }
            @endphp

            @if (!empty($images))
                <div class="portfolio-item {{ $key }} hide">
                    @foreach ($images as $image)
                        <div class="portfolio-box">
                            <img src="{{ asset('site/images/customer/' . $key . '/' . $image) }}" alt="{{ $name }}">
                        </div>
                    @endforeach
                </div>
            @endif
        @endforeach
    </div>

    {{-- Hidden section for "Show All" --}}
    <div class="portfolio-item all">
        @foreach ($allImages as $img)
            <div class="portfolio-box">
                <img src="{{ asset($img['path']) }}" alt="{{ $img['name'] }}">
            </div>
        @endforeach
    </div>

    <script>
        const buttons = document.querySelectorAll('.filter-btn');
        const items = document.querySelectorAll('.portfolio-item');

        buttons.forEach(btn => {
            btn.addEventListener('click', () => {
                buttons.forEach(b => b.classList.remove('active'));
                btn.classList.add('active');

                const filter = btn.dataset.filter;

                items.forEach(item => {
                    if (filter === 'all') {
                        // Only show the "all" container
                        item.classList.toggle('hide', !item.classList.contains('all'));
                    } else {
                        item.classList.toggle('hide', !item.classList.contains(filter));
                    }
                });
            });
        });
    </script>

    <style>
        /* Portfolio grid using flex */
        .portfolio-grid {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }

        .portfolio-item {
            display: flex;
            flex-wrap: wrap;
            /* multiple images inside horizontally */
            justify-content: center;
            gap: 40px;
            opacity: 1;
            transform: scale(1);
            transition: all 0.5s ease;
        }

        .portfolio-box img {
            width: 200px;
            height: 200px;
            padding: 1px;
            object-fit: contain;
            border: 1px solid #06243d;

            transition: transform 0.5s ease, filter 0.5s ease;

        }

        .portfolio-box:hover img {
            transform: scale(1.1);
            filter: brightness(0.8);
            background: #ffffff !important
        }

        /* Optional overlay text */
        .portfolio-box::after {
            content: attr(alt);
            /* Shows image alt text as overlay */
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            padding: 10px 15px;
            color: #fff;
            background: none !important;
            text-align: center;
            opacity: 0;
            transform: translateY(100%);
            transition: transform 0.4s ease, opacity 0.4s ease;
            font-weight: 500;
            border-bottom-left-radius: 12px;
            border-bottom-right-radius: 12px;
        }

        .portfolio-box:hover::after {
            opacity: 1;
            transform: translateY(0);
        }

        /* Hide animation */
        .portfolio-item.hide {
            opacity: 0;
            transform: scale(0.9);
            pointer-events: none;
            position: absolute;
            /* prevent layout shift */
        }

        .filter-btn.active {
            background: #234fa1;
            transform: scale(1.05);
        }

        .filter-wrapper {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            justify-content: center;
            margin-bottom: 20px;
        }

        .filter-btn {
            border: none;
            background: #06243d;
            color: #fff;
            padding: 10px 18px;
            border-radius: 4px;
            font-weight: 600;
            font-size: 14px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .filter-btn:hover {
            background: #234fa1;
        }
    </style>
@endsection
