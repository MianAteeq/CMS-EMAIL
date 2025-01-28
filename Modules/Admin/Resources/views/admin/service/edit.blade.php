@extends('admin::admin.layout.app')
@section('content')
<div class="content-header row">
    <div class="content-header-left col-md-6 col-12 mb-2">
        <h3 class="content-header-title">Service Update</h3>
        <div class="row breadcrumbs-top">
            <div class="breadcrumb-wrapper col-12">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Service Update</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<div class="content-body">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Update Service</h4>
        </div>
        <div class="card-content collapse show">
        <form method="POST" action="{{route('admin.service.update')}}" enctype="multipart/form-data" class="needs-validation" novalidate>
                @csrf
                <input type="hidden" name="id" value="{{$service['id']}}">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <fieldset>
                                <h5>Service Name
                                    <small class="text-muted">(Service Name)</small>
                                </h5>
                                <div class="form-group">
                                    <input name="name" class="form-control date-inputmask" type="text" placeholder="Service Name" required value="{{$service['name']}}"> 
                                    <div class="invalid-feedback">
                                        Please provide a Service Name.
                                    </div>
                                </div>
                            </fieldset>
                        </div>
                        <div class="col-md-6">
                            <fieldset>
                                <h5>Service Description
                                    <small class="text-muted">(Service Description)</small>
                                </h5>
                                <div class="form-group">
                                    <input name="description" class="form-control date-inputmask" type="text" placeholder="Service Description" required value="{{$service['description']}}">
                                </div>
                            </fieldset>
                        </div>
                        <div class="col-md-6">
                            <fieldset>
                                <h5>Service Icon
                                    <small class="text-muted">(Service Icon)</small>
                                </h5>
                                <div class="form-group">
                                        <span class="form-control btn-file">
                                            Upload Icon <input type="file" name="icon" id="imgInpicon">
                                        </span>
                                        <input type="hidden" name="old_icon" value="{{$service['icon']}}">
                                </div>
                                <img id='img-upload-icon' src="{{ URL::to($service['icon']) }}" style="width: auto;" />
                            </fieldset>
                        </div>
                        <div class="col-md-6">
                            <fieldset>
                                <h5>Image
                                    <small class="text-muted">(Image)</small>
                                </h5>
                                <div class="form-group">
                                        <span class="form-control btn-file">
                                            Upload Image <input type="file" name="image" id="imgInp">
                                        </span>
                                        <input type="hidden" name="old_image" value="{{$service['image']}}">
                                </div>
                                <img id='img-upload' src="{{ URL::to($service['image']) }}" style="width: auto;" />
                            </fieldset>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-info">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@section("css_custom")
<style>
    .btn-file {
        position: relative;
        overflow: hidden;
    }

    .btn-file input[type=file] {
        position: absolute;
        top: 0;
        right: 0;
        min-width: 100%;
        min-height: 100%;
        font-size: 100px;
        text-align: right;
        filter: alpha(opacity=0);
        opacity: 0;
        outline: none;
        background: white;
        cursor: inherit;
        display: block;
    }

    #img-upload {
        width: 100%;
    }
    #img-upload-icon {
        width: 100%;
    }
</style>
@endsection
@section("script")
<script>
    $(document).ready(function() {
        $(document).on('change', '.btn-file :file', function() {
            var input = $(this),
                label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
            input.trigger('fileselect', [label]);
        });

        $('.btn-file :file').on('fileselect', function(event, label) {

            var input = $(this).parents('.input-group').find(':text'),
                log = label;

            if (input.length) {
                input.val(log);
            } else {
                if (log) console.log(log);
            }

        });

        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#img-upload').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#imgInp").change(function() {
            readURL(this);
        });

        function readURLicon(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#img-upload-icon').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#imgInpicon").change(function() {
            readURLicon(this);
        });
    });
</script>
@endsection
