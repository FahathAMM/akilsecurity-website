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

    AMC,CCT,Access controll,Q managesystyem,inructure alarm, nurse calling,gate barier,solution

    <div class="filter-wrapper text-center my-4">
        <button class="filter-btn active" data-filter="all">Show all</button>
        <button class="filter-btn red" data-filter="android">Android Apps</button>
        <button class="filter-btn" data-filter="business">Businesses</button>
        <button class="filter-btn" data-filter="government">Government Agencies</button>
        <button class="filter-btn" data-filter="iphone">iPhone Apps</button>
        <button class="filter-btn" data-filter="startup">Startups</button>
        <button class="filter-btn" data-filter="webapp">Web Apps</button>
        <button class="filter-btn" data-filter="website">Website</button>
    </div>

    <!-- ITEMS GRID -->
    <div class="row portfolio-grid">
        <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item android">
            <div class="portfolio-box">
                <img src="assets/images/logo1.png" alt="">
            </div>
        </div>

        <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item business">
            <div class="portfolio-box">
                <img src="assets/images/logo2.png" alt="">
            </div>
        </div>

        <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item webapp">
            <div class="portfolio-box">
                <img src="assets/images/logo3.png" alt="">
            </div>
        </div>

        <div class="col-lg-3 col-md-4 col-sm-6 portfolio-item website">
            <div class="portfolio-box">
                <img src="assets/images/logo4.png" alt="">
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
        .filter-wrapper {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            justify-content: center;
        }

        .filter-btn {
            border: none;
            background: #777;
            color: #fff;
            padding: 10px 18px;
            border-radius: 4px;
            font-weight: 600;
            font-size: 14px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .filter-btn:hover {
            background: #555;
        }

        .filter-btn.active {
            background: #777;
        }

        .filter-btn.red {
            background: #f15a4a;
        }

        .filter-btn.red.active {
            background: #f15a4a;
        }

        /* Portfolio grid */
        .portfolio-box {
            background: #f4f4f4;
            padding: 30px;
            text-align: center;
            border-radius: 6px;
            transition: all 0.3s ease;
        }

        .portfolio-box img {
            max-width: 100%;
            height: auto;
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
