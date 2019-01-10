<div class="footer-v1-static-content">
    <div class="kc-css-994088 kc_row">
        <div class="kc-row-container  kc-container">
            <div class="kc-wrap-columns">
                <div class="kc-css-194963 kc_col-sm-12 kc_column kc_col-sm-12">
                    <div class="stretch-full-width kc-col-container">
                        <div class="kc-css-126640 kc_shortcode kc_wrap_instagram  kc_ins_col_6">
                            <ul class="row">
                                @inject ('images', '\App\Services\GetRandomImage' )

                                @foreach($images->getRandomImage() as $image)

                                    <li class="col-md-2 col-sm-2 col-lg-2 col-xs-4"><img alt="" src="{{$image->image}}">
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>