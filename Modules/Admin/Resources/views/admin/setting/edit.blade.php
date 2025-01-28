@extends('admin::admin.layout.app')
@section('content')
<div class="content-header row">
    <div class="content-header-left col-md-6 col-12 mb-2">
        <h3 class="content-header-title">Update</h3>
        <div class="row breadcrumbs-top">
            <div class="breadcrumb-wrapper col-12">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Update Add</li>
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
            <form method="POST" action="{{route('admin.settings.update')}}" enctype="multipart/form-data" class="needs-validation" novalidate>
                @csrf
                <input type="hidden" name="id" value="{{$settings->id}}">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <fieldset>
                                <h5>Settings Name
                                    <small class="text-muted">(Settings Name)</small>
                                </h5>
                                <div class="form-group">
                                    <input name="name" class="form-control date-inputmask" type="text" placeholder="Settings Name" required value="{{$settings->name}}">
                                </div>
                            </fieldset>
                        </div>
                        <div class="col-md-12">
                            <fieldset>
                                <h5>Settings Description
                                    <small class="text-muted">(Settings Description)</small>
                                </h5>
                                <div class="form-group">
                                    <textarea name="description" id="" class="summernote">{{$settings->value}}</textarea>
                                </div>
                            </fieldset>
                        </div>
                    </div>
                    <div class="row">
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
@section("script")
<script>
(function(window, document, $) {
  'use strict';
  // Basic Summernote
  $('.summernote').summernote({height: 200});

})(window, document, jQuery);
</script>
@endsection