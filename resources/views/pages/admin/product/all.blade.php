@extends('partials.admin.app')
@section('title')
{{ 'All Products' }}
@endsection
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">
            <div class="d-flex justify-content-between">
                <h5 class="card-header">All Brands</h5>
                <a href="{{route('admin.product.create')}}"
                    style="background: #787bff; width: fit-content; height: fit-content; padding: 6px 20px; border-radius: 5px; color: #fff; margin-top: 1.5rem; margin-right: 1.5rem;">Add
                    new</a>
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
                                    <th>Action</th>
                                    <th>SL</th>
                                    <th>Thumb</th>
                                    <th>Title</th>
                                    <th>Category</th>
                                    <th>Sub-category</th>
                                    <th>Brand</th>
                                    <th>SKU</th>
                                    <th>In-stock</th>
                                    <th>Price</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="odd">
                                    <td>
                                        <a href="{{route('admin.product.edit',['id'=>1])}}"
                                            class="edit-icon" style="margin-right: 15px;">
                                            <i class="fa-solid fa-pen"></i>
                                        </a>
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#deleteItemModal"
                                            data-category-id="1" onclick="document.getElementById('ItemID').value = 1">
                                            <i class="bx bx-trash me-1"></i>
                                        </a>
                                    </td>
                                    <td>1</td>
                                    <td><img src="" style="width: 30px;
                                        height: 30px;
                                        overflow: hidden;
                                        border-radius: 50%;
                                        margin-right: 15px;">
                                    </td>
                                    <th>Title</th>
                                    <th>Category</th>
                                    <th>Sub-category</th>
                                    <th>Brand</th>
                                    <th>SKU</th>
                                    <th>In-stock</th>
                                    <th>Price</th>
                                    <td>
                                        <a href="{{route('admin.product.edit',['id'=>1])}}" 
                                            class="edit-icon" style="margin-right: 15px;">
                                            <i class="fa-solid fa-pen"></i>
                                        </a>
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#deleteItemModal"
                                            data-category-id="1" onclick="document.getElementById('ItemID').value = 1">
                                            <i class="bx bx-trash me-1"></i>
                                        </a>
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

        <!-- Delete Card Modal -->
        <div class="modal fade" id="deleteItemModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered1 modal-simple modal-add-new-cc">
                <div class="modal-content p-3 p-md-5">
                    <div class="modal-body">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        <div class="text-center mb-4">
                            <h3>Delete item</h3>
                            <p>Do you want to delete this item?</p>
                        </div>
                        <form id="deleteForm" action="{{ route('admin.brand.delete', ['id' => 0]) }}" method="POST">
                            @csrf
                            <input type="hidden" name="ItemID" id="ItemID">
                            <div class="col-12 text-center">
                                <button type="submit" class="btn btn-danger me-sm-3 me-1 mt-3">
                                    Delete
                                </button>
                                <button type="button" class="btn btn-label-secondary btn-reset mt-3"
                                    data-bs-dismiss="modal" aria-label="Close">
                                    Cancel
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--/ Delete Card Modal -->
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
<script src="{{ asset('admin/assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js') }}"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
            const deleteLinks = document.querySelectorAll('.delete-item');

            deleteLinks.forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    const itemId = this.dataset.itemId;
                    const form = document.querySelector('#deleteForm');
                    form.action = '{{ route('admin.product.delete', ['id' => '']) }}/' + itemId;
                });
            });
        });
</script>
@endsection