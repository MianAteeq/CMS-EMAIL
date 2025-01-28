@extends('vender::layouts.master')

@section('css_custom')

<style>
    .footers{
    /* position: absolute; */
    bottom: 0;
    left: 0;
    border-top: 2px solid black;
    padding-top: 5px;
    width: 100%;
}
.btn-dark {
    border-color: black !important;
    background-color: black !important;
    color: #FFFFFF;
}
.round {
    border-radius: 0.5rem;
}
.badge-primary-1 {
    background-color: #ff6600;
}
</style>

@endsection

@section('header')
<div class="content-header bg-white">
    <div class="row" style="border-bottom: 3px solid #949494;">
        <div class="col-xl-12 col-12 bg-white headerbg" style="padding-left: 32px;padding-top: 13px;">
            <h3 class="h3">Trade unit information</h3>
            <div class="breadcrumb-wrapper col-12">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a>Products</a>
                    </li>
                    <li class="breadcrumb-item"><a style="color: black" href="{{route('vender.service.provider')}}">Service Provider</a>
                    </li>
                    <li class="breadcrumb-item"><a style="color: black" href="{{route('vender.service.provider.trading.unit')}}">Trade Units</a>
                    </li>
                    <li class="breadcrumb-item"> {{$trading_unit['name']}}
                    </li>
                    <li class="breadcrumb-item"> Overview
                    </li>
                    <li class="breadcrumb-item"> Trade unit information
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
        <div style="border-radius: 7px;border: 2px solid black; ">
            <h4 class="h3" style="font-weight: 600; font-size: 17px;padding: 10px; ">
        <div>
            <div style="float: left; width: 10%;">
                <img src="/trading_unit.png" style="width: 22px;margin-top: -5px;" >
            </div>
            <div style="float: left; width: 90%;">
                <span>Trading Unit : {{$trading_unit['name']}}</span>
            </div>



        </div>
        <div style="margin: 20px;margin-top: 53px;font-weight: 500;font-size: 13px;">
            <span>Trading Name : {{$trading_unit['trading_name']['name']??''}}</span>
        </div>
        <div style="margin: 20px;margin-top: 15px;font-weight: 500;font-size: 13px;">
            <span class="success">{{$trading_unit['status']}}</span>
        </div>
        <div style="margin: 20px;margin-top: 15px;font-weight: 500;font-size: 13px;">
            <span class="success">{{$trading_unit['active_status']}}</span>
        </div>
        <div style="margin: 20px;margin-top: 15px;font-weight: 500;font-size: 13px;margin-bottom:0px">
            <span >Created: {{\Carbon\Carbon::parse($trading_unit['created_at'])->format('d/m/Y') }} at  {{\Carbon\Carbon::parse($trading_unit['created_at'])->format('h:i') }}</span>
        </div>

        </h4>
        <div class="footers" style="text-align: center;">

            @if($trading_unit['status']=="PENDING" || $trading_unit['status']=="INACTIVE")
            <a href="{{route('vender.service.provider.trading.unit.active',$trading_unit['id'])}}">  <button type="button" style="width: 80%;" class="btn btn-dark round btn-min-width mr-1 mb-1">ACTIVATE TRADE UNIT</button></a>
            @else
            <a href="{{route('vender.service.provider.trading.unit.in.active',$trading_unit['id'])}}">  <button type="button" style="width: 80%;" class="btn btn-dark round btn-min-width mr-1 mb-1">INACTIVATE TRADE UNIT</button></a>

            @endif
            @if($trading_unit['active_status']=="OFFLINE")
            <a href="{{route('vender.service.provider.trading.unit.Online',$trading_unit['id'])}}">  <button type="button" style="width: 80%;" class="btn btn-dark round btn-min-width mr-1 mb-1"
               >SHOW ONLINE</button></a>

               @else
               <a href="{{route('vender.service.provider.trading.unit.offline',$trading_unit['id'])}}">  <button type="button" style="width: 80%;" class="btn btn-dark round btn-min-width mr-1 mb-1"
                  >SHOW OFFLINE</button></a>

               @endif



       </div>

        </div>
    </div>
    <div class="col-md-9" id="contens" style="border-radius: 6px;margin-bottom: 10px;padding-bottom: 10px;margin-top: 0px;">
        <div class="row ">
          <a href="{{route('vender.service.provider.trading.unit.view',$trading_unit['id'])}}"><h4 class="h3"  style="border-radius: 7px; border: 2px solid #ff6600; padding: 10px; font-weight: 600; font-size: 17px; color: #ff6600;margin-left: 15px;"> Overview</h2></a>
           <a href="{{route('vender.service.provider.trading.unit.app.setting',$trading_unit['id'])}}"><h4 class="h3" style="border-radius: 7px; border: 2px solid black; padding: 10px; font-weight: 600; font-size: 17px; color: black;margin-left: 15px;"> App settings</h2></a>
            <a href="{{route('vender.service.provider.trading.unit.app.data',$trading_unit['id'])}}"> <h4 class="h3" style="border-radius: 7px; border: 2px solid black; padding: 10px; font-weight: 600; font-size: 17px; color: black;margin-left: 15px;"> App data </h2> </a>
            <a href="{{route('vender.service.provider.trading.unit.hub.setting',$trading_unit['id'])}}"> <h4 class="h3" style="border-radius: 7px; border: 2px solid black; padding: 10px; font-weight: 600; font-size: 17px; color: black;margin-left: 15px;"> Hub profile settings </h2> </a>


        </div>

        <div class="card default-collapse collapse-icon accordion-icon-rotate" style="box-shadow: none;margin-top: -6px;">




            <a id="headingCollapse1" class="card-header info mt-2" style="border: 2px solid black;border-radius: 7px !important;padding: 1.2rem 1rem;color: black !important;" data-toggle="collapse" href="#collaptr_businesss_info" aria-expanded="true" aria-controls="collaptr_businesss_info">
                <div class="card-title lead collapsed">Trade unit information</div>
            </a>
            <div id="collaptr_businesss_info" role="tabpanel" aria-labelledby="headingCollapsebusinesss_info"
            style="border-left: 2px solid black;
            margin-top: -4px;
            border-right: 2px solid black;
            border-bottom: 2px solid black;
            border-bottom-left-radius: 6px;
            border-bottom-right-radius: 6px;"
            class="collapse show" aria-expanded="false">
                <div class="card-content">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-5">
                                <h6 class="mb-0">ID</h6>
                            </div>
                            <div class="col-sm-7 text-secondary">
                                SVP{{sprintf("%07d",$trading_unit['id'])}}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-5">
                                <h6 class="mb-0">Trade unit name</h6>
                            </div>
                            <div class="col-sm-7 text-secondary">
                               {{$trading_unit['name']??''}}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-5">
                                <h6 class="mb-0">Business Name Format</h6>
                            </div>
                            <div class="col-sm-7 text-secondary">
                                @if(auth()->user()->profile['organization_status']==="Limited Company")
                                @if($trading_unit['trading_template']==1)
                                Registered company name
                                @endif
                                @if($trading_unit['trading_template']==2)
                                Registered company name & trading name
                                @endif
                                @if($trading_unit['trading_template']==3)
                                Trading name
                                @endif

                                @else
                                @if($trading_unit['trading_template']==1)
                                Registered sole trader name
                                @endif
                                @if($trading_unit['trading_template']==2)
                                Registered sole trader name & trading name
                                @endif
                                @if($trading_unit['trading_template']==3)
                                Trading name
                                @endif

                                @endif
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-5">
                                <h6 class="mb-0">Business Name </h6>
                            </div>
                            <div class="col-sm-7 text-secondary">
                            @if($trading_unit['trading_template']==1)
                        {{auth()->user()->profile->company_name}}

                        @endif
                        @if($trading_unit['trading_template']==2)
                        {{auth()->user()->profile->company_name}} Trading as {{$trading_unit['trading_name']['name']}}

                        @endif
                        @if($trading_unit['trading_template']==3)
                        {{$trading_unit['trading_name']['name']??''}}

                        @endif
                            </div>
                        </div>

                        {{-- <hr>
                        <div class="row">
                            <div class="col-sm-5">
                                <h6 class="mb-0">Trading name</h6>
                            </div>
                            <div class="col-sm-7 text-secondary">
                               {{$trading_unit['trading_name']['name']??''}}
                            </div>
                        </div> --}}
                        <hr>
                        <div class="row">
                            <div class="col-sm-5">
                                <h6 class="mb-0">Service offerings</h6>
                            </div>
                            <div class="col-sm-7 text-secondary">
                              <span class="badge badge-primary-1"> {{$trading_unit['operation_type']}}</span>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-5">
                                <h6 class="mb-0">Site address</h6>
                            </div>
                            <div class="col-sm-7 text-secondary">
                               {{$trading_unit['site']['address_line_1']??''}}
                            </div>
                        </div>
                        <hr>



                        @if ($trading_unit['operation_type']!="On-site")
                        <div class="row">
                            <div class="col-sm-5">
                                <h6 class="mb-0">Mobile city / town </h6>
                            </div>
                            <div class="col-sm-7 text-secondary">
                               {{$trading_unit['city']}}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-5">
                                <h6 class="mb-0">Mobile postcode </h6>
                            </div>
                            <div class="col-sm-7 text-secondary">
                               {{$trading_unit['postcode']}}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-5">
                                <h6 class="mb-0">Mobile distance / radius (miles) </h6>
                            </div>
                            <div class="col-sm-7 text-secondary">
                               {{$trading_unit['radius']}}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-5">
                                <h6 class="mb-0">Landline </h6>
                            </div>
                            <div class="col-sm-7 text-secondary">
                               {{$trading_unit['landline']}}
                            </div>
                        </div>
                        <hr>
                        @endif

                        <div class="row">
                            <div class="col-sm-5">
                                <h6 class="mb-0">Mobile </h6>
                            </div>
                            <div class="col-sm-7 text-secondary">
                               {{$trading_unit['mobile']}}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-5">
                                <h6 class="mb-0">Email </h6>
                            </div>
                            <div class="col-sm-7 text-secondary">
                               {{$trading_unit['email']}}
                            </div>
                        </div>





                    </div>
                    <div class="footers">

                        <a href="{{route('vender.service.provider.trading.unit.edit',$trading_unit['id'])}}">  <button type="button" class="btn btn-dark round btn-min-width mr-1 mb-1"
                           style="float: right;">Edit</button></a>

                   </div>
                </div>
            </div>









        </div>






    </div>
</div>


@endsection
