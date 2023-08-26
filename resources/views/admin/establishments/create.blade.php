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
