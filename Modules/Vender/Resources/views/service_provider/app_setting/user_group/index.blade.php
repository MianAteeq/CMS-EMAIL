@extends('vender::layouts.master')
@section('css_custom')

<style>
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
</style>
@endsection

@section('header')
<div class="content-header bg-white">
    <div class="row" style="border-bottom: 3px solid #949494;">
        <div class="col-xl-12 col-12 bg-white headerbg" style="padding-left: 32px;padding-top: 13px;">
            <h3 class="h3">App settings</h3>
            <div class="breadcrumb-wrapper col-12">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a>Products</a>
                    </li>

                    <li class="breadcrumb-item">Business manager
                    </li>
                    <li class="breadcrumb-item">App settings
                    </li>
                    <li class="breadcrumb-item">User groups
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
        font-size: 17px; "> <img src="/business_manager.png" style="width: 22px;margin-top: -5px;"> Business Manager</h2>

    </div>
    <div class="col-md-9" id="contens" style="border-radius: 6px;margin-bottom: 10px;padding-bottom: 10px;margin-top: 0px;">
        <div class="row ">
            <h4 class="h3" style="border-radius: 7px; border: 2px solid #ff6600; padding: 10px; font-weight: 600; font-size: 17px; color: #ff6600;margin-left:15px"> App settings</h2>


        </div>
        <div class="card default-collapse collapse-icon accordion-icon-rotate" style="box-shadow: none;">




            <a id="headingCollapse1" href="{{redirect()->back()->getTargetUrl()}}"  class="card-header info mt-2" style="border: 2px solid black;border-radius: 7px !important;padding: 1.2rem 1rem;color: black !important;margin-top: 1px !important;border-bottom-left-radius: 0px !important; border-bottom-right-radius: 0px !important;"  data-toggle=""  aria-expanded="false" aria-controls="collapse14" >
                <div class="card-title lead collapsed">User groups</div>
            </a>
            <div id="collapse14"  role="tabpanel" aria-labelledby="headingCollapse14" class="collapse show" aria-expanded="false" style="border-left: 2px solid black; margin-top: -4px; border-right: 2px solid black; border-bottom: 2px solid black; border-bottom-left-radius: 6px; border-bottom-right-radius: 6px;">
                <div class="card-content">
                    <div class="card-body" style="padding-left: 0px;padding-right: 0px;">
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
                                                <th>ID</th>
                                                <th>User Group Name</th>
                                                <th>User Group Type</th>
                                                <th>Action</th>

                                            </tr>
                                        </thead>
                                        <tbody>



                                           @foreach ($roles as $role)
                                           <tr>
                                               <td>{{$loop->iteration+1}}</td>
                                               <td>{{str_replace("SVP_".auth()->user()->id,"",$role['name'])}}</td>
                                               <td>{{$role['group_type']}}</td>

                                               <td><a href="{{route('vender.service.provider.user.group.edit',$role['id'])}}"><i class="ft-edit"></i></a> <a href="{{route('vender.service.provider.user.group.view',$role['id'])}}"><i class="ft-eye"></i></a></td>
                                           </tr>

                                           @endforeach



                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>ID</th>
                                                <th>User Group Name</th>
                                                <th>User Group Type</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="footers">

                            <a href="{{route('vender.service.provider.user.group.add')}}">  <button type="button" class="btn btn-dark round btn-min-width mr-1 mb-1"
                               style="float: right;">Add</button></a>

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

    @endsection
