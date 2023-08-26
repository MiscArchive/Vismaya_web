@extends('admin.layouts.app')

@section('content')
    <div class="container-fluid">


        <div class="card" style="margin-bottom:100px; ">

            <div class="card">
                <div class="card-body">
                    <div class="row align-items-center ">
                        <div class="col-xxl-3 col-lg-6 me-auto">
                            <h6 class="card-title">Add Testimonial</h6>
                        </div>
                        <!--end col-->
                        <div class="col-xxl-auto col-auto">
                            <a href="{{ route('testimonials.index') }}" class="btn btn-primary"><i
                                    class="bx bx-arrow-back align-baseline me-1"></i> Go Back</a>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                </div>
            </div>

            <div class="card-body">
                <form action="{{ route('testimonials.store') }}" enctype="multipart/form-data" method="POST">
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
                                <input type="text" class="form-control" id="title" name="title">
                            </div>
                            @if ($errors->has('title'))
                            <span class="text-danger">{{ $errors->first('title') }}</span>
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

                    <div class="row mt-3">
                        <div class="col-md-12">
                            <div>
                                <label for="author" class="form-label text-muted">Author</label>
                                <input type="text" class="form-control" name="author">
                            </div>
                            @if ($errors->has('author'))
                            <span class="text-danger">{{ $errors->first('author') }}</span>
                        @endif
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-md-12">
                            <div>
                                <label for="labelInput" class="form-label text-muted">Image</label>
                                <input type="file" class="form-control" name="image">
                            </div>
                            @if ($errors->has('image'))
                            <span class="text-danger">{{ $errors->first('image') }}</span>
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
