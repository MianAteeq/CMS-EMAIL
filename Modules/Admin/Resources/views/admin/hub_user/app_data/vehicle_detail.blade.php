@extends('admin::admin.layout.app')
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
</style>
@endsection

@section('header')
<div class="content-header bg-white">
    <div class="row" style="border-bottom: 3px solid #949494;">
        <div class="col-xl-12 col-12 bg-white headerbg" style="padding-left: 32px;padding-top: 13px;">
            <h3 class="h3">Vehicles</h3>
            <div class="breadcrumb-wrapper col-12">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a>Consumers</a>
                    </li>

                    <li class="breadcrumb-item">Hub User
                    </li>
                    <li class="breadcrumb-item"> Vehicles
                    </li>
                    <li class="breadcrumb-item"> Vehicles Detail
                    </li>
                    <li class="breadcrumb-item"> {{$contact['vehicle_no']}}
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
        font-size: 17px; "> <img src="/service_provider.png" style="width: 22px;margin-top: -5px;margin-right: 3px;">Vehicle Detail</h2>

    </div>
    <div class="col-md-9"  style="border-radius: 6px;margin-bottom: 10px;padding-bottom: 10px;margin-top: 0px;">
        <div class="row ">
            <a href="{{route('admin.hub.user.view',$user['id'])}}">   <h4 class="h3" style="border-radius: 7px; border: 2px solid black; padding: 10px; font-weight: 600; font-size: 17px; color: black;margin-left: 15px;"> Details</h2></a>
           <a href="{{route('admin.hub.user.app.data',$user['id'])}}"> <h4 class="h3" style="border-radius: 7px; border: 2px solid #ff6600; padding: 10px; font-weight: 600; font-size: 17px; color: #ff6600;margin-left: 15px;"> App Data</h2></a>


        </div>

        <div  style="border: 2px solid black;border-radius: 6px;margin-bottom: 10px;padding-left: 0;
        padding-right: 0;height:525px">
            <div class="row" style="margin-right: 0;margin-left: 0;">
                <div class="col-md-12" style="border-bottom: 2px solid black;">
                 <h3 style="font-size: 20px; padding: 10px; margin-left: -11px; color: black;padding-bottom: 0px;">Vehicle</h3>
                </div>


             </div>
            <div class="row">
                <div class="col-md-12">
                    <ul class="nav nav-tabs " style="border: none;margin:10px">
                        <li class="nav-item">
                            <a class="nav-link active" id="detail-tab1" data-toggle="tab" href="#detail" aria-controls="detail" aria-expanded="true">Details</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="contact-tab1" data-toggle="tab" href="#contact" aria-controls="contact" aria-expanded="true">Linked Conatct</a>
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
                                                                <h6 class="mb-0">Vehicle No</h6>
                                                            </div>
                                                            <div class="col-sm-7 text-secondary">
                                                              {{$contact['vehicle_no']??'N/A'}}
                                                            </div>
                                                        </div>
                                                       <hr>
                                                        <div class="row">
                                                            <div class="col-sm-5">
                                                                <h6 class="mb-0">VRM</h6>
                                                            </div>
                                                            <div class="col-sm-7 text-secondary">
                                                              {{$contact['vrm']??'N/A'}}
                                                            </div>
                                                        </div>
                                                       <hr>
                                                       <div class="row">
                                                        <div class="col-sm-5">
                                                            <h6 class="mb-0">Vin Number</h6>
                                                        </div>
                                                        <div class="col-sm-7 text-secondary">
                                                          {{$contact['vin_number']??'N/A'}}
                                                        </div>
                                                        </div>

                                                        <hr>
                                                       <div class="row">
                                                        <div class="col-sm-5">
                                                            <h6 class="mb-0">Make</h6>
                                                        </div>
                                                        <div class="col-sm-7 text-secondary">
                                                          {{$contact['vehicle_make']['name']??'N/A'}}
                                                        </div>
                                                        </div>

                                                        <hr>
                                                       <div class="row">
                                                        <div class="col-sm-5">
                                                            <h6 class="mb-0">Vehicle Model</h6>
                                                        </div>
                                                        <div class="col-sm-7 text-secondary">
                                                            {{$contact['vehicle_model']['name']??'N/A'}}
                                                        </div>
                                                        </div>

                                                        <hr>
                                                       <div class="row">
                                                        <div class="col-sm-5">
                                                            <h6 class="mb-0">Year</h6>
                                                        </div>
                                                        <div class="col-sm-7 text-secondary">
                                                          {{$contact['year']??'N/A'}}
                                                        </div>
                                                        </div>








                                                    </div>

                                                </div>
                                            </div>
                                            <div class="tab-pane" id="contact" role="tabpanel" aria-labelledby="contact-tab1" aria-expanded="false">
                                                <div class="card-content">
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-sm-5">
                                                                <h6 class="mb-0">Contact No</h6>
                                                            </div>
                                                            <div class="col-sm-7 text-secondary">
                                                              {{$contact['contact']['contact_no']??'N/A'}}
                                                            </div>
                                                        </div>
                                                       <hr>
                                                        <div class="row">
                                                            <div class="col-sm-5">
                                                                <h6 class="mb-0">Name</h6>
                                                            </div>
                                                            <div class="col-sm-7 text-secondary">
                                                              {{$contact['contact']['name']??'N/A'}} {{$contact['last_name']??'N/A'}}
                                                            </div>
                                                        </div>
                                                       <hr>
                                                       <div class="row">
                                                        <div class="col-sm-5">
                                                            <h6 class="mb-0">Address line one</h6>
                                                        </div>
                                                        <div class="col-sm-7 text-secondary">
                                                          {{$contact['contact']['address']??'N/A'}}
                                                        </div>
                                                        </div>

                                                        <hr>
                                                       <div class="row">
                                                        <div class="col-sm-5">
                                                            <h6 class="mb-0">Address line Two</h6>
                                                        </div>
                                                        <div class="col-sm-7 text-secondary">
                                                          {{$contact['contact']['address_line2']??'N/A'}}
                                                        </div>
                                                        </div>

                                                        <hr>
                                                       <div class="row">
                                                        <div class="col-sm-5">
                                                            <h6 class="mb-0">Address line Three</h6>
                                                        </div>
                                                        <div class="col-sm-7 text-secondary">
                                                          {{$contact['contact']['address_line3']??'N/A'}}
                                                        </div>
                                                        </div>

                                                        <hr>
                                                       <div class="row">
                                                        <div class="col-sm-5">
                                                            <h6 class="mb-0">Address line Four</h6>
                                                        </div>
                                                        <div class="col-sm-7 text-secondary">
                                                          {{$contact['contact']['address_line4']??'N/A'}}
                                                        </div>
                                                        </div>

                                                        <hr>
                                                       <div class="row">
                                                        <div class="col-sm-5">
                                                            <h6 class="mb-0">City</h6>
                                                        </div>
                                                        <div class="col-sm-7 text-secondary">
                                                          {{$contact['contact']['city']??'N/A'}}
                                                        </div>
                                                        </div>

                                                        <hr>
                                                       <div class="row">
                                                        <div class="col-sm-5">
                                                            <h6 class="mb-0">Postcode</h6>
                                                        </div>
                                                        <div class="col-sm-7 text-secondary">
                                                          {{$contact['contact']['postal_code']??'N/A'}}
                                                        </div>
                                                        </div>

                                                        <hr>






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
