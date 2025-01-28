@extends('frontend::layout.app')
@section('content')
<!-- Banner -->
<div class="banner-area">
    <div class="banner-img">
        <img src="{{ asset('modules/website/assets/img/home-one/banner-tyre.png') }}" alt="Banner">
        <img class="wow fadeInRightBig" src="{{ asset('modules/website/assets/img/home-one/banner-car.png') }}" alt="Banner">
    </div>
    <div class="d-table">
        <div class="d-table-cell">
            <div class="container">
                <div class="banner-text">
                    <h1>Get Your Best Auto Services</h1>
                    <p> @if(!empty($setting['description'])) {{$setting['description']}} @endif</p>
                    <div class="cmn-btn">
                        <a class="banner-btn-left" href="#">
                            <i class='bx bx-meteor'></i>
                            Explore Service
                        </a>
                        <a class="banner-btn-right" href="tel:+123456789">
                            <i class='bx bx-phone-call'></i>
                            @if(!empty($setting['homecallus'])) {{$setting['homecallus']}} @endif
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Banner -->

<!-- Address -->
<div class="address-area">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-lg-4">
                <div class="address-item">
                    <i class='bx bxs-paper-plane'></i>
                    <h3>Location</h3>
                    <span> @if(!empty($setting['homelocation'])) {{$setting['homelocation']}} @endif</span>
                </div>
            </div>
            <div class="col-sm-6 col-lg-4">
                <div class="address-item">
                    <i class='bx bxs-phone-call'></i>
                    <h3>Call Us</h3>
                    <a href="tel:+0755543332322">@if(!empty($setting['homecallus'])) {{$setting['homecallus']}} @endif </a>
                </div>
            </div>
            <div class="col-sm-6 offset-sm-3 offset-lg-0 col-lg-4">
                <div class="address-item address-one">
                    <i class='bx bxs-time-five'></i>
                    <h3>Schedule</h3>
                    <span>@if(!empty($setting['homescedule'])) {{$setting['homescedule']}} @endif</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Address -->

<!-- Process -->
<section class="process-area pt-100 pb-70">
    <div class="process-shape">
        <img src="{{ asset('modules/website/assets/img/home-one/car-shadow.png') }}" alt="Shape">
    </div>
    <div class="section-title">
        <span class="sub-title">process</span>
        <h2>Our Working Process</h2>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="process-item">
                    <div class="process-inner process-one">
                        <i class='bx bxs-car-mechanic'></i>
                        <h3>Identify Problems</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                    </div>
                    <div class="process-inner">
                        <i class='bx bxs-car-garage'></i>
                        <h3>Start Servicing</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="process-item">
                    <div class="process-img">
                        <img src="{{ asset('modules/website/assets/img/home-one/tyre.png') }}" alt="Process">
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="process-item">
                    <div class="process-inner process-two">
                        <i class='bx bxs-car-crash'></i>
                        <h3>Trial For Make Sure</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                    </div>
                    <div class="process-inner process-three">
                        <i class='bx bxs-car-wash'></i>
                        <h3>Deliver Service</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End Process -->

<!-- Our Features -->

<div class="feature-area  my-5">
    <div class="feature-shape">
        <img src="{{ asset('modules/website/assets/img/home-one/feature-shape.png') }}" alt="Feature">
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 p-0">
                <div class="feature-img">
                    <img src="@if(!empty($setting['homeFeatureImage'])){{ $setting['homeFeatureImage']}} @endif" alt="Feature">
                </div>
            </div>
            <div class="col-lg-6 p-0">
                <div class="feature-content">
                    <h2>Our Features</h2>
                    <ul>
                        <li>
                            <i class='bx bx-box'></i>
                            <h3>Trusted & Quality Work</h3>
                            <p>Lorem ipsum the dolor sit amet, consectetur adising elit, sed do.the dolor sit amet,
                                consectetur </p>
                        </li>
                        <li>
                            <i class='bx bxs-truck'></i>
                            <h3>Fast Service Delivery</h3>
                            <p>Lorem ipsum the dolor sit amet, consectetur adising elit, sed do.the dolor sit amet,
                                consectetur </p>
                        </li>
                        <li>
                            <i class='bx bx-money'></i>
                            <h3>Money Back Garanty</h3>
                            <p>Lorem ipsum the dolor sit amet, consectetur adising elit, sed do.the dolor sit amet,
                                consectetur </p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Our Features  end-->

<!-- Services start -->

<section class="pb-70">
    <div class="container">
        <div class="section-title">
            <span class="sub-title">service</span>
            <h2>Our Services</h2>
            <p></p>
        </div>
        <div class="row">
            @foreach ($services as $service)
            <div class="col-sm-6 col-lg-4">
                <a >
                    <div class="service-item">
                        <div class="service-img">
                            <img src="{{ asset($service['image']??'modules/website/assets/img/home-one/service/1.jpg') }}" alt="Service">
                        </div>
                        <div class="service-content">
                            <i class='bx bx-car'></i>
                            <i class='bx bx-car service-icon'></i>
                            <h3>{{ $service['name'] }}</h3>
                            <p>{{ $service['description'] }} </p>
                        </div>
                    </div>
                </a>
            </div>
                
            @endforeach
          
        </div>
    </div>
</section>
<!-- End Service -->

<!-- Quality -->
<section class="quality-area">
    <div class="quality-img">
        <img src="{{ asset('modules/website') }}/assets/img/home-one/quality-shape.png" alt="Quality">
        <img src="{{ asset('modules/website') }}/assets/img/home-one/quality-shape.png" alt="Quality">
        <img src="{{ asset('modules/website') }}/assets/img/home-one/quality-car.png" alt="Quality">
    </div>
    <div class="container">
        <div class="quality-content">
            <div class="section-title">
                <h2>Quality Work is Our First Priority </h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                    labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra
                    maecenas accumsan lacus vel facilisis. </p>
            </div>
            <div class="cmn-btn">
                <a class="banner-btn-left" href="{{ route('website.about'); }}">
                    Read More
                </a>
            </div>
            <img src="{{asset('modules/website/assets/img/home-one/tyre.png')}}" alt="Quality">
        </div>
    </div>
</section>
<!-- End Quality -->

<div class="review-area " style="margin-top: 120px; margin-bottom:200px;">
    <div class="review-shape">
        <img src=" @if(!empty($setting['hometestimonialimage'])) {{$setting['hometestimonialimage']}} @endif" alt="Review">
    </div>
    <div class="video-wrap">
        <a href="@if(!empty($setting['hometestimonialvedio'])){{ $setting['hometestimonialvedio']}} @endif" class="popup-youtube">
            <i class='bx bx-play'></i>
        </a>
    </div>
    <div class="container-fluid p-0">
        <div class="row m-0">
            <div class="col-lg-6 ptb-100">
                <div class="review-slider owl-theme owl-carousel">
                    <div class="review-item">
                        <i class='bx bxs-quote-right'></i>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo
                            viverra maecenas accumsan.</p>
                        <div class="review-inner">
                            <img src="{{ asset('modules/website/assets/img/home-one/review/reviewer-one.png') }}" alt="Review">
                            <h3>Sarah Tylor</h3>
                            <span>Designer</span>
                        </div>
                    </div>
                    <div class="review-item">
                        <i class='bx bxs-quote-right'></i>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                            suffered alteration in some form, by injected humour, or randomised words which don't
                            look even slightly believable.</p>
                        <div class="review-inner">
                            <img src="{{ asset('modules/website/assets/img/home-one/review/reviewer-one.png') }}" alt="Review">
                            <h3>Tom Henry</h3>
                            <span>CEO</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="review-bg">
                    <img src="{{ asset('modules/website/assets/img/home-one/review/review-right.jpg') }}" alt="Review">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Review -->
@endsection