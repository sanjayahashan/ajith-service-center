    <section class="pricing-section">
        <div class="auto-container">
            <div class="sec-title text-center">
                <h2>Advertisements by our Partners</h2>
                <div class="separator"><span class="flaticon-settings-2"></span></div>
                <!-- <div class="row clearfix"> -->
                <div class="services-carousel owl-carousel owl-theme owl-loaded owl-drag">

                    @foreach($ads as $ad)
                    <div class="owl-item service-block">
                        <div class="inner-box">
                            <div class="image-box">
                                <figure><img src="{{ asset('/storage/photos/ads/' . $ad->thumb ) }}" alt=""></figure>
                                <div class="title">
                                    <h4>Advertisement</h4>
                                </div>
                            </div>
                            <div class="caption-box">
                                <div class="title-box">
                                    <span class="icon flaticon-electrical"></span>
                                    <!-- <h4><a href="service-detail.html">Suspension Repair</a></h4> -->
                                </div>
                                <p>{{$ad->description}}
                                </p>
                                <p>{{$ad->tel}}</p>
                                <!-- <a href="service-detail.html" class="read-more">Read More <i class="fa fa-angle-double-right"></i></a> -->
                            </div>
                        </div>
                    
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </section>
