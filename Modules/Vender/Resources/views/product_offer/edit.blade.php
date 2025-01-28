@extends('vender::layouts.master')

@section('css_custom')

<link rel="stylesheet" type="text/css" href="https://jeremyfagis.github.io/dropify/dist/css/dropify.min.css">
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<style>
    .dropify-wrapper {

        height: 93px !important;

    }
    .select2-container--default .select2-selection--multiple .select2-selection__choice__display {
    cursor: default;
    padding-left: 16px;
    padding-right: 5px;
}
</style>
@endsection
@section('content')
<!-- users edit start -->
<section class="users-edit">
    <div class="card">
        <div class="card-content">
            <form novalidate method="POST" action="{{ route('vender.product.offer.update') }}"
                enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{ $product_offer['id'] }}">
                <input type="hidden" name="old_image" value="{{ $product_offer['image'] }}">
                <div class="card-body">

                    <div class="tab-pane active" id="account" aria-labelledby="account-tab" role="tabpanel">
                        <!-- users edit media object start -->

                        <!-- users edit media object ends -->
                        <!-- users edit account form start -->

                        <div class="row">
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <div class="controls">
                                        <label>Product Name</label>
                                        <input type="text" class="form-control" name="product_name"
                                            placeholder="Product Name" value="{{ $product_offer['product_name'] }}" required
                                            data-validation-required-message="This product_name field is required">
                                        @if ($errors->has('product_name'))
                                        <span class="text-danger">{{ $errors->first('product_name') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Job Type</label>
                                    <select  class="form-control js-example-basic-multiple" name="job_type_id[]" multiple="multiple" required>
                                        @foreach ($job_types as $job_type)

                                        <option value="{{ $job_type['id'] }}" @foreach ($product_offer['job_types'] as $jobtype)
                                        @if($jobtype['job_type_id']==$job_type['id']) selected  @endif
                                        @endforeach >{{ $job_type['name'] }}</option>

                                        @endforeach



                                    </select>
                                    @if ($errors->has('job_type_id'))
                                    <span class="text-danger">{{ $errors->first('job_type_id') }}</span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <label>Job Coverage</label>
                                    <select class="form-control" name="job_coverage_id" required>
                                        @foreach ($price_types as $job_type)

                                        <option value="{{ $job_type['id'] }}" @if($product_offer['job_coverage_id']==$job_type['id']) selected  @endif>{{ $job_type['name'] }}</option>

                                        @endforeach

                                    </select>
                                    @if ($errors->has('job_coverage_id'))
                                    <span class="text-danger">{{ $errors->first('job_coverage_id') }}</span>
                                    @endif
                                </div>

                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <div class="controls">
                                        <label>Product Pirce</label>
                                        <input type="number" min="1" class="form-control" name="price"
                                            placeholder="Product Price" value="{{ $product_offer['price'] }}" required
                                            data-validation-required-message="This price field is required">
                                        @if ($errors->has('price'))
                                        <span class="text-danger">{{ $errors->first('price') }}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Price Type</label>
                                    <select class="form-control" name="price_type">
                                        <option value="FIXED" @if($product_offer['price_type']=="FIXED") selected @endif>FIXED</option>
                                        <option value="STARTING_FROM" @if($product_offer['price_type']=="STARTING_FROM") selected @endif>STARTING FROM</option>

                                    </select>
                                </div>
                                <div class="form-group">
                                    <div class="controls">
                                        <label>Product Image</label>
                                        <input type="file" class="form-control dropify" name="image"
                                            placeholder="Product Image" value="" data-default-file="{{ URL::to($product_offer['image']) }}"
                                            data-validation-required-message="This image field is required">
                                        @if ($errors->has('image'))
                                        <span class="text-danger">{{ $errors->first('image') }}</span>
                                        @endif
                                    </div>
                                </div>


                            </div>




                        </div>

                        <hr>
                        <div class="row">
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <div class="controls">
                                        <label>Product Description</label>
                                        <textarea type="text" class="form-control" name="description"
                                            placeholder="Product Description" value="" required
                                            data-validation-required-message="This description field is required">{{ $product_offer['description'] }}</textarea>
                                        @if ($errors->has('description'))
                                        <span class="text-danger">{{ $errors->first('description') }}</span>
                                        @endif
                                    </div>
                                </div>



                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <div class="controls">
                                        <label>Product Term Condition</label>
                                        <textarea type="text" class="form-control" name="term_condition"
                                            placeholder="Product Term Condition" value="" required
                                            data-validation-required-message="This term_condition field is required">{{ $product_offer['term_condition'] }}</textarea>
                                        @if ($errors->has('term_condition'))
                                        <span class="text-danger">{{ $errors->first('term_condition') }}</span>
                                        @endif
                                    </div>
                                </div>




                            </div>




                        </div>
                        <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
                            <button type="submit" class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1">Update Product
                            </button>

                        </div>

                        <!-- users edit account form ends -->
                    </div>
            </form>
        </div>
    </div>
</section>
<!-- users edit ends -->
@endsection
@section('css_lib')
<!-- BEGIN: Vendor CSS-->
<link rel="stylesheet" type="text/css" href="{{asset('/modules/vender')}}/app-assets/vendors/css/vendors.min.css">
<link rel="stylesheet" type="text/css"
    href="{{ URL::to('modules/vender/app-assets/vendors/css/forms/icheck/icheck.css') }}">
<link rel="stylesheet" type="text/css"
    href="{{ URL::to('modules/vender/app-assets/vendors/css/forms/icheck/custom.css') }}">
<link rel="stylesheet" type="text/css"
    href="{{asset('/modules/vender')}}/app-assets/css/plugins/forms/validation/form-validation.css">
{{--
<link rel="stylesheet" type="text/css"
    href="{{asset('/modules/vender')}}/app-assets/vendors/css/forms/selects/select2.min.css"> --}}
{{--
<link rel="stylesheet" type="text/css"
    href="{{asset('/modules/vender')}}/app-assets/vendors/css/pickers/pickadate/pickadate.css"> --}}
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
{{--
<link rel="stylesheet" type="text/css" href="{{asset('/modules/vender')}}/app-assets/css/pages/page-users.css"> --}}

<link rel="stylesheet" type="text/css"
    href="{{ URL::to('modules/vender/app-assets/css/plugins/forms/checkboxes-radios.css') }}">
<!-- END: Page CSS-->

<!-- BEGIN: Custom CSS-->
<link rel="stylesheet" type="text/css" href="{{ URL::to('modules/vender/assets/css/style.css') }}">
<!-- END: Custom CSS-->

@endsection
@section('scripts_lib')
<!-- BEGIN: Vendor JS-->
<script src="{{asset('/modules/vender')}}/app-assets/vendors/js/vendors.min.js"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<script src="{{asset('/modules/vender')}}/app-assets/vendors/js/ui/jquery.sticky.js"></script>
{{-- <script src="{{asset('/modules/vender')}}/app-assets/vendors/js/charts/jquery.sparkline.min.js"></script> --}}
{{-- <script src="{{asset('/modules/vender')}}/app-assets/vendors/js/forms/select/select2.full.min.js"></script> --}}
<script src="{{asset('/modules/vender')}}/app-assets/vendors/js/forms/validation/jqBootstrapValidation.js"></script>
{{-- <script src="{{asset('/modules/vender')}}/app-assets/vendors/js/pickers/pickadate/picker.js"></script> --}}
{{-- <script src="{{asset('/modules/vender')}}/app-assets/vendors/js/pickers/pickadate/picker.date.js"></script> --}}
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="{{asset('/modules/vender')}}/app-assets/js/core/app-menu.js"></script>
<script src="{{ URL::to('modules/vender/app-assets/vendors/js/forms/icheck/icheck.min.js') }}"></script>
<script src="{{asset('/modules/vender')}}/app-assets/js/core/app.js"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
{{-- <script src="{{asset('/modules/vender')}}/app-assets/js/scripts/ui/breadcrumbs-with-stats.js"></script> --}}
{{-- <script src="{{asset('/modules/vender')}}/app-assets/js/scripts/pages/page-users.js"></script> --}}
{{-- <script src="{{asset('/modules/vender')}}/app-assets/js/scripts/navs/navs.js"></script> --}}
<script src="{{ URL::to('modules/vender/app-assets/js/scripts/forms/checkbox-radio.js') }}"></script>

<script type="text/javascript" src="https://jeremyfagis.github.io/dropify/dist/js/dropify.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>



<script>
    $('.dropify').dropify();

    $(document).ready(function() {
    $('.js-example-basic-multiple').select2();
});
    
</script>

@endsection