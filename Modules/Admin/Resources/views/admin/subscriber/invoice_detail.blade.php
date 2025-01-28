@extends('admin::admin.layout.app')
@section('css_custom')
<link rel="stylesheet" type="text/css" href="{{ URL::to('modules/admin/app-assets/vendors/css/tables/datatable/datatables.min.css') }}">
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
#headingCollapse1:after {
    position: absolute;
    top: 48%;
    right: 20px;
    margin-top: -8px;
    font-family: 'feather';
    content: "\e845";
    transition: all 300ms linear 0s;
}
#headingCollapse1:before {
    position: absolute;
    top: 48%;
    right: 20px;
    margin-top: -8px;
    font-family: 'feather';
    content: "\e842";
    transition: all 300ms linear 0s;
}
</style>
@endsection
@section('header')
<div class="content-header bg-white" >
    <div  class="row" style="border-bottom: 3px solid #949494;">
        <div class="col-xl-12 col-12 bg-white headerbg" style="padding-left: 32px;padding-top: 13px;">
           <h3 class="h3">Invoice</h3>
           <div class="breadcrumb-wrapper col-12">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a>Business</a>
                </li>
                <li class="breadcrumb-item"><a style="color:black" href="{{route('admin.invoice')}}">Billing
                </a>
                </li>



                <li class="breadcrumb-item">Invoice Detail
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
        <div style="border-radius: 7px;border: 2px solid black;height: 180px ">
            <h4 class="h3" style="font-weight: 600; font-size: 17px;padding: 10px; ">
        <div>
            <div style="float: left; width: 10%;">
                <img src="/Invoice.png" style="width: 22px;margin-top: -5px;" >
            </div>
            <div style="float: left; width: 90%;">
                <span>{{$invoice['number']}}</span>
            </div>



        </div>
        <div style="margin: 30px;margin-top: 30px;font-weight: 500;font-size: 15px;">
            <span class="success">{{ucfirst($invoice['status'])}}</span>
        </div>
            </h4>
            <div class="footers" style="text-align: center;">
                <a href="{{$invoice['pdf']}}">  <button type="button" style="width: 80%;" class="btn btn-dark round btn-min-width mr-1 mb-1"
                    >DOWNLOAD</button></a>



           </div>

        </div>
    </div>

     <div class="col-md-9" id="contens" style="border-radius: 6px;margin-bottom: 10px;padding-left: 0;padding-right: 0;">
        <div class="card default-collapse collapse-icon accordion-icon-rotate" style="box-shadow: none;margin-top: -19px;">



            <a id="headingCollapse1" href="{{redirect()->back()->getTargetUrl()}}" class="card-header info mt-2" style="border: 2px solid black;border-radius: 7px !important;padding: 1.2rem 1rem;color: black !important;" data-toggle="" href="#collaptr_businesss_info" aria-expanded="true" aria-controls="collaptr_businesss_info">
                <div class="card-title lead collapsed">Invoice information</div>
            </a>
            <div id="collaptr_businesss_info" role="tabpanel" aria-labelledby="headingCollapsebusinesss_info"
            style="border-left: 2px solid black;
            margin-top: -4px;
            border-right: 2px solid black;
            border-bottom: 2px solid black;
            border-bottom-left-radius: 6px;
            border-bottom-right-radius: 6px;"
            class="collapse show" aria-expanded="true">
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
                                    <h6 class="mb-0">Subscription Id</h6>
                                </div>
                                <div class="col-sm-7 text-secondary">
                                S-{{sprintf("%04d",$invoice['subscription']['id'])}}
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-5">
                                    <h6 class="mb-0">Product & Plan</h6>
                                </div>
                                <div class="col-sm-7 text-secondary">
                                  Service Provider App {{$invoice['inv_plan']['name']??''}}
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-5">
                                    <h6 class="mb-0">Invoice Date</h6>
                                </div>
                                <div class="col-sm-7 text-secondary">
                                   {{\Carbon\Carbon::parse($invoice['created_at'])->format('d/m/Y')}}
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-5">
                                    <h6 class="mb-0">Invoice Due Date</h6>
                                </div>
                                <div class="col-sm-7 text-secondary">
                                   {{\Carbon\Carbon::parse($invoice['created_at'])->format('d/m/Y')}}
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-5">
                                    <h6 class="mb-0">Status</h6>
                                </div>
                                <div class="col-sm-7 text-secondary">
                                   {{ucfirst($invoice['status'])}}
                                </div>
                            </div>

                            <div class="row mt-2">
                                <div class="col-sm-5">
                                    <h6 class="mb-0"><strong>Total</strong></h6>
                                </div>
                                <div class="col-sm-7 text-secondary">

                                </div>
                            </div>

                            <div class="row mt-2">
                                <div class="col-sm-5">
                                    <h6 class="mb-0">Subtotal Total (inc VAT)</h6>
                                </div>
                                <div class="col-sm-7 text-secondary">
                                    £ {{number_format($invoice['amount_due']/100,2)}}
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-5">
                                    <h6 class="mb-0">Credits</h6>
                                </div>
                                <div class="col-sm-7 text-secondary">
                                    £ 0.00
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-5">
                                    <h6 class="mb-0">Total (inc VAT) </h6>
                                </div>
                                <div class="col-sm-7 text-secondary">
                                    £ {{number_format($invoice['amount_due']/100,2)}}
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-5">
                                    <h6 class="mb-0">Amount Paid </h6>
                                </div>
                                <div class="col-sm-7 text-secondary">
                                    £ {{number_format($invoice['amount_paid']/100,2)}}
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-5">
                                    <h6 class="mb-0">Current Balance </h6>
                                </div>
                                <div class="col-sm-7 text-secondary">
                                    £{{number_format(($invoice['amount_due']-$invoice['amount_paid'])/100,2)}}
                                </div>
                            </div>









                        </div>


                    </div>
                </div>
            </div>
            <a id="headingCollapse14"  class="card-header info mt-2 collapsed" style="border: 2px solid black;border-radius: 7px !important;padding: 1.2rem 1rem;color: black !important;" data-toggle="collapse" href="#total" aria-expanded="false" aria-controls="total" >
                <div class="card-title lead collapsed">Invoice Total</div>
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


                            <div class="row mt-2">
                                <div class="col-sm-5">
                                    <h6 class="mb-0">Subtotal Total (inc VAT)</h6>
                                </div>
                                <div class="col-sm-7 text-secondary">
                                    £ {{number_format($invoice['amount_due']/100,2)}}
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-5">
                                    <h6 class="mb-0">Credits</h6>
                                </div>
                                <div class="col-sm-7 text-secondary">
                                    £ 0.00
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-5">
                                    <h6 class="mb-0">Total (inc VAT) </h6>
                                </div>
                                <div class="col-sm-7 text-secondary">
                                    £ {{number_format($invoice['amount_due']/100,2)}}
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-5">
                                    <h6 class="mb-0">Amount Paid </h6>
                                </div>
                                <div class="col-sm-7 text-secondary">
                                    £ {{number_format($invoice['amount_paid']/100,2)}}
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-5">
                                    <h6 class="mb-0">Current Balance </h6>
                                </div>
                                <div class="col-sm-7 text-secondary">
                                    £{{number_format(($invoice['amount_due']-$invoice['amount_paid'])/100,2)}}
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
<script>
    function delete_this(id) {
        swal({
                title: "Are you sure?",
                text: "But you will still be able to retrieve this file.",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Yes, archive it!",
                cancelButtonText: "No, cancel please!",
                closeOnConfirm: false,
                closeOnCancel: false
            },
            function(isConfirm) {
                if (isConfirm) {
                    window.location.href = "{{ url('admin/accreditation/destroy/')}}/" + id;
                } else {
                    swal("Cancelled", "Your imaginary file is safe :)", "error");
                }
            });
    }
</script>

@endsection
