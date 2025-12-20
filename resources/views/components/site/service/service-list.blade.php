<div class="our-services page-services">
    <div class="container">
        <div class="row">

            @foreach (our_services() as $service)
                <div class="col-lg-4 col-md-6">
                    <div class="service-item {{ $service['active'] ? 'active' : '' }} wow fadeInUp"
                        data-wow-delay="{{ $service['delay'] }}">

                        <div class="icon-box">
                            <img src="{{ asset($service['icon']) }}" alt="">
                        </div>

                        <div class="service-title-box">
                            <div class="service-title">
                                <h3>
                                    <a href="{{ route('services.show', ['service' => $service['link']]) }}">
                                        {{ $service['title'] }}
                                    </a>
                                </h3>
                            </div>

                            <div class="service-btn">
                                <a href="{{ route('services.show', ['service' => $service['link']]) }}">
                                    <i class="fa-solid fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>

                        <div class="service-content">
                            <p>{{ $service['description'] }}</p>
                        </div>

                    </div>
                </div>
            @endforeach

        </div>
    </div>
</div>
