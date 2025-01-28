@extends('vender::layouts.master')
@section('css_custom')

<link rel="stylesheet" type="text/css" href="/modules/admin/app-assets/vendors/css/tables/datatable/datatables.min.css">
<style>
    .dataTables_wrapper .dataTables_length{
        display: none;
    }
    .dataTables_wrapper .dataTables_filter{

        display: none;
    }
    table.dataTable thead{
        background: #fafbfc;
    color: black;
    }
    .table-striped tbody tr:nth-of-type(odd) {
    background-color: white;
}
table.dataTable tbody td {
    padding: 8px 10px;
    padding-bottom: 2px;
    padding-top: 2px;
    font-size: 10px;
}
.dataTables_wrapper .dataTables_info{
    display: none;
}
table.dataTable tbody td {

    color: black;
}
table.dataTable thead th, table.dataTable thead td {
    padding: 10px 18px;
    border-bottom: 1px solid #111;
    font-size: 11px;
    padding-left: 8px;
    padding-right: 1px;
}
th {
    white-space: pre-line;
}
table.dataTable tfoot th, table.dataTable tfoot td {
    padding: 10px 18px 6px 18px;
    border-top: 1px solid #111;
    font-size: 10px;
    padding-right: 0px;
    padding-left: 8px;
    color: black;
}

#headingCollapse14:before {
    position: absolute;
    top: 48%;
    right: 20px;
    margin-top: -8px;
    font-family: 'feather';
    content: "\e843";
    transition: all 300ms linear 0s;
}
.collapse-icon [data-toggle="collapse"]:before {
    position: absolute;
    top: 48%;
    right: 20px;
    margin-top: -8px;
    font-family: 'feather';
    content: "\e842";
    transition: all 300ms linear 0s;
}
.collapse-icon [data-toggle="collapse"]:after {
    position: absolute;
    top: 48%;
    right: 20px;
    margin-top: -8px;
    font-family: 'feather';
    content: "\e845";
    transition: all 300ms linear 0s;
}
 .collapsed{
    border-bottom-left-radius: 0px !important;border-bottom-right-radius: 0px !important;
}
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
.nav.nav-tabs.nav-iconfall .nav-item{
    border: 2px solid black;
    border-radius: 7px;
    padding: 2px;
    width: 87px;
    margin-right: 0px;
    margin-left: 3px;
}
.nav.nav-tabs.nav-iconfall .nav-item a.nav-link {
    display: contents;
}
.nav.nav-tabs.nav-justified {
    width: 73%;
}
.nav.nav-tabs .nav-item .nav-link {
    padding: 0.5rem 0.7rem;
    display: inline-flex;
    border: 2px solid black;
    border-radius: 7px;
    color: black;
}
.nav.nav-tabs .nav-item .nav-link.active{
    padding: 0.5rem 0.7rem;
    display: inline-flex;
    border: 2px solid #ff6600;
    border-radius: 7px;
    color: #ff6600;
}
.nav.nav-tabs .nav-item .nav-link:hover:not(.active) {
    border-color: black;
}
.nav.nav-tabs .nav-item .nav-link.active{
    background: transparent;

}
.nav.nav-tabs .nav-item{
    margin-right: 7px
}
.nav .nav-item .nav-link {

    padding: 3px 16px !important;
}
#headingCollapse1:before {
    position: absolute;
    top: 48%;
    right: 20px;
    margin-top: -8px;
    font-family: 'feather';
    content: "\e845"!important;
    transition: all 300ms linear 0s;
}
</style>
@endsection

@section('header')
<div class="content-header bg-white">
    <div class="row" style="border-bottom: 3px solid #949494;">
        <div class="col-xl-12 col-12 bg-white headerbg" style="padding-left: 32px;padding-top: 13px;">
            <h3 class="h3">Contact</h3>
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
                    <li class="breadcrumb-item"> <a style="color: black" href="{{route('vender.service.provider.trading.unit.app.data',$trading_unit['id'])}}">App Data</a>
                    </li>
                    <li class="breadcrumb-item"> Contacts
                    </li>
                    <li class="breadcrumb-item"> {{$contact['contact_no']}}
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
    <div class="col-md-9" id="contens"   style="border-radius: 6px;margin-bottom: 10px;padding-bottom: 10px;margin-top: 0px;">
        <div class="row ">
            <a href="{{route('vender.service.provider.trading.unit.view',$trading_unit['id'])}}"><h4 class="h3"  style="border-radius: 7px; border: 2px solid black; padding: 10px; font-weight: 600; font-size: 17px; color: black;margin-left: 15px;"> Overview</h2></a>
                <a href="{{route('vender.service.provider.trading.unit.app.setting',$trading_unit['id'])}}"> <h4 class="h3" style="border-radius: 7px; border: 2px solid black; padding: 10px; font-weight: 600; font-size: 17px; color: black;margin-left: 15px;"> App settings</h2></a>
                 <a href="{{route('vender.service.provider.trading.unit.app.data',$trading_unit['id'])}}"> <h4 class="h3" style="border-radius: 7px; border: 2px solid #ff6600; padding: 10px; font-weight: 600; font-size: 17px; color: #ff6600;margin-left: 15px;"> App data </h2> </a>
                     <a href="{{route('vender.service.provider.trading.unit.hub.setting',$trading_unit['id'])}}"> <h4 class="h3" style="border-radius: 7px; border: 2px solid black; padding: 10px; font-weight: 600; font-size: 17px; color: black;margin-left: 15px;"> Hub profile settings </h2> </a>


          </div>

          <div class="card default-collapse collapse-icon accordion-icon-rotate" style="box-shadow: none;margin-top: -6px;">
            <a id="headingCollapse1" href="{{redirect()->back()->getTargetUrl()}}" class="card-header info mt-2" style="border: 2px solid black;border-radius: 7px !important;padding: 1.2rem 1rem;color: black !important;" data-toggle="" href="#collaptr_businesss_info" aria-expanded="false" >
               <div class="card-title lead collapsed">Contact</div>
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
                <div class="row">
                    <div class="col-md-12">
                        <ul class="nav nav-tabs " style="border: none;margin:10px">
                            <li class="nav-item">
                                <a class="nav-link active" id="detail-tab1" data-toggle="tab" href="#detail" aria-controls="detail" aria-expanded="true">Details</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="contact-tab1" data-toggle="tab" href="#contact" aria-controls="contact" aria-expanded="true">Linked Vehicles</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="quote-tab1" data-toggle="tab" href="#quote" aria-controls="quote" aria-expanded="true">Quote</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="booking-tab1" data-toggle="tab" href="#booking" aria-controls="booking" aria-expanded="true">Booking</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="jobs-tab1" data-toggle="tab" href="#jobs" aria-controls="jobs" aria-expanded="true">Jobs</a>
                            </li>

                        </ul>
                        <div class="tab-content px-1 pt-1">
                                                <div role="tabpanel" class="tab-pane active" id="detail" aria-labelledby="detail-tab1" aria-expanded="true">
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class="col-sm-5">
                                                                    <h6 class="mb-0">Contact No</h6>
                                                                </div>
                                                                <div class="col-sm-7 text-secondary">
                                                                  {{$contact['contact_no']??'N/A'}}
                                                                </div>
                                                            </div>
                                                           <hr>
                                                            <div class="row">
                                                                <div class="col-sm-5">
                                                                    <h6 class="mb-0">First Name</h6>
                                                                </div>
                                                                <div class="col-sm-7 text-secondary">
                                                                  {{$contact['name']??'N/A'}}
                                                                </div>
                                                            </div>
                                                           <hr>
                                                            <div class="row">
                                                                <div class="col-sm-5">
                                                                    <h6 class="mb-0">Middle Name</h6>
                                                                </div>
                                                                <div class="col-sm-7 text-secondary">
                                                                 {{$contact['middle_name']??'N/A'}}
                                                                </div>
                                                            </div>
                                                           <hr>
                                                            <div class="row">
                                                                <div class="col-sm-5">
                                                                    <h6 class="mb-0">Last Name</h6>
                                                                </div>
                                                                <div class="col-sm-7 text-secondary">
                                                                  {{$contact['last_name']??'N/A'}}
                                                                </div>
                                                            </div>
                                                           <hr>
                                                            <div class="row">
                                                                <div class="col-sm-5">
                                                                    <h6 class="mb-0">Company Name</h6>
                                                                </div>
                                                                <div class="col-sm-7 text-secondary">
                                                                  {{$contact['company']??'N/A'}}
                                                                </div>
                                                            </div>
                                                           <hr>
                                                            <div class="row">
                                                                <div class="col-sm-5">
                                                                    <h6 class="mb-0">Mobile</h6>
                                                                </div>
                                                                <div class="col-sm-7 text-secondary">
                                                                  {{$contact['mobile_no']??'N/A'}}
                                                                </div>
                                                            </div>
                                                           <hr>
                                                            <div class="row">
                                                                <div class="col-sm-5">
                                                                    <h6 class="mb-0">Landline</h6>
                                                                </div>
                                                                <div class="col-sm-7 text-secondary">
                                                                  {{$contact['landline_no']??'N/A'}}
                                                                </div>
                                                            </div>
                                                           <hr>
                                                            <div class="row">
                                                                <div class="col-sm-5">
                                                                    <h6 class="mb-0">Email</h6>
                                                                </div>
                                                                <div class="col-sm-7 text-secondary">
                                                                  {{$contact['email']??'N/A'}}
                                                                </div>
                                                            </div>
                                                           <hr>

                                                            <div class="row">
                                                                <div class="col-sm-5">
                                                                    <h6 class="mb-0">Hub link id</h6>
                                                                </div>
                                                                <div class="col-sm-7 text-secondary">
                                                                  {{$contact['hub_id']??'N/A'}}
                                                                </div>
                                                            </div>
                                                           <hr>

                                                           <div class="row">
                                                            <div class="col-sm-5">
                                                                <h6 class="mb-0">Address line one</h6>
                                                            </div>
                                                            <div class="col-sm-7 text-secondary">
                                                              {{$contact['address']??'N/A'}}
                                                            </div>
                                                            </div>

                                                            <hr>
                                                           <div class="row">
                                                            <div class="col-sm-5">
                                                                <h6 class="mb-0">Address line Two</h6>
                                                            </div>
                                                            <div class="col-sm-7 text-secondary">
                                                              {{$contact['address_line2']??'N/A'}}
                                                            </div>
                                                            </div>

                                                            <hr>
                                                           <div class="row">
                                                            <div class="col-sm-5">
                                                                <h6 class="mb-0">Address line Three</h6>
                                                            </div>
                                                            <div class="col-sm-7 text-secondary">
                                                              {{$contact['address_line3']??'N/A'}}
                                                            </div>
                                                            </div>

                                                            <hr>
                                                           <div class="row">
                                                            <div class="col-sm-5">
                                                                <h6 class="mb-0">Address line Four</h6>
                                                            </div>
                                                            <div class="col-sm-7 text-secondary">
                                                              {{$contact['address_line4']??'N/A'}}
                                                            </div>
                                                            </div>

                                                            <hr>
                                                           <div class="row">
                                                            <div class="col-sm-5">
                                                                <h6 class="mb-0">City</h6>
                                                            </div>
                                                            <div class="col-sm-7 text-secondary">
                                                              {{$contact['city']??'N/A'}}
                                                            </div>
                                                            </div>

                                                            <hr>
                                                           <div class="row">
                                                            <div class="col-sm-5">
                                                                <h6 class="mb-0">Postcode</h6>
                                                            </div>
                                                            <div class="col-sm-7 text-secondary">
                                                              {{$contact['postal_code']??'N/A'}}
                                                            </div>
                                                            </div>

                                                            <hr>







                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="contact" role="tabpanel" aria-labelledby="contact-tab1" aria-expanded="false">
                                                    <div class="row mt-2 mb-4">
                                                        <div class="col-md-12">
                                                            <div class="table-responsive">
                                                                <table class="table table-striped table-bordered zero-configuration">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>ID</th>
                                                                            <th>Vehicle No</th>
                                                                            <th>VRM</th>
                                                                            <th>Vin Number</th>
                                                                            <th>Make & Model</th>

                                                                            <th>Action</th>

                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>

                                                                        {{-- @foreach ($users as $user)

                                                                        @endforeach --}}


                                                                       @foreach ($contact['vehicles'] as $vehicle)
                                                                       <tr>
                                                                           <td>{{$loop->iteration}}</td>
                                                                           <td>{{$vehicle['vehicle_no']}}</td>
                                                                           <td>{{$vehicle['vrm']}}</td>
                                                                           <td>{{$vehicle['vin_number']}}</td>
                                                                           <td>{{$vehicle['vehicle_make']['name']}} {{$vehicle['vehicle_model']['name']}}  </td>


                                                                           <td> <a href=""><i class="ft-eye"></i></a></td>
                                                                       </tr>

                                                                       @endforeach



                                                                    </tbody>
                                                                    <tfoot>
                                                                        <tr>
                                                                           <th>ID</th>
                                                                           <th>Vehicle No</th>
                                                                            <th>VRM</th>
                                                                            <th>Vin Number</th>
                                                                            <th>Make & Model</th>

                                                                            <th>Action</th>
                                                                        </tr>
                                                                    </tfoot>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="quote" role="tabpanel" aria-labelledby="quote-tab1" aria-expanded="false">
                                                    <div class="row mt-2 mb-4">
                                                        <div class="col-md-12">
                                                            <div class="table-responsive">
                                                                <table class="table table-striped table-bordered zero-configuration">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>ID</th>
                                                                            <th>Quotation No</th>
                                                                            <th>Vehicle</th>
                                                                            <th>Conatct</th>
                                                                            <th>Service Type</th>
                                                                            <th>Status</th>

                                                                            <th>Action</th>

                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>

                                                                        {{-- @foreach ($users as $user)

                                                                        @endforeach --}}


                                                                       @foreach ($contact['quotes'] as $quote)
                                                                       <tr>
                                                                           <td>{{$loop->iteration}}</td>
                                                                           <td>{{$quote['quotation_no']}}</td>
                                                                           <td>
                                                                               {{$quote['vehicle']['vehicle_no']}} <br>
                                                                               {{$quote['vehicle']['vrm']}} <br>
                                                                               {{$quote['vehicle']['vehicle_make']['name']}}  {{$quote['vehicle']['vehicle_model']['name']}}

                                                                              </td>
                                                                           <td>{{$quote['contact_detail']['contact_no']}} <br>  {{$quote['contact_detail']['name']}} {{$quote['contact_detail']['last_name']}}
                                                                               <br> {{$quote['contact_detail']['mobile_no']}}
                                                                              </td>
                                                                           <td> {{$quote['service_type']}} </td>
                                                                           <td> {{$quote['status']}} </td>


                                                                           <td> <a href=""><i class="ft-eye"></i></a></td>
                                                                       </tr>

                                                                       @endforeach



                                                                    </tbody>
                                                                    <tfoot>
                                                                        <tr>
                                                                           <th>ID</th>
                                                                            <th>Quotation No</th>
                                                                            <th>Vehicle</th>
                                                                            <th>Conatct</th>
                                                                            <th>Service Type</th>
                                                                            <th>Status</th>

                                                                            <th>Action</th>
                                                                        </tr>
                                                                    </tfoot>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="booking" role="tabpanel" aria-labelledby="booking-tab1" aria-expanded="false">
                                                    <div class="row mt-2 mb-4">
                                                        <div class="col-md-12">
                                                            <div class="table-responsive">
                                                                <table class="table table-striped table-bordered zero-configuration">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>ID</th>
                                                                            <th>Booking No</th>
                                                                            <th>Vehicle</th>
                                                                            <th>Conatct</th>
                                                                            <th>Service Type</th>
                                                                            <th>Status</th>

                                                                            <th>Action</th>

                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>

                                                                        {{-- @foreach ($users as $user)

                                                                        @endforeach --}}


                                                                       @foreach ($contact['bookings'] as $booking)
                                                                       <tr>
                                                                           <td>{{$loop->iteration}}</td>
                                                                           <td>{{$booking['booking_no']}}</td>
                                                                           <td>
                                                                               {{$booking['vehicle']['vehicle_no']}} <br>
                                                                               {{$booking['vehicle']['vrm']}} <br>
                                                                               {{$booking['vehicle']['vehicle_make']['name']}}  {{$booking['vehicle']['vehicle_model']['name']}}

                                                                              </td>
                                                                           <td>{{$booking['contact_detail']['contact_no']}} <br>  {{$booking['contact_detail']['name']}} {{$booking['contact_detail']['last_name']}}
                                                                               <br> {{$booking['contact_detail']['mobile_no']}}
                                                                              </td>
                                                                           <td> {{$booking['service_type']}} </td>
                                                                           <td> {{$booking['status']}} </td>


                                                                           <td> <a href=""><i class="ft-eye"></i></a></td>
                                                                       </tr>

                                                                       @endforeach



                                                                    </tbody>
                                                                    <tfoot>
                                                                        <tr>
                                                                           <th>ID</th>
                                                                            <th>Booking No</th>
                                                                            <th>Vehicle</th>
                                                                            <th>Conatct</th>
                                                                            <th>Service Type</th>
                                                                            <th>Status</th>

                                                                            <th>Action</th>
                                                                        </tr>
                                                                    </tfoot>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="jobs" role="tabpanel" aria-labelledby="jobs-tab1" aria-expanded="false">
                                                    <div class="row mt-2 mb-4">
                                                        <div class="col-md-12">
                                                            <div class="table-responsive">
                                                                <table class="table table-striped table-bordered zero-configuration">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>ID</th>
                                                                            <th>Job No</th>
                                                                            <th>Vehicle</th>
                                                                            <th>Conatct</th>
                                                                            <th>Service Type</th>
                                                                            <th>Status</th>

                                                                            <th>Action</th>

                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>

                                                                        {{-- @foreach ($users as $user)

                                                                        @endforeach --}}


                                                                       @foreach ($contact['jobs'] as $jobs)
                                                                       <tr>
                                                                           <td>{{$loop->iteration}}</td>
                                                                           <td>{{$jobs['job_no']}}</td>
                                                                           <td>
                                                                               {{$jobs['vehicle']['vehicle_no']}} <br>
                                                                               {{$jobs['vehicle']['vrm']}} <br>
                                                                               {{$jobs['vehicle']['vehicle_make']['name']}}  {{$jobs['vehicle']['vehicle_model']['name']}}

                                                                              </td>
                                                                           <td>{{$jobs['contact_detail']['contact_no']}} <br>  {{$jobs['contact_detail']['name']}} {{$jobs['contact_detail']['last_name']}}
                                                                               <br> {{$jobs['contact_detail']['mobile_no']}}
                                                                              </td>
                                                                           <td> {{$jobs['service_type']}} </td>
                                                                           <td>
                                                                               @if ($jobs['status']=="ARRIVED")

                                                                               IN QUEUE
                                                                               @else

                                                                               {{$jobs['status']}}

                                                                               @endif

                                                                                </td>


                                                                           <td> <a href=""><i class="ft-eye"></i></a></td>
                                                                       </tr>

                                                                       @endforeach



                                                                    </tbody>
                                                                    <tfoot>
                                                                        <tr>
                                                                           <th>ID</th>
                                                                            <th>Job No</th>
                                                                            <th>Vehicle</th>
                                                                            <th>Conatct</th>
                                                                            <th>Service Type</th>
                                                                            <th>Status</th>

                                                                            <th>Action</th>
                                                                        </tr>
                                                                    </tfoot>
                                                                </table>
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








    </div>
</div>


@endsection

@section('script')
<script src="/modules/admin/app-assets/vendors/js/tables/datatable/datatables.min.js"></script>
{{-- <script src="/modules/admin/app-assets/js/scripts/tables/datatables/datatable-basic.js"></script> --}}


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

<script>
    $(document).ready(function() {
    var contentHeight = $('#contens').height();
    $('#contens').height(contentHeight+50);
});
</script>

@endsection
