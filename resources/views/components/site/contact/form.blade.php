<div class="page-contact-us">
    <div class="container">

        {{-- Section title --}}
        <div class="row section-row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h3 class="wow fadeInUp">{{ contact_page()['title']['small'] }}</h3>
                    <h2 class="wow fadeInUp" data-wow-delay="0.2s" data-cursor="-opaque">
                        {{ contact_page()['title']['main'] }}
                        <span>{{ contact_page()['title']['highlight'] }}</span>
                    </h2>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="page-contact-box parallaxie">

                    {{-- Contact info --}}
                    <div class="contact-info-list">
                        @foreach (contact_page()['info'] as $info)
                            <div class="contact-info-item wow fadeInUp" data-wow-delay="{{ $info['delay'] }}">
                                <div class="icon-box">
                                    <img src="{{ asset($info['icon']) }}" alt="">
                                </div>

                                <div class="contact-info-content">
                                    <h3>{{ $info['title'] }}</h3>

                                    @if (isset($info['lines']))
                                        @foreach ($info['lines'] as $line)
                                            @if ($line['type'] === 'tel')
                                                <p>
                                                    <a href="tel:{{ str_replace(' ', '', $line['value']) }}">
                                                        {{ $line['value'] }}
                                                    </a>
                                                </p>
                                            @elseif($line['type'] === 'email')
                                                <p>
                                                    <a href="mailto:{{ $line['value'] }}">
                                                        {{ $line['value'] }}
                                                    </a>
                                                </p>
                                            @endif
                                        @endforeach
                                    @else
                                        <p>{{ $info['text'] }}</p>
                                    @endif
                                </div>
                            </div>
                        @endforeach
                    </div>

                    {{-- Contact form --}}
                    <div class="contact-us-form">
                        <div class="section-title dark-section wow fadeInUp">
                            <h2 data-cursor="-opaque">{{ contact_page()['form_title'] }}</h2>
                        </div>

                        <div class="member-contact-form contact-form">
                            <form id="contactForm" method="POST" class="wow fadeInUp" data-wow-delay="0.2s">
                                @csrf
                                <div class="row">
                                    <div class="form-group col-md-6 mb-4">
                                        <input type="text" name="fname" class="form-control"
                                            placeholder="First name" required>
                                    </div>

                                    <div class="form-group col-md-6 mb-4">
                                        <input type="text" name="lname" class="form-control"
                                            placeholder="Last name" required>
                                    </div>

                                    <div class="form-group col-md-6 mb-4">
                                        <input type="text" name="phone" class="form-control"
                                            placeholder="Enter Your Phone No." required>
                                    </div>

                                    <div class="form-group col-md-6 mb-4">
                                        <input type="email" name="email" class="form-control"
                                            placeholder="Enter Your E-mail" required>
                                    </div>

                                    <div class="form-group col-md-12 mb-5">
                                        <textarea name="message" class="form-control" rows="4" placeholder="Write Message"></textarea>
                                    </div>

                                    <div class="col-md-12">
                                        <button type="submit" class="btn-default btn-highlighted">
                                            <span>submit message</span>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
