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

    <div class="modern-tabs mt-5">
        <ul class="tab-header">
            <li class="active" data-tab="tab-1">Overview</li>
            <li data-tab="tab-2">Features</li>
            <li data-tab="tab-3">Process</li>
            <li data-tab="tab-4">FAQ</li>
        </ul>

        <div class="tab-body">
            <div class="tab-content active" id="tab-1">
                <h4>Service Overview</h4>
                <p>
                    We provide advanced security solutions ensuring safety,
                    compliance, and long-term protection for your business.
                </p>
            </div>

            <div class="tab-content" id="tab-2">
                <h4>Key Features</h4>
                <ul>
                    <li>24/7 Monitoring</li>
                    <li>Certified Professionals</li>
                    <li>Latest Technology</li>
                    <li>Custom Security Plans</li>
                </ul>
            </div>

            <div class="tab-content" id="tab-3">
                <h4>Our Process</h4>
                <p>
                    From assessment to implementation, our structured process
                    guarantees reliable and scalable security solutions.
                </p>
            </div>

            <div class="tab-content" id="tab-4">
                <h4>Frequently Asked Questions</h4>
                <p>
                    Have questions? We’ve got answers to help you understand our services better.
                </p>
            </div>
        </div>
    </div>


    <script>
        document.querySelectorAll(".tab-header li").forEach(tab => {
            tab.addEventListener("click", function() {

                document.querySelectorAll(".tab-header li").forEach(item => {
                    item.classList.remove("active");
                });

                document.querySelectorAll(".tab-content").forEach(content => {
                    content.classList.remove("active");
                });

                this.classList.add("active");
                document.getElementById(this.dataset.tab).classList.add("active");
            });
        });
    </script>


    <style>
        .modern-tabs {
            background: #ffffff;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.06);
            overflow: hidden;
        }

        .tab-header {
            display: flex;
            border-bottom: 1px solid #e5e5e5;
            background: #f9f9f9;
        }

        .tab-header li {
            list-style: none;
            padding: 15px 25px;
            cursor: pointer;
            font-weight: 600;
            color: #555;
            position: relative;
            transition: all 0.3s ease;
        }

        .tab-header li:hover {
            color: #0d6efd;
        }

        .tab-header li.active {
            color: #0d6efd;
            background: #ffffff;
        }

        .tab-header li.active::after {
            content: "";
            position: absolute;
            bottom: -1px;
            left: 0;
            width: 100%;
            height: 3px;
            background: #0d6efd;
        }

        .tab-body {
            padding: 30px;
        }

        .tab-content {
            display: none;
            animation: fadeIn 0.4s ease;
        }

        .tab-content.active {
            display: block;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(8px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
@endsection
