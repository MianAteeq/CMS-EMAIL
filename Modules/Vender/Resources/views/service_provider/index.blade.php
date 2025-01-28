@extends('vender::layouts.master')

@section('header')
<div class="content-header bg-white">
    <div class="row" style="border-bottom: 3px solid #949494;">
        <div class="col-xl-12 col-12 bg-white headerbg" style="padding-left: 32px;padding-top: 13px;">
            <h3 class="h3">Service Provider</h3>
            <div class="breadcrumb-wrapper col-12">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a>Products</a>
                    </li>

                    <li class="breadcrumb-item">Service Provider
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
        font-size: 17px; "> <img src="/service_provider.png" style="width: 22px;margin-top: -5px;margin-right: 3px;">Service Provider</h2>

    </div>
    <div class="col-md-9" id="contens" style="border-radius: 6px;margin-bottom: 10px;padding-bottom: 10px;margin-top: 0px;">
        <div class="row ">
          <a href="{{route('vender.service.provider.trading.unit')}}"><h4 class="h3"  style="border-radius: 7px; border: 2px solid black; padding: 10px; font-weight: 600; font-size: 17px; color: black;margin-left: 15px;"> Trade units</h2></a>
           <a href="{{route('vender.service.provider.app.setting')}}"> <h4 class="h3" style="border-radius: 7px; border: 2px solid black; padding: 10px; font-weight: 600; font-size: 17px; color: black;margin-left: 15px;"> App settings</h2></a>
            <a href="{{route('vender.service.provider.app.data')}}"> <h4 class="h3" style="border-radius: 7px; border: 2px solid black; padding: 10px; font-weight: 600; font-size: 17px; color: black;margin-left: 15px;"> App data </h2> </a>


        </div>






    </div>
</div>


@endsection
