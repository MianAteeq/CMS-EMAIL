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
    position: absolute;
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
           <h3 class="h3">User</h3>
           <div class="breadcrumb-wrapper col-12">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a>Directory</a>
                </li>



                <li class="breadcrumb-item">Users
                </li>
                <li class="breadcrumb-item">{{$user['name']}} {{$user['middle_name']}}  {{$user['last_name']}}
                </li>
                <li class="breadcrumb-item">App
                </li>
                <li class="breadcrumb-item">{{$app['app_name']}}
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
        <div style="border-radius: 7px;border: 2px solid black;height: 420px  ">
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
            <span class="success">{{$user['status']}}</span>
        </div>
        <div style="margin: 20px;margin-top: 15px;font-weight: 500;font-size: 13px;">
            <span >Last sign in:  {{\Carbon\Carbon::parse($user['updated_at'])->format('d/m/Y') }} at  {{\Carbon\Carbon::parse($user['updated_at'])->format('h:i') }}</span>
        </div>
        <div style="margin: 20px;margin-top: 15px;font-weight: 500;font-size: 13px;margin-bottom:0px">
            <span >Created:  {{\Carbon\Carbon::parse($user['created_at'])->format('d/m/Y') }} at  {{\Carbon\Carbon::parse($user['created_at'])->format('h:i') }}</span>
        </div>
        </h4>
        <div class="footers" style="text-align: center;position: relative;">

            <a href="{{route('vender.user.password',$user['id'])}}">  <button type="button" style="width: 80%;" class="btn btn-dark round btn-min-width mr-1 mb-1"
                >RESET PASSWORD</button></a>
             <a href="{{route('vender.user.edit',$user['id'])}}">  <button type="button" style="width: 80%;" class="btn btn-dark round btn-min-width mr-1 mb-1"
                >UPDATE USER</button></a>
             <a  href="{{route('vender.user.suspend',$user['id'])}}">  <button type="button" style="width: 80%;" class="btn btn-dark round btn-min-width mr-1 mb-1"
                >SUSPEND USER</button></a>
             @if ($user['status']!="ACTIVE")
             <a href="{{route('vender.user.active',$user['id'])}}">  <button type="button" style="width: 80%;" class="btn btn-dark round btn-min-width mr-1 mb-1"
                 >ACTIVATE USER</button></a>
                 @else
                 <a href="{{route('vender.user.in.active',$user['id'])}}">  <button type="button" style="width: 80%;" class="btn btn-dark round btn-min-width mr-1 mb-1"
                     >INACTIVATE USER</button></a>
             @endif

       </div>

        </div>
    </div>
    <div class="col-md-9"   style="border: 2px solid black;border-radius: 6px;margin-bottom: 10px;padding-left: 0;padding-right: 0;height:405px">
        <div class="row" style="margin-right: 0;margin-left: 0;">
            <div class="col-md-12" style="border-bottom: 2px solid black;">
             <h3 style="font-size: 20px; padding: 10px; margin-left: -11px; color: black;padding-bottom: 0px;">App</h3>
            </div>
            <div class="col-md-12">
                <div id="collaptr_businesss_info" role="tabpanel" aria-labelledby="headingCollapsebusinesss_info"
                style=""
                class="collapse show" aria-expanded="false">
                    <div class="card-content">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-5">
                                    <h6 class="mb-0">App name</h6>
                                </div>
                                <div class="col-sm-7 text-secondary">
                                   {{$app['app_name']}}
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-5">
                                    <h6 class="mb-0">Status</h6>
                                </div>
                                <div class="col-sm-7 text-secondary">
                                   {{$app['status']==1?'On':"Off"}}
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-5">
                                    <h6 class="mb-0">Group</h6>
                                </div>
                                <div class="col-sm-7 text-secondary">
                                    @if(isset($app['group']))
                                    @if($app['group']['type']=="BUSINESS")
                                    {{str_replace("SVP_B_".$vender_id,"",$app['group']['name'])}}
                                    @else
                                    {{str_replace("SVP_".$vender_id,"",$app['group']['name'])}}

                                    @endif
                                    @endif
                                    {{-- {{$app['group']['name']??''}} --}}

                                </div>
                            </div>
                            <hr>

                            @if($app['app_name']!="Business Manager")

                            <div class="row">
                                <div class="col-sm-5">
                                    <h6 class="mb-0">Trade unit</h6>
                                </div>
                                <div class="col-sm-7 text-secondary">

                                    {{-- @dd($app['user']['trading_units']) --}}
                                  <div class="row">
                                    @foreach ($app['user']['trading_units'] as $trade_unit)
                                    <div class="col-md-4 ">
                                        <span class="badge badge-success mt-1"> {{$trade_unit['trading_unit']['name']??''}}</span>
                                    </div>

                                    @endforeach
                                  </div>

                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-5">
                                    <h6 class="mb-0">Default trade unit</h6>
                                </div>
                                <div class="col-sm-7 text-secondary">

                                   <span class="badge badge-success"> {{$app['user']['trading_unit']['name']??''}}</span>

                                </div>
                            </div>

                            @endif








                        </div>

                    </div>
                </div>


            </div>
            <div class="footers">
                <a href="{{route('vender.user.app.edit',$app['id'])}}">  <button type="button" class="btn btn-dark round btn-min-width mr-1 mb-1"
                    style="float: right;">Edit</button></a>

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
