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
                            {{-- <form id="contactForm" method="POST" class="wow fadeInUp" data-wow-delay="0.2s"> --}}

                            <form id="contact-form" action="{{ url('contact') }}" method="post"
                                class="form-leave-comment">
                                @csrf

                                @csrf
                                <div class="row">
                                    <div class="form-group col-md-6 mb-4">
                                        <input type="text" name="fname" class="form-control frm"
                                            placeholder="First name">
                                        <div class="invalid-feedback d-block invalid-msg text-start"> </div>
                                    </div>

                                    <div class="form-group col-md-6 mb-4">
                                        <input type="text" name="lname" class="form-control"
                                            placeholder="Last name">
                                    </div>

                                    <div class="form-group col-md-6 mb-4">
                                        <input type="text" name="phone" class="form-control"
                                            placeholder="Enter Your Phone No.">
                                        <div class="invalid-feedback d-block invalid-msg text-start"> </div>
                                    </div>

                                    <div class="form-group col-md-6 mb-4">
                                        <input type="email" name="email" class="form-control"
                                            placeholder="Enter Your E-mail">
                                        <div class="invalid-feedback d-block invalid-msg text-start"> </div>
                                    </div>

                                    <div class="form-group col-md-12 mb-5">
                                        <textarea name="subject" class="form-control" rows="4" placeholder="Write Message"></textarea>
                                        <div class="invalid-feedback d-block invalid-msg text-start"> </div>
                                    </div>


                                    <div class="col-md-12">
                                        <img id="captchaImg" src="{{ route('captcha.image') }}" alt="captcha"
                                            class="border rounded">
                                        <div class="form-group">
                                            <input type="text" name="captcha" class="form-control mx-auto w-50 mt-1"
                                                placeholder="Enter Your Captcha">
                                            <div class="invalid-feedback d-block invalid-msg"> </div>
                                        </div>
                                    </div>

                                    {{-- <div class="col-md-12 text-center">
                                        <img id="captchaImg" src="{{ route('captcha.image') }}" alt="captcha"
                                            class="border rounded mb-2">
                                        <div class="form-group d-inline-block w-50">
                                            <input type="text" name="captcha" class="form-control"
                                                placeholder="Enter Your Captcha">
                                            <div class="invalid-feedback d-block invalid-msg text-start"></div>
                                        </div>
                                    </div> --}}

                                    <div class="col-md-12 mt-2">
                                        <button type="button" onclick="store()" class="btn-default btn-highlighted">
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


@push('scripts')
    <script src="{{ asset('assets/js/ajax.js') }}"></script>
    <script src="{{ asset('assets/js/custom-table.js') }}"></script>
    <script src="{{ asset('assets/js/helper.js') }}"></script>

    <script>
        const formName = 'contact-form'

        function store() {
            var form = document.getElementById(formName);
            var url = form.getAttribute('action');
            var method = form.getAttribute('method');
            var payload = new FormData(form);

            const options = {
                // contentType: 'application/json',
                contentType: 'multipart/form-data',
                method: 'POST',
                headers: {
                    dataType: "json",
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                }
            };

            sendData(
                url,
                payload,
                options,
                (response) => {
                    // console.log('Success:', response);
                    if (response.status) {
                        alertNotify(response.message, 'success')

                    } else {
                        associateErrors1(response.errors, 'contact-form');
                    }
                },
                (error) => {
                    console.error('Error:', error);
                }
            );
        }

        function associateErrors1(errors, formId) {
            let $form = $(`#${formId}`);
            console.log('form', $form);
            console.log('formid', `#${formId}`);

            $form.find('.form-group .invalid-msg').text('');
            $form.find('.form-group .frm').removeClass('is-invalid');

            Object.keys(errors).forEach(function(fieldName) {

                let $group = $form.find('[name="' + fieldName + '"]');
                $group.addClass('is-invalid');
                $group.closest('.form-group').find('.invalid-msg').text(errors[fieldName][0]);
                console.log('group', $group);
                console.log('grouphtml', $group.html());
            });
        }

        function alertNotify(msg, status) {

            let sts = status || 'success';

            const arr = {
                success: 'bg-success',
                error: 'bg-danger',
                warning: 'bg-info',
            }
            console.log(arr[sts]);
            Toastify({
                text: msg || '',
                duration: 3000,
                newWindow: true,
                close: false,
                gravity: "top", // `top` or `bottom`
                position: "right", // `left`, `center` or `right`
                stopOnFocus: true, // Prevents dismissing of toast on hover
                className: arr[sts],
                // style: {
                //     background: "linear-gradient(to right, #00b09b, #96c93d)",
                // },
                onClick: function() {} // Callback after click
            }).showToast();
        }
    </script>
@endpush
