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
           <h3 class="h3">Edit user group</h3>
           <div class="breadcrumb-wrapper col-12">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a>Directory</a>
                </li>

                <li class="breadcrumb-item"><a style="color: black" href="{{route('admin.user.group')}}">User groups</a>
                </li>
                <li class="breadcrumb-item"><a> Edit user group</a>
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
        <img src="/group.png" style="width: 22px;margin-top: -5px;" > Edit user group
        </h4>

        </div>
    </div>
    <div class="col-md-9"  style="border: 2px solid black;border-radius: 6px;margin-bottom: 10px;padding-left: 0;padding-right: 0;">
        <div class="row" style="margin-right: 0;margin-left: 0;">
            <div class="col-md-12" style="border-bottom: 2px solid black;">
             <h3 style="font-size: 20px; padding: 10px; margin-left: -11px; color: black;padding-bottom: 0px;">User group information</h3>
            </div>


         </div>
         <form action="{{route('admin.user.group.update')}}" id="contens" method="POST" enctype="multipart/form-data" id="contens">
             @csrf
             <input type="hidden" name="id" value="{{$role['id']}}">
            <div class="link-body"  style="padding: 10px">

                <div class="form-group row">
                    <label class="col-md-4 label-control" for="eventRegInput5">User group name * (?)</label>
                    <div class="col-md-8 mx-auto">
                        <input type="text" id="name" class="form-control" value="{{$role['name']}}" onkeyup="lookup(this);" name="name" placeholder="First name">
                        <p class="text-danger name" style="padding-left: 10px;width:100%;display: none;margin-bottom: -8px;">This Field  is Required !</p>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-4 label-control" for="eventRegInput5">User group type * (?)</label>
                    <div class="col-md-8 mx-auto">
                        Custom
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-4 label-control" for="eventRegInput5">Permission</label>
                    <div class="col-md-8 mx-auto">

                        <p class="text-danger permissions" style="padding-left: 10px;width:100%;display: none;margin-bottom: -8px;">Please Check At Least One Permission !</p>

                    </div>
                </div>
                @foreach ($permissions as $key=> $permission)
                <div class="form-group row">
                    <label class="col-md-4 label-control" for="eventRegInput5">{{$key}}</label>
                    <div class="col-md-8 mx-auto">
                      <div class="row">
                        @foreach ($permissions[$key] as $per)
                        <div class="col-md-4">
                         <fieldset class="checkboxsas">
                             <label>
                                 <input type="checkbox" class="permission_id" name="permission_id[]" @foreach ($role['permissions'] as $permi) @if ($per['id']==$permi['id']) checked @endif @endforeach value="{{$per['id']}}">
                                 {{$per['name']}}
                             </label>
                         </fieldset>
                        </div>

                        @endforeach
                      </div>
                    </div>
                </div>
                @endforeach





            </div>
            <div class="footers">

                <button type="button" onclick="submitDetailsForm()" class="btn btn-dark round btn-min-width mr-1 mb-1" style="float: right;">UPDATE</button>
                <a href="{{redirect()->back()->getTargetUrl()}}"><button type="button"  class="btn btn-dark round btn-min-width mr-1 mb-1" style="float: right;">CANCEL</button></a>



            </div>
        </form>
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
    $(document).ready(function() {
    var contentHeight = $('#contens').height();
    $('#contens').height(contentHeight);
});
</script>
<script>
    $('.form-btn').click(function () {
        $('input[type=file]').trigger('click');
    });

</script>
<script>
    $('input[type=radio]').change(function () {
        if (this.value == 'YES') {

            $('.Poof_div').show();
            var contentHeight = $('#contens').height();
             $('#contens').height(contentHeight);

        } else {
            $('.Poof_div').hide();
            var contentHeight = $('#contens').height();
             $('#contens').height('550px');
        }
    });

</script>

<script>
    $(document).ready(function () {
        $('input[type="file"]').change(function (e) {
            var fileName = e.target.files[0].name;
            $('.form-btn').val(fileName);

            $('.view-btn').show();
            $('#view_file').attr('href', URL.createObjectURL(e.target.files[0]));
            $('.file_proof').hide();
            $(`#proof_of_main_contact`).attr('style','border:2px solid black!important');
        });
    });

</script>

<script>
     async  function lookup(arg){
        var id = arg.getAttribute('id');
        var value = arg.value;


        let trading_name = $(`#${id}`).val();
        if(id!=="address_line_2" && id!=="city" && id!=="postcode"){
                if (trading_name === "") {


                $(`#${id}`).attr("style", "border:2px solid red!important;");
                status = false;

            } else {
                $(`#${id}`).attr("style", "border:2px solid black!important;");
                $(`.${id}`).hide();
            }
        }
        else{
            if (trading_name === "") {


            $(`#${id}`).attr("style", "border:2px solid red!important;margin-top: 5px ");
            status = false;

            } else {
            $(`#${id}`).attr("style", "border:2px solid black!important;margin-top: 5px;");
            $(`.${id}`).hide();
            }
        }














}
</script>


<script>
    function submitDetailsForm() {
        let array=['name'];

        let status=false;
        array.some((item)=>{
            let name = $(`#${item}`).val();
            console.log(name,item);

            if(name===""){


                $(`#${item}`).attr('style','border:2px solid red!important');

                status=false;


                return false;

                }
                else
                {

                $(`#${item}`).attr('style','border:2px solid black!important');
                status=true;

                }
        });


       let checked=$('.permission_id').is(':checked');

       if(checked==false){

        $('.permissions').show();

        return;
        }else{
            $('.permissions').hide();

        }


        // return;


       if(status==true){
        $("form").submit();
       }






    }
</script>



@endsection
