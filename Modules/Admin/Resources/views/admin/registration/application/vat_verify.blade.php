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
.btn-primary_2:hover {
    border-color: #ff6600 !important;
    background-color: #ff6600 !important;
    color: #FFF !important;
}
.ac-footer{
    height: 33px;
    border-top: 2px solid black;
    padding-top: 7px;
    margin-right: -21px;
    margin-left: -21px;
    padding-right: 11px;
    margin-top: 13px;
}
.btn{
    padding: 0.5rem 1rem;
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
           <h3 class="h3">Verify VAT</h3>
           <div class="breadcrumb-wrapper col-12">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a>Business</a>
                </li>

                <li class="breadcrumb-item">Registrations
                </li>

                <li class="breadcrumb-item"><a style="color: black" href="{{route('admin.application')}}">Application</a>
                </li>
                <li class="breadcrumb-item"><a style="color: black" href="{{route('admin.application.detail',$user['id'])}}">{{$user['profile']['trading_name']}}</a>
                </li>
                <li class="breadcrumb-item">Verify VAT
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
        <img src="/home.png" style="width: 22px;margin-top: -5px;" > Verify
        </h4>

        </div>
    </div>
    <div class="col-md-9" id="contens" style="border-radius: 6px;margin-bottom: 10px;padding-bottom: 10px;">
        <div class="card default-collapse collapse-icon accordion-icon-rotate" style="box-shadow: none;">




            <a id="headingCollapse1" href="{{redirect()->back()->getTargetUrl()}}" class="card-header info mt-2" style="border: 2px solid black;border-radius: 7px !important;padding: 1.2rem 1rem;color: black !important;" data-toggle="" href="#collaptr_businesss_info" aria-expanded="true" aria-controls="collaptr_businesss_info">
                <div class="card-title lead collapsed">VAT</div>
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
                                <h6 class="mb-0">UK VAT Registered</h6>
                            </div>
                            <div class="col-sm-7 text-secondary">
                               {{$user['profile']['vat_register']}}
                            </div>
                        </div>
                        @if ($user['profile']['vat_register']=="YES")
                        <hr>
                        <div class="row">
                            <div class="col-sm-5">
                                <h6 class="mb-0">UK VAT Number</h6>
                            </div>
                            <div class="col-sm-7 text-secondary">
                               {{$user['profile']['uk_vat_no']}}
                            </div>
                        </div>


                        @endif

                        <hr>
                        <div class="row">
                            <div class="col-sm-5">
                                <h6 class="mb-0">Verification status</h6>
                            </div>

                            <div class="col-sm-7 text-secondary">
                             @if($user['profile']['vat_status']==0)  Pending @elseif ($user['profile']['vat_status']==1) Accepted  @else Decline @endif
                            </div>
                        </div>
                        @if($user['profile']['vat_status']==0)
                        <div class="ac-footer">
                            <a class="btn btn-primary btn-primary_2" style="float: right;"  href="{{route('admin.vat.verify',$user['id'])}}">ACCEPT</a>
                            <a class="btn btn-primary btn-primary_2 mr-2" style="float: right;"  href="{{route('admin.vat.decline',$user['id'])}}">DECLINE</a>

                        </div>
                        @endif




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
