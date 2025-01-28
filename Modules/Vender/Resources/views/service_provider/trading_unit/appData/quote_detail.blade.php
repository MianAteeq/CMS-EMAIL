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
            <h3 class="h3">Quote</h3>
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
                    <li class="breadcrumb-item"> <a style="color: black" href="{{redirect()->back()->getTargetUrl()}}">Quotes</a>
                    </li>
                    <li class="breadcrumb-item"> {{$contact['quotation_no']}}
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
               <div class="card-title lead collapsed">Quote</div>
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
                                <a class="nav-link" id="contact-tab1" data-toggle="tab" href="#contact" aria-controls="contact" aria-expanded="true">Job Request</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="quote-tab1" data-toggle="tab" href="#quote" aria-controls="quote" aria-expanded="true">Job Item</a>
                            </li>


                        </ul>
                        <div class="tab-content px-1 pt-1">
                                                <div role="tabpanel" class="tab-pane active" id="detail" aria-labelledby="detail-tab1" aria-expanded="true">
                                                    <div class="card-content">
                                                        <div class="card-body">
                                                            <div class="row">
                                                                <div class="col-sm-5">
                                                                    <h6 class="mb-0">Quotataion No</h6>
                                                                </div>
                                                                <div class="col-sm-7 text-secondary">
                                                                  {{$contact['quotation_no']??'N/A'}}
                                                                </div>
                                                            </div>
                                                           <hr>
                                                            <div class="row">
                                                                <div class="col-sm-5">
                                                                    <h6 class="mb-0">Contact</h6>
                                                                </div>
                                                                <div class="col-sm-7 text-secondary">
                                                                    {{$contact['contact_detail']['contact_no']}} <br>  {{$contact['contact_detail']['name']}} {{$contact['contact_detail']['last_name']}}
                                                                    <br> {{$contact['contact_detail']['mobile_no']}}
                                                                </div>
                                                            </div>
                                                           <hr>
                                                            <div class="row">
                                                                <div class="col-sm-5">
                                                                    <h6 class="mb-0">Vehicle</h6>
                                                                </div>
                                                                <div class="col-sm-7 text-secondary">
                                                                    {{$contact['vehicle']['vehicle_no']}} <br>
                                                                    {{$contact['vehicle']['vrm']}} <br>
                                                                    {{$contact['vehicle']['vehicle_make']['name']}}  {{$contact['vehicle']['vehicle_model']['name']}}
                                                                </div>
                                                            </div>
                                                           <hr>
                                                           <div class="row">
                                                            <div class="col-sm-5">
                                                                <h6 class="mb-0">Subtotal</h6>
                                                            </div>
                                                            <div class="col-sm-7 text-secondary">
                                                              {{$contact['sub_total']??'N/A'}}
                                                            </div>
                                                            </div>

                                                            <hr>
                                                           <div class="row">
                                                            <div class="col-sm-5">
                                                                <h6 class="mb-0">VAT</h6>
                                                            </div>
                                                            <div class="col-sm-7 text-secondary">
                                                              {{$contact['vat']??'N/A'}}
                                                            </div>
                                                            </div>

                                                            <hr>
                                                           <div class="row">
                                                            <div class="col-sm-5">
                                                                <h6 class="mb-0">Total</h6>
                                                            </div>
                                                            <div class="col-sm-7 text-secondary">
                                                              {{$contact['total']??'N/A'}}
                                                            </div>
                                                            </div>







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
                                                                            <th>Job Request No</th>
                                                                            <th>Name</th>
                                                                            <th>Job Type</th>
                                                                            <th>Job Coverage</th>



                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>

                                                                        {{-- @foreach ($users as $user)

                                                                        @endforeach --}}


                                                                       @foreach ($contact['job_requests'] as $job_request)
                                                                       <tr>
                                                                           <td>{{$loop->iteration}}</td>
                                                                           <td>{{$job_request['job_request_id']}}</td>
                                                                           <td>{{$job_request['name']}}</td>
                                                                           <td>@foreach ($job_request['job_types'] as $type)
                                                                            <li>{{$type['job_type']['name']}}</li>

                                                                           @endforeach</td>
                                                                           <td>{{$job_request['price_type']['name']??''}}</td>

                                                                       </tr>

                                                                       @endforeach



                                                                    </tbody>
                                                                    <tfoot>
                                                                        <tr>
                                                                            <th>ID</th>
                                                                            <th>Job Request No</th>
                                                                            <th>Name</th>
                                                                            <th>Job Type</th>
                                                                            <th>Job Coverage</th>
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
                                                                            <th>Job Item No</th>
                                                                            <th>Product</th>
                                                                            <th>Job Type</th>
                                                                            <th>Job Coverage</th>
                                                                            <th>Qty</th>
                                                                            <th>Unit Price</th>
                                                                            <th>Total Price</th>



                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>

                                                                        {{-- @foreach ($users as $user)

                                                                        @endforeach --}}


                                                                       @foreach ($contact['quotation_item'] as $job_request)
                                                                       <tr>
                                                                           <td>{{$loop->iteration}}</td>
                                                                           <td>{{$job_request['job_item_no']}}</td>
                                                                           <td>{{$job_request['product']}}</td>
                                                                           <td>@foreach ($job_request['job_types'] as $type)
                                                                            <li>{{$type['job_type']['name']}}</li>

                                                                           @endforeach</td>
                                                                           <td>{{$job_request['price_type']['name']??''}}</td>
                                                                           <td>{{$job_request['qty']}}</td>
                                                                           <td>{{$job_request['unit_price']}}</td>
                                                                           <td>{{$job_request['total_price']}}</td>

                                                                       </tr>

                                                                       @endforeach



                                                                    </tbody>
                                                                    <tfoot>
                                                                        <tr>
                                                                            <th>ID</th>
                                                                            <th>Job Item No</th>
                                                                            <th>Product</th>
                                                                            <th>Job Type</th>
                                                                            <th>Job Coverage</th>
                                                                            <th>Qty</th>
                                                                            <th>Unit Price</th>
                                                                            <th>Total Price</th>
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
