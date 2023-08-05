@extends('frontEnd.layouts.app')

@section('content')
    <div class="ht__bradcaump__area">
        <div class="ht__bradcaump__container">
            <img src="{{ asset('frontEnd/assets/images/curriculum/banner-curriculum.png') }}" alt="bradcaump images">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="bradcaump__inner text-center">
                            <h2 class="bradcaump-title">Image Gallery</h2>
                            <nav class="bradcaump-inner">
                                <a class="breadcrumb-item" href="/">Home</a>
                                <span class="breadcrumb-item active">Image Gallery</span>
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

                    @foreach ($imageGallery as $gallery)
                        <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                            <div class="gallery">
                                <div class="gallery__thumb">
                                    <a href="#">
                                        <img src="{{ asset('uploads/' . $gallery->image) }}" alt="gallery images">
                                    </a>
                                </div>
                                <div class="gallery__hover__inner">
                                    <div class="gallery__hover__action">
                                        <ul class="gallery__zoom">
                                            <li><a href="{{ asset('uploads/' . $gallery->image) }}" data-lightbox="grportimg"
                                                    data-title="My caption"><i class="fa fa-search"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
@endsection
