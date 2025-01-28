@extends('admin::admin.layout.app')
@section('css_custom')
<link rel="stylesheet" type="text/css" href="https://jeremyfagis.github.io/dropify/dist/css/dropify.min.css">
@endsection
@section('content')
<div class="content-header row">
    <div class="content-header-left col-md-6 col-12 mb-2">
        <h3 class="content-header-title">General Settings</h3>
        <div class="row breadcrumbs-top">
            <div class="breadcrumb-wrapper col-12">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">General Settings</li>
                </ol>
            </div>
        </div>
    </div>
</div>

<div class="content-body">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-xl-12 col-lg-12">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <ul class="nav nav-tabs">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="base-tab1" data-toggle="tab" aria-controls="tab1" href="#tab1" aria-expanded="true">General info</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="base-tab2" data-toggle="tab" aria-controls="tab2" href="#tab2" aria-expanded="false">Site Info</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="base-tab3" data-toggle="tab" aria-controls="tab3" href="#tab3" aria-expanded="false">Social Info</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="base-tab4" data-toggle="tab" aria-controls="tab4" href="#tab4" aria-expanded="false">Seo Info</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="base-tab5" data-toggle="tab" aria-controls="tab5" href="#tab5" aria-expanded="false">Home Page</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="base-tab6" data-toggle="tab" aria-controls="tab6" href="#tab6" aria-expanded="false">About Page</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="base-tab7" data-toggle="tab" aria-controls="tab7" href="#tab7" aria-expanded="false">Services</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="base-tab8" data-toggle="tab" aria-controls="tab8" href="#tab8" aria-expanded="false">Pricing</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="base-tab9" data-toggle="tab" aria-controls="tab9" href="#tab9" aria-expanded="false">Contact Us</a>
                                    </li>
                                </ul>
                                <div class="tab-content px-1 pt-1">
                                    <div role="tabpanel" class="tab-pane active" id="tab1" aria-expanded="true" aria-labelledby="base-tab1">
                                        <form method="POST" action="{{route('admin.settings.store')}}" enctype="multipart/form-data" class="needs-validation" novalidate>
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <fieldset>
                                                        <h5>Header logo
                                                            <small class="text-muted">(Header logo)</small>
                                                        </h5>
                                                        <div class="form-group">
                                                            <input name="headerlogo" class="form-control date-inputmask dropify" type="file" placeholder="Header logo">
                                                        </div>
                                                    </fieldset>
                                                </div>
                                                <div class="col-md-6">
                                                    <fieldset>
                                                        <h5>Footer logo
                                                            <small class="text-muted">(Footer logo)</small>
                                                        </h5>
                                                        <div class="form-group">
                                                            <input name="footerlogo" class="form-control date-inputmask dropify" type="file" placeholder="Footer logo">
                                                        </div>
                                                    </fieldset>
                                                </div>
                                                <div class="col-md-6">
                                                    <fieldset>
                                                        <h5>Fav icon
                                                            <small class="text-muted">(Fav icon)</small>
                                                        </h5>
                                                        <div class="form-group">
                                                            <input name="favicon" class="form-control date-inputmask dropify" type="file" placeholder="Fav icon">

                                                        </div>
                                                    </fieldset>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <button type="submit" class="btn btn-info">Submit</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="tab-pane" id="tab2" aria-labelledby="base-tab2">
                                        <form method="POST" action="{{route('admin.settings.store')}}" enctype="multipart/form-data" class="needs-validation" novalidate>
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <fieldset>
                                                        <h5>Email
                                                            <small class="text-muted">(Email)</small>
                                                        </h5>
                                                        <div class="form-group">
                                                            <input name="email" class="form-control date-inputmask" type="text" placeholder="Email">
                                                        </div>
                                                    </fieldset>
                                                </div>
                                                <div class="col-md-6">
                                                    <fieldset>
                                                        <h5>Phone
                                                            <small class="text-muted">(Phone)</small>
                                                        </h5>
                                                        <div class="form-group">
                                                            <input name="phone" class="form-control date-inputmask" type="text" placeholder="Phone">
                                                        </div>
                                                    </fieldset>
                                                </div>
                                                <div class="col-md-6">
                                                    <fieldset>
                                                        <h5>Address
                                                            <small class="text-muted">(Address)</small>
                                                        </h5>
                                                        <div class="form-group">
                                                            <input name="address" class="form-control date-inputmask" type="text" placeholder="Address">
                                                        </div>
                                                    </fieldset>
                                                </div>
                                                <div class="col-md-6">
                                                    <fieldset>
                                                        <h5>Site Description
                                                            <small class="text-muted">(Site Description)</small>
                                                        </h5>
                                                        <div class="form-group">
                                                            <input name="description" class="form-control date-inputmask" type="text" placeholder="Site Description">
                                                            <!-- <textarea name="description" id="" class="summernote"></textarea> -->
                                                        </div>
                                                    </fieldset>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <button type="submit" class="btn btn-info">Submit</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="tab-pane" id="tab3" aria-labelledby="base-tab3">
                                        <form method="POST" action="{{route('admin.settings.store')}}" enctype="multipart/form-data" class="needs-validation" novalidate>
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <fieldset>
                                                        <h5>facebook
                                                            <small class="text-muted">(facebook)</small>
                                                        </h5>
                                                        <div class="form-group">
                                                            <input name="facebook" class="form-control date-inputmask" type="text" placeholder="facebook">
                                                        </div>
                                                    </fieldset>
                                                </div>
                                                <div class="col-md-6">
                                                    <fieldset>
                                                        <h5>twitter
                                                            <small class="text-muted">(twitter)</small>
                                                        </h5>
                                                        <div class="form-group">
                                                            <input name="twitter" class="form-control date-inputmask" type="text" placeholder="twitter">
                                                        </div>
                                                    </fieldset>
                                                </div>
                                                <div class="col-md-6">
                                                    <fieldset>
                                                        <h5>insta
                                                            <small class="text-muted">(insta)</small>
                                                        </h5>
                                                        <div class="form-group">
                                                            <input name="insta" class="form-control date-inputmask" type="text" placeholder="insta">
                                                        </div>
                                                    </fieldset>
                                                </div>
                                                <div class="col-md-6">
                                                    <fieldset>
                                                        <h5>linkdin
                                                            <small class="text-muted">(linkdin)</small>
                                                        </h5>
                                                        <div class="form-group">
                                                            <input name="linkdin" class="form-control date-inputmask" type="text" placeholder="linkdin">
                                                        </div>
                                                    </fieldset>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <button type="submit" class="btn btn-info">Submit</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="tab-pane" id="tab4" aria-labelledby="base-tab4">
                                        <form method="POST" action="{{route('admin.settings.store')}}" enctype="multipart/form-data" class="needs-validation" novalidate>
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <fieldset>
                                                        <h5>Seo title
                                                            <small class="text-muted">(title)</small>
                                                        </h5>
                                                        <div class="form-group">
                                                            <input name="title" class="form-control date-inputmask" type="text" placeholder="title">
                                                        </div>
                                                    </fieldset>
                                                </div>
                                                <div class="col-md-6">
                                                    <fieldset>
                                                        <h5>Seo keyword
                                                            <small class="text-muted">(Seo keyword)</small>
                                                        </h5>
                                                        <div class="form-group">
                                                            <input name="keyword" class="form-control date-inputmask" type="text" placeholder="keyword">
                                                        </div>
                                                    </fieldset>
                                                </div>
                                                <div class="col-md-6">
                                                    <fieldset>
                                                        <h5>Seo Description
                                                            <small class="text-muted">(Seo description)</small>
                                                        </h5>
                                                        <div class="form-group">
                                                            <input name="description" class="form-control date-inputmask" type="text" placeholder="description">
                                                        </div>
                                                    </fieldset>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <button type="submit" class="btn btn-info">Submit</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="tab-pane" id="tab5" aria-labelledby="base-tab5">
                                        <form method="POST" action="{{route('admin.settings.store')}}" enctype="multipart/form-data" class="needs-validation" novalidate>
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <fieldset>
                                                        <h5>Home location
                                                            <small class="text-muted">(location)</small>
                                                        </h5>
                                                        <div class="form-group">
                                                            <input name="homelocation" class="form-control date-inputmask" type="text" placeholder="location">
                                                        </div>
                                                    </fieldset>
                                                </div>
                                                <div class="col-md-6">
                                                    <fieldset>
                                                        <h5>Home Call Us
                                                            <small class="text-muted">(Call Us)</small>
                                                        </h5>
                                                        <div class="form-group">
                                                            <input name="homecallus" class="form-control date-inputmask" type="text" placeholder="Call Us">
                                                        </div>
                                                    </fieldset>
                                                </div>
                                                <div class="col-md-6">
                                                    <fieldset>
                                                        <h5>Home Schedule
                                                            <small class="text-muted">(Schedule)</small>
                                                        </h5>
                                                        <div class="form-group">
                                                            <input name="homescedule" class="form-control date-inputmask" type="text" placeholder="Schedule">
                                                        </div>
                                                    </fieldset>
                                                </div>
                                                <div class="col-md-6">
                                                    <fieldset>
                                                        <h5>Feature Image
                                                            <small class="text-muted">(Feature Image)</small>
                                                        </h5>
                                                        <div class="form-group">
                                                            <input name="homeFeatureImage" class="form-control date-inputmask dropify" type="file" placeholder="Feature Image">
                                                        </div>
                                                    </fieldset>
                                                </div>
                                                <div class="col-md-6">
                                                    <fieldset>
                                                        <h5>Testimonial Image(1459*521)
                                                            <small class="text-muted">(Image)</small>
                                                        </h5>
                                                        <div class="form-group">
                                                            <input name="hometestimonialimage" class="form-control date-inputmask dropify" type="file" placeholder="Feature Image">
                                                        </div>
                                                    </fieldset>
                                                </div>
                                                <div class="col-md-6">
                                                    <fieldset>
                                                        <h5>Home Testimonial Vedio
                                                            <small class="text-muted">(Vedio Link)</small>
                                                        </h5>
                                                        <div class="form-group">
                                                            <input name="hometestimonialvedio" class="form-control date-inputmask" type="text" placeholder="Vedio">
                                                        </div>
                                                    </fieldset>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <button type="submit" class="btn btn-info">Submit</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="tab-pane" id="tab6" aria-labelledby="base-tab6">
                                        <form method="POST" action="{{route('admin.settings.store')}}" enctype="multipart/form-data" class="needs-validation" novalidate>
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <fieldset>
                                                        <h5>Banner
                                                            <small class="text-muted">(Banner)</small>
                                                        </h5>
                                                        <div class="form-group">
                                                            <input name="aboutBanner" class="form-control date-inputmask dropify" type="file" placeholder="Banner">
                                                        </div>
                                                    </fieldset>
                                                </div>
                                                <div class="col-md-6">
                                                    <fieldset>
                                                        <h5>Title
                                                            <small class="text-muted">(Title)</small>
                                                        </h5>
                                                        <div class="form-group">
                                                            <input name="aboutTitle" class="form-control date-inputmask" type="text" placeholder="Title">
                                                        </div>
                                                    </fieldset>
                                                </div>
                                                <div class="col-md-6">
                                                    <fieldset>
                                                        <h5>Description
                                                            <small class="text-muted">(Description)</small>
                                                        </h5>
                                                        <div class="form-group">
                                                            <input name="aboutDescription" class="form-control date-inputmask" type="text" placeholder="Description">
                                                        </div>
                                                    </fieldset>
                                                </div>
                                                <div class="col-md-6">
                                                    <fieldset>
                                                        <h5>About Image(850*550)
                                                            <small class="text-muted">(Image)</small>
                                                        </h5>
                                                        <div class="form-group">
                                                            <input name="aboutImage" class="form-control date-inputmask" type="file" placeholder="About Image">
                                                        </div>
                                                    </fieldset>
                                                </div>
                                                <div class="col-md-6">
                                                    <fieldset>
                                                        <h5> About Vedio
                                                            <small class="text-muted">(Vedio Link)</small>
                                                        </h5>
                                                        <div class="form-group">
                                                            <input name="aboutVedioLink" class="form-control date-inputmask" type="text" placeholder="Vedio">
                                                        </div>
                                                    </fieldset>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <button type="submit" class="btn btn-info">Submit</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="tab-pane" id="tab7" aria-labelledby="base-tab7">
                                        <form method="POST" action="{{route('admin.settings.store')}}" enctype="multipart/form-data" class="needs-validation" novalidate>
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <fieldset>
                                                        <h5>Banner
                                                            <small class="text-muted">(Banner)</small>
                                                        </h5>
                                                        <div class="form-group">
                                                            <input name="servicesBanner" class="form-control date-inputmask dropify" type="file" placeholder="Banner">
                                                        </div>
                                                    </fieldset>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <button type="submit" class="btn btn-info">Submit</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="tab-pane" id="tab8" aria-labelledby="base-tab8">
                                        <form method="POST" action="{{route('admin.settings.store')}}" enctype="multipart/form-data" class="needs-validation" novalidate>
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <fieldset>
                                                        <h5>Banner
                                                            <small class="text-muted">(Banner)</small>
                                                        </h5>
                                                        <div class="form-group">
                                                            <input name="pricingBanner" class="form-control date-inputmask dropify" type="file" placeholder="Banner">
                                                        </div>
                                                    </fieldset>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <button type="submit" class="btn btn-info">Submit</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="tab-pane" id="tab9" aria-labelledby="base-tab9">
                                        <form method="POST" action="{{route('admin.settings.store')}}" enctype="multipart/form-data" class="needs-validation" novalidate>
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <fieldset>
                                                        <h5>Banner
                                                            <small class="text-muted">(Banner)</small>
                                                        </h5>
                                                        <div class="form-group">
                                                            <input name="contactBanner" class="form-control date-inputmask dropify" type="file" placeholder="Banner">
                                                        </div>
                                                    </fieldset>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <button type="submit" class="btn btn-info">Submit</button>
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
        </div>
    </div>
</div>
@endsection
@section("script")
<script type="text/javascript" src="https://jeremyfagis.github.io/dropify/dist/js/dropify.min.js"></script>
<script>
    $('.dropify').dropify();
    (function(window, document, $) {
        'use strict';
        // Basic Summernote
        $('.summernote').summernote({
            height: 200
        });

    })(window, document, jQuery);
</script>
@endsection