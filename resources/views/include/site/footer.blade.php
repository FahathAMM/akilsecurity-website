@php
    $socialLinks = [
        ['icon' => 'fa-brands fa-pinterest-p', 'url' => '#'],
        ['icon' => 'fa-brands fa-x-twitter', 'url' => '#'],
        ['icon' => 'fa-brands fa-facebook-f', 'url' => '#'],
        ['icon' => 'fa-brands fa-instagram', 'url' => '#'],
    ];

    $quickLinks = config('menu');

    $services = config('site.our_services.items');

    $support = [
        ['title' => 'Help', 'url' => '#'],
        ['title' => "Term's & condition", 'url' => '#'],
        ['title' => 'Privacy policy', 'url' => '#'],
        ['title' => 'Contact us', 'url' => 'contact.html'],
    ];

    $contact = [
        'phone' => '+971 4 3939 562',
        'email' => 'mail@akilgroup.com',
        'address' => '26 Al Nahdha St - Bur dubai - Al Fahidi - Dubai',
    ];
@endphp

<footer class="main-footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="footer-header">
                    <div class="footer-logo">
                        <img src="images/footer-logo.svg" alt="">
                    </div>
                    <div class="footer-social-links">
                        <ul>
                            @foreach ($socialLinks as $link)
                                <li><a href="{{ $link['url'] }}"><i class="{{ $link['icon'] }}"></i></a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="footer-links footer-newsletter-form">
                    <h3>Subscribe our newsletter:</h3>
                    <p>Protecting networks, systems, and data from evolving threats.</p>
                    <form id="newsletterForm" action="#" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" placeholder="Enter Your Email"
                                required>
                            <button type="submit" class="newsletter-btn"><i
                                    class="fa-regular fa-paper-plane"></i></button>
                        </div>
                    </form>
                </div>
            </div>

            <div class="col-lg-2 col-md-3 col-6">
                <div class="footer-links footer-quick-links">
                    <h3>Quick link</h3>
                    <ul>
                        @foreach ($quickLinks as $link)
                            @if (empty($link['children']))
                                <li>
                                    <a
                                        href="{{ !empty($link['route']) ? route($link['route']) : 'javascript:void(0)' }}">
                                        {{ $link['title'] }}
                                    </a>
                                </li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>

            <div class="col-lg-3 col-md-5 col-6">
                <div class="footer-links">
                    <h3>Services</h3>
                    <ul>
                        @foreach ($services as $key => $service)
                            @if ($key < 5)
                                <li>
                                    <a href="{{ route('services.show', ['service' => $service['link']]) }}">
                                        {{ $service['title'] }}
                                    </a>
                                </li>
                            @endif
                        @endforeach
                    </ul>
                </div>
            </div>

            {{-- <div class="col-lg-2 col-md-3 col-6">
                <div class="footer-links">
                    <h3>Support</h3>
                    <ul>
                        @foreach ($support as $item)
                            <li><a href="{{ $item['url'] }}">{{ $item['title'] }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div> --}}

            <div class="col-lg-2 col-md-3 col-6">
                <div class="footer-links">
                    <h3>Contact</h3>
                    <ul>
                        <li><a href="tel:{{ $contact['phone'] }}">{{ $contact['phone'] }}</a></li>
                        <li><a href="mailto:{{ $contact['email'] }}">{{ $contact['email'] }}</a></li>
                        <li>{{ $contact['address'] }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="footer-copyright-text">
                        <p>Copyright © 2025 All Rights Reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
