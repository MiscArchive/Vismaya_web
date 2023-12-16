@extends('admin.layouts.app')

@section('content')
    <div class="container-fluid">


        <div class="card" style="margin-bottom:100px; ">

            <div class="card">
                <div class="card-body">
                    <div class="row align-items-center ">
                        <div class="col-xxl-3 col-lg-6 me-auto">
                            <h6 class="card-title">Add Establishment</h6>
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
                <form action="{{ route('establishments.store') }}" enctype="multipart/form-data" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div>
                                <label for="title" class="form-label text-muted">Name</label>
                                <input type="text" class="form-control" id="name" name="name">
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
                                <textarea class="ckeditor form-control" name="description"></textarea>
                            </div>
                            @if ($errors->has('description'))
                                <span class="text-danger">{{ $errors->first('description') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-md-6">
                            <div>
                                <label for="labelInput" class="form-label text-muted">Logo</label>
                                <input type="file" class="form-control" name="logo">
                            </div>
                            @if ($errors->has('logo'))
                                <span class="text-danger">{{ $errors->first('logo') }}</span>
                            @endif
                        </div>

                        <div class="col-md-6">
                            <div>
                                <label for="labelInput" class="form-label text-muted">Logo (Small)</label>
                                <input type="file" class="form-control" name="logo_small">
                            </div>
                            @if ($errors->has('logo_small'))
                                <span class="text-danger">{{ $errors->first('logo_small') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div>
                                <label for="title" class="form-label text-muted">District</label>
                                <input type="text" class="form-control" id="district" name="district">
                            </div>
                            @if ($errors->has('district'))
                                <span class="text-danger">{{ $errors->first('district') }}</span>
                            @endif
                        </div>
                        <div class="col-md-4">
                            <div>
                                <label for="title" class="form-label text-muted">Pincode</label>
                                <input type="number" class="form-control" id="pincode" name="pincode">
                            </div>
                            @if ($errors->has('pincode'))
                                <span class="text-danger">{{ $errors->first('pincode') }}</span>
                            @endif
                        </div>
                        <div class="col-md-4">
                            <div>
                                <label for="title" class="form-label text-muted">Telephone</label>
                                <input type="text" class="form-control" id="telephone" name="telephone">
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
                                <input type="text" class="form-control" id="mobile" name="mobile">
                            </div>
                            @if ($errors->has('mobile'))
                                <span class="text-danger">{{ $errors->first('mobile') }}</span>
                            @endif
                        </div>
                        <div class="col-md-4">
                            <div>
                                <label for="title" class="form-label text-muted">Facebook Link</label>
                                <input type="text" class="form-control" id="faceobok" name="facebook">
                            </div>
                            @if ($errors->has('facebook'))
                                <span class="text-danger">{{ $errors->first('facebook') }}</span>
                            @endif
                        </div>
                        <div class="col-md-4">
                            <div>
                                <label for="title" class="form-label text-muted">Instagram Link</label>
                                <input type="text" class="form-control" id="instagram" name="instagram">
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
                                <input type="text" class="form-control" id="twitter" name="twitter">
                            </div>
                            @if ($errors->has('twitter'))
                                <span class="text-danger">{{ $errors->first('twitter') }}</span>
                            @endif
                        </div>
                        <div class="col-md-4">
                            <div>
                                <label for="title" class="form-label text-muted">LinkedIn Link</label>
                                <input type="text" class="form-control" id="linkedin" name="linkedin">
                            </div>
                            @if ($errors->has('linkedin'))
                                <span class="text-danger">{{ $errors->first('linkedin') }}</span>
                            @endif
                        </div>
                        <div class="col-md-4">
                            <div>
                                <label for="title" class="form-label text-muted">Gmail Link</label>
                                <input type="text" class="form-control" id="gmail" name="gmail">
                            </div>
                            @if ($errors->has('gmail'))
                                <span class="text-danger">{{ $errors->first('gmail') }}</span>
                            @endif
                        </div>


                    </div>


                    <div class="row mt-5">
                        <div class="col-lg-12">
                            <div class="text-end">
                                <button type="submit" class="btn btn-success">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
