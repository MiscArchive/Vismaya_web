@extends('admin.layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="card">
            @if ($message = Session::get('success'))
                <div class="alert alert-success alert-dismissible alert-label-icon rounded-label fade show" role="alert">
                    <i class="ri-check-double-line label-icon"></i><strong>{{ $message }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <div class="alert alert-success alert-dismissible alert-label-icon rounded-label fade show" role="alert"
                id="successMessage" style="display: none;">
                <i class="ri-check-double-line label-icon"></i><strong></strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @if ($errors->any())
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger alert-dismissible alert-label-icon rounded-label fade show"
                        role="alert">
                        <i class="ri-error-warning-line label-icon"></i><strong>{{ $error }}</strong <button
                            type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endforeach
            @endif

            <div class="card">
                <div class="card-body">
                    <div class="row align-items-center ">
                        <div class="col-xxl-3 col-lg-6 me-auto">
                            <h6 class="card-title">Add Gallery</h6>
                        </div>
                        <!--end col-->
                        <div class="col-xxl-auto col-auto">
                            <a href="{{ route('gallery.index') }}" class="btn btn-primary"><i
                                    class="bx bx-arrow-back align-baseline me-1"></i> Go Back</a>
                        </div>
                        <!--end col-->
                    </div>
                    <!--end row-->
                </div>
            </div>

            <div class="card-body">
                <form action="{{ route('gallery.store') }}" enctype="multipart/form-data" method="POST">
                    @csrf
                    <div class="card-body">
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
                            <div class="col-md-6" style="display: none;">
                                <div>
                                    <label for="type" class="form-label text-muted">Type</label>
                                    <select name="type" id="gallery_type" class="form-control">
                                        <option value="image" selected>Image</option>
                                        <option value="video">Video</option>
                                    </select>
                                </div>
                                @error('type')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        {{-- </div> --}}

                        {{-- <div class="row mt-4"> --}}
                            <div class="col-md-6">
                                <div id="image_div" style="display: block;">
                                    <label for="image" class="form-label text-muted">Image</label>
                                    <input type="file" class="form-control" name="image">
                                </div>
                                @error('image')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                                <div id="video_url_div" style="display: none;">
                                    <label for="video_url" class="form-label text-muted">Video URL</label>
                                    <input type="text" class="form-control" name="video_url">

                                </div>
                                @error('video_url')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
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
@section('script')
    <script>
        $('#gallery_type').change(function() {
            var type = $('#gallery_type').val();
            if (type == 'image') {
                $('#image_div').show();
                $('#video_url_div').hide();
            } else {
                $('#video_url_div').show();
                $('#image_div').hide();
            }
        });
    </script>
@endsection
