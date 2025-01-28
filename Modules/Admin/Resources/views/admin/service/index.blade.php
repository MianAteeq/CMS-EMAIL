@extends('admin::admin.layout.app')
@section('content')
<div class="content-header row">
    <div class="content-header-left col-md-6 col-12 mb-2">
        <h3 class="content-header-title">Service</h3>
        <div class="row breadcrumbs-top">
            <div class="breadcrumb-wrapper col-12">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Services</li>
                </ol>
            </div>
        </div>
    </div>
</div>
<div class="content-body">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Service Table</h4>
            <div class="heading-elements">
                <ul class="list-inline mb-0">
                    <a href="{{route('admin.service.add')}}" class="btn btn-info">Create Service</a>
                </ul>
            </div>
        </div>
        <div class="card-content collapse show">
            <div class="card-body card-dashboard">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered zero-configuration">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Parent Service</th>
                                <th>Icon</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @dd(count($total_services)) --}}
                            {{-- @if($services) --}}
                            @foreach($total_services as $service)
                            <tr>
                                <td>{{$service->id}}</td>
                                <td>{{$service->name}}</td>
                                <td>{{$service->service==null?'N/A':$service->service['name']}}</td>
                                <td>
                                    <div class="avatar">
                                        <img src="{{asset($service->icon)}}" alt="avtar img holder">
                                    </div>
                                </td>
                                <td>
                                    <div class="avatar">
                                        <img src="{{asset($service->image)}}" alt="avtar img holder">
                                    </div>
                                </td>
                                <td>
                                    <a href="{{url('/admin/services/edit/' . $service->id)}}" class="primary edit mr-1"><i class="la la-pencil"></i></a>
                                    <a class="danger delete mr-1" onclick="delete_this('{{$service->id}}')"><i class="la la-trash-o"></i></a>
                                </td>
                            </tr>
                            @endforeach
                            {{-- @endif --}}
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Parent Service</th>
                                <th>Icon</th>
                                <th>Image</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section("script")
<script src="{{ URL::to('modules/admin/app-assets/vendors/js/tables/datatable/datatables.min.js') }}"></script>
<script src="{{ URL::to('modules/admin/app-assets/vendors/js/tables/datatable/dataTables.buttons.min.js') }}"></script>
<script src="{{ URL::to('modules/admin/app-assets/vendors/js/tables/buttons.flash.min.js') }}"></script>
<script src="{{ URL::to('modules/admin/app-assets/vendors/js/tables/jszip.min.js') }}"></script>
<script src="{{ URL::to('modules/admin/app-assets/vendors/js/tables/pdfmake.min.js') }}"></script>
<script src="{{ URL::to('modules/admin/app-assets/vendors/js/tables/vfs_fonts.js') }}"></script>
<script src="{{ URL::to('modules/admin/app-assets/vendors/js/tables/buttons.html5.min.js') }}"></script>
<script src="{{ URL::to('modules/admin/app-assets/vendors/js/tables/buttons.print.min.js') }}"></script>
<script src="{{ URL::to('modules/admin/app-assets/js/scripts/tables/datatables/datatable-advanced.js') }}"></script>
<script>
    function delete_this(id) {
        swal({
                title: "Are you sure?",
                text: "But you will still be able to retrieve this file.",
                type: "warning",
                showCancelButton: true,
                confirmButtonColor: "#DD6B55",
                confirmButtonText: "Yes, archive it!",
                cancelButtonText: "No, cancel please!",
                closeOnConfirm: false,
                closeOnCancel: false
            },
            function(isConfirm) {
                if (isConfirm) {
                    window.location.href = "{{ url('admin/services/destroy/')}}/" + id;
                } else {
                    swal("Cancelled", "Your imaginary file is safe :)", "error");
                }
            });
    }
</script>
@endsection