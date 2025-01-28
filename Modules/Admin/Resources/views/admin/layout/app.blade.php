<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Link Moto">
    <meta name="keywords" content="Link Moto">
    <meta name="author" content="Link Moto">
    <title>Link Moto</title>
    <link rel="apple-touch-icon" href="{{URL::to($setting['favicon']??'')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{URL::to($setting['favicon']??'')}}">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i%7CQuicksand:300,400,500,700" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="{{asset('/modules/admin/app-assets/vendors/css/vendors.min.css')}}">

    <!--summernote -->
    <link rel="stylesheet" type="text/css" href="{{asset('/modules/admin/app-assets/vendors/css/editors/summernote.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/modules/admin/app-assets/vendors/css/editors/codemirror.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/modules/admin/app-assets/vendors/css/editors/theme/monokai.css')}}">
    <!--summernote -->

    <!--Datatable -->
    <link rel="stylesheet" type="text/css" href="{{asset('/modules/admin/app-assets/vendors/css/tables/datatable/datatables.min.css')}}">
    <!--Datatable -->

    <link rel="stylesheet" type="text/css" href="{{asset('/modules/admin/app-assets/css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/modules/admin/app-assets/css/bootstrap-extended.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/modules/admin/app-assets/css/colors.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/modules/admin/app-assets/css/components.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('/modules/admin/app-assets/css/core/menu/menu-types/vertical-menu.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/modules/admin/app-assets/css/core/colors/palette-gradient.css')}}">

    <!-- Sweetalert -->
    <link rel="stylesheet" type="text/css" href="{{asset('/modules/admin/app-assets/css/sweetalert.min.css')}}">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
    @yield('css_lib')
    @yield('css_custom')
    <style>
        .no-js #loader { display: none; }
        .js #loader { display: block; position: absolute; left: 100px; top: 0; }
        .se-pre-con {
        position: absolute;
        left: 0px;
        top: 0px;
        width: 100%;
        height: 100%;
        z-index: 9999;
        background: url(/assets/images/loading.gif) center no-repeat;
        }
        .content-wrapper{
        opacity: 0.5;
        }
        .bg-info {
           background-color: #ffffff !important;
        }
        .main-menu.menu-light .navigation > li.active > a {
        font-weight: 700;
        background: none;
        margin: 0 1rem 0 1rem;
        border-radius: 0.3rem;
        color: #ff6600;
    }
        .main-menu.menu-light .navigation > li > a {
        padding: 12px 30px 12px 18px;
        padding-top: 1px;
        padding-bottom: 1px;
        padding-left: 47px;
    }
    .main-menu.menu-light .navigation .navigation-header span {
    font-weight: 500;
    text-transform: capitalize;
}
.main-menu.menu-light .navigation > li ul li > a {
    padding: 12px 18px 12px 54px;
    padding-top: 1px;
    padding-bottom: 1px;
    padding-left: 20px;
}
.main-menu.menu-light .navigation > li.open > ul > li:hover > a {
    padding: 12px 18px 12px 54px;
    padding-top: 1px;
    padding-bottom: 1px;
    padding-left: 20px;
}
body.vertical-layout.vertical-menu.menu-expanded .main-menu {

border-right: 3px solid #C0C0C0;
}
.breadcrumb .breadcrumb-item+.breadcrumb-item::before {
    content: ">";
}
.main-menu.menu-light .navigation > li .active > a {

    font-weight: 700;
    background: none;
    margin: 0 0rem 0 0rem;
    border-radius: 0.3rem;
    color: #ff6600!important;
    padding-left: 20px;
    font-weight: 700;
    font-size: 15px;
}
.main-menu.menu-light .navigation > li.actives > a {
    font-weight: 700;
    background: none;
    margin: 0 1rem 0 1rem;
    border-radius: 0.3rem;
    color: #ff6600;
    padding-left: 30px;
    padding-bottom: 2px;
    padding-top: 2px;
}
    </style>
</head>

<body class="vertical-layout vertical-menu 2-columns   fixed-navbar" data-open="click" data-menu="vertical-menu" data-col="2-columns">


    @include('admin::admin.layout.header')
    @include('admin::admin.layout.sidebar')

    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper" style="padding-left:0px;padding-top: 2px;background: white;height: 84vh; ">
          @yield('header')
            <div class="content-body" style="padding-left: 2rem;padding-top: 2rem">
                @yield('content')
                <div class="se-pre-con"></div>
            </div>
        </div>
    </div>
    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>
    @include('admin::admin.layout.footer')
    <script src="{{asset('/modules/admin/app-assets/vendors/js/vendors.min.js')}}"></script>

        <!-- BEGIN: Page Vendor JS-->
    <script src="{{asset('/modules/admin/app-assets/vendors/js/editors/codemirror/lib/codemirror.js')}}"></script>
    <script src="{{asset('/modules/admin/app-assets/vendors/js/editors/codemirror/mode/xml/xml.js')}}"></script>
    <script src="{{asset('/modules/admin/app-assets/vendors/js/editors/summernote/summernote.js')}}"></script>
    <!-- END: Page JS-->



    <script src="{{asset('/modules/admin/app-assets/js/core/app-menu.js')}}"></script>
    <script src="{{asset('/modules/admin/app-assets/js/core/app.js')}}"></script>

    <!-- <script src="{{asset('/modules/admin/app-assets/js/scripts/pages/dashboard-ecommerce.js')}}"></script> -->

    <!--Datatable -->
    <script src="{{asset('/modules/admin/app-assets/vendors/js/tables/datatable/datatables.min.js')}}"></script>
    <script src="{{asset('/modules/admin/app-assets/js/scripts/tables/datatables/datatable-basic.js')}}"></script>
    <!--Datatable -->

    <!-- Sweetaltert -->
    <script src="{{asset('/modules/admin/app-assets/js/sweetalert.min.js')}}"></script>





    @yield('scripts_lib')
    @yield("script")
    <!-- Bootstarp Validion -->
    <script>
        (function() {
            'use strict'
            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            var forms = document.querySelectorAll('.needs-validation')
            // Loop over them and prevent submission
            Array.prototype.slice.call(forms)
                .forEach(function(form) {
                    form.addEventListener('submit', function(event) {
                        if (!form.checkValidity()) {
                            event.preventDefault()
                            event.stopPropagation()
                        }
                        form.classList.add('was-validated')
                    }, false)
                })
        })()
    </script>
    <!-- Bootstarp Validion -->
    <script type="text/javascript">
        $(document).ready(function() {
          $('.summernote').summernote();
        });

    </script>
    <script>

            $( document ).ready(function() {
            $(".se-pre-con").fadeOut("slow");
            $('.content-wrapper').css("opacity",1);
            });
    </script>
    <script>
        let click=false;
        $(document).ready(function() {
            $(".menu-toggle").click(function(){

                if(click===false){

                    $('.brand-logo').css('margin-top',"5px");
                    $('.main-menu').css('width',"5px");
                    $('.app-content').css('margin-left',"0px");
                    $('.headerbg').css('margin-top',"21px");

                    click=true;
                }else{
                    $('.brand-logo').css('margin-top',"16px");
                    $('.main-menu').css('width',"260px");
                    $('.app-content').css('margin-left',"260px");
                    $('.headerbg').css('margin-top',"13px");
                    click=false;

                }


            });
});
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    <!-- Bootstarp Validion -->

    <script>
        @if(session('success'))
        //  alert(1);
        toastr.success("{{ session('success') }}",{
            timeOut: 500000000,
            closeButton: !0,
            debug: !1,
            newestOnTop: !0,
            progressBar: !0,
            positionClass: "toast-top-right",
            preventDuplicates: !0,
            onclick: null,
            showDuration: "300",
            hideDuration: "1000",
            extendedTimeOut: "1000",
            showEasing: "swing",
            hideEasing: "linear",
            showMethod: "fadeIn",
            hideMethod: "fadeOut",
            tapToDismiss: !1
        });
        @elseif(session('error'))
        toastr.error("{{ session('error') }}",{
            timeOut: 500000000,
            closeButton: !0,
            debug: !1,
            newestOnTop: !0,
            progressBar: !0,
            positionClass: "toast-top-right",
            preventDuplicates: !0,
            onclick: null,
            showDuration: "300",
            hideDuration: "1000",
            extendedTimeOut: "1000",
            showEasing: "swing",
            hideEasing: "linear",
            showMethod: "fadeIn",
            hideMethod: "fadeOut",
            tapToDismiss: !1
        });
        @endif



    </script>
</body>

</html>
