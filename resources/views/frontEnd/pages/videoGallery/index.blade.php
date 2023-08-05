@extends('frontEnd.layouts.app')

@section('content')
    <div class="ht__bradcaump__area">
        <div class="ht__bradcaump__container">
            <img src="{{ asset('frontEnd/assets/images/curriculum/banner-curriculum.png') }}" alt="bradcaump images">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="bradcaump__inner text-center">
                            <h2 class="bradcaump-title">Video Gallery</h2>
                            <nav class="bradcaump-inner">
                                <a class="breadcrumb-item" href="/">Home</a>
                                <span class="breadcrumb-item active">Video Gallery</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="junior__gallery__area gallery-page-three gallery--3 bg--white section-padding--lg">
            <div class="container-fluid">
                <div class="row galler__wrap">

                    @foreach ($videoGallery as $gallery)

                    <iframe width="390" height="300" class="ml-5" src="{{ $gallery->video_url }}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="border-radius: 20px;"></iframe>

                    @endforeach

                </div>
            </div>
        </div>
    </div>
@endsection
