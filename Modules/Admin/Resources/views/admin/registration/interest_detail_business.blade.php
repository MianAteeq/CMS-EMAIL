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
           <h3 class="h3">Interests</h3>
           <div class="breadcrumb-wrapper col-12">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a>Business</a>
                </li>

                <li class="breadcrumb-item">Registrations
                </li>

                <li class="breadcrumb-item"><a style="color: black" href="{{route('admin.interests')}}">Interests</a>
                </li>
                <li class="breadcrumb-item">{{$user['profile']['trading_name']}}
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
        <img src="/home.png" style="width: 22px;margin-top: -5px;" > {{$user['profile']['trading_name']}}
        </h4>
          <p style="color: black;padding-left: 25px;">Status : {{$user['status']}}</p>

          @if($user['status']=="NEW")
          <div class="footers" style="border-top: 2px solid black;padding: 10px ">
            <button class="btn btn-primary btn-block" onclick="window.location.href=`{{route('admin.interests.accept',$user['id'])}}`">ACCEPT</button>
            <button class="btn btn-primary btn-block" onclick="window.location.href=`{{route('admin.interests.detail',$user['id'])}}`">DECLINE</button>

          </div>
          @endif
        </div>
    </div>
    <div class="col-md-9" id="contens" style="border-radius: 6px;margin-bottom: 10px;padding-bottom: 10px;">
        <div class="card default-collapse collapse-icon accordion-icon-rotate" style="box-shadow: none;">




            <a id="headingCollapse1" href="{{redirect()->back()->getTargetUrl()}}" class="card-header info mt-2" style="border: 2px solid black;border-radius: 7px !important;padding: 1.2rem 1rem;color: black !important;" data-toggle="" href="#collaptr_businesss_info" aria-expanded="true" aria-controls="collaptr_businesss_info">
                <div class="card-title lead collapsed">Business information</div>
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
                                <h6 class="mb-0">ID</h6>
                            </div>
                            <div class="col-sm-7 text-secondary">
                               {{$user['id']}}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-5">
                                <h6 class="mb-0">Submission date time</h6>
                            </div>
                            <div class="col-sm-7 text-secondary">
                               {{\Carbon\Carbon::parse($user['created_at'])->format('d/m/y H:i')}}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-5">
                                <h6 class="mb-0">Business or Trading Name</h6>
                            </div>
                            <div class="col-sm-7 text-secondary">
                              {{$user['profile']['trading_name']}}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-5">
                                <h6 class="mb-0">Address</h6>
                            </div>
                            <div class="col-sm-7 text-secondary">
                                {{$user['profile']['address_line_1']}} @if($user['profile']['address_line_2']!="" || $user['profile']['address_line_2']!=null) , @endif {{$user['profile']['address_line_2']}} @if($user['profile']['address_line_3']!="" || $user['profile']['address_line_3']!=null) , @endif {{$user['profile']['address_line_3']}} @if($user['profile']['address_line_4']!="" || $user['profile']['address_line_4']!=null) , @endif {{$user['profile']['address_line_4']}}
                                @if($user['profile']['city']!="" || $user['profile']['city']!=null) , @endif {{$user['profile']['city']}}  @if($user['profile']['postcode']!="" || $user['profile']['postcode']!=null) , @endif {{$user['profile']['postcode']}}
                            </div>
                        </div>

                        <hr>
                        <div class="row">
                            <div class="col-sm-5">
                                <h6 class="mb-0">Organisation Structure</h6>
                            </div>
                            <div class="col-sm-7 text-secondary">
                               {{$user['profile']['organization_status']}}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-5">
                                <h6 class="mb-0">UK VAT Registered</h6>
                            </div>
                            <div class="col-sm-7 text-secondary">
                               {{$user['profile']['vat_register']}}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-5">
                                <h6 class="mb-0">Service Offering</h6>
                            </div>
                            <div class="col-sm-7 text-secondary">
                               {{$user['profile']['operation_type']}}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-5">
                                <h6 class="mb-0">Services</h6>
                            </div>
                            <div class="col-sm-7 text-secondary">
                                @foreach ($user['services'] as $service)

                                <span class="badge badge-success mt-1" style="padding: 0.5em 1.6em;background-color: #ff822f;">{{$service['service']['name']}}</span>
                                @endforeach
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
