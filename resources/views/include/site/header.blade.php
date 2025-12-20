<header class="main-header">
    <div class="header-sticky">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <!-- Logo Start -->
                <a class="navbar-brand d-flex align-items-center" href="./">
                    {{-- <img src="{{ asset('site/images/logo.svg') }}" alt="Logo"> --}}
                    <img src="{{ asset('site/images/about/logo_circle2.png') }}" alt="Logo" style="width:50px">
                    <h5 class="ms-2">Akil Security</h5>
                </a>
                <!-- Logo End -->

                <!-- Main Menu Start -->
                <div class="collapse navbar-collapse main-menu">
                    <div class="nav-menu-wrapper">
                        <ul class="navbar-nav mr-auto" id="menu">
                            {{-- @dd(config('menu')) --}}
                            @foreach (config('menu') as $menu)
                                {{-- Menu with submenu --}}
                                @if (isset($menu['children']))
                                    <li class="nav-item submenu">
                                        <a class="nav-link" href="#">{{ $menu['title'] }}</a>
                                        <ul>
                                            @foreach ($menu['children'] as $child)
                                                <li class="nav-item">
                                                    <a class="nav-link"
                                                        href="{{ !empty($child['route']) ? route($child['route']) : 'javascript:void(0)' }}">
                                                        {{ $child['title'] }}
                                                    </a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </li>

                                    {{-- Normal menu --}}
                                @else
                                    <li class="nav-item">
                                        {{-- <a class="nav-link" href="{{ route($menu['route']) }}">
                                            {{ $menu['title'] }}
                                        </a> --}}

                                        <a class="nav-link {{ empty($menu['route']) ? 'disabled' : '' }}"
                                            href="{{ !empty($menu['route']) ? route($menu['route']) : 'javascript:void(0)' }}">
                                            {{ $menu['title'] }}
                                        </a>
                                    </li>
                                @endif
                            @endforeach

                        </ul>
                    </div>

                    <!-- Header Btn -->
                    <div class="header-btn">
                        <a href="{{ route('contact.index') }}" class="btn-default">Get Started</a>
                    </div>
                </div>

                <!-- Main Menu End -->
                <div class="navbar-toggle"></div>
            </div>
        </nav>
        <div class="responsive-menu"></div>
    </div>
</header>
