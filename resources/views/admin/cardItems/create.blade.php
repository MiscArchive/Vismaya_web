@extends('admin.layouts.app')

@section('content')
    <div class="container-fluid">


        <div class="card" style="margin-bottom:100px; ">

            <div class="card">
                <div class="card-body">
                    <div class="row align-items-center ">
                        <div class="col-xxl-3 col-lg-6 me-auto">
                            <h6 class="card-title">Add Card Item</h6>
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
                <form action="{{ route('card-items.store') }}" enctype="multipart/form-data" method="POST">
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
                                <label for="title" class="form-label text-muted">Title</label>
                                <input type="text" class="form-control" id="name" name="title">
                            </div>
                            @if ($errors->has('title'))
                                <span class="text-danger">{{ $errors->first('title') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="row mt-2">
                        <div class="col-md-3">
                            <div>
                                <label for="labelInput" class="form-label text-muted">Type</label>
                                <select class="form-select mb-3" aria-label="Default select example" name="type">
                                    <option value="product" selected>Product</option>
                                    <option value="offer">Offer</option>
                                    <option value="service">Service</option>
                                </select>
                            </div>
                            @if ($errors->has('type'))
                                <span class="text-danger">{{ $errors->first('type') }}</span>
                            @endif
                        </div>

                        <div class="col-md-3">
                            <div>
                                <label for="labelInput" class="form-label text-muted">Featured</label>
                                <select class="form-select mb-3" aria-label="Default select example" name="is_featured">
                                    <option value="1" selected>Yes</option>
                                    <option value="0">No</option>
                                </select>
                            </div>
                            @if ($errors->has('is_featured'))
                                <span class="text-danger">{{ $errors->first('is_featured') }}</span>
                            @endif
                        </div>

                        <div class="col-md-6">
                            <div>
                                <label for="labelInput" class="form-label text-muted">Image</label>
                                <input type="file" class="form-control" name="image">
                            </div>
                            @if ($errors->has('image'))
                                <span class="text-danger">{{ $errors->first('image') }}</span>
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
