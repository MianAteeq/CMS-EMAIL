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
.form-control {

border: 2px solid black!important;
height: calc(1em + 1.4rem + 0px);
border-radius: 7px;
width: 60%;

}
.form-btn{
text-align: left; /* opacity: -0.5; */ color: #babfcc; width: 60%; padding: 7px; padding-left: 14px;float: left;
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
           <h3 class="h3">Main contact</h3>
           <div class="breadcrumb-wrapper col-12">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a>Business</a>
                </li>



                <li class="breadcrumb-item"><a style="color: black" href="{{route('vender.main.contact')}}">Main contact</a></li>
                <li class="breadcrumb-item">Edit main contact
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
        <img src="/contact_icon.png" style="width: 22px;margin-top: -5px;" > Edit main contact
        </h4>

        </div>
    </div>
    <div class="col-md-9"  style="border: 2px solid black;border-radius: 6px;margin-bottom: 10px;padding-left: 0;padding-right: 0;">
        <div class="row" style="margin-right: 0;margin-left: 0;">
            <div class="col-md-12" style="border-bottom: 2px solid black;">
             <h3 style="font-size: 20px; padding: 10px; margin-left: -11px; color: black;padding-bottom: 0px;">Main contacts</h3>
            </div>


         </div>
         <form action="{{route('vender.main.contact.update')}}" id="contens" method="POST" enctype="multipart/form-data" id="contens"> @csrf
            <input type="hidden" name="id" value="{{$user['id']}}">
            <div class="link-body"  style="padding: 10px">

                <div class="form-group row">
                    <label class="col-md-4 label-control" for="eventRegInput5">First name *</label>
                    <div class="col-md-8 mx-auto">
                        <input type="text" id="name" class="form-control" value="{{$user['name']}}" onkeyup="lookup(this);" name="name" placeholder="First name">
                        <p class="text-danger name" style="padding-left: 10px;width:100%;display: none;margin-bottom: -8px;">This Field  is Required !</p>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-4 label-control" for="eventRegInput5">Middle name </label>
                    <div class="col-md-8 mx-auto">
                        <input type="text" id="middle_name" class="form-control" value="{{$user['middle_name']}}"  name="middle_name" placeholder="Middle name ">
                        <p class="text-danger middle_name" style="padding-left: 10px;width:100%;display: none;margin-bottom: -8px;">This Field  is Required !</p>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-4 label-control" for="eventRegInput5">Last name *</label>
                    <div class="col-md-8 mx-auto">
                        <input type="text" id="last_name" class="form-control" value="{{$user['last_name']}}"  onkeyup="lookup(this);" name="last_name" placeholder="Last name">
                        <p class="text-danger last_name" style="padding-left: 10px;width:100%;display: none;margin-bottom: -8px;">This Field  is Required !</p>

                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-4 label-control" for="eventRegInput5">Email * </label>
                    <div class="col-md-8 mx-auto">
                        <input type="email" id="email" class="form-control" value="{{$user['email']}}" onkeyup="lookup(this);" name="email" placeholder="Email">
                        <p class="text-danger email" style="padding-left: 10px;width:100%;display: none;margin-bottom: -8px;">This Field  is Required !</p>
                        @if($errors->has('email'))

                            <p class="text-danger email" style="padding-left: 10px;width:100%;margin-bottom: -8px;">{{ $errors->first('email') }}</p>
                        @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-4 label-control" for="eventRegInput5">Mobile * </label>
                    <div class="col-md-8 mx-auto">
                        <input type="tel" id="phone_no" class="form-control" value="{{$user['profile']['phone_no']??''}}" onkeyup="lookup(this);" name="phone_no" placeholder="Mobile">
                        <p class="text-danger phone_no" style="padding-left: 10px;width:100%;display: none;margin-bottom: -8px;">This Field  is Required !</p>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-4 label-control" for="eventRegInput5">Landline  </label>
                    <div class="col-md-8 mx-auto">
                        <input type="tel" id="landline" class="form-control" value="{{$user['profile']['landline']??''}}"  name="landline" placeholder="Landline">
                        <p class="text-danger landline" style="padding-left: 10px;width:100%;display: none;margin-bottom: -8px;">This Field  is Required !</p>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-4 label-control" for="eventRegInput5">Position or job title in relation to this business  * </label>
                    <div class="col-md-8 mx-auto">
                        <input type="text" id="job_title" class="form-control" value="{{$user['profile']['job_title']??''}}" onkeyup="lookup(this);" name="job_title" placeholder="Position or job title in relation to this business">
                        <p class="text-danger job_title" style="padding-left: 10px;width:100%;display: none;margin-bottom: -8px;">This Field  is Required !</p>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-md-4 label-control">Is this person authorised to act on behalf of this business? * (?)</label>
                    <div class="col-md-8 mx-auto">
                        <div class="input-group">
                            <div class="d-inline-block custom-control custom-radio mr-1">
                                <input type="radio" name="person_authorised" class="custom-control-input" @if ($user['profile']['person_authorised']??''=="YES") checked @endif  value="YES"  id="Yes">
                                <label class="custom-control-label" for="Yes">Yes</label>
                            </div>
                            <div class="d-inline-block custom-control custom-radio">
                                <input type="radio" name="person_authorised" class="custom-control-input" @if ($user['profile']['person_authorised']??'NO'=="NO") checked @endif value="NO"  id="No">
                                <label class="custom-control-label" for="No">No</label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group row Poof_div" @if ($user['profile']['person_authorised']??''=="NO") style="display: none" @endif>
                    <label class="col-md-4 label-control" for="eventRegInput5">Proof main contact person is
                        authorised to act on behalf of this
                        business * (?)</label>
                    <div class="col-md-8 mx-auto">
                        <input type="file" name="proof_of_main_contact" accept="image/*,.doc, .docx,.pdf" class="d-none" id="">
                        <input type="button" id="proof_of_main_contact" class="form-control form-btn" value="{{$user['profile']['proof_of_main_contact_name']??'Document Upload'}}" name="contact" placeholder="Document Upload ">
                        <button type="button" class="btn btn-primary btn-sm view-btn" @if(($user['profile']['proof_of_main_contact']??'')==null) style="display: none" @endif> <a href="{{URL::to($user['profile']['proof_of_main_contact']??'')}}"
                            id="view_file" target="_blank" style="color: white">View</a></button>
                            <br>
                            <br>
                            <p class="text-danger file_proof" style="padding-left: 10px;width:100%;display: none">Proof main contact person is Required !</p>

                    </div>
                </div>


            </div>
            <div class="footers">

                <button type="button" onclick="submitDetailsForm()" class="btn btn-dark round btn-min-width mr-1 mb-1" style="float: right;">Update</button>
                <a href="{{redirect()->back()->getTargetUrl()}}"><button type="button"  class="btn btn-dark round btn-min-width mr-1 mb-1" style="float: right;">Cancel</button></a>

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
        let array=['name','last_name','email','phone_no','job_title','proof_of_main_contact'];

        let status=false;
        array.some((item)=>{
            let name = $(`#${item}`).val();
            console.log(name,item);

            if(name==="" || name===null){


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
        let file = $('input[type=file]').val();
                if (file === "" && @json($user['profile']['proof_of_main_contact']??null)==null) {

                    $(`#proof_of_main_contact`).attr('style','border:2px solid red!important');


                }
        array.some((item)=>{
            let name = $(`#${item}`).val();
            console.log(name,item);

            if(name===""){


                $(`#${item}`).attr('style','border:2px solid red!important');

                status=false;


                return true;

                }
                else
                {

                $(`#${item}`).attr('style','border:2px solid black!important');
                status=true;

                }
        });


        let email = $(`#email`).val();

        console.log(validateEmail(email));

        if(validateEmail(email)===null){
            $(`#email`).attr('style','border:2px solid red!important');
            $('.email').show();
            return false;
        }


       if(status===true){
        let status = $('input[type=radio]:checked').val();
        if(status==="YES"){

            let file = $('input[type=file]').val();
            if (file === "" && @json($user['profile']['proof_of_main_contact']??null)==null) {

                $(`#proof_of_main_contact`).attr('style','border:2px solid red!important');
                status=false;
                 return false;

            }
            else{
                status=true;
            }
        }else{
            status=true;
        }

        if(status===true){

            $("form").submit();
        }

       }






    }
</script>

<script>
       const validateEmail = (email) => {
  return String(email)
    .toLowerCase()
    .match(
      /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|.(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
    );
};
</script>


@endsection
