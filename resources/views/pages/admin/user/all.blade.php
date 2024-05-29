@extends('partials.admin.app')
@section('title')
{{ 'All Users' }}
@endsection
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">
            <div class="d-flex justify-content-between">
                <h5 class="card-header">All Users</h5>
            </div>
            <div class="card-datatable text-nowrap">
                <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            {{-- <div class="dataTables_length" id="DataTables_Table_0_length">
                                <label>Show
                                    <select name="DataTables_Table_0_length" aria-controls="DataTables_Table_0"
                                        class="form-select">
                                        <option value="10">10</option>
                                        <option value="25">25</option>
                                        <option value="50">50</option>
                                        <option value="100">100</option>
                                    </select> entries
                                </label>
                            </div> --}}
                        </div>
                        <div class="col-sm-12 col-md-6 d-flex justify-content-center justify-content-md-end">

                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="datatables-ajax table table-bordered dataTable no-footer" id="DataTables_Table_0"
                            aria-describedby="DataTables_Table_0_info" style="width: 1390px;">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Avatar</th>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Address</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="odd">
                                    <td>1</td>
                                    <td><img src="" style="width: 30px;
                                        height: 30px;
                                        overflow: hidden;
                                        border-radius: 50%;
                                        margin-right: 15px;"></td>
                                    <td>Jhon doe</td>
                                    <td>01689541269</td>
                                    <td>user@gmail.com</td>
                                    <td>
                                        feafgweag,egreaw gra
                                    </td>
                                </tr>
                                {{-- <tr>
                                    <td colspan="3" class="text-center">
                                        No blogs available
                                    </td>
                                </tr> --}}
                            </tbody>
                        </table>
                    </div>
                    {{-- @if ($blogs->lastPage() > 1)
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6">
                            <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
                                <ul class="pagination">
                                    @if ($blogs->onFirstPage())
                                    <li class="paginate_button page-item previous disabled"
                                        id="DataTables_Table_0_previous">
                                        <span aria-controls="DataTables_Table_0" aria-disabled="true" role="link"
                                            data-dt-idx="previous" tabindex="-1" class="page-link">
                                            Previous
                                        </span>
                                    </li>
                                    @else
                                    <li class="paginate_button page-item previous" id="DataTables_Table_0_previous">
                                        <a href="{{ $blogs->previousPageUrl() }}" aria-controls="DataTables_Table_0"
                                            aria-disabled="true" role="link" data-dt-idx="previous" tabindex="-1"
                                            class="page-link">
                                            Previous
                                        </a>
                                    </li>
                                    @endif
                                    @foreach ($blogs->getUrlRange(1, $blogs->lastPage()) as $page => $url)
                                    <li
                                        class="paginate_button page-item {{ $blogs->currentPage() === $page ? 'active' : '' }}">
                                        <a href="{{ $url }}" aria-controls="DataTables_Table_0" role="link"
                                            aria-current="page" data-dt-idx="0" tabindex="0" class="page-link">
                                            {{ $page }}
                                        </a>
                                    </li>
                                    @endforeach
                                    @if ($blogs->hasMorePages())
                                    <li class="paginate_button page-item next" id="DataTables_Table_0_next">
                                        <a href="{{ $blogs->nextPageUrl() }}" aria-controls="DataTables_Table_0"
                                            role="link" data-dt-idx="next" tabindex="0" class="page-link">
                                            Next
                                        </a>
                                    </li>
                                    @else
                                    <li class="paginate_button page-item next" id="DataTables_Table_0_next">
                                        <span aria-controls="DataTables_Table_0" role="link" data-dt-idx="next"
                                            tabindex="0" class="page-link">
                                            Next
                                        </span>
                                    </li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </div>
                    @endif --}}
                </div>
            </div>
        </div>

    </div>
</div>
@endsection

@section('style')
<link rel="stylesheet" href="{{ asset('admin/assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css') }}" />
<link rel="stylesheet"
    href="{{ asset('admin/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css') }}" />
<link rel="stylesheet"
    href="{{ asset('admin/assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.css') }}" />
<link rel="stylesheet" href="{{ asset('admin/assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css') }}" />
<link rel="stylesheet" href="{{ asset('admin/assets/vendor/libs/flatpickr/flatpickr.css') }}" />
<!-- Row Group CSS -->
<link rel="stylesheet" href="{{ asset('admin/assets/vendor/libs/datatables-rowgroup-bs5/rowgroup.bootstrap5.css') }}" />
@endsection

@section('scripts')

@endsection