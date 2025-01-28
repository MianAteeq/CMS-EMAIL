@extends('admin::admin.layout.app')
@section('content')
<div class="content-header row">
    <div class="content-header-left col-md-6 col-12 mb-2">
        <h3 class="content-header-title">Vehicle Specialist</h3>
        <div class="row breadcrumbs-top">
            <div class="breadcrumb-wrapper col-12">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Vehicle Specialist</li>
                </ol>
            </div>
        </div>
    </div>
</div>
@if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong style="color: white">{{ $message }}</strong>
</div>
@endif @if ($message = Session::get('error'))
<div class="alert alert-danger alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong style="color: white">{{ $message }}</strong>
</div>
@endif
<div class="content-body">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Vehicle Specialist Table</h4>

            <div class="heading-elements">
                <ul class="list-inline mb-0">
                    {{-- <a href="{{route('admin.job.type.add')}}" class="btn btn-info">Add Vehicle Specialist/a> --}}
                    <button type="button" class="btn mr-1 mb-1 btn btn-info waves-effect waves-light"><i class="la la-plus-circle"></i>
                       <a href="{{route('admin.vehicle.specialist.add')}}" style="color: white">Add Vehicle Specialist </a></button>
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
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($warranty_jobs as $warranty_job)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ Str::ucfirst($warranty_job['name']) }}</td>
                                <td>
                                    <a href="{{route('admin.vehicle.specialist.edit',$warranty_job['id'])}}" class="primary edit mr-1"><i class="la la-pencil"></i></a>
                                    <a class="danger delete mr-1" onclick="delete_this(`{{ $warranty_job['id'] }}`,`{{ route('admin.vehicle.specialist.destroy',$warranty_job->id) }}`)"><i class="la la-trash-o"></i></a>
                                </td>
                            </tr>
                                
                            @endforeach
                          
                          
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
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
    function delete_this(id,url) {
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
                    window.location.href = url;
                } else {
                    swal("Cancelled", "Your imaginary file is safe :)", "error");
                }
            });
    }
</script>
@endsection