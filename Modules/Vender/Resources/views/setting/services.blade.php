@extends('vender::layouts.master')

@section('css_custom')
<link rel="stylesheet" type="text/css"
    href="{{ URL::to('modules/admin/app-assets/css/plugins/forms/extended/form-extended.css') }}">
<link rel="stylesheet" type="text/css"
    href="https://unpkg.com/file-upload-with-preview/dist/file-upload-with-preview.min.css" />
    <style>
      /* Hiding the checkbox, but allowing it to be focused */
.badgebox
{
    opacity: 0;
}

.badgebox + .badge
{
    /* Move the check mark away when unchecked */
    text-indent: -999999px;
    /* Makes the badge's width stay the same checked and unchecked */
	width: 27px;
}

.badgebox:focus + .badge
{
    /* Set something to make the badge looks focused */
    /* This really depends on the application, in my case it was: */
    
    /* Adding a light border */
    box-shadow: inset 0px 0px 5px;
    /* Taking the difference out of the padding */
}

.badgebox:checked + .badge
{
    /* Move the check mark back when checked */
	text-indent: 0;
}
    </style>
@endsection
@section('content')
<section id="page-account-settings">
    <div class="row">
        <!-- left menu section -->
       
   
        
            <div class="col-md-12">
               
                <div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <div class="tab-content">

                                <div role="tabpanel" class="tab-pane @if(session('settingValue')=="PROFILE"||session('settingValue')==null) active @endif" id="account-vertical-general" aria-labelledby="account-pill-general" aria-expanded="true">
                                    <form novalidate method="post" action="{{ route('vender.service.update') }}" enctype="multipart/form-data">
                                        @csrf
                                        <h4>Services</h4>
                                        <hr />

                                       <div class="row">
                                        @foreach ($all_services as $service)
                                        <div class="col-md-12">
                                            <fieldset>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input selectall{{  $service['id'] }}" onchange="onchangeCheckbox(`{{ $service['id'] }}`)" name="service_id[]" value="{{ $service['id'] }}"
                                                   id="custom-warratanty{{ $service['id'] }}"
                                                        value="">
                                                    <label class="custom-control-label" for="custom-warratanty{{ $service['id'] }}">{{ $service['name'] }} (Main Services) </label>
                                                </div>
                                        </div>
                                         <hr />

                                        @foreach ($service['child_services'] as $c_service)
                                        <div class="col-md-3">
                                            <fieldset>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input tf{{ $service['id'] }}" name="service_id[]"  value="{{ $c_service['id'] }}"
                                                   id="custom-warratanty{{ $c_service['id'] }}"
                                                        value="">
                                                    <label class="custom-control-label" for="custom-warratanty{{ $c_service['id'] }}">{{ $c_service['name'] }}</label>
                                                </div>
                                        </div>

                                            
                                        @endforeach
                                         <hr />
                                        @endforeach
                                       
                                        </fieldset>
                                         </div>
                                         
                                       </div>
                                        

                                       <div class="col-12 mt-2 d-flex flex-sm-row flex-column justify-content-end">
                                        <button type="submit" class="btn btn-primary mr-sm-1 mb-1 mb-sm-0">Save
                                            changes</button>
                                        {{-- <button type="reset" class="btn btn-light">Cancel</button> --}}
                                    </div>
                               
                                    </form>
                                </div>
                               
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
@endsection
@section('css_lib')

<!-- BEGIN: Vendor CSS-->
<link rel="stylesheet" type="text/css"
    href="{{asset('/modules/vender')}}/app-assets/vendors/css/tables/datatable/datatables.min.css">
<link rel="stylesheet" type="text/css" href="{{asset('/modules/vender')}}/app-assets/vendors/css/vendors.min.css">
<link rel="stylesheet" type="text/css"
    href="{{asset('/modules/vender')}}/app-assets/vendors/css/forms/selects/select2.min.css">
<link rel="stylesheet" type="text/css"
    href="{{asset('/modules/vender')}}/app-assets/vendors/css/pickers/pickadate/pickadate.css">
<link rel="stylesheet" type="text/css"
    href="{{asset('/modules/vender')}}/app-assets/vendors/css/forms/toggle/switchery.min.css">
<!-- END: Vendor CSS-->

<!-- BEGIN: Theme CSS-->
<link rel="stylesheet" type="text/css" href="{{asset('/modules/vender')}}/app-assets/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="{{asset('/modules/vender')}}/app-assets/css/bootstrap-extended.css">
<link rel="stylesheet" type="text/css" href="{{asset('/modules/vender')}}/app-assets/css/colors.css">
<link rel="stylesheet" type="text/css" href="{{asset('/modules/vender')}}/app-assets/css/components.css">
<!-- END: Theme CSS-->

<!-- BEGIN: Page CSS-->
<link rel="stylesheet" type="text/css"
    href="{{asset('/modules/vender')}}/app-assets/css/core/menu/menu-types/horizontal-menu.css">
<link rel="stylesheet" type="text/css"
    href="{{asset('/modules/vender')}}/app-assets/css/core/colors/palette-gradient.css">
<link rel="stylesheet" type="text/css"
    href="{{asset('/modules/vender')}}/app-assets/css/plugins/forms/validation/form-validation.css">
<link rel="stylesheet" type="text/css"
    href="{{asset('/modules/vender')}}/app-assets/css/plugins/pickers/daterange/daterange.css">
<!-- END: Page CSS-->

<!-- BEGIN: Custom CSS-->
<link rel="stylesheet" type="text/css" href="{{ URL::to('modules/vender/assets/css/style.css') }}">
<!-- END: Custom CSS-->

@endsection
@section('scripts_lib')
<!-- BEGIN: Vendor JS-->
<script src="{{asset('/modules/admin')}}/app-assets/vendors/js/vendors.min.js"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<script src="{{asset('/modules/admin')}}/app-assets/vendors/js/ui/jquery.sticky.js"></script>
<script src="{{asset('/modules/admin')}}/app-assets/vendors/js/charts/jquery.sparkline.min.js"></script>
<script src="{{asset('/modules/admin')}}/app-assets/vendors/js/forms/select/select2.full.min.js"></script>
<script src="{{asset('/modules/admin')}}/app-assets/vendors/js/forms/validation/jqBootstrapValidation.js"></script>
<script src="{{asset('/modules/admin')}}/app-assets/vendors/js/pickers/pickadate/picker.js"></script>
<script src="{{asset('/modules/admin')}}/app-assets/vendors/js/pickers/pickadate/picker.date.js"></script>
<script src="{{asset('/modules/admin')}}/app-assets/vendors/js/forms/toggle/switchery.min.js"></script>
<script
    src="{{ URL::to('modules/admin/app-assets/vendors/js/forms/extended/inputmask/jquery.inputmask.bundle.min.js') }}">
</script>
<script src="{{ URL::to('modules/admin/app-assets/vendors/js/forms/extended/typeahead/typeahead.bundle.min.js') }}">
</script>
<script src="{{ URL::to('modules/admin/app-assets/vendors/js/forms/extended/typeahead/bloodhound.min.js') }}"></script>
<script src="{{ URL::to('modules/admin/app-assets/vendors/js/forms/extended/typeahead/handlebars.js') }}"></script>
<script src="{{ URL::to('modules/admin/app-assets/vendors/js/forms/extended/formatter/formatter.min.js') }}"></script>
<script src="{{ URL::to('modules/admin/app-assets/vendors/js/forms/extended/maxlength/bootstrap-maxlength.js') }}">
</script>
<script src="{{ URL::to('modules/admin/app-assets/vendors/js/forms/extended/card/jquery.card.js') }}"></script>
<!-- END: Page Vendor JS-->
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="{{asset('/modules/admin')}}/app-assets/js/core/app-menu.js"></script>
<script src="{{asset('/modules/admin')}}/app-assets/js/core/app.js"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<script src="{{asset('/modules/admin')}}/app-assets/js/scripts/ui/breadcrumbs-with-stats.js"></script>
<script src="{{asset('/modules/admin')}}/app-assets/js/scripts/pages/account-setting.js"></script>
<script src="{{asset('/modules/admin')}}/app-assets/vendors/js/tables/datatable/datatables.min.js"></script>

<script src="{{ URL::to('modules/admin/app-assets/js/scripts/forms/extended/form-inputmask.js') }}"></script>
<script src="{{ URL::to('modules/admin/app-assets/js/scripts/forms/extended/form-typeahead.js') }}"></script>
<script src="{{ URL::to('modules/admin/app-assets/js/scripts/forms/extended/form-formatter.js') }}"></script>
<script src="{{ URL::to('modules/admin/app-assets/js/scripts/forms/extended/form-maxlength.js') }}"></script>
<script src="{{ URL::to('modules/admin/app-assets/js/scripts/forms/extended/form-card.js') }}"></script>
<script src="https://unpkg.com/file-upload-with-preview/dist/file-upload-with-preview.iife.js"></script>

<script>

    function onchangeCheckbox(id){
        // alert(id);
        var status = $(`.selectall${id}`).is(":checked") ? true : false;
        console.log($(`.selectall${id}`).is(":checked"));
        $(`.tf${$(`.selectall${id}`).attr('value')}`).prop("checked",status);
    }

// $(function () {
  
//     $(".selectall").change(function(){
//     var status = $(this).is(":checked") ? true : false;
//     alert(status);
   

//     });
    


// });
    var loadFile = function(event) {
    var image = document.getElementById('output');
    image.src = URL.createObjectURL(event.target.files[0]);
    };

  let url=@json(URL::to(auth()->user()->profile_pic))

  @if(auth()->user()->profile_pic==null)

  url =@json(asset('/modules/vender/app-assets/images/portrait/small/avatar-s-18.png'));
  @endif

    function reset(){
        var image = document.getElementById('output');
        image.src = url;

    }
</script>
<script>
    var loadAddressProff = function(event) {
        
        const validImageTypes = ['image/gif', 'image/jpeg', 'image/png'];
           

            if (!validImageTypes.includes(event.target.files[0].type)) {
                $('.iframe_address_proff').show();
                $('.image_address_proff').hide();
                var image = document.getElementById('address_proff_iframe');
    
                image.src = URL.createObjectURL(event.target.files[0]);
            }else{
                $('.iframe_address_proff').hide();
                $('.image_address_proff').show();
                var image = document.getElementById('address_proff_image');
    
                image.src = URL.createObjectURL(event.target.files[0]);
            }
    
    };


</script>
<script>
    var loadMechanicDocs = function(event) {
      
    const validImageTypes = ['image/gif', 'image/jpeg', 'image/png'];
            if (!validImageTypes.includes(event.target.files[0].type)) {
                $('.iframe_mechanic').show();
                $('.image_mechanic').hide();
                var image = document.getElementById('mechanic_docs_iframe');
    
                image.src = URL.createObjectURL(event.target.files[0]);
            }else{
                $('.iframe_mechanic').hide();
                $('.image_mechanic').show();
                var image = document.getElementById('mechanic_docs_image');
    
                image.src = URL.createObjectURL(event.target.files[0]);
            }
    };


</script>

<script src="https://js.stripe.com/v3/"></script>
<script>
    var stripe = Stripe('pk_test_9jgjsQVQTSPOOcDiQwv2mc34');
    var elements = stripe.elements();
    var cardNumberElement = elements.create('cardNumber', {
    
    placeholder: 'Credit Card / Debit Card Number',
    });
    cardNumberElement.mount('#card-number-element');
    
    var cardExpiryElement = elements.create('cardExpiry', {
    
    });
    cardExpiryElement.mount('#card-expiry-element');
    
    var cardCvcElement = elements.create('cardCvc', {
    
    });
        cardCvcElement.mount('#card-cvc-element');
        const cardHolderName = document.getElementById('card-holder-name');
        const cardButton = document.getElementById('card-button');
        const clientSecret = cardButton.dataset.secret;

        console.log(clientSecret);
        
        cardButton.addEventListener('click', async (e) => {
            $('.show-loader').css("display", "revert");
       const { paymentMethod, error } = await stripe.createPaymentMethod(
        'card', cardNumberElement, {
        billing_details: { name: @json(auth()->user()->name) }
        }
        );
        
        if (error) {
        // Display "error.message" to the user...
        } else {
        // The card has been verified successfully...
        

        $.ajax({
                type: 'POST',
                url: '{{ route('vender.payment.method.update') }}',
                data: {
                    paymentMethod:paymentMethod.id,
                    _token: $('meta[name="csrf-token"]').attr('content')
                },
                success: function (response) {
                    
                
                if(response==1){
                    console.log(response);

                    $('.show-loader').css("display", "none");
                    
                  window.location.reload();
                
                }
                
                
                },
                error: function (error) {
            $('.show-loader').css("display", "none");
                
                
                }
        });
        }
        });
</script>

<script>
    // const upload = new FileUploadWithPreview.FileUploadWithPreview('myFirstImage');
    // const uploads = new FileUploadWithPreview.FileUploadWithPreview('mySecondImage');

    // $('#file-upload-with-preview-myFirstImage').attr('name', 'other_amount');
</script>

<!-- END: Page JS-->

@endsection