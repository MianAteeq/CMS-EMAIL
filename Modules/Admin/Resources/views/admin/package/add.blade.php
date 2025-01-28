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
.form-control {

border: 2px solid black!important;
height: calc(1em + 1.4rem + 0px);
border-radius: 7px;
width: 60%;

}
.form-btn{
text-align: left; /* opacity: -0.5; */ color: #babfcc; width: 37%; padding: 7px; padding-left: 14px;float: left;
}
.view-btn{
float: left;
margin-top: 0px;
padding: 9px;
margin-left: 10px;
background-color: #ff822f !important;
border-color: #ff822f !important;
}
body{
color: black;
}
.view-btn-black {
/* float: left; */
margin-top: 0px;
padding: 9px;
margin-left: 10px;
background-color: black !important;
border-color: black !important;
}
.form-control:focus {
color: #4e5154;
background-color: #fff;
border-color: black;
outline: 0;
box-shadow: none;
}
body.vertical-layout.vertical-menu.menu-expanded .main-menu {
width: 274px;
transition: 300ms ease all;
backface-visibility: hidden;
}
body.vertical-layout.vertical-menu.menu-expanded .content, body.vertical-layout.vertical-menu.menu-expanded .footer {
margin-left: 274px;
/* background-color: white; */
}
input:focus:required:invalid {border: 2px solid red;}
input:required:valid { border: 2px solid black; }
</style>

@endsection
@section('header')
<div class="content-header bg-white" >
    <div  class="row" style="border-bottom: 3px solid #949494;">
        <div class="col-xl-12 col-12 bg-white headerbg" style="padding-left: 32px;padding-top: 13px;">
           <h3 class="h3">Plans</h3>
           <div class="breadcrumb-wrapper col-12">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a>Product settings</a>
                </li>
                <li class="breadcrumb-item"><a style="color: black" href="{{route('admin.packages')}}">Plans</a>
                </li>



                <li class="breadcrumb-item">Create New Plans
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
        <img src="/settings.png" style="width: 22px;margin-top: -5px;" > New Plan
        </h4>

        </div>
    </div>
    <div class="col-md-9"  style="border: 2px solid black;border-radius: 6px;margin-bottom: 10px;padding-left: 0;padding-right: 0;">
        <div class="row" style="margin-right: 0;margin-left: 0;">
            <div class="col-md-12" style="border-bottom: 2px solid black;">
             <h3 style="font-size: 20px; padding: 10px; margin-left: -11px; color: black;padding-bottom: 0px;">Plan information</h3>
            </div>


         </div>
         <form action="{{route('admin.package.store')}}" id="contens" method="POST" enctype="multipart/form-data" id="contens"> @csrf
            <div class="link-body"  style="padding: 10px">

                    <div class="card-body">
                        <div class="form-group row">
                            <label class="col-md-4 label-control" for="eventRegInput5">Package Name *</label>
                            <div class="col-md-8 mx-auto">
                                <input type="text" id="name" class="form-control" value="" onkeyup="lookup(this);" name="name" placeholder="Package Name" required>
                                <p class="text-danger name" style="padding-left: 10px;width:100%;display: none;margin-bottom: -8px;">This Field  is Required !</p>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 label-control" for="eventRegInput5">Package Sub Title *</label>
                            <div class="col-md-8 mx-auto">
                                <input type="text" id="sub_title" class="form-control" value="" onkeyup="lookup(this);" name="sub_title" placeholder="Package Sub Title" required>
                                <p class="text-danger name" style="padding-left: 10px;width:100%;display: none;margin-bottom: -8px;">This Field  is Required !</p>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 label-control" for="eventRegInput5">Package price *</label>
                            <div class="col-md-8 mx-auto">
                                <input type="text" id="price" class="form-control" value="" onkeyup="lookup(this);" name="price" placeholder="Package price" required>
                                <p class="text-danger name" style="padding-left: 10px;width:100%;display: none;margin-bottom: -8px;">This Field  is Required !</p>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 label-control" for="eventRegInput5">Package Time *</label>
                            <div class="col-md-8 mx-auto">
                                <select class="form-control" name="time" required>
                                    <option value="day">Day</option>
                                    <option value="month">Monthly</option>
                                    <option value="quarter">3 Month</option>
                                    <option value="semiannual">6 Month</option>
                                    <option value="year">1 Year</option>
                                </select>
                                <p class="text-danger name" style="padding-left: 10px;width:100%;display: none;margin-bottom: -8px;">This Field  is Required !</p>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 label-control" for="eventRegInput5">Invoice Commissions ( 5% ) *
                                <small class="text-muted">By Defualt None</small></label>
                            <div class="col-md-8 mx-auto">
                                <input type="number" name="commission" class="form-control currency-inputmask" onkeyup="lookup(this);" placeholder="Invoice Commissions" required>
                                <p class="text-danger name" style="padding-left: 10px;width:100%;display: none;margin-bottom: -8px;">This Field  is Required !</p>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 label-control" for="eventRegInput5">Description *</label>

                            <div class="col-md-8 mx-auto">
                                <textarea type="text" name="description" class="form-control currency-inputmask" onkeyup="lookup(this);" placeholder="Description" required></textarea>
                                <p class="text-danger name" style="padding-left: 10px;width:100%;display: none;margin-bottom: -8px;">This Field  is Required !</p>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 label-control" for="eventRegInput5">Provider App *</label>
                            <div class="col-md-8 mx-auto">
                                <input type="checkbox" name="is_repair_app" value="1" class="toggle-two" checked>
                                <p class="text-danger name" style="padding-left: 10px;width:100%;display: none;margin-bottom: -8px;">This Field  is Required !</p>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-4 label-control" for="eventRegInput5">Hub Apperance *</label>
                            <div class="col-md-8 mx-auto">
                                <input type="checkbox" name="is_hub" value="1" class="toggle-two" checked>
                                <p class="text-danger name" style="padding-left: 10px;width:100%;display: none;margin-bottom: -8px;">This Field  is Required !</p>
                            </div>
                        </div>

                        <hr>
                        <div class="row">
                            <div class="col-md-6">
                                <h4 class="card-title">Package Feature</h4>
                            </div>
                            <div class="col-md-6 text-right"><button id="btnAdd" type="button" class="btn btn-info" data-toggle="tooltip" data-original-title="Add more Feature"><i class="glyphicon glyphicon-plus-sign"></i>&nbsp; + Add&nbsp;</button></div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <table class="" style="width: 100%; margin-bottom:10px;">
                                    <tbody id="TextBoxContainer"></tbody>
                                </table>
                            </div>
                        </div>

                    </div>






            </div>
            <div class="footers">

                <button type="submit" class="btn btn-dark round btn-min-width mr-1 mb-1" style="float: right;">SAVE</button>
                <a href="{{redirect()->back()->getTargetUrl()}}"><button type="button"  class="btn btn-dark round btn-min-width mr-1 mb-1" style="float: right;">CANCEL</button></a>



            </div>
        </form>
    </div>
</div>


@endsection
@section("css_custom")
<style></style>
@endsection
@section("css_lib")
<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
@endsection
@section("script")
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>

<script>
     $('.toggle-two').bootstrapToggle('state', true);
</script>
<script>
    $(function() {
        $("#btnAdd").bind("click", function() {
            var div = $("<tr />");
            div.html(GetDynamicTextBox(""));
            $("#TextBoxContainer").append(div);
            $('.toggle-two').bootstrapToggle('state', true);
        });
        $("body").on("click", ".remove", function() {
            $(this).closest("tr").remove();
        });
    });
    let key=0;
    function GetDynamicTextBox(value) {
        key+=1;
        return '<td style="width: 34%;">Name *</td><td><input type="text" name="feature_name['+key+']" class="form-control" style="width: 93%;" placeholder="Name" required></td><td><input type="checkbox" name="feature_status['+key+']" value="1" class="toggle-two" checked></td>' + '<td><button type="button" style="margin-bottom: 0px !important;" class="btn btn-danger remove mb-2">-</button></td>'
    }
</script>
@endsection
