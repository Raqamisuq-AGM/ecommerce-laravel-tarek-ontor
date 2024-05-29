@extends('partials.admin.app')
@section('title')
{{ 'Dashboard' }}
@endsection
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col-lg-12 col-md-12 order-1">
            <div class="row">
                <!-- Total Products -->
                <div class="col-lg-3 col-md-3 col-6 mb-4">
                    <a href="{{ route('admin.product.all') }}">
                        <div class="card">
                            <div class="card-body">
                                <span>Total products</span>
                                <h3 class="card-title text-nowrap mb-1 me-3">50</h3>
                                <small class="text-success fw-medium">$50</small>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Total Orders -->
                <div class="col-lg-3 col-md-3 col-6 mb-4">
                    <a href="{{ route('admin.order.all') }}">
                        <div class="card">
                            <div class="card-body">
                                <span>Total Orders</span>
                                <h3 class="card-title text-nowrap mb-1 me-3">50</h3>
                                <small class="text-success fw-medium">$50</small>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Total Earnings -->
                <div class="col-lg-3 col-md-3 col-6 mb-4">
                    <a href="#">
                        <div class="card">
                            <div class="card-body">
                                <span>Total Earnings</span>
                                <h3 class="card-title text-nowrap mb-1 me-3">50</h3>
                                <small class="text-success fw-medium">$50</small>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- Total Customers -->
                <div class="col-lg-3 col-md-3 col-6 mb-4">
                    <a href="{{route('admin.user.all')}}">
                        <div class="card">
                            <div class="card-body" style="height: 125px;">
                                <span>Total Customers</span>
                                <h3 class="card-title text-nowrap mb-1 me-3">50</h3>
                                <small class="text-success fw-medium"></small>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="card">
                    <h5 class="card-header">Latest Orders</h5>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="datatables-ajax table table-bordered dataTable no-footer"
                                id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info"
                                style="width: 1390px;">
                                <thead>
                                    <tr>
                                        <th>Action</th>
                                        <th>SL</th>
                                        <th>Order ID</th>
                                        <th>User</th>
                                        <th>Created</th>
                                        <th>Status</th>
                                        <th>Total</th>
                                        <th>Billing</th>
                                        <th>Payment Type</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="odd">
                                        <td></td>
                                        <td>1</td>
                                        <td>2148574</td>
                                        <td>
                                            <img src="" style="width: 30px;
                                            height: 30px;
                                            overflow: hidden;
                                            border-radius: 50%;
                                            margin-right: 15px;">
                                            <span>Jhon doe</span>
                                        </td>
                                        <td>
                                            8/12/24 08:00 AM
                                        </td>
                                        <td>
                                            <span class="badge bg-label-primary me-1">active</span>
                                        </td>
                                        <td>
                                            $50
                                        </td>
                                        <td>
                                            billing address
                                        </td>
                                        <td>
                                            Cash on
                                        </td>
                                        <td>

                                        </td>
                                    </tr>
                                    {{-- <tr>
                                        <td colspan="6" class="text-center">
                                            No data available
                                        </td>
                                    </tr> --}}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection