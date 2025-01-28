@extends('vender::layouts.master')

@section('header')
<div class="content-header bg-white">
    <div class="row" style="border-bottom: 3px solid #949494;">
        <div class="col-xl-12 col-12 bg-white headerbg" style="padding-left: 32px;padding-top: 13px;">
            <h3 class="h3">App settings</h3>
            <div class="breadcrumb-wrapper col-12">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a>Products</a>
                    </li>

                    <li class="breadcrumb-item">Service Provider
                    </li>
                    <li class="breadcrumb-item">App settings
                    </li>


                </ol>
            </div>
        </div>

    </div>
</div>
@endsection

@section('content')

<div class="row">
    <div class="col-md-3">

        <h4 class="h3" style="border-radius: 7px;border: 2px solid black;padding: 10px;font-weight: 600;
        font-size: 17px; "> <img src="/business_manager.png" style="width: 22px;margin-top: -5px;"> Service Provider</h2>

    </div>
    <div class="col-md-9" id="contens" style="border-radius: 6px;margin-bottom: 10px;padding-bottom: 10px;margin-top: 0px;">
        <div class="row ">
           <a href="{{route('vender.service.provider.trading.unit')}}"><h4 class="h3"  style="border-radius: 7px; border: 2px solid black; padding: 10px; font-weight: 600; font-size: 17px; color: black;margin-left: 15px;"> Trade units</h2></a>
           <a href="{{route('vender.service.provider.app.setting')}}"> <h4 class="h3" style="border-radius: 7px; border: 2px solid #ff6600; padding: 10px; font-weight: 600; font-size: 17px; color: #ff6600;margin-left: 15px;"> App settings</h2></a>
            <a href="{{route('vender.service.provider.app.data')}}"> <h4 class="h3" style="border-radius: 7px; border: 2px solid black; padding: 10px; font-weight: 600; font-size: 17px; color: black;margin-left: 15px;"> App data </h2> </a>

        </div>
        <div class="card default-collapse collapse-icon accordion-icon-rotate" style="box-shadow: none;">




            <a id="headingCollapse1" href="{{route('vender.service.provider.user.group')}}" class="card-header info mt-2" style="border: 2px solid black;border-radius: 7px !important;padding: 1.2rem 1rem;color: black !important;margin-top: 1px !important;"   >
                <div class="card-title lead collapsed">User groups</div>
            </a>











        </div>





    </div>
</div>


@endsection
