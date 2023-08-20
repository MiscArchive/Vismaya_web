@extends('admin.layouts.app')

@section('content')
    <div class="container-fluid">


        <div class="card" style="margin-bottom:100px; min-height: 60vh;">

            <div class="card">
                @if (Session::has('success'))
                <div class="alert alert-success alert-dismissible alert-label-icon rounded-label fade show" role="alert">
                    <i class="ri-check-double-line label-icon"></i><strong>{{ Session::get('success') }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            
            <div class="alert alert-success alert-dismissible alert-label-icon rounded-label fade show" role="alert"
                id="successMessage" style="display: none;">
                <i class="ri-check-double-line label-icon"></i><strong></strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            
            @if (Session::has('error') || Session::has('showPasswordSection'))
                <div class="alert alert-danger alert-dismissible alert-label-icon rounded-label fade show" role="alert">
                    <i class="ri-error-warning-line label-icon"></i><strong>
                        @if (Session::has('error'))
                            {{ Session::get('error') }}
                        @endif
                        @if (Session::has('showPasswordSection'))
                            {{ __('Current password is incorrect.') }}
                        @endif
                    </strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            
                <div class="card-body">
                    <div class="row align-items-center ">
                        <div class="col-xxl-3 col-lg-6 me-auto">
                            <h6 class="card-title">Profile Settings</h6>
                        </div>

                    </div>
                    <!--end row-->
                </div>
            </div>

            <div class="container px-5">
                <div class="col">
                    <div class="d-flex align-items-center flex-wrap gap-2 mb-4">
                        <ul class="nav nav-pills arrow-navtabs nav-secondary gap-2 flex-grow-1 order-2 order-lg-1"
                            role="tablist">
                            <li class="nav-item" role="presentation">
                                <a class="nav-link active" data-bs-toggle="tab" href="#personalDetails" role="tab"
                                    aria-selected="true">
                                    Settings
                                </a>
                            </li>
                            <li class="nav-item" role="presentation">
                                <a class="nav-link" data-bs-toggle="tab" href="#changePassword" role="tab"
                                    aria-selected="false" tabindex="-1">
                                    Change Password
                                </a>
                            </li>

                        </ul>

                    </div>
                    <div class="card">
                        <div class="tab-content">

                            <div class="tab-pane active show" id="personalDetails" role="tabpanel">
                                <div class="card-header">
                                    <h6 class="card-title mb-0">Settings</h6>
                                </div>
                                <div class="card-body">
                                    <form action="{{ route('profile.settings.store') }}" enctype="multipart/form-data"
                                        method="POST">
                                        @csrf
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div id="image_div" style="display: block;">
                                                    <label for="image" class="form-label text-muted">Logo</label>
                                                    <input type="file" class="form-control" name="logo">
                                                </div>
                                                @error('logo')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                                @if (filled($settings) && $settings->logo)
                                                    <img src="{{ asset('uploads/' . $settings->logo) }}" alt=""
                                                        class="rounded avatar-md mt-2">
                                                @endif
                                            </div>
                                            <div class="col-lg-6">
                                                <div id="favicon_div" style="display: block;">
                                                    <label for="favicon" class="form-label text-muted">Favicon</label>
                                                    <input type="file" class="form-control" name="favicon">
                                                </div>
                                                @error('favicon')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                                @if (filled($settings) && $settings->favicon)
                                                    <img src="{{ asset('uploads/' . $settings->favicon) }}" alt=""
                                                        class="rounded avatar-md mt-2">
                                                @endif
                                            </div>

                                            <!--end col-->
                                            <div class="col-lg-12 mt-3">
                                                <div class="mb-3 pb-2">
                                                    <label for="description"
                                                        class="form-label text-muted">Description/About</label>
                                                    <textarea class="form-control" id="description" placeholder="Enter your description" rows="5"name="description">{{ filled($settings) ? $settings->description : '' }}</textarea>
                                                </div>
                                                @error('description')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <!--end col-->
                                            <div class="col-lg-12">
                                                <div class="hstack gap-2 justify-content-end">
                                                    <button type="submit" class="btn btn-primary">Update</button>
                                                    {{-- <button type="button" class="btn btn-subtle-danger">Cancel</button> --}}
                                                </div>
                                            </div>
                                            <!--end col-->
                                        </div>
                                        <!--end row-->
                                    </form>
                                </div>
                            </div>
                            <!--end tab-pane-->
                            <div class="tab-pane" id="changePassword" role="tabpanel">
                                <div class="card-header">
                                    <h6 class="card-title mb-0">Change Password</h6>
                                </div>
                                <div class="card-body">
                                    <form action="{{ route('change.password') }}" method="POST">
                                        @csrf
                                        <div class="row g-2 justify-content-lg-between align-items-center">
                                            <div class="col-lg-4">
                                                <div class="auth-pass-inputgroup">
                                                    <label for="old_password" class="form-label">Old Password*</label>
                                                    <div class="position-relative">
                                                        <input type="password" class="form-control password-input"
                                                            id="old_password" placeholder="Enter current password"
                                                            name="old_password" required>
                                                        <button
                                                            class="btn btn-link position-absolute top-0 end-0 text-decoration-none text-muted password-addon"
                                                            type="button"><i
                                                                class="ri-eye-fill align-middle"></i></button>

                                                    </div>


                                                </div>
                                                @error('old_password')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <div class="col-lg-4">
                                                <div class="auth-pass-inputgroup">
                                                    <label for="new_password" class="form-label">New Password*</label>
                                                    <div class="position-relative">
                                                        <input type="password" class="form-control password-input"
                                                            name="new_password" id="new_password" onpaste="return false"
                                                            placeholder="Enter new password"
                                                            aria-describedby="passwordInput" required>
                                                        <button
                                                            class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon"
                                                            type="button"><i
                                                                class="ri-eye-fill align-middle"></i></button>
                                                    </div>



                                                </div>
                                                @error('new_password')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <div class="col-lg-4">
                                                <div class="auth-pass-inputgroup">
                                                    <label for="new_password_confirm" class="form-label">Confirm
                                                        Password*</label>
                                                    <div class="position-relative">
                                                        <input type="password" class="form-control password-input"
                                                            name="new_password_confirmation" onpaste="return false"
                                                            id="confirm-password-input" placeholder="Confirm password"
                                                            required>
                                                        <button
                                                            class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon"
                                                            type="button"><i
                                                                class="ri-eye-fill align-middle"></i></button>
                                                    </div>

                                                </div>
                                                @error('new_password_confirm')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror

                                            </div>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <a href="javascript:void(0);"
                                                    class="link-primary text-decoration-underline"></a>
                                                <div class="">

                                                    <button type="submit" class="btn btn-primary mt-3">Change
                                                        Password</button>
                                                </div>
                                            </div>

                                            <!--end col-->

                                            {{-- <div class="col-lg-12">
                                    <div class="card bg-light shadow-none passwd-bg" id="password-contain">
                                        <div class="card-body">
                                            <div class="mb-4">
                                                <h5 class="fs-sm">Password must contain:</h5>
                                            </div>
                                            <div class="">
                                                <p id="pass-length" class="invalid fs-xs mb-2">Minimum <b>8 characters</b></p>
                                                <p id="pass-lower" class="invalid fs-xs mb-2">At <b>lowercase</b> letter (a-z)</p>
                                                <p id="pass-upper" class="invalid fs-xs mb-2">At least <b>uppercase</b> letter (A-Z)</p>
                                                <p id="pass-number" class="invalid fs-xs mb-0">A least <b>number</b> (0-9)</p>

                                            </div>
                                        </div>
                                    </div>

                                </div> --}}
                                        </div>
                                        <!--end row-->
                                    </form>



                                </div>
                            </div>

                            <!--end tab-pane-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
<script>
    document.addEventListener("DOMContentLoaded", function() {
        const passwordInputs = document.querySelectorAll(".password-input");
        const eyeButtons = document.querySelectorAll(".password-addon");

        eyeButtons.forEach((button, index) => {
            button.addEventListener("click", function() {
                if (passwordInputs[index].type === "password") {
                    passwordInputs[index].type = "text";
                } else {
                    passwordInputs[index].type = "password";
                }
            });
        });
    });
</script>