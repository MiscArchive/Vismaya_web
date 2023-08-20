@extends('admin.layouts.app')

@section('content')
    <div class="container-fluid">


        <div class="card" style="margin-bottom:100px; ">

            <div class="card">
                <div class="card-body">
                    <div class="row align-items-center ">
                        <div class="col-xxl-3 col-lg-6 me-auto">
                            <h6 class="card-title">Add Branch</h6>
                        </div>
                        <!--end col-->
                        <div class="col-xxl-auto col-auto">
                            <a href="{{ route('branches.index') }}" class="btn btn-primary"><i
                                    class="bx bx-arrow-back align-baseline me-1"></i> Go Back</a>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('branches.store') }}" enctype="multipart/form-data" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <label for="title" class="form-label text-muted">Establishment</label>
                            <select class="form-select mb-3" name="establishment_id">
                                <option selected disabled>Choose</option>
                                @foreach ($establishments as $establishment)
                                    <option value="{{ $establishment->id }}">{{ $establishment->name }}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('establishment_id'))
                                <span class="text-danger">{{ $errors->first('establishment_id') }}</span>
                            @endif
                        </div>

                        <div class="col-md-6">
                            <div>
                                <label for="title" class="form-label text-muted">Name</label>
                                <input type="text" class="form-control" id="name" name="name">
                            </div>
                            @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3">
                            <div>
                                <label for="phone" class="form-label text-muted">Phone</label>
                                <input type="number" class="form-control" id="phone" name="phone">
                            </div>
                            @if ($errors->has('phone'))
                                <span class="text-danger">{{ $errors->first('phone') }}</span>
                            @endif
                        </div>

                        <div class="col-md-3">
                            <div>
                                <label for="email" class="form-label text-muted">Email</label>
                                <input type="email" class="form-control" id="email" name="email">
                            </div>
                            @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                        </div>

                        <div class="col-md-6">
                            <div>
                                <label for="location_link" class="form-label text-muted">Location Link</label>
                                <input type="text" class="form-control" id="location_link" name="location_link">
                            </div>
                            @if ($errors->has('location_link'))
                                <span class="text-danger">{{ $errors->first('location_link') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div>
                                <label for="location_link" class="form-label text-muted">Address</label>
                                <textarea class="form-control" id="address" rows="3" name="address"></textarea>
                            </div>
                            @if ($errors->has('address'))
                                <span class="text-danger">{{ $errors->first('address') }}</span>
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
