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
</style>
@endsection

@section('header')
<div class="content-header bg-white" >
    <div  class="row" style="border-bottom: 3px solid #949494;">
        <div class="col-xl-12 col-12 bg-white headerbg" style="padding-left: 32px;padding-top: 13px;">
           <h3 class="h3">Hub user</h3>
           <div class="breadcrumb-wrapper col-12">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a>Consumers</a>
                </li>
                <li class="breadcrumb-item"><a>Registrations</a>
                </li>



                <li class="breadcrumb-item">Hub users
                </li>
                <li class="breadcrumb-item">Details
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
        <div style="border-radius: 7px;border: 2px solid black;height: 380px  ">
            <h4 class="h3" style="font-weight: 600; font-size: 17px;padding: 10px; ">
        <div>
            <div style="float: left; width: 10%;">
                <img src="/user.png" style="width: 22px;margin-top: -5px;" >
            </div>
            <div style="float: left; width: 90%;">
                <span>{{$user['name']}} {{$user['middle_name']}}  {{$user['last_name']}}</span>
            </div>



        </div>
        <div style="margin: 20px;margin-top: 53px;font-weight: 500;font-size: 13px;">
            <span>{{$user['email']}}</span>
        </div>
        <div style="margin: 20px;margin-top: 15px;font-weight: 500;font-size: 13px;">
           @if($user['status']==1)

           <span class="success">Active</span>

           @elseif ($user['status']==3)

           <span class="danger">Suspend</span>

           @else

           <span class="danger">In Active</span>
           @endif
        </div>
        <div style="margin: 20px;margin-top: 15px;font-weight: 500;font-size: 13px;">
            <span >Last sign in:  {{\Carbon\Carbon::parse($user['updated_at'])->format('d/m/Y') }} at  {{\Carbon\Carbon::parse($user['updated_at'])->format('h:i') }}</span>
        </div>
        <div style="margin: 20px;margin-top: 15px;font-weight: 500;font-size: 13px;margin-bottom:0px">
            <span >Created:  {{\Carbon\Carbon::parse($user['created_at'])->format('d/m/Y') }} at  {{\Carbon\Carbon::parse($user['created_at'])->format('h:i') }}</span>
        </div>
        </h4>
        <div class="footers" style="text-align: center;">

            <a href="{{route('admin.hub.user.password',$user['id'])}}">  <button type="button" style="width: 80%;" class="btn btn-dark round btn-min-width mr-1 mb-1"
               >RESET PASSWORD</button></a>

            <a  href="{{route('admin.hub.user.suspend',$user['id'])}}">  <button type="button" style="width: 80%;" class="btn btn-dark round btn-min-width mr-1 mb-1"
               >SUSPEND USER</button></a>
            @if ($user['status']!=1)
            <a href="{{route('admin.hub.user.active',$user['id'])}}">  <button type="button" style="width: 80%;" class="btn btn-dark round btn-min-width mr-1 mb-1"
                >ACTIVATE USER</button></a>
                @else
                <a href="{{route('admin.hub.user.in.active',$user['id'])}}">  <button type="button" style="width: 80%;" class="btn btn-dark round btn-min-width mr-1 mb-1"
                    >INACTIVATE USER</button></a>
            @endif


       </div>

        </div>
    </div>

        <div class="col-md-9" id="contens" style="margin-bottom: 10px;padding-left: 0;padding-right: 0;">
            <div class="row ">
               <a href="{{route('admin.hub.user.view',$user['id'])}}"> <h4 class="h3" style="border-radius: 7px; border: 2px solid #ff6600; padding: 10px; font-weight: 600; font-size: 17px; color: #ff6600;margin-left: 15px;"> Details</h2></a>
            <a href="{{route('admin.hub.user.app.data',$user['id'])}}"><h4 class="h3" style="border-radius: 7px; border: 2px solid black; padding: 10px; font-weight: 600; font-size: 17px; color: black;margin-left: 15px;"> App Data</h2></a>


            </div>
            <div class="row" style="margin-right: 0;margin-left: 0;border: 2px solid black;border-radius: 6px;">
                <div class="col-md-12" style="border-bottom: 2px solid black;">
                 <h3 style="font-size: 20px; padding: 10px; margin-left: -11px; color: black;padding-bottom: 0px;">User information</h3>
                </div>
                <div class="col-md-12">
                    <div id="collaptr_businesss_info" role="tabpanel" aria-labelledby="headingCollapsebusinesss_info"
                    style=""
                    class="collapse show" aria-expanded="false">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-5">
                                        <h6 class="mb-0">ID</h6>
                                    </div>
                                    <div class="col-sm-7 text-secondary">
                                       {{$user['id']}}
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-5">
                                        <h6 class="mb-0">Registration date</h6>
                                    </div>
                                    <div class="col-sm-7 text-secondary">
                                        {{\Carbon\Carbon::parse($user['created_at'])->format('d/m/Y') }}   {{\Carbon\Carbon::parse($user['created_at'])->format('h:i') }}
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-5">
                                        <h6 class="mb-0">Full name</h6>
                                    </div>
                                    <div class="col-sm-7 text-secondary">
                                       {{$user['name']}}
                                    </div>
                                </div>
                                <hr>

                                <div class="row">
                                    <div class="col-sm-5">
                                        <h6 class="mb-0">Email</h6>
                                    </div>
                                    <div class="col-sm-7 text-secondary">
                                       {{$user['email']}}
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-5">
                                        <h6 class="mb-0">Mobile</h6>
                                    </div>
                                    <div class="col-sm-7 text-secondary">
                                       {{$user['phone_no']}}
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-5">
                                        <h6 class="mb-0">Status</h6>
                                    </div>
                                    <div class="col-sm-7 text-secondary">
                                       {{$user['status']==1?"Active":""}} {{$user['status']==0?"In Active":""}} {{$user['status']==3?"Suspend":""}}
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
