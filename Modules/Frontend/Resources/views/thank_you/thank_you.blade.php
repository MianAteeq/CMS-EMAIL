@extends('frontend::layout.app')

@section('css')

<style>
    .thankyou-wrapper {
        width: 100%;
        height: auto;
        margin: auto;
        margin-top:100px;
        background: #ffffff;
        padding: 10px 0px 50px;
    }

    .thankyou-wrapper h1 {
        font: 100px Arial, Helvetica, sans-serif;
        text-align: center;
        color: #333333;
        padding: 0px 10px 10px;
    }

    .thankyou-wrapper p {
        font: 26px Arial, Helvetica, sans-serif;
        text-align: center;
        color: #333333;
        padding: 5px 10px 10px;
    }

    .thankyou-wrapper a {
        font: 26px Arial, Helvetica, sans-serif;
        text-align: center;
        color: #ffffff;
        display: block;
        text-decoration: none;
        width: 250px;
        background: #E47425;
        margin: 10px auto 0px;
        padding: 15px 20px 15px;
        border-bottom: 5px solid #F96700;
    }

    .thankyou-wrapper a:hover {
        font: 26px Arial, Helvetica, sans-serif;
        text-align: center;
        color: #ffffff;
        display: block;
        text-decoration: none;
        width: 250px;
        background: #F96700;
        margin: 10px auto 0px;
        padding: 15px 20px 15px;
        border-bottom: 5px solid #F96700;
    }
</style>

@endsection
@section('content')
<section class="login-main-wrapper">
    <div class="main-container">
        <div class="login-process">
            <div class="login-main-container">
                <div class="thankyou-wrapper">
                    <h1><img src="https://t3.ftcdn.net/jpg/02/91/52/22/360_F_291522205_XkrmS421FjSGTMRdTrqFZPxDY19VxpmL.jpg"
                            alt="thanks" /></h1>
                    <p>for contacting us, we will get in touch with you soon... </p>
                    <a href="{{ url('/') }}">Back to home</a>
                    <div class="clr"></div>
                </div>
                <div class="clr"></div>
            </div>
        </div>
        <div class="clr"></div>
    </div>
</section>

@endsection
