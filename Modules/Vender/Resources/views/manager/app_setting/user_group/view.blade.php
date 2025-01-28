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
.badge-success {
    background-color: #ff6600!important;
}
</style>
@endsection

@section('header')
<div class="content-header bg-white" >
    <div  class="row" style="border-bottom: 3px solid #949494;">
        <div class="col-xl-12 col-12 bg-white headerbg" style="padding-left: 32px;padding-top: 13px;">
           <h3 class="h3">User group</h3>
           <div class="breadcrumb-wrapper col-12">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a>Products</a>
                </li>


                <li class="breadcrumb-item"><a style="color: black" href="{{route('vender.app.setting')}}">Business Manager</a>
                </li>
                <li class="breadcrumb-item"><a style="color: black" href="{{route('vender.app.setting')}}">App settings</a>
                </li>
                <li class="breadcrumb-item"><a style="color: black" href="{{route('vender.user.group')}}"> User groups</a>
                </li>
                <li class="breadcrumb-item"> {{$role['name']}}
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
        <img src="/group.png" style="width: 22px;margin-top: -5px;" > {{$role['name']}}
        </h4>

        </div>
    </div>
    <div class="col-md-9" id="contens" style="border: 2px solid black;border-radius: 6px;margin-bottom: 10px;padding-left: 0;padding-right: 0;">
        <div class="row" style="margin-right: 0;margin-left: 0;">
            <div class="col-md-12" style="border-bottom: 2px solid black;">
             <h3 style="font-size: 20px; padding: 10px; margin-left: -11px; color: black;padding-bottom: 0px;">User group information</h3>
            </div>
            <div class="col-md-12">
                <div id="collaptr_businesss_info" role="tabpanel" aria-labelledby="headingCollapsebusinesss_info"
                style=""
                class="collapse show" aria-expanded="false">
                    <div class="card-content">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-5">
                                    <h6 class="mb-0">Name</h6>
                                </div>
                                <div class="col-sm-7 text-secondary">
                                    {{str_replace("SVP_B_".$vender_id,"",$role['name'])}}
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-5">
                                    <h6 class="mb-0">User group type </h6>
                                </div>
                                <div class="col-sm-7 text-secondary">
                                   {{$role['group_type']}}
                                </div>
                            </div>
                            <hr>
                            <div class="row ">
                                <div class="col-sm-5">
                                    <h6 class="mb-0">Permission </h6>
                                </div>
                                <div class="col-sm-7 text-secondary">

                                </div>
                            </div>

                            @foreach ($permissions as $key =>$p)
                            <div class="row mt-1">
                                <div class="col-sm-5">
                                    <h6 class="mb-0">{{$key}} </h6>
                                </div>
                                <div class="col-sm-7 text-secondary">
                                    @foreach ($permissions[$key] as $per)
                                    <span class="badge badge-success">{{$per['name']}}</span>

                                    @endforeach

                                </div>
                            </div>
                            @endforeach









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
