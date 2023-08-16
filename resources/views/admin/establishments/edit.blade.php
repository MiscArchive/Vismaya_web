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
                                    <option value="1">Active</option>
                                    <option value="0">In-Active</option>
                                </select>
                            </div>
                            @if ($errors->has('status'))
                                <span class="text-danger">{{ $errors->first('status') }}</span>
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
