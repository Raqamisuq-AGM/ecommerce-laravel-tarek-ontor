@extends('partials.admin.app')
@section('title')
{{ 'Edit Product' }}
@endsection
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col-md-12">
                <form method="POST" action="{{ route('admin.product.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="card mb-4">
                        <h5 class="card-header">Edit Product</h5>
                        <div class="card-body">
                            <div class="mt-3">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" class="form-control" id="title" name="title"
                                    aria-describedby="defaultFormControlHelp" value="{{ old('title') }}" />
                                @error('title')
                                <div class="form-text text-danger">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="mt-3">
                                <label for="short_desc" class="form-label">Video Description</label>
                                <input type="file" class="form-control" id="short_desc" rows="3" name="short_desc" />
                                @error('short_desc')
                                <div class="form-text text-danger">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="mt-3">
                                <label for="desc" class="form-label">Description</label>
                                <textarea id="desc" name="desc">{{ old('desc') }}</textarea>
                                @error('desc')
                                <div class="form-text text-danger">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="mt-3">
                                <label for="thumb" class="form-label">Thumbnail</label>
                                <input class="form-control" type="file" id="thumb" name="thumb"
                                    accept=".png,.jpg,.jpeg,.webp" />
                                @error('thumb')
                                <div class="form-text text-danger">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="mt-3">
                                <label for="price" class="form-label">Price</label>
                                <input id="price" class="form-control" name="price" value="{{ old('price') }}" />
                                @error('price')
                                <div class="form-text text-danger">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="mt-3">
                                <label for="price" class="form-label">SKU</label>
                                <input id="price" class="form-control" name="price" value="{{ old('price') }}" />
                                @error('price')
                                <div class="form-text text-danger">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="mt-3">
                                <label for="price" class="form-label">Category</label>
                                <select class="form-select" id="status" aria-label="Default select example"
                                    name="status">
                                    <option value="" disabled {{ old('status') ? '' : 'selected' }}>select status
                                    </option>
                                    <option value="published" {{ old('status')=='published' ? 'selected' : '' }}>
                                        Published
                                    </option>
                                    <option value="draft" {{ old('status')=='draft' ? 'selected' : '' }}>Draft</option>
                                </select>
                                @error('price')
                                <div class="form-text text-danger">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="mt-3">
                                <label for="price" class="form-label">Sub Category</label>
                                <select class="form-select" id="status" aria-label="Default select example"
                                    name="status">
                                    <option value="" disabled {{ old('status') ? '' : 'selected' }}>select status
                                    </option>
                                    <option value="published" {{ old('status')=='published' ? 'selected' : '' }}>
                                        Published
                                    </option>
                                    <option value="draft" {{ old('status')=='draft' ? 'selected' : '' }}>Draft</option>
                                </select>
                                @error('price')
                                <div class="form-text text-danger">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="mt-3">
                                <label for="price" class="form-label">Brand</label>
                                <select class="form-select" id="status" aria-label="Default select example"
                                    name="status">
                                    <option value="" disabled {{ old('status') ? '' : 'selected' }}>select status
                                    </option>
                                    <option value="published" {{ old('status')=='published' ? 'selected' : '' }}>
                                        Published
                                    </option>
                                    <option value="draft" {{ old('status')=='draft' ? 'selected' : '' }}>Draft</option>
                                </select>
                                @error('price')
                                <div class="form-text text-danger">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="mt-3">
                                <label for="TagifyBasic" class="form-label">
                                    Color (use comma for separate keywords)
                                </label>
                                <input id="TagifyBasic" class="form-control" name="keywords"
                                    value="{{ old('keywords') }}" />
                                @error('keywords')
                                <div class="form-text text-danger">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="mt-3">
                                <label for="TagifyBasic2" class="form-label">
                                    Sizes (use comma for separate keywords)
                                </label>
                                <input id="TagifyBasic2" class="form-control" name="keywords"
                                    value="{{ old('keywords') }}" />
                                @error('keywords')
                                <div class="form-text text-danger">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="mb-0 mt-5">
                                <button class="btn btn-primary" type="submit">
                                    <span class="align-middle">Submit</span>
                                </button>
                            </div>
                        </div>
                    </div>

            </div>
        </div>
    </div>
</div>
@endsection

@section('style')
<link rel="stylesheet" href="{{ asset('admin/assets/vendor/libs/tagify/tagify.css') }}" />
<link href="{{ asset('admin/assets/summernote/summernote-bs4.min.css') }}" rel="stylesheet">
<style>
    .panel-heading.note-toolbar {
        background: #232432 !important;
    }

    .ck-content {
        height: 500px;
    }
</style>
@endsection

@section('scripts')
<script src="{{ asset('admin/assets/vendor/libs/tagify/tagify.js') }}"></script>
<script src="{{ asset('admin/assets/js/forms-tagify.js') }}"></script>
<script src="{{ asset('admin/assets/summernote/popper.min.js') }}"></script>
<script src="{{ asset('admin/assets/summernote/bootstrap.min.js') }}"></script>
<script src="{{ asset('admin/assets/summernote/summernote-bs4.min.js') }}"></script>
<script>
    $(document).ready(function() {
            $('#desc').summernote({
                tabsize: 2,
                height: 500,
            });
        });
</script>
@endsection