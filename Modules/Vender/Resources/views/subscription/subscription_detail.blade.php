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




 .collapsed{
    border-bottom-left-radius: 0px !important;border-bottom-right-radius: 0px !important;
}
.footers{
    /* position: absolute; */
    bottom: 0;
    left: 0;
    border-top: 2px solid black;
    padding-top: 10px;
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

.collapse-icon [data-toggle="collapse"]:before {
    position: absolute;
    top: 48%;
    right: 20px;
    margin-top: -8px;
    font-family: 'feather';
    content: "\e842"!important;
    transition: all 300ms linear 0s;
}
.collapse-icon [data-toggle="collapse"]:after {
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
<div class="content-header bg-white" >
    <div  class="row" style="border-bottom: 3px solid #949494;">
        <div class="col-xl-12 col-12 bg-white headerbg" style="padding-left: 32px;padding-top: 13px;">
           <h3 class="h3">Subscription information
        </h3>
           <div class="breadcrumb-wrapper col-12">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a>Billing</a>
                </li>



                <li class="breadcrumb-item">LinkMoto Service Provider App ({{$invoice['plan']['name']}})
                </li>
                <li class="breadcrumb-item">Subscription information
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
        <div style="border-radius: 7px;border: 2px solid black;height: 120px ">
            <h4 class="h3" style="font-weight: 600; font-size: 17px;padding: 10px; ">
        <div>
            <div style="float: left; width: 10%;">
                <img src="/box.png" style="width: 22px;margin-top: -5px;" >
            </div>
            <div style="float: left; width: 90%;">
                <span>LinkMoto Service Provider App ({{$invoice['plan']['name']??''}})</span>
            </div>



        </div>
        <div style="margin: 30px;margin-top: 60px;font-weight: 500;font-size: 15px;">
            <span class="success">Active</span>
        </div>
            </h4>


        </div>
    </div>

     <div class="col-md-9" id="contens" style="border-radius: 6px;margin-bottom: 10px;padding-left: 0;padding-right: 0;">
        <div class="card default-collapse collapse-icon accordion-icon-rotate" style="box-shadow: none;margin-top: -19px;">


            <a id="headingCollapse13"  class="card-header info mt-2 collapsed" style="border: 2px solid black;border-radius: 7px !important;padding: 1.2rem 1rem;color: black !important;" data-toggle="collapse" href="#collaptr_businesss_info" aria-expanded="false" aria-controls="collaptr_businesss_info" >
                <div class="card-title lead collapsed">Subscription information</div>
            </a>
            <div id="collaptr_businesss_info" role="tabpanel" aria-labelledby="headingCollapsebusinesss_info"
            style="border-left: 2px solid black;
            margin-top: -4px;
            border-right: 2px solid black;
            border-bottom: 2px solid black;
            border-bottom-left-radius: 6px;
            border-bottom-right-radius: 6px;"
            class="collapse" aria-expanded="false">
                <div class="card-content">
                    <div class="card-content">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-5">
                                    <h6 class="mb-0">ID</h6>
                                </div>
                                <div class="col-sm-7 text-secondary">
                                   {{$invoice['id']}}
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-5">
                                    <h6 class="mb-0">Subscription type</h6>
                                </div>
                                <div class="col-sm-7 text-secondary">
                                    {{$invoice['plan']['time']??''}} rolling
                                </div>
                            </div>
                            <hr>

                            <div class="row">
                                <div class="col-sm-5">
                                    <h6 class="mb-0">Start Date</h6>
                                </div>
                                <div class="col-sm-7 text-secondary">
                                    {{\Carbon\Carbon::parse($invoice['start_at'])->format('d/m/Y')}}
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-5">
                                    <h6 class="mb-0">End Date</h6>
                                </div>
                                <div class="col-sm-7 text-secondary">
                                    {{\Carbon\Carbon::parse($invoice['end_at'])->format('d/m/Y')}}
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-5">
                                    <h6 class="mb-0">Status</h6>
                                </div>
                                <div class="col-sm-7 text-secondary">
                                   Active
                                </div>
                            </div>
<hr>
                            <div class="row ">
                                <div class="col-sm-5">
                                    <h6 class="mb-0">Product</h6>
                                </div>
                                <div class="col-sm-7 text-secondary">
                                    Service Provider App
                                </div>
                            </div>
                            <hr>
                            <div class="row ">
                                <div class="col-sm-5">
                                    <h6 class="mb-0">Plan</h6>
                                </div>
                                <div class="col-sm-7 text-secondary">
                                    {{$invoice['plan']['name']??''}}
                                </div>
                            </div>










                        </div>


                    </div>
                </div>
            </div>
            <a id="headingCollapse14"  class="card-header info mt-2 collapsed" style="border: 2px solid black;border-radius: 7px !important;padding: 1.2rem 1rem;color: black !important;" data-toggle="collapse" href="#total" aria-expanded="false" aria-controls="total" >
                <div class="card-title lead collapsed">Statements</div>
            </a>
            <div id="total" role="tabpanel" aria-labelledby="headingCollapsebusinesss_info"
            style="border-left: 2px solid black;
            margin-top: -4px;
            border-right: 2px solid black;
            border-bottom: 2px solid black;
            border-bottom-left-radius: 6px;
            border-bottom-right-radius: 6px;"
            class="collapse" aria-expanded="false">
                <div class="card-content">
                    <div class="card-content">
                        <div class="card-body">

                            <div class="row m-0 mt-2">
                                <div class="col-md-11">
                                    <input type="text" class="form-control" id="myInputTextField" style="border: 2px solid black; border-radius: 6px;" placeholder="Search" name="" id="">
                                </div>
                                <div class="col-md-1" style="margin-top: 7px ">
                                    <a href=""> <i class="ft-filter" style="font-size: 30px;color: black;"></i></a>
                                </div>
                            </div>
                            <div class="row mt-2 mb-4">
                                <div class="col-md-12">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered zero-configuration">
                                            <thead>
                                                <tr>
                                                    <th>Date</th>
                                                    <th>Invoice</th>
                                                    <th>Subscription </th>
                                                    <th>Invoice Status</th>
                                                    <th>Invoice Amount Due</th>
                                                    <th>Invoice Amount Paid</th>
                                                    <th>Invoice Balance</th>


                                                </tr>
                                            </thead>
                                            <tbody>

                                                {{-- @foreach ($users as $user)

                                                @endforeach --}}



                                            @foreach ($invoice['invoices'] as $account)
                                               <tr>
                                                   <td>{{\Carbon\Carbon::parse($account['created_at'])->format('d/m/Y')}}</td>
                                                   <td>{{$account['number']}}</td>
                                                   <td>S-{{sprintf("%04d",$account['subscription']['id'])}}</td>
                                                   <td>{{ucfirst($account['status'])}}  </td>
                                                   <td>{{number_format($account['amount_due'],2)}}  </td>
                                                   <td>{{number_format($account['amount_paid'],2)}}  </td>
                                                   <td>{{number_format(($account['amount_paid']-$account['amount_paid']),2)}}  </td>


                                               </tr>

                                               @endforeach



                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>Date</th>
                                                    <th>Invoice</th>
                                                    <th>Subscription </th>
                                                    <th>Invoice Status</th>
                                                    <th>Invoice Amount Due</th>
                                                    <th>Invoice Amount Paid</th>
                                                    <th>Invoice Balance</th>
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
    $('#contens').height(contentHeight);
});
</script>

@endsection
