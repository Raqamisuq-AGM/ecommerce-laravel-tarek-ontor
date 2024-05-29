@extends('partials.admin.app')
@section('title')
{{ 'System Details' }}
@endsection
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <div class="row">
        <div class="col">
            <h6 class="mt-4">Settings</h6>
            <div class="nav-align-top mb-3">
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#form-tabs-personal"
                            role="tab" aria-selected="true">
                            Company Info
                        </button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#form-tabs-account" role="tab"
                            aria-selected="false">
                            About
                        </button>
                    </li>
                    <li class="nav-item">
                        <button class="nav-link" data-bs-toggle="tab" data-bs-target="#form-tabs-social" role="tab"
                            aria-selected="false">
                            Social Links
                        </button>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade active show" id="form-tabs-personal" role="tabpanel">
                        <form method="POST" action="{{ route('admin.update.system') }}">
                            @csrf
                            <input type="text" name="profile" value="yes" hidden>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label" for="formtabs-first-name">Title</label>
                                    <input type="text" id="formtabs-first-name" class="form-control" value=""
                                        name="title" />
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label" for="formtabs-slogan">Slogan</label>
                                    <input type="text" id="formtabs-slogan" class="form-control" value=""
                                        name="slogan" />
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label" for="formtabs-birthdate">Company email</label>
                                    <input type="text" id="formtabs-birthdate" class="form-control" value=""
                                        name="company_email" />
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label" for="phone">Phone</label>
                                    <input type="text" id="phone" class="form-control " value="" name="keywords" />
                                </div>
                                <div class="col-md-12">
                                    <label class="form-label" for="formtabs-company_address">Company address</label>
                                    <input type="text" id="formtabs-company_address" class="form-control " value=""
                                        name="company_address" />
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label" for="formtabs-short_desc">Company Phone</label>
                                    <input type="text" id="formtabs-company_address" class="form-control " value=""
                                        name="company_address" />
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label" for="formtabs-meta_desc">Company Whatsapp</label>
                                    <input type="text" id="formtabs-company_address" class="form-control " value=""
                                        name="company_address" />
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
                    <div class="tab-pane fade" id="form-tabs-account" role="tabpanel">
                        <form method="POST" action="{{ route('admin.update.system') }}" enctype="multipart/form-data">
                            @csrf
                            <input type="text" name="company_logo" value="yes" hidden>
                            <div class="row g-3">
                                <div class="col-md-12">
                                    <div>
                                        <label class="form-label" for="logo">About us</label>
                                        <textarea name="" id="about_us" cols="30" rows="10"></textarea>
                                    </div>
                                    <div class="mt-3">
                                        <label class="form-label" for="logo">Terms Condition</label>
                                        <textarea name="" id="terms_condition" cols="30" rows="10"></textarea>
                                    </div>
                                    <div class="mt-3">
                                        <label class="form-label" for="logo">Refund Policy</label>
                                        <textarea name="" id="refund_policy" cols="30" rows="10"></textarea>
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
                    <div class="tab-pane fade" id="form-tabs-social" role="tabpanel">
                        <form method="POST" action="{{ route('admin.update.system') }}">
                            @csrf
                            <input type="text" name="social" value="yes" hidden>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label" for="formtabs-twitter">Twitter (full link with
                                        https://)</label>
                                    <input type="text" id="formtabs-twitter" class="form-control"
                                        placeholder="https://twitter.com/abc" name="twitter" value="" />
                                    @error('twitter')
                                    <div class="form-text text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label" for="formtabs-facebook">Facebook (full link with
                                        https://)</label>
                                    <input type="text" id="formtabs-facebook" class="form-control"
                                        placeholder="https://facebook.com/abc" name="facebook" value="" />
                                    @error('facebook')
                                    <div class="form-text text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label" for="formtabs-linkedin">Linkedin (full link with
                                        https://)</label>
                                    <input type="text" id="formtabs-linkedin" class="form-control"
                                        placeholder="https://linkedin.com/abc" name="linkedin" value="" />
                                    @error('linkedin')
                                    <div class="form-text text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label" for="formtabs-instagram">Instagram (full link with
                                        https://)</label>
                                    <input type="text" id="formtabs-instagram" class="form-control"
                                        placeholder="https://instagram.com/abc" name="instagram" value="" />
                                    @error('instagram')
                                    <div class="form-text text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label" for="formtabs-dribble">drible (full link with
                                        https://)</label>
                                    <input type="text" id="formtabs-dribble" class="form-control"
                                        placeholder="https://dribble.com/abc" name="drible" value="" />
                                    @error('drible')
                                    <div class="form-text text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label" for="formtabs-youtube">Youtube (full link with
                                        https://)</label>
                                    <input type="text" id="formtabs-youtube" class="form-control"
                                        placeholder="https://youtube.com/abc" name="youtube" value="" />
                                    @error('youtube')
                                    <div class="form-text text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label" for="formtabs-tiktok">Tiktok (full link with
                                        https://)</label>
                                    <input type="text" id="formtabs-tiktok" class="form-control"
                                        placeholder="https://tiktok.com/abc" name="tiktok" value="" />
                                    @error('tiktok')
                                    <div class="form-text text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
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
@endsection

@section('style')
<link rel="stylesheet" href="{{ asset('admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />
<link rel="stylesheet" href="{{ asset('admin/assets/vendor/libs/typeahead-js/typeahead.css') }}" />

<!-- Vendor Styles -->
<link rel="stylesheet" href="{{ asset('admin/assets/vendor/libs/flatpickr/flatpickr.css') }}" />
<link rel="stylesheet" href="{{ asset('admin/assets/vendor/libs/select2/select2.css') }}" />
<link rel="stylesheet" href="{{ asset('dashboard/global/assets/vendor/libs/tagify/tagify.css') }}" />
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
<script src="{{ asset('admin/assets/vendor/libs/jquery/jquery.js') }}">
</script>
<script src="{{ asset('admin/assets/vendor/libs/popper/popper.js') }}">
</script>
<script src="{{ asset('admin/assets/vendor/js/bootstrap.js') }}">
</script>
<script src="{{ asset('admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}">
</script>
<script src="{{ asset('admin/assets/vendor/libs/hammer/hammer.js') }}">
</script>
<script src="{{ asset('admin/assets/vendor/libs/typeahead-js/typeahead.js') }}">
</script>
<script src="{{ asset('admin/assets/vendor/js/menu.js') }}"></script>
<script src="{{ asset('admin/assets/vendor/libs/cleavejs/cleave.js') }}"></script>
<script src="{{ asset('admin/assets/vendor/libs/cleavejs/cleave-phone.js') }}"></script>
<script src="{{ asset('admin/assets/vendor/libs/moment/moment.js') }}"></script>
<script src="{{ asset('admin/assets/vendor/libs/flatpickr/flatpickr.js') }}"></script>
<script src="{{ asset('admin/assets/vendor/libs/select2/select2.js') }}"></script>
<script src="{{ asset('dashboard/global/assets/vendor/libs/tagify/tagify.js') }}"></script>
<script src="{{ asset('dashboard/global/assets/js/forms-tagify.js') }}"></script>
<script src="{{ asset('admin/assets/js/form-layouts.js') }}"></script>
<script src="{{ asset('admin/assets/vendor/libs/tagify/tagify.js') }}"></script>
<script src="{{ asset('admin/assets/js/forms-tagify.js') }}"></script>
<script src="{{ asset('admin/assets/summernote/popper.min.js') }}"></script>
<script src="{{ asset('admin/assets/summernote/bootstrap.min.js') }}"></script>
<script src="{{ asset('admin/assets/summernote/summernote-bs4.min.js') }}"></script>
<script>
    var changeLogo = function(event) {
            var output = document.getElementById('companyLogo');
            output.src = URL.createObjectURL(event.target.files[0]);
        }

        var changeFav = function(event) {
            var output2 = document.getElementById('companyFav');
            output2.src = URL.createObjectURL(event.target.files[0]);
        }

        var changePreloader = function(event) {
            var output3 = document.getElementById('companyPreloader');
            output3.src = URL.createObjectURL(event.target.files[0]);
        }

        $(document).ready(function() {
            $('#about_us').summernote({
                tabsize: 2,
                height: 500,
            });
        });

        $(document).ready(function() {
            $('#terms_condition').summernote({
                tabsize: 2,
                height: 500,
            });
        });

        $(document).ready(function() {
            $('#refund_policy').summernote({
                tabsize: 2,
                height: 500,
            });
        });
</script>
@endsection