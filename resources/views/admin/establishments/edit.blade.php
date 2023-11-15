@extends('admin.layouts.app')

@section('content')
    <div class="container-fluid">


        <div class="card" style="margin-bottom:100px; ">

            <div class="card">
                <div class="card-body">
                    <div class="row align-items-center ">
                        <div class="col-xxl-3 col-lg-6 me-auto">
                            <h6 class="card-title">Edit Establishment</h6>
                        </div>
                        <!--end col-->
                        <div class="col-xxl-auto col-auto">
                            <a href="{{ route('establishments.index') }}" class="btn btn-primary"><i
                                    class="bx bx-arrow-back align-baseline me-1"></i> Go Back</a>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                </div>
            </div>

            <div class="card-body">
                <form action="{{ route('establishments.update', $establishment->id) }}" enctype="multipart/form-data"
                    method="POST">
                    @method('put')
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div>
                                <label for="title" class="form-label text-muted">Name</label>
                                <input type="text" class="form-control" id="name" name="name"
                                    value="{{ $establishment->name }}">
                            </div>
                            @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12">
                            <div>
                                <label for="description" class="form-label text-muted">Description</label>
                                <textarea class="ckeditor form-control" name="description">{{ $establishment->description }}</textarea>
                            </div>
                            @if ($errors->has('description'))
                                <span class="text-danger">{{ $errors->first('description') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-md-4">
                            <div>
                                <label for="labelInput" class="form-label text-muted">Logo</label>
                                <input type="file" class="form-control" name="logo">
                            </div>
                            @if ($establishment->logo)
                                <img src="{{ asset('uploads/' . $establishment->logo) }}" alt=""
                                    class="rounded avatar-md mt-2">
                            @endif
                            @if ($errors->has('logo'))
                                <span class="text-danger">{{ $errors->first('logo') }}</span>
                            @endif
                        </div>


                        <div class="col-md-4">
                            <div>
                                <label for="labelInput" class="form-label text-muted">Logo (Small)</label>
                                <input type="file" class="form-control" name="logo_small">
                            </div>
                            @if ($establishment->logo_small)
                                <img src="{{ asset('uploads/' . $establishment->logo_small) }}" alt=""
                                    class="rounded avatar-md mt-2">
                            @endif
                            @if ($errors->has('logo_small'))
                                <span class="text-danger">{{ $errors->first('logo_small') }}</span>
                            @endif
                        </div>

                        <div class="col-md-4">
                            <div>
                                <label for="labelInput" class="form-label text-muted">Status</label>
                                <select class="form-select mb-3" aria-label="Default select example" name="status">
                                    <option value="1" @if ($establishment->status == 1) selected @endif>Active</option>
                                    <option value="0" @if ($establishment->status == 0) selected @endif>In-Active
                                    </option>
                                </select>
                            </div>
                            @if ($errors->has('status'))
                                <span class="text-danger">{{ $errors->first('status') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div>
                                <label for="title" class="form-label text-muted">District</label>
                                <input type="text" class="form-control" id="district" name="district"
                                    value="{{ $establishment->district }}">
                            </div>
                            @if ($errors->has('district'))
                                <span class="text-danger">{{ $errors->first('district') }}</span>
                            @endif
                        </div>
                        <div class="col-md-4">
                            <div>
                                <label for="title" class="form-label text-muted">Pincode</label>
                                <input type="number" class="form-control" id="pincode" name="pincode"
                                    value="{{ $establishment->pincode }}">
                            </div>
                            @if ($errors->has('pincode'))
                                <span class="text-danger">{{ $errors->first('pincode') }}</span>
                            @endif
                        </div>
                        <div class="col-md-4">
                            <div>
                                <label for="title" class="form-label text-muted">Telephone</label>
                                <input type="number" class="form-control" id="telephone" name="telephone"
                                    value="{{ $establishment->telephone }}">
                            </div>
                            @if ($errors->has('telephone'))
                                <span class="text-danger">{{ $errors->first('telephone') }}</span>
                            @endif
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div>
                                <label for="title" class="form-label text-muted">Mobile</label>
                                <input type="mobile" class="form-control" id="mobile" name="mobile"
                                    value="{{ $establishment->mobile }}">
                            </div>
                            @if ($errors->has('mobile'))
                                <span class="text-danger">{{ $errors->first('mobile') }}</span>
                            @endif
                        </div>
                        <div class="col-md-4">
                            <div>
                                <label for="title" class="form-label text-muted">Facebook Link</label>
                                <input type="text" class="form-control" id="facebook" name="facebook"
                                    value="{{ $establishment->facebook }}">
                            </div>
                            @if ($errors->has('facebook'))
                                <span class="text-danger">{{ $errors->first('facebook') }}</span>
                            @endif
                        </div>
                        <div class="col-md-4">
                            <div>
                                <label for="title" class="form-label text-muted">Instagram Link</label>
                                <input type="text" class="form-control" id="instagram"
                                    name="instagram"value="{{ $establishment->instagram }}">
                            </div>
                            @if ($errors->has('instagram'))
                                <span class="text-danger">{{ $errors->first('instagram') }}</span>
                            @endif
                        </div>


                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div>
                                <label for="title" class="form-label text-muted">Twitter Link</label>
                                <input type="text" class="form-control" id="twitter" name="twitter"
                                    value="{{ $establishment->twitter }}">
                            </div>
                            @if ($errors->has('twitter'))
                                <span class="text-danger">{{ $errors->first('twitter') }}</span>
                            @endif
                        </div>
                        <div class="col-md-4">
                            <div>
                                <label for="title" class="form-label text-muted">LinkedIn Link</label>
                                <input type="text" class="form-control" id="linkedin" name="linkedin"
                                    value="{{ $establishment->linkedin }}">
                            </div>
                            @if ($errors->has('linkedin'))
                                <span class="text-danger">{{ $errors->first('linkedin') }}</span>
                            @endif
                        </div>
                        <div class="col-md-4">
                            <div>
                                <label for="title" class="form-label text-muted">Gmail Link</label>
                                <input type="text" class="form-control" id="gmail" name="gmail"
                                    value="{{ $establishment->gmail }}">
                            </div>
                            @if ($errors->has('gmail'))
                                <span class="text-danger">{{ $errors->first('gmail') }}</span>
                            @endif
                        </div>


                    </div>


                    <div class="row mt-5">
                        <div class="col-lg-12">
                            <div class="text-end">
                                <button type="submit" class="btn btn-success">Update</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
