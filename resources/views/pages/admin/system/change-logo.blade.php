@extends('partials.admin.app')
@section('title')
{{ 'Upload Logo' }}
@endsection
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            <div class="col">
                <h6 class="mt-4">Settings</h6>
                <div class="nav-align-top mb-3">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="nav-item">
                            <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#form-tabs-personal"
                                role="tab" aria-selected="true">
                                Upload Logo & Fav
                            </button>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="form-tabs-personal" role="tabpanel">
                            <form method="POST" action="{{ route('admin.update.password') }}">
                                @csrf
                                <input type="text" name="profile" value="yes" hidden>
                                <div class="row g-3">
                                    <div class="col-md-6">
                                        <div>
                                            <img src="" alt="" style="width: 290px;
                                                height: 100px;" id="companyLogo">
                                            <br>
                                            <label class="form-label" for="logo">Update logo</label>
                                            <input type="file" name="logo" id="logo" class="form-control"
                                                accept=".png,.jpg,.jpeg,.webp" onchange="changeLogo(event)" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div>
                                            <img src="" alt="" style="height: 100px;
                                                width: 90px;" id="companyFav">
                                            <br>
                                            <label class="form-label" for="fav">Update favicon</label>
                                            <input type="file" name="fav" id="fav" class="form-control"
                                                accept=".png,.jpg,.jpeg,.webp" onchange="changeFav(event)" />
                                        </div>
                                    </div>
                                </div>
                                <div class="pt-4">
                                    <button type="submit" class="btn btn-primary me-sm-3 me-1">
                                        Submit
                                    </button>
                                    <button type="reset" class="btn btn-label-secondary">
                                        Cancel
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('style')

@endsection

@section('scripts')

@endsection