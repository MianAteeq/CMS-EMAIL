@extends('admin::admin.layout.app')
@section('content')
<div class="content-body">
    <!-- users view start -->
    <section class="users-view">
        <!-- users view media object start -->
        <div class="row">
            <div class="col-12 col-sm-7">
                <div class="media mb-2">
                    <a class="mr-1" href="#">
                        <img src="{{asset('/app-assets/images/portrait/small/avatar-s-26.png')}}" alt="users view avatar" class="users-avatar-shadow rounded-circle" height="64" width="64">
                    </a>
                    <div class="media-body pt-25">
                        <h4 class="media-heading"><span class="users-view-name">Dean Stanley </span><span class="text-muted font-medium-1"> @</span><span class="users-view-username text-muted font-medium-1 ">candy007</span></h4>
                        <span>ID:</span>
                        <span class="users-view-id">305</span>
                    </div>
                </div>
            </div>
            <!-- <div class="col-12 col-sm-5 px-0 d-flex justify-content-end align-items-center px-1 mb-2">
                <a href="#" class="btn btn-sm mr-25 border"><i class="ft-message-square font-small-3"></i></a>
                <a href="#" class="btn btn-sm mr-25 border">Profile</a>
                <a href="../../../html/ltr/vertical-menu-template/page-users-edit.html" class="btn btn-sm btn-primary">Edit</a>
            </div> -->
        </div>
        <!-- users view media object ends -->
        <!-- users view card data start -->
        <div class="card">
            <div class="card-content">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 col-md-4">
                            <h4 class="card-title">Client Info...</h4>
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <td>Registered:</td>
                                        <td>01/01/2019</td>
                                    </tr>
                                    <tr>
                                        <td>Latest Activity:</td>
                                        <td class="users-view-latest-activity">30/04/2019</td>
                                    </tr>
                                    <tr>
                                        <td>Verified:</td>
                                        <td class="users-view-verified">Yes</td>
                                    </tr>
                                    <tr>
                                        <td>Role:</td>
                                        <td class="users-view-role">Staff</td>
                                    </tr>
                                    <tr>
                                        <td>Status:</td>
                                        <td><span class="badge badge-success users-view-status">Active</span></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-12 col-md-8">
                            <h4 class="card-title">Vehical Info...</h4>
                            <div class="table-responsive">
                                <table class="table mb-0">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Colour</th>
                                            <th>Model</th>
                                            <th>Registered No</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>212</td>
                                            <td>White</td>
                                            <td>2020</td>
                                            <td>As788</td>
                                            <td>
                                                <a href="javascript:void(0)" class="success edit mr-1"><i class="la la-eye"></i></a>
                                                <a href="javascript:void(0)" class="primary edit mr-1"><i class="la la-pencil"></i></a>
                                                <a href="javascript:void(0)" class="danger delete mr-1"><i class="la la-trash-o"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>212</td>
                                            <td>White</td>
                                            <td>2020</td>
                                            <td>As788</td>
                                            <td>
                                                <a href="javascript:void(0)" class="success edit mr-1"><i class="la la-eye"></i></a>
                                                <a href="javascript:void(0)" class="primary edit mr-1"><i class="la la-pencil"></i></a>
                                                <a href="javascript:void(0)" class="danger delete mr-1"><i class="la la-trash-o"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>212</td>
                                            <td>White</td>
                                            <td>2020</td>
                                            <td>As788</td>
                                            <td>
                                                <a href="javascript:void(0)" class="success edit mr-1"><i class="la la-eye"></i></a>
                                                <a href="javascript:void(0)" class="primary edit mr-1"><i class="la la-pencil"></i></a>
                                                <a href="javascript:void(0)" class="danger delete mr-1"><i class="la la-trash-o"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- users view card data ends -->
        <!-- users view card details start -->

        <!-- users view card details ends -->

    </section>
    <!-- users view ends -->
</div>
@endsection