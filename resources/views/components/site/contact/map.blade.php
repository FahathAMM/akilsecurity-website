<div class="google-map">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="google-map-iframe">
                    <iframe src="{!! google_map()['iframe_src'] !!}" width="1048" height="384"
                        loading="{{ google_map()['loading'] }}" referrerpolicy="{{ google_map()['referrer_policy'] }}">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</div>
