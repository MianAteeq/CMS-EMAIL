@extends('frontend::new-layouts.master')


@section('content')

<div class="content-body">
    <div  class="row" style="border-bottom: 3px solid #949494;">
        <div class="col-xl-12 col-12">
           <h3 class="h3">Business registration application</h3>
        </div>

    </div>

    <div class="row" style="margin-top: 10px;">
        <div class="col-md-4">

            <h4 class="h3" style="border-radius: 7px;border: 2px solid black;padding: 10px;font-weight: 600;
            font-size: 17px; "> <img src="/home.png" style="width: 22px;margin-top: -5px;" > Overview</h2>

        </div>

        <div class="col-md-8" style="border: 2px solid black;border-radius: 8px;padding:inherit">
            <div class="link-body" style="height: 400px;">
                <p style="padding: 10px">Thank you for choosing to register your business on our LinkMoto platform.</p>


            </div>
            <div class="footers">
                <form action="{{route('vender.profile.start')}}" method="POST">

                @csrf

                <input type="hidden" id="is_save_later" name="is_save_later" value="0">
                <button type="submit" class="btn btn-dark round btn-min-width mr-1 mb-1" style="float: right;">START</button>
               <a  onclick="saveforlater()"> <button type="button" class="btn btn-dark round btn-min-width mr-1 mb-1" style="float: right;">SAVE AND EXIT</button></a>

            </form>

            </div>

        </div>

    </div>

</div>
@endsection

@section('js')

<script>
    function saveforlater(){
        $('#is_save_later').val(1);
        $("form").submit();
    }
</script>

@endsection
