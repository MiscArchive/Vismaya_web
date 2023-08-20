@extends('admin.layouts.app')

@section('content')
    <div class="container-fluid">


        <div class="card" style="margin-bottom:100px; ">

            <div class="card">
                <div class="card-body">
                    <div class="row align-items-center ">
                        <div class="col-xxl-3 col-lg-6 me-auto">
                            <h6 class="card-title">Edit Card Item</h6>
                        </div>
                        <!--end col-->
                        <div class="col-xxl-auto col-auto">
                            <a href="{{ route('card-items.index') }}" class="btn btn-primary"><i
                                    class="bx bx-arrow-back align-baseline me-1"></i> Go Back</a>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('card-items.update', $cardItem->id) }}" enctype="multipart/form-data" method="POST">
                    @method('put')
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <label for="title" class="form-label text-muted">Establishment</label>
                            <select class="form-select mb-3" name="establishment_id">
                                <option selected disabled>Choose</option>
                                @foreach ($establishments as $establishment)
                                    <option value="{{ $establishment->id }}"
                                        @if ($establishment->id == $cardItem->establishment_id) selected @endif>
                                        {{ $establishment->name }}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('establishment_id'))
                                <span class="text-danger">{{ $errors->first('establishment_id') }}</span>
                            @endif
                        </div>

                        <div class="col-md-6">
                            <div>
                                <label for="title" class="form-label text-muted">Title</label>
                                <input type="text" class="form-control" id="name" name="title"
                                    value="{{ $cardItem->title }}">
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
                                    <option value="product" @if ($cardItem->type == 'product') selected @endif>Product
                                    </option>
                                    <option value="offer" @if ($cardItem->type == 'offer') selected @endif>Offer</option>
                                    <option value="service" @if ($cardItem->type == 'service') selected @endif>Service
                                    </option>
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
                                    <option value="1" @if ($cardItem->is_featured == 1) selected @endif>Yes</option>
                                    <option value="0" @if ($cardItem->is_featured == 0) selected @endif>No</option>
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
                            @if ($cardItem->image)
                                <img src="{{ asset('uploads/' . $cardItem->image) }}" alt=""
                                    class="rounded avatar-md mt-2">
                            @endif
                            @if ($errors->has('image'))
                                <span class="text-danger">{{ $errors->first('image') }}</span>
                            @endif
                        </div>

                    </div>

                    <div class="row mt-3">
                        <div class="col-md-12">
                            <div>
                                <label for="description" class="form-label text-muted">Description</label>
                                <textarea class="ckeditor form-control" name="description">{{ $cardItem->description }}</textarea>
                            </div>
                            @if ($errors->has('description'))
                                <span class="text-danger">{{ $errors->first('description') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="row mt-2">

                        <div class="col-md-12">
                            <div>
                                <label for="labelInput" class="form-label text-muted">Status</label>
                                <select class="form-select mb-3" aria-label="Default select example" name="status">
                                    <option value="1" @if ($cardItem->status == 1) selected @endif>Active
                                    </option>
                                    <option value="0" @if ($cardItem->status == 0) selected @endif>In-Active
                                    </option>
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
                                <button type="submit" class="btn btn-success">Submit</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
