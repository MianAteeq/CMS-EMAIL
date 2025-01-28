<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Modern admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities with bitcoin dashboard.">
    <meta name="keywords" content="admin template, modern admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
    <meta name="author" content="PIXINVENT">
    <title>Business Registration Portal</title>
    <link rel="apple-touch-icon" href="/modules/admin/app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="/modules/admin/app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i%7CQuicksand:300,400,500,700" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="/modules/admin/app-assets/vendors/css/vendors.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="/modules/admin/app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="/modules/admin/app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="/modules/admin/app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="/modules/admin/app-assets/css/components.css">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="/modules/admin/app-assets/css/core/menu/menu-types/vertical-menu.css">
    <link rel="stylesheet" type="text/css" href="/modules/admin/app-assets/css/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="/modules/admin/app-assets/vendors/css/cryptocoins/cryptocoins.css">
    <link rel="stylesheet" type="text/css" href="/modules/admin/app-assets/vendors/css/charts/apexcharts.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="/modules/admin/assets/css/style.css">
    <!-- END: Custom CSS-->

    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">

    @yield('css')
</head>

<style>
    .bg-info {
    background-color: #fff !important;
    border-bottom: 1px solid #f26622;
}
.header-navbar .navbar-header .navbar-brand .brand-logo {
    width: 200px;
    margin-top: 7px;
}
.main-menu.menu-shadow {
    box-shadow: none;
}
.nav-item{
    margin-left: 11px
}
.nav-item a{
    padding-bottom: 0px!important;
    padding-top: 15px!important;
    font-family: 'Poppins'!important;
    color: black!important;
    font-size: 14px;
}
.main-menu.menu-light .navigation > li.active > a {
    padding: 12px 17px 12px 17px;
    padding-left: 0px;
    color: #f26622 !important;
}
.main-menu.menu-light .navigation > li.active > a {
    font-weight: 700;
    background: none!important;
    margin: 0 0rem 0 0rem;
    border-radius: 0.3rem;
}
body.vertical-layout.vertical-menu.menu-expanded .main-menu .navigation > li > a > i {
    margin-right: 0px;
}
body.vertical-layout.vertical-menu.menu-expanded .main-menu {

    border-right: 3px solid #C0C0C0;
}
body.vertical-layout.vertical-menu.menu-expanded .content {

    background: white;
}
html body .content .content-wrapper {

    padding-left: 0;
}
.content-body{
    padding-left: 10px;
}
.h3{
    color: black; font-family: 'Poppins'
}
.link-body{
    padding-top: 10px;
    color: black;
    font-family: 'Poppins'
}
.btn-dark {
    border-color: black !important;
    background-color: black !important;
    color: #FFFFFF;
}
.footers{
    /* position: absolute; */
    bottom: 0;
    left: 0;
    border-top: 2px solid black;
    padding-top: 5px;
    width: 100%;
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

.accordion .card-header, .default-collapse .card-header {

    color: black !important;
    padding: 1rem 0.2rem!important;
}
.collapse-icon [data-toggle="collapse"]:after {
    position: absolute;
    top: 48%;
    right: 20px;
    margin-top: -8px;
    font-family: 'feather';
    content: "\e845";
    transition: all 300ms linear 0s;
    font-size: 18px;
    font-weight: 900;
}
.collapse-icon [data-toggle="collapse"]:before {
    position: absolute;
    top: 48%;
    right: 20px;
    margin-top: -8px;
    font-family: 'feather';
    content: "\e842";
    transition: all 300ms linear 0s;
    font-size: 18px;
    font-weight: 900;
}
.card>hr {
    margin-right: 0;
    margin-left: 0;
    height: 0px;
}

.card .card-title {
    font-weight: 500;
    letter-spacing: 0.05rem;
    font-size: 1rem;
}
.view-btn {
    float: left;
    margin-top: 0px;
    padding: 9px;
    margin-left: 10px;
    background-color: black !important;
    border-color: black !important;
}
/*  */
</style>
