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
#headingCollapse14:before {
    position: absolute;
    top: 48%;
    right: 20px;
    margin-top: -8px;
    font-family: 'feather';
    content: "\e842";
    transition: all 300ms linear 0s;
}
#headingCollapsevat:before {
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
.span{
    background: #ff6600; padding: 3px; padding-left: 7px; border-radius: 4px; color: white; padding-right: 9px; margin-left: 8px;
}

</style>
@endsection

@section('header')
<div class="content-header bg-white" >
    <div  class="row" style="border-bottom: 3px solid #949494;">
        <div class="col-xl-12 col-12 bg-white headerbg" style="padding-left: 32px;padding-top: 13px;">
           <h3 class="h3">Business</h3>
           <div class="breadcrumb-wrapper col-12">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a>Business</a>
                </li>

                <li class="breadcrumb-item"><a style="color: black" href="{{route('admin.register')}}">Registered</a>
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

                <img src="/home.png" style="width: 22px;margin-top: -5px;" > {{$user['profile']['trading_name']}} <br> <span style="margin-left: 26px;
                font-size: 13px;">BSN{{sprintf("%05d",$user['id'])}}</span>

            </h4>
          <p style="color: black;padding-left: 25px;">Status : @if ($user['application_status']=="ACCEPTED") Active @else INACTIVE @endif </p>

          <div class="footers" style="border-top: 2px solid black;padding: 10px ">
            @if ($user['application_status']=="ACCEPTED")
            <button class="btn btn-primary btn-block" onclick="window.location.href=`{{route('admin.register.in.active',$user['id'])}}`">INACTIVE</button>
            @else
            <button class="btn btn-primary btn-block" onclick="window.location.href=`{{route('admin.register.active',$user['id'])}}`">ACTIVE</button>

            @endif

          </div>



        </div>
    </div>
    {{-- @dd($user['sites']) --}}
    <div class="col-md-9" id="contens" style="border-radius: 6px;margin-bottom: 10px;padding-bottom: 10px;">
        <div class="row " style="margin-left: 1px;">
           <a onclick="showDetail()"> <h4 class="h3" id="h3_detail" style="border-radius: 7px; border: 2px solid #ff6600; padding: 10px; font-weight: 600; font-size: 17px; color: #ff6600;"> Details</h2></a>
         <a onclick="showMainAccount()"><h4 class="h3" id="h3_main_account" style="border-radius: 7px;border: 2px solid black;padding: 10px;font-weight: 600;font-size: 17px;margin-left: 10px  "> Main contacts</h2></a>
           <a onclick="showTradingName()"> <h4 class="h3" id="h3_trading_account" style="border-radius: 7px;border: 2px solid black;padding: 10px;font-weight: 600;font-size: 17px;margin-left: 10px  "> Trading names</h2></a>
          <a onclick="showSites()">  <h4  class="h3" id="h3_sites" style="border-radius: 7px;border: 2px solid black;padding: 10px;font-weight: 600;font-size: 17px;margin-left: 10px  "> Sites</h2></a>

        </div>
        <div class="card default-collapse collapse-icon accordion-icon-rotate" id="show_detail" style="box-shadow: none;">

               <a id="headingCollapse14" class="card-header info collapsed" style="border: 2px solid black;border-radius: 7px !important;padding: 1.2rem 1rem;color: black !important;" data-toggle="collapse" href="#collapse14" aria-expanded="false" aria-controls="collapse14">
                        <div class="card-title lead collapsed">Business information</div>

                </a>

                <div id="collapse14"  role="tabpanel" aria-labelledby="headingCollapse14" class="collapse" aria-expanded="false" style="border-left: 2px solid black; margin-top: -4px; border-right: 2px solid black; border-bottom: 2px solid black; border-bottom-left-radius: 6px; border-bottom-right-radius: 6px;">
                        <div class="card-content">
                            <div class="card-body">

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
                                        <h6 class="mb-0">Address Line 1</h6>
                                    </div>
                                    <div class="col-sm-7 text-secondary">
                                        {{$user['profile']['address_line_1']}}
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-5">
                                        <h6 class="mb-0">Address Line 2</h6>
                                    </div>
                                    <div class="col-sm-7 text-secondary">
                                        {{$user['profile']['address_line_2']}}
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-5">
                                        <h6 class="mb-0">Address Line 3</h6>
                                    </div>
                                    <div class="col-sm-7 text-secondary">
                                        {{$user['profile']['address_line_3']}}
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-5">
                                        <h6 class="mb-0">Address Line 4</h6>
                                    </div>
                                    <div class="col-sm-7 text-secondary">
                                        {{$user['profile']['address_line_4']}}
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-5">
                                        <h6 class="mb-0">City</h6>
                                    </div>
                                    <div class="col-sm-7 text-secondary">
                                        {{$user['profile']['city']}}
                                    </div>
                                </div>
                                <hr>
                                <div class="row">
                                    <div class="col-sm-5">
                                        <h6 class="mb-0">Postcode</h6>
                                    </div>
                                    <div class="col-sm-7 text-secondary">
                                        {{$user['profile']['postcode']}}
                                    </div>
                                </div>
                                {{-- <hr> --}}

                                @if($user['profile']['organization_status']==="Sole Trader / Self Employed")

                                <hr>
                                <div class="row">
                                    <div class="col-sm-5">
                                        <h6 class="mb-0">Proof of Sole Trader / Self Employed Status</h6>
                                    </div>
                                    <div class="col-sm-7 text-secondary">
                                       <a href="{{URL::to($user['profile']['document_proof'])}}" style=" background-color: #ff822f !important;
                                       border-color: #ff822f !important;" class="btn btn-primary"> View</a>
                                    </div>
                                </div>
                                @endif





                            </div>
                        </div>

            </div>

            <a id="headingCollapsevat" class="card-header info mt-2" style="border: 2px solid black;
            border-radius: 7px !important;padding: 1.2rem 1rem;color: black !important;" data-toggle="collapse" href="#collapsevats" aria-expanded="false" aria-controls="collapsevats">
                <div class="card-title lead collapsed">VAT</div>
            </a>
            <div id="collapsevats"  role="tabpanel" aria-labelledby="headingCollapsevats" class="collapse" aria-expanded="false" style="border-left: 2px solid black; margin-top: -4px; border-right: 2px solid black; border-bottom: 2px solid black; border-bottom-left-radius: 6px; border-bottom-right-radius: 6px;">
                <div class="card-content">
                    <div class="card-body">

                        <div class="row">
                            <div class="col-sm-5">
                                <h6 class="mb-0">Is your business UK VAT registered</h6>
                            </div>
                            <div class="col-sm-7 text-secondary">
                               {{$user['profile']['vat_register']}}
                            </div>
                        </div>

                        @if($user['profile']['vat_register']=="YES")
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






                    </div>
                </div>
            </div>




        </div>

        <div id="main_account" style="display: none;border: 2px solid black;border-radius: 6px;margin-bottom: 10px;padding-bottom: 10px;">
            <div class="row" style="margin-right: 0;margin-left: 0;">
                <div class="col-md-12" style="border-bottom: 2px solid black;">
                 <h3 style="font-size: 20px; padding: 10px; margin-left: -11px; color: black;padding-bottom: 0px;">Main contacts</h3>
                </div>


             </div>

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
                                     <th>First Name</th>
                                     <th>Middle Name</th>
                                     <th>Last Name</th>
                                     <th>Email</th>
                                     <th>Mobile</th>
                                     <th>Status</th>

                                 </tr>
                             </thead>
                             <tbody>

                                 {{-- @foreach ($users as $user)

                                 @endforeach --}}

                                 <tr>
                                    <td>1</td>
                                    <td>{{$user['name']}}</td>
                                    <td>{{$user['middle_name']}}</td>
                                    <td>{{$user['last_name']}}  </td>
                                    <td>{{$user['email']}}</td>
                                    <td>{{$user['profile']['phone_no']}}</td>
                                    <td>Active</td>
                                </tr>



                             </tbody>
                             <tfoot>
                                 <tr>
                                    <th>ID</th>
                                    <th>First Name</th>
                                    <th>Middle Name</th>
                                    <th>Last Name</th>
                                    <th>Email</th>
                                    <th>Mobile</th>
                                    <th>Status</th>
                                 </tr>
                             </tfoot>
                         </table>
                     </div>
                 </div>
             </div>
        </div>
        <div id="trading_name" style="display: none;border: 2px solid black;border-radius: 6px;margin-bottom: 10px;padding-bottom: 10px;">
            <div class="row" style="margin-right: 0;margin-left: 0;">
                <div class="col-md-12" style="border-bottom: 2px solid black;">
                 <h3 style="font-size: 20px; padding: 10px; margin-left: -11px; color: black;padding-bottom: 0px;">Trading Name</h3>
                </div>


             </div>

             <div class="row m-0 mt-2">
                 <div class="col-md-11">
                     <input type="text" class="form-control" id="myInputTextField2" style="border: 2px solid black; border-radius: 6px;" placeholder="Search" name="" id="">
                 </div>
                 <div class="col-md-1" style="margin-top: 7px ">
                     <a href=""> <i class="ft-filter" style="font-size: 30px;color: black;"></i></a>
                 </div>
             </div>
             <div class="row mt-2 mb-4">
                 <div class="col-md-12">
                     <div class="table-responsive">
                         <table class="table table-striped table-bordered zero-configuration-1">
                             <thead>
                                 <tr>
                                     <th>ID</th>
                                     <th>Trading Name</th>
                                     <th>Status</th>
                                     <th>Is Register Company Name</th>


                                 </tr>
                             </thead>
                             <tbody>

                                 {{-- @foreach ($users as $user)

                                 @endforeach --}}
                                 @foreach ($user['trading_names'] as $name)
                                 <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$name['name']}}</td>
                                    <td>Approve</td>
                                    <td>Y  </td>

                                </tr>
                                @endforeach



                             </tbody>
                             <tfoot>
                                 <tr>
                                    <th>ID</th>
                                     <th>Trading Name</th>
                                     <th>Status</th>
                                     <th>Is Register Company Name</th>
                                 </tr>
                             </tfoot>
                         </table>
                     </div>
                 </div>
             </div>
        </div>
        <div id="sites" style="display: none;border: 2px solid black;border-radius: 6px;margin-bottom: 10px;padding-bottom: 10px;">
            <div class="row" style="margin-right: 0;margin-left: 0;">
                <div class="col-md-12" style="border-bottom: 2px solid black;">
                 <h3 style="font-size: 20px; padding: 10px; margin-left: -11px; color: black;padding-bottom: 0px;">Sites</h3>
                </div>


             </div>

             <div class="row m-0 mt-2">
                 <div class="col-md-11">
                     <input type="text" class="form-control" id="myInputTextField3" style="border: 2px solid black; border-radius: 6px;" placeholder="Search" name="" id="">
                 </div>
                 <div class="col-md-1" style="margin-top: 7px ">
                     <a href=""> <i class="ft-filter" style="font-size: 30px;color: black;"></i></a>
                 </div>
             </div>
             <div class="row mt-2 mb-4">
                 <div class="col-md-12">
                     <div class="table-responsive">
                         <table class="table table-striped table-bordered zero-configuration-2">
                             <thead>
                                 <tr>
                                     <th>ID</th>
                                     <th>Address </th>
                                     <th>Proof</th>



                                 </tr>
                             </thead>
                             <tbody>

                                 {{-- @foreach ($users as $user)

                                    @endforeach --}}

                                 @foreach ($user['sites'] as $site)

                                 <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$site['address_line_1']}} {{$site['address_line_2']}} {{$site['city']}} {{$site['postcode']}}</td>
                                    <td><a href="{{URL::to($site['proof'])}}" target="_blank">{{$site['proof_name']}}</a></td>


                                </tr>
                                @endforeach



                             </tbody>
                             <tfoot>
                                 <tr>
                                    <th>ID</th>
                                    <th>Address </th>
                                    <th>Proof</th>
                                 </tr>
                             </tfoot>
                         </table>
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
    oTable = $('.zero-configuration-1').DataTable({
        "bPaginate" : $('.zero-configuration-1 tbody tr').length>10,
        "iDisplayLength": 10,
        "bAutoWidth": false,
        "ordering": false,

    });   //pay attention to capital D, which is mandatory to retrieve "api" datatables' object, as @Lionel said
    $('#myInputTextField2').keyup(function(){
        oTable.search($(this).val()).draw() ;
    })
</script>
<script>
    oTable = $('.zero-configuration-2').DataTable({
        "bPaginate" : $('.zero-configuration-2 tbody tr').length>10,
        "iDisplayLength": 10,
        "bAutoWidth": false,
        "ordering": false,

    });   //pay attention to capital D, which is mandatory to retrieve "api" datatables' object, as @Lionel said
    $('#myInputTextField3').keyup(function(){
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
    function showDetail(){

        $('#show_detail').show();
        $('#h3_detail').attr("style","border-radius: 7px; border: 2px solid #ff6600; padding: 10px; font-weight: 600; font-size: 17px; color: #ff6600;");
        $('#h3_main_account').attr("style","border-radius: 7px; border: 2px solid black; padding: 10px; font-weight: 600; font-size: 17px; color: black;margin-left: 10px");
        $('#h3_trading_account').attr("style","border-radius: 7px; border: 2px solid black; padding: 10px; font-weight: 600; font-size: 17px; color: black;margin-left: 10px");
        $('#h3_sites').attr("style","border-radius: 7px; border: 2px solid black; padding: 10px; font-weight: 600; font-size: 17px; color: black;margin-left: 10px");
        $('#main_account').hide();
        $('#sites').hide();
        $('#trading_name').hide();
    }
</script>
<script>
    function showMainAccount(){

        $('#show_detail').hide();
        $('#main_account').show();
        $('#h3_main_account').attr("style","border-radius: 7px; border: 2px solid #ff6600; padding: 10px; font-weight: 600; font-size: 17px; color: #ff6600;margin-left: 10px");
        $('#h3_detail').attr("style","border-radius: 7px; border: 2px solid black; padding: 10px; font-weight: 600; font-size: 17px; color: black;");
        $('#h3_trading_account').attr("style","border-radius: 7px; border: 2px solid black; padding: 10px; font-weight: 600; font-size: 17px; color: black;margin-left: 10px");
        $('#h3_sites').attr("style","border-radius: 7px; border: 2px solid black; padding: 10px; font-weight: 600; font-size: 17px; color: black;margin-left: 10px");
        $('#sites').hide();
        $('#trading_name').hide();
    }
</script>
<script>
    function showTradingName(){

        $('#show_detail').hide();
        $('#main_account').hide();
        $('#sites').hide();
        $('#trading_name').show();
        $('#h3_trading_account').attr("style","border-radius: 7px; border: 2px solid #ff6600; padding: 10px; font-weight: 600; font-size: 17px; color: #ff6600;margin-left: 10px");
        $('#h3_detail').attr("style","border-radius: 7px; border: 2px solid black; padding: 10px; font-weight: 600; font-size: 17px; color: black;");
        $('#h3_main_account').attr("style","border-radius: 7px; border: 2px solid black; padding: 10px; font-weight: 600; font-size: 17px; color: black;margin-left: 10px");
        $('#h3_sites').attr("style","border-radius: 7px; border: 2px solid black; padding: 10px; font-weight: 600; font-size: 17px; color: black;margin-left: 10px");
    }
</script>
<script>
    function showSites(){


        $('#show_detail').hide();
        $('#main_account').hide();
        $('#sites').show();
        $('#trading_name').hide();
        $('#h3_sites').attr("style","border-radius: 7px; border: 2px solid #ff6600; padding: 10px; font-weight: 600; font-size: 17px; color: #ff6600;margin-left: 10px");
        $('#h3_detail').attr("style","border-radius: 7px; border: 2px solid black; padding: 10px; font-weight: 600; font-size: 17px; color: black;");
        $('#h3_main_account').attr("style","border-radius: 7px; border: 2px solid black; padding: 10px; font-weight: 600; font-size: 17px; color: black;margin-left: 10px");
        $('#h3_trading_account').attr("style","border-radius: 7px; border: 2px solid black; padding: 10px; font-weight: 600; font-size: 17px; color: black;margin-left: 10px");
    }
</script>

@endsection
