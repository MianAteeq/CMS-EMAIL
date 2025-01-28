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
.badge-success {
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
                    <li class="breadcrumb-item"><a style="color: black" href="{{route('vender.service.provider.trading.unit.view',$trading_unit['id'])}}"> {{$trading_unit['name']}}</a>
                    </li>
                    <li class="breadcrumb-item"><a style="color: black" href="{{route('vender.service.provider.trading.unit.view',$trading_unit['id'])}}"> Overview</a>
                    </li>
                    <li class="breadcrumb-item"><a style="color: black" href="{{route('vender.service.provider.trading.unit')}}"> Trade unit information</a>
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
            <a href="{{route('vender.service.provider.trading.unit.app.setting',$trading_unit['id'])}}"> <h4 class="h3" style="border-radius: 7px; border: 2px solid black; padding: 10px; font-weight: 600; font-size: 17px; color: black;margin-left: 15px;"> App settings</h2></a>
            <a href="{{route('vender.service.provider.trading.unit.app.data',$trading_unit['id'])}}"> <h4 class="h3" style="border-radius: 7px; border: 2px solid black; padding: 10px; font-weight: 600; font-size: 17px; color: black;margin-left: 15px;"> App data </h2> </a>
            <a href="{{route('vender.service.provider.trading.unit.hub.setting',$trading_unit['id'])}}"> <h4 class="h3" style="border-radius: 7px; border: 2px solid #ff6600; padding: 10px; font-weight: 600; font-size: 17px; color: #ff6600;margin-left: 15px;"> Hub profile settings </h2> </a>


        </div>

        <div class="card default-collapse collapse-icon accordion-icon-rotate" style="box-shadow: none;margin-top: -6px;">




            <a id="headingCollapse1" class="card-header info mt-2" style="border: 2px solid black;border-radius: 7px !important;padding: 1.2rem 1rem;color: black !important;" data-toggle="collapse" href="#online_status_info" aria-expanded="false" aria-controls="online_status_info">
                <div class="card-title lead ">Online statuses</div>
            </a>
            <div id="online_status_info" role="tabpanel" aria-labelledby="headingCollapsebusinesss_info"
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
                                <h6 class="mb-0">Marketplace</h6>
                            </div>
                            <div class="col-sm-7 text-secondary">
                             {{$trading_unit['hub_setting']['is_marketplace']?'On':"Off"}}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-5">
                                <h6 class="mb-0">Quotes</h6>
                            </div>
                            <div class="col-sm-7 text-secondary">
                                {{$trading_unit['hub_setting']['is_quote']?'On':"Off"}}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-5">
                                <h6 class="mb-0">Bookings</h6>
                            </div>
                            <div class="col-sm-7 text-secondary">
                                {{$trading_unit['hub_setting']['is_booking']?'On':"Off"}}
                            </div>
                        </div>






                    </div>

                    <div class="footers"  @if($is_hub=="off") style="display: none"  @endif>

                        <a href="{{route('vender.service.provider.trading.unit.hub.setting.online.status',$trading_unit['id'])}}">  <button type="button" class="btn btn-dark round btn-min-width mr-1 mb-1"
                           style="float: right;">Edit</button></a>

                   </div>
                </div>
            </div>


            <a id="headingCollapse2" class="card-header info mt-2" style="border: 2px solid black;border-radius: 7px !important;padding: 1.2rem 1rem;color: black !important;" data-toggle="collapse" href="#trade_unit" aria-expanded="false" aria-controls="trade_unit">
                <div class="card-title lead ">Trade unit information</div>
            </a>
            <div id="trade_unit" role="tabpanel" aria-labelledby="headingCollapsebusinesss_info"
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
                                <h6 class="mb-0">ID</h6>
                            </div>
                            <div class="col-sm-7 text-secondary">
                                {{$trading_unit['id']??''}}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-5">
                                <h6 class="mb-0">Listing name </h6>
                            </div>
                            <div class="col-sm-7 text-secondary">
                                {{$trading_unit['trading_name']['name']??''}} - {{$trading_unit['name']??''}}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-5">
                                <h6 class="mb-0">Service offerings
                                </h6>
                            </div>
                            <div class="col-sm-7 text-secondary">
                                {{$trading_unit['operation_type']??''}}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-5">
                                <h6 class="mb-0">Site address</h6>
                            </div>
                            <div class="col-sm-7 text-secondary">
                                {{$trading_unit['site']['address_line_1']??''}}  {{$trading_unit['site']['address_line_2']??''}}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-5">
                                <h6 class="mb-0">Mobile city / town</h6>
                            </div>
                            <div class="col-sm-7 text-secondary">
                                {{$trading_unit['city']??''}}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-5">
                                <h6 class="mb-0">Mobile postcode</h6>
                            </div>
                            <div class="col-sm-7 text-secondary">
                                {{$trading_unit['postcode']??''}}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-5">
                                <h6 class="mb-0">Mobile distance / radius (miles)</h6>
                            </div>
                            <div class="col-sm-7 text-secondary">
                                {{$trading_unit['radius']??''}}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-5">
                                <h6 class="mb-0">Landline</h6>
                            </div>
                            <div class="col-sm-7 text-secondary">
                                {{$trading_unit['landline']??''}}
                            </div>
                        </div>
                        <hr>

                        <div class="row">
                            <div class="col-sm-5">
                                <h6 class="mb-0">Mobile</h6>
                            </div>
                            <div class="col-sm-7 text-secondary">
                                {{$trading_unit['mobile']??''}}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-5">
                                <h6 class="mb-0">Email</h6>
                            </div>
                            <div class="col-sm-7 text-secondary">
                                {{$trading_unit['email']??''}}
                            </div>
                        </div>








                    </div>

                </div>
            </div>

            <a id="headingCollapse2" class="card-header info mt-2" style="border: 2px solid black;border-radius: 7px !important;padding: 1.2rem 1rem;color: black !important;" data-toggle="collapse" href="#opening_hours" aria-expanded="false" aria-controls="opening_hours">
                <div class="card-title lead ">Opening hours</div>
            </a>
            <div id="opening_hours" role="tabpanel" aria-labelledby="headingCollapsebusinesss_info"
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
                                <h6 class="mb-0">Monday </h6>
                            </div>
                            <div class="col-sm-7 text-secondary">
                               @if ($trading_unit['hub_setting']['is_monday']==1)
                               {{$trading_unit['hub_setting']['monday_start_time']}} - {{$trading_unit['hub_setting']['monday_end_time']}}
                               @else
                               Close
                               @endif
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-5">
                                <h6 class="mb-0">Tuesday </h6>
                            </div>
                            <div class="col-sm-7 text-secondary">
                                @if ($trading_unit['hub_setting']['is_tuesday']==1)
                                {{$trading_unit['hub_setting']['tuesday_start_time']}} - {{$trading_unit['hub_setting']['tuesday_end_time']}}
                                @else

                                Closed
                                @endif
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-5">
                                <h6 class="mb-0">Wednesday</h6>
                            </div>
                            <div class="col-sm-7 text-secondary">
                                @if ($trading_unit['hub_setting']['is_wednesday']==1)
                                 {{$trading_unit['hub_setting']['wednesday_start_time']}} - {{$trading_unit['hub_setting']['wednesday_end_time']}}
                                 @else

                                 Closed
                                 @endif
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-5">
                                <h6 class="mb-0">Thursaday</h6>
                            </div>
                            <div class="col-sm-7 text-secondary">
                                @if ($trading_unit['hub_setting']['is_thursday']==1)
                                 {{$trading_unit['hub_setting']['thursday_start_time']}} - {{$trading_unit['hub_setting']['thursday_end_time']}}

                                 @else

                                 Closed
                                 @endif
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-5">
                                <h6 class="mb-0">Friday</h6>
                            </div>
                            <div class="col-sm-7 text-secondary">
                                @if ($trading_unit['hub_setting']['is_friday']==1)
                                 {{$trading_unit['hub_setting']['friday_start_time']}} - {{$trading_unit['hub_setting']['friday_end_time']}}

                                 @else

                                 Closed
                                 @endif
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-5">
                                <h6 class="mb-0">Saturday</h6>
                            </div>
                            <div class="col-sm-7 text-secondary">
                                @if ($trading_unit['hub_setting']['is_saturday']==1)
                                 {{$trading_unit['hub_setting']['saturday_start_time']}} - {{$trading_unit['hub_setting']['saturday_end_time']}}

                                 @else

                                 Closed

                                 @endif
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-5">
                                <h6 class="mb-0">Sunday</h6>
                            </div>
                            <div class="col-sm-7 text-secondary">
                                @if ($trading_unit['hub_setting']['is_sunday']==1)
                                 {{$trading_unit['hub_setting']['sunday_start_time']}} - {{$trading_unit['hub_setting']['sunday_end_time']}}

                                 @else

                                 Closed

                                 @endif
                            </div>
                        </div>








                    </div>
                    <div class="footers" @if($is_hub=="off") style="display: none"  @endif>

                        <a href="{{route('vender.service.provider.trading.unit.hub.setting.opening.hour',$trading_unit['id'])}}">  <button type="button" class="btn btn-dark round btn-min-width mr-1 mb-1"
                           style="float: right;">Edit</button></a>

                   </div>
                </div>
            </div>
            <a id="headingCollapse2" class="card-header info mt-2" style="border: 2px solid black;border-radius: 7px !important;padding: 1.2rem 1rem;color: black !important;" data-toggle="collapse" href="#social_media" aria-expanded="false" aria-controls="social_media">
                <div class="card-title lead ">Social media profiles</div>
            </a>
            <div id="social_media" role="tabpanel" aria-labelledby="headingCollapsebusinesss_info"
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
                                <h6 class="mb-0">Website </h6>
                            </div>
                            <div class="col-sm-7 text-secondary">
                               {{$trading_unit['hub_setting']['website']}}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-5">
                                <h6 class="mb-0">Facebook </h6>
                            </div>
                            <div class="col-sm-7 text-secondary">
                            {{$trading_unit['hub_setting']['facebook']}}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-5">
                                <h6 class="mb-0">Instagram</h6>
                            </div>
                            <div class="col-sm-7 text-secondary">
                                {{$trading_unit['hub_setting']['instagram']}}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-5">
                                <h6 class="mb-0">Trust Pilot</h6>
                            </div>
                            <div class="col-sm-7 text-secondary">
                                {{$trading_unit['hub_setting']['trust_pilot']}}
                            </div>
                        </div>








                    </div>
                    <div class="footers">

                        <a href="{{route('vender.service.provider.trading.unit.hub.setting.social.media',$trading_unit['id'])}}">  <button type="button" class="btn btn-dark round btn-min-width mr-1 mb-1"
                           style="float: right;">Edit</button></a>

                   </div>
                </div>
            </div>
            <a id="headingCollapse2" class="card-header info mt-2" style="border: 2px solid black;border-radius: 7px !important;padding: 1.2rem 1rem;color: black !important;" data-toggle="collapse" href="#job_type" aria-expanded="false" aria-controls="job_type">
                <div class="card-title lead ">Job types</div>
            </a>
            <div id="job_type" role="tabpanel" aria-labelledby="headingCollapsebusinesss_info"
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
                            <div class="col-sm-3">
                                <h6 class="mb-0">Job Type </h6>
                            </div>
                            <div class="col-sm-8 text-secondary">
                               <div class="row">
                                @foreach ($trading_unit['job_types'] as $job_type)
                                <div class="col-md-3 mt-1">
                                    <span class="badge badge-primary-1">{{$job_type['job_type']['name']}}</span>
                                </div>
                                @endforeach


                               </div>
                            </div>
                        </div>









                    </div>
                    <div class="footers">

                        <a href="{{route('vender.service.provider.trading.unit.hub.setting.job.type',$trading_unit['id'])}}">  <button type="button" class="btn btn-dark round btn-min-width mr-1 mb-1"
                           style="float: right;">Edit</button></a>

                   </div>
                </div>
            </div>
            <a id="headingCollapse2" class="card-header info mt-2" style="border: 2px solid black;border-radius: 7px !important;padding: 1.2rem 1rem;color: black !important;" data-toggle="collapse" href="#product_offer" aria-expanded="false" aria-controls="product_offer">
                <div class="card-title lead ">Products & offers</div>
            </a>
            <div id="product_offer" role="tabpanel" aria-labelledby="headingCollapsebusinesss_info"
            style="border-left: 2px solid black;
            margin-top: -4px;
            border-right: 2px solid black;
            border-bottom: 2px solid black;
            border-bottom-left-radius: 6px;
            border-bottom-right-radius: 6px;"
            class="collapse " aria-expanded="false">
                <div class="card-content">
                    <div class="card-body">
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered zero-configuration">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Product No</th>
                                            <th>Product Name</th>
                                            <th>Job Type</th>
                                            <th>Price</th>

                                            <th>Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>

                                        {{-- @foreach ($users as $user)

                                        @endforeach --}}


                                       @foreach ($trading_unit['product_offers'] as $contact)
                                       <tr>
                                           <td>{{$loop->iteration}}</td>
                                           <td>{{$contact['product_no']}}</td>
                                           <td>{{$contact['product_name']}}</td>
                                           <td>{{ $contact['job_type']['name'] }}</td>
                                           <td>{{ number_format($contact['price'],2) }}</td>



                                           <td> <a href="{{route('vender.service.provider.trading.unit.hub.setting.edit.product.offer',[$contact['id'],$trading_unit['id']])}}"><i class="ft-eye"></i></a></td>
                                       </tr>

                                       @endforeach



                                    </tbody>
                                    <tfoot>
                                        <tr>
                                           <th>ID</th>
                                            <th>Product No</th>
                                            <th>Product Name</th>
                                            <th>Job Type</th>
                                            <th>Price</th>

                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>








                    </div>
                    <div class="footers">

                        <a href="{{route('vender.service.provider.trading.unit.hub.setting.product.offer',$trading_unit['id'])}}">  <button type="button" class="btn btn-dark round btn-min-width mr-1 mb-1"
                           style="float: right;">Add</button></a>

                   </div>
                </div>
            </div>
            <a id="headingCollapse2" class="card-header info mt-2" style="border: 2px solid black;border-radius: 7px !important;padding: 1.2rem 1rem;color: black !important;" data-toggle="collapse" href="#warrenty_job" aria-expanded="false" aria-controls="warrenty_job">
                <div class="card-title lead ">Warranty jobs</div>
            </a>
            <div id="warrenty_job" role="tabpanel" aria-labelledby="headingCollapsebusinesss_info"
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
                            <div class="col-sm-3">
                                <h6 class="mb-0">Warranty Job </h6>
                            </div>
                            <div class="col-sm-8 text-secondary">
                               <div class="row">
                                @foreach ($trading_unit['warranty_jobs'] as $job_type)
                                <div class="col-md-3 mt-1">
                                    <span class="badge badge-success">{{$job_type['warranty_job']['name']}}</span>
                                </div>
                                @endforeach


                               </div>
                            </div>
                        </div>






                    </div>
                    <div class="footers">

                        <a href="{{route('vender.service.provider.trading.unit.hub.setting.warranty.job',$trading_unit['id'])}}">  <button type="button" class="btn btn-dark round btn-min-width mr-1 mb-1"
                           style="float: right;">Edit</button></a>

                   </div>
                </div>
            </div>
            <a id="headingCollapse2" class="card-header info mt-2" style="border: 2px solid black;border-radius: 7px !important;padding: 1.2rem 1rem;color: black !important;" data-toggle="collapse" href="#vehicle_specialist" aria-expanded="false" aria-controls="vehicle_specialist">
                <div class="card-title lead ">Vehicle specialist</div>
            </a>
            <div id="vehicle_specialist" role="tabpanel" aria-labelledby="headingCollapsebusinesss_info"
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
                            <div class="col-sm-3">
                                <h6 class="mb-0">Vehicle specialist </h6>
                            </div>
                            <div class="col-sm-8 text-secondary">
                               <div class="row">
                                @foreach ($trading_unit['vehicle_specialists'] as $job_type)
                                <div class="col-md-3 mt-1">
                                    <span class="badge badge-success">{{$job_type['vehicle_specialist']['name']}}</span>
                                </div>
                                @endforeach


                               </div>
                            </div>
                        </div>








                    </div>
                    <div class="footers">

                        <a href="{{route('vender.service.provider.trading.unit.hub.setting.vehicle.specialist',$trading_unit['id'])}}">  <button type="button" class="btn btn-dark round btn-min-width mr-1 mb-1"
                           style="float: right;">Edit</button></a>

                   </div>
                </div>
            </div>
            <a id="headingCollapse2" class="card-header info mt-2" style="border: 2px solid black;border-radius: 7px !important;padding: 1.2rem 1rem;color: black !important;" data-toggle="collapse" href="#accreditation" aria-expanded="false" aria-controls="accreditation">
                <div class="card-title lead ">Accreditation & schemes</div>
            </a>
            <div id="accreditation" role="tabpanel" aria-labelledby="headingCollapsebusinesss_info"
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
                            <div class="col-sm-3">
                                <h6 class="mb-0">Accreditation & schemes </h6>
                            </div>
                            <div class="col-sm-8 text-secondary">
                               <div class="row">
                                @foreach ($trading_unit['accreditations'] as $job_type)
                                <div class="col-md-3 mt-1">
                                    <span class="badge badge-success">{{$job_type['accreditation']['name']}}</span>
                                </div>
                                @endforeach


                               </div>
                            </div>
                        </div>







                    </div>
                    <div class="footers">

                        <a href="{{route('vender.service.provider.trading.unit.hub.setting.accreditation',$trading_unit['id'])}}">  <button type="button" class="btn btn-dark round btn-min-width mr-1 mb-1"
                           style="float: right;">Edit</button></a>

                   </div>
                </div>
            </div>
            <a id="headingCollapse2" class="card-header info mt-2" style="border: 2px solid black;border-radius: 7px !important;padding: 1.2rem 1rem;color: black !important;" data-toggle="collapse" href="#payment_method" aria-expanded="false" aria-controls="payment_method">
                <div class="card-title lead ">Payment methods</div>
            </a>
            <div id="payment_method" role="tabpanel" aria-labelledby="headingCollapsebusinesss_info"
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
                                <h6 class="mb-0">Payment methods </h6>
                            </div>
                            <div class="col-sm-7 text-secondary">
                                <div class="row">
                                    @foreach ($trading_unit['payment_methods'] as $job_type)
                                    <div class="col-md-3 mt-1">
                                        <span class="badge badge-success">{{$job_type['payment_method']['name']}}</span>
                                    </div>
                                    @endforeach


                                   </div>
                            </div>
                        </div>









                    </div>
                    <div class="footers">

                        <a href="{{route('vender.service.provider.trading.unit.hub.setting.payment.method',$trading_unit['id'])}}">  <button type="button" class="btn btn-dark round btn-min-width mr-1 mb-1"
                           style="float: right;">Edit</button></a>

                   </div>
                </div>
            </div>











        </div>






    </div>
</div>


@endsection


@section('script')

<script>
    oTable = $('.zero-configuration').DataTable({
        "bPaginate" : $('.zero-configuration tbody tr').length>10,
        "iDisplayLength": 10,
        "bAutoWidth": false,
        "ordering": false,

    });   //pay attention to capital D, which is mandatory to retrieve "api" datatables' object, as @Lionel said
    $('#myInputTextField').keyup(function(){
        oTable.search($(this).val()).draw() ;
    })
</script>

@endsection
