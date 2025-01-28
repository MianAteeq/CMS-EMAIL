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
                    <li class="breadcrumb-item"><a style="color: black" href="{{route('vender.service.provider.trading.unit.view',$trading_unit['id'])}}"> {{$trading_unit['name']}}</a>
                    </li>
                    <li class="breadcrumb-item"><a style="color: black" href="{{route('vender.service.provider.trading.unit.view',$trading_unit['id'])}}"> Overview</a>
                    </li>
                    <li class="breadcrumb-item"> Trade unit information
                    </li>
                    <li class="breadcrumb-item"> App settings
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
        <div style="border-radius: 7px;border: 2px solid black;  ">
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
          <a href="{{route('vender.service.provider.trading.unit.view',$trading_unit['id'])}}"><h4 class="h3"  style="border-radius: 7px; border: 2px solid black; padding: 10px; font-weight: 600; font-size: 17px; color: black;margin-left: 15px;"> Overview</h2></a>
          <a href="{{route('vender.service.provider.trading.unit.app.setting',$trading_unit['id'])}}"><h4 class="h3" style="border-radius: 7px; border: 2px solid #ff6600; padding: 10px; font-weight: 600; font-size: 17px; color: #ff6600;margin-left: 15px;"> App settings</h2></a>
            <a href="{{route('vender.service.provider.trading.unit.app.data',$trading_unit['id'])}}"> <h4 class="h3" style="border-radius: 7px; border: 2px solid black; padding: 10px; font-weight: 600; font-size: 17px; color: black;margin-left: 15px;"> App data </h2> </a>
                <a href="{{route('vender.service.provider.trading.unit.hub.setting',$trading_unit['id'])}}"> <h4 class="h3" style="border-radius: 7px; border: 2px solid black; padding: 10px; font-weight: 600; font-size: 17px; color: black;margin-left: 15px;"> Hub profile settings </h2> </a>


        </div>

        <div class="card default-collapse collapse-icon accordion-icon-rotate" style="box-shadow: none;margin-top: -6px;">




            <a id="headingCollapse1" class="card-header info mt-2" style="border: 2px solid black;border-radius: 7px !important;padding: 1.2rem 1rem;color: black !important;" data-toggle="collapse" href="#collaptr_businesss_info" aria-expanded="false" aria-controls="collaptr_businesss_info">
                <div class="card-title lead ">Bookings settings</div>
            </a>
            <div id="collaptr_businesss_info" role="tabpanel" aria-labelledby="headingCollapsebusinesss_info"
            style="border-left: 2px solid black;
            margin-top: -4px;
            border-right: 2px solid black;
            border-bottom: 2px solid black;
            border-bottom-left-radius: 6px;
            border-bottom-right-radius: 6px;"
            class="collapse " aria-expanded="false">
                <div class="card-content">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-5">
                                <h6 class="mb-0">Booking start time</h6>
                            </div>
                            <div class="col-sm-7 text-secondary">
                              {{$trading_unit['app_setting']['start_time']??''}}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-5">
                                <h6 class="mb-0">Last booking time</h6>
                            </div>
                            <div class="col-sm-7 text-secondary">
                                {{$trading_unit['app_setting']['end_time']??''}}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-5">
                                <h6 class="mb-0">Booking time intervals</h6>
                            </div>
                            <div class="col-sm-7 text-secondary">
                                {{$trading_unit['app_setting']['interval']??''}} minutes
                            </div>
                        </div>






                    </div>
                    <div class="footers" @if($is_provider=="off") style="display:none"  @endif>

                        <a href="{{route('vender.service.provider.trading.unit.booking.setting',$trading_unit['id'])}}">  <button type="button" class="btn btn-dark round btn-min-width mr-1 mb-1"
                           style="float: right;">Edit</button></a>

                   </div>
                </div>
            </div>


            <a id="headingCollapse2" class="card-header info mt-2" style="border: 2px solid black;border-radius: 7px !important;padding: 1.2rem 1rem;color: black !important;" data-toggle="collapse" href="#invoice_settings" aria-expanded="false" aria-controls="invoice_settings">
                <div class="card-title lead ">Invoice settings</div>
            </a>
            <div id="invoice_settings" role="tabpanel" aria-labelledby="headingCollapsebusinesss_info"
            style="border-left: 2px solid black;
            margin-top: -4px;
            border-right: 2px solid black;
            border-bottom: 2px solid black;
            border-bottom-left-radius: 6px;
            border-bottom-right-radius: 6px;"
            class="collapse " aria-expanded="false">
                <div class="card-content">
                    <div class="card-body">
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
                                <h6 class="mb-0">Business Name</h6>
                            </div>
                            <div class="col-sm-7 text-secondary">
                                @if($trading_unit['trading_template']==1)
                            {{ucfirst(auth()->user()->profile->company_name)}}

                            @endif
                            @if($trading_unit['trading_template']==2)
                            {{ucfirst(auth()->user()->profile->company_name)}} Trading as {{$trading_unit['trading_name']['name']}}

                            @endif
                            @if($trading_unit['trading_template']==3)
                            {{ucfirst($trading_unit['trading_name']['name'])??''}}

                            @endif
                            </div>
                        </div>
                        <hr>

                        <div class="row">
                            <div class="col-sm-5">
                                <h6 class="mb-0">Address Line One </h6>
                            </div>
                            <div class="col-sm-7 text-secondary">
                                {{$trading_unit['app_setting']['address_line_1']??''}}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-5">
                                <h6 class="mb-0">Address Line Two</h6>
                            </div>
                            <div class="col-sm-7 text-secondary">
                                {{$trading_unit['app_setting']['address_line_2']??''}}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-5">
                                <h6 class="mb-0">Address Line Three</h6>
                            </div>
                            <div class="col-sm-7 text-secondary">
                                {{$trading_unit['app_setting']['address_line_3']??''}}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-5">
                                <h6 class="mb-0">Address Line Four</h6>
                            </div>
                            <div class="col-sm-7 text-secondary">
                                {{$trading_unit['app_setting']['address_line_4']??''}}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-5">
                                <h6 class="mb-0">City / Town</h6>
                            </div>
                            <div class="col-sm-7 text-secondary">
                                {{$trading_unit['app_setting']['city']??''}}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-5">
                                <h6 class="mb-0">Postcode</h6>
                            </div>
                            <div class="col-sm-7 text-secondary">
                                {{$trading_unit['app_setting']['postcode']??''}}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-5">
                                <h6 class="mb-0">Landline</h6>
                            </div>
                            <div class="col-sm-7 text-secondary">
                                {{$trading_unit['app_setting']['landline']??''}}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-5">
                                <h6 class="mb-0">Mobile</h6>
                            </div>
                            <div class="col-sm-7 text-secondary">
                                {{$trading_unit['app_setting']['mobile']??''}}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-5">
                                <h6 class="mb-0">Email</h6>
                            </div>
                            <div class="col-sm-7 text-secondary">
                                {{$trading_unit['app_setting']['email']??''}}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-5">
                                <h6 class="mb-0">Website</h6>
                            </div>
                            <div class="col-sm-7 text-secondary">
                                {{$trading_unit['app_setting']['website']??''}}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-5">
                                <h6 class="mb-0">UK VAT Number</h6>
                            </div>
                            <div class="col-sm-7 text-secondary">
                                <p>{{auth()->user()->profile['uk_vat_no']??''}}</p>
                            </div>
                        </div>
                        <hr>

                        <div class="row">
                            <div class="col-sm-5">
                                <h6 class="mb-0">Footer – Register Company name</h6>
                            </div>
                            <div class="col-sm-7 text-secondary">
                                {{$trading_unit['app_setting']['footer_business_name']??auth()->user()->profile['company_name']}}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-5">
                                <h6 class="mb-0">Footer – Registered Office Address</h6>
                            </div>
                            <div class="col-sm-7 text-secondary">
                                {{-- {{$trading_unit['app_setting']['footer_office_address']??auth()->user()->profile['address_line_1'] ." ". auth()->user()->profile['address_line_2'] ." ". auth()->user()->profile['address_line_3'] ." ". auth()->user()->profile['address_line_4']}} --}}

                                {{auth()->user()['profile']['address_line_1']}} @if(auth()->user()['profile']['address_line_2']!=null) , @endif {{auth()->user()['profile']['address_line_2']}} , {{auth()->user()['profile']['city']}}  , {{auth()->user()['profile']['postcode']}}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-5">
                                <h6 class="mb-0">Footer – Registered Company Number</h6>
                            </div>
                            <div class="col-sm-7 text-secondary">
                                {{$trading_unit['app_setting']['company_number']??auth()->user()->profile['registration_no']}}
                            </div>
                        </div>







                    </div>
                    <div class="footers" @if($is_provider=="off") style="display:none"  @endif>

                        <a href="{{route('vender.service.provider.trading.unit.invoice.setting',$trading_unit['id'])}}">  <button type="button" class="btn btn-dark round btn-min-width mr-1 mb-1"
                           style="float: right;">Edit</button></a>

                   </div>
                </div>
            </div>

            <a id="headingCollapse2" class="card-header info mt-2" style="border: 2px solid black;border-radius: 7px !important;padding: 1.2rem 1rem;color: black !important;" data-toggle="collapse" href="#vat_settings" aria-expanded="false" aria-controls="vat_settings">
                <div class="card-title lead ">VAT settings</div>
            </a>
            <div id="vat_settings" role="tabpanel" aria-labelledby="headingCollapsebusinesss_info"
            style="border-left: 2px solid black;
            margin-top: -4px;
            border-right: 2px solid black;
            border-bottom: 2px solid black;
            border-bottom-left-radius: 6px;
            border-bottom-right-radius: 6px;"
            class="collapse " aria-expanded="false">
                <div class="card-content">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-5">
                                <h6 class="mb-0">VAT </h6>
                            </div>
                            <div class="col-sm-7 text-secondary">
                                {{auth()->user()['profile']['vat_register']}}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-5">
                                <h6 class="mb-0">VAT Booking </h6>
                            </div>
                            <div class="col-sm-7 text-secondary">
                             {{$trading_unit['app_setting']['vat_booking']??'0'==1?"YES":'NO'}}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-5">
                                <h6 class="mb-0">VAT Quote</h6>
                            </div>
                            <div class="col-sm-7 text-secondary">
                                {{$trading_unit['app_setting']['vat_quote']??'0'==1?"YES":'NO'}}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-5">
                                <h6 class="mb-0">VAT Jobs</h6>
                            </div>
                            <div class="col-sm-7 text-secondary">
                                {{$trading_unit['app_setting']['vat_job']??'0'==1?"YES":'NO'}}
                            </div>
                        </div>








                    </div>
                    <div class="footers" @if($is_provider=="off") style="display:none"  @endif>

                        <a href="{{route('vender.service.provider.trading.unit.vat.setting',$trading_unit['id'])}}">  <button type="button" class="btn btn-dark round btn-min-width mr-1 mb-1"
                           style="float: right;">Edit</button></a>

                   </div>
                </div>
            </div>











        </div>






    </div>
</div>


@endsection
