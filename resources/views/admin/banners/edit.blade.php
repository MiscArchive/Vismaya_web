@extends('layouts.app')

@section('content')
    <div class="container-fluid">


        <div class="card" style="margin-bottom:100px; ">

            <div class="card">
                <div class="card-body">
                    <div class="row align-items-center ">
                        <div class="col-xxl-3 col-lg-6 me-auto">
                            <h6 class="card-title">Edit Banner</h6>
                        </div>
                        <!--end col-->
                        <div class="col-xxl-auto col-auto">
                            <a href="{{ route('banners.index') }}" class="btn btn-primary"><i
                                    class="bx bx-arrow-back align-baseline me-1"></i> Go Back</a>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                </div>
            </div>

            <div class="card-body">
                <form action="{{ route('banners.update', $banner->id) }}" enctype="multipart/form-data"
                    method="POST">
                    @method('put')
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div>
                                <label for="title" class="form-label text-muted">Title</label>
                                <input type="text" class="form-control" id="title" name="title"
                                    value="{{ $banner->title }}">
                            </div>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12">
                            <div>
                                <label for="description" class="form-label text-muted">Description</label>
                                <textarea class="ckeditor form-control" name="description">{{ $banner->description }}</textarea>
                            </div>
                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-md-6">
                            <div>
                                <label for="labelInput" class="form-label text-muted">Image</label>
                                <input type="file" class="form-control" name="image">
                            </div>
                            @if ($banner->image)
                                <img src="{{ asset('uploads/' . $banner->image) }}" alt=""
                                    class="rounded avatar-md mt-2">
                            @endif
                        </div>

                        <div class="col-md-6">
                            <div>
                                <label for="labelInput" class="form-label text-muted">Status</label>
                                <select class="form-select mb-3" aria-label="Default select example" name="status">
                                    <option value="1">Active</option>
                                    <option value="0">In-Active</option>
                                </select>
                            </div>
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
