@extends('layout.app-site')
@section('title', 'About Us')

@section('content')
    <!-- Page Header Start -->
    <div class="page-header parallaxie">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="wow fadeInUp" data-cursor="-opaque">Recent Works</h1>
                        <nav class="wow fadeInUp" data-wow-delay="0.2s">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="./">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Recent Works</li>
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

    <div class="filter-wrapper text-center my-4">
        <button class="filter-btn active" data-filter="all">Show all</button>

        <button class="filter-btn red" data-filter="amc">AMC</button>
        <button class="filter-btn" data-filter="cctv">CCTV</button>
        <button class="filter-btn" data-filter="access">Access Control</button>
        <button class="filter-btn" data-filter="qms">Queue Management</button>
        <button class="filter-btn" data-filter="intruder">Intruder Alarm</button>
        <button class="filter-btn" data-filter="nurse">Nurse Calling</button>
        <button class="filter-btn" data-filter="gate">Gate Barrier</button>
        <button class="filter-btn" data-filter="solution">Solutions</button>
        <button class="filter-btn" data-filter="attendance">Time Attendance</button>
    </div>

    <!-- ITEMS GRID -->
    <div class="row portfolio-grid mx-4">

        <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item cctv access">
            <div class="portfolio-box">
                <img src="{{ asset('site/images/customer/alu.jpg') }}" alt="CCTV">
            </div>
            <div class="portfolio-box">
                <img src="{{ asset('site/images/customer/dewa.jfif') }}" alt="CCTV">
            </div>
            <div class="portfolio-box">
                <img src="{{ asset('site/images/customer/atlas.png') }}" alt="CCTV">
            </div>
        </div>

        <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item amc solution">
            <div class="portfolio-box">
                <img src="{{ asset('site/images/customer/alu.jpg') }}" alt="CCTV">
            </div>
            <div class="portfolio-box">
                <img src="{{ asset('site/images/customer/dewa.jfif') }}" alt="CCTV">
            </div>
            <div class="portfolio-box">
                <img src="{{ asset('site/images/customer/atlas.png') }}" alt="CCTV">
            </div>
        </div>

        <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item qms">
            <div class="portfolio-box">
                <img src="{{ asset('site/images/customer/alu.jpg') }}" alt="CCTV">
            </div>
            <div class="portfolio-box">
                <img src="{{ asset('site/images/customer/dewa.jfif') }}" alt="CCTV">
            </div>
            <div class="portfolio-box">
                <img src="{{ asset('site/images/customer/atlas.png') }}" alt="CCTV">
            </div>
        </div>

        <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item nurse">
            <div class="portfolio-box">
                <img src="{{ asset('site/images/customer/alu.jpg') }}" alt="CCTV">
            </div>
            <div class="portfolio-box">
                <img src="{{ asset('site/images/customer/dewa.jfif') }}" alt="CCTV">
            </div>
            <div class="portfolio-box">
                <img src="{{ asset('site/images/customer/atlas.png') }}" alt="CCTV">
            </div>
        </div>

        <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item gate intruder">
            <div class="portfolio-box">
                <img src="{{ asset('site/images/customer/alu.jpg') }}" alt="CCTV">
            </div>
            <div class="portfolio-box">
                <img src="{{ asset('site/images/customer/dewa.jfif') }}" alt="CCTV">
            </div>
            <div class="portfolio-box">
                <img src="{{ asset('site/images/customer/atlas.png') }}" alt="CCTV">
            </div>
        </div>

        <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item attendance access">
            <div class="portfolio-box">
                <img src="{{ asset('site/images/customer/alu.jpg') }}" alt="CCTV">
            </div>
            <div class="portfolio-box">
                <img src="{{ asset('site/images/customer/dewa.jfif') }}" alt="CCTV">
            </div>
            <div class="portfolio-box">
                <img src="{{ asset('site/images/customer/atlas.png') }}" alt="CCTV">
            </div>
        </div>

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
                    if (filter === 'all' || item.classList.contains(filter)) {
                        item.classList.remove('hide');
                    } else {
                        item.classList.add('hide');
                    }
                });
            });
        });
    </script>

    <style>
        .filter-btn.active {
            background: #234fa1;
            /* clear difference */
            transform: scale(1.05);
        }

        .filter-wrapper {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            justify-content: center;
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

        /* Portfolio grid */
        .portfolio-box {
            /* background: #f4f4f4;
                                                        padding: 10px;
                                                        text-align: center;
                                                        border-radius: 6px;
                                                        transition: all 0.3s ease;
                                                        margin: 5px; */


            padding: 0px;
            text-align: center;
            transition: all 0.3s ease;
            margin: 5px;
        }

        .portfolio-box img {
            max-width: 65%;
            height: auto;
            padding: 5px;
            background: #f4f4f4;
        }

        .portfolio-item {
            margin-bottom: 30px;
        }

        /* Smooth hide */
        .portfolio-item.hide {
            display: none;
        }
    </style>
@endsection
