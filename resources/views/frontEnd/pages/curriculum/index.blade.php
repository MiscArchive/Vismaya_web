@extends('frontEnd.layouts.app')

@section('content')
    <div class="ht__bradcaump__area">
        <div class="ht__bradcaump__container">
            <img src="{{ asset('frontEnd/assets/images/curriculum/banner-curriculum.png') }}" alt="bradcaump images">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="bradcaump__inner text-center">
                            <h2 class="bradcaump-title">{{ $curriculum->title }}</h2>
                            <nav class="bradcaump-inner">
                                <a class="breadcrumb-item" href="/">Home</a>
                                <span class="breadcrumb-item active">{{ $curriculum->title }}</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="page-class-details bg--white">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="class__quality__desc">

                        <div class="class__thumb">
                            <div class="courses__type d-flex justify-content-between">
                                <ul class="d-flex">
                                    <li>Course Syllabus : <span>{{ $curriculum->syllabus }}</span></li>
                                    <li>Age : <span>{{ $curriculum->age }}+ years</span></li>

                                </ul>
                                <ul class="rating d-flex">
                                    <li><span class="ti-star"></span></li>
                                    <li><span class="ti-star"></span></li>
                                    <li><span class="ti-star"></span></li>
                                    <li><span class="ti-star"></span></li>
                                    <li><span class="ti-star"></span></li>
                                </ul>
                            </div>
                            <div class="courses__images">
                                <img src="{{ asset('uploads/' . $curriculum->main_image) }}" alt="class images">
                            </div>
                            <ul class="courses__meta d-flex">
                                <li class="prize">Rs. {{ $curriculum->fee }}</li>
                                <li>CLASS SIZE : {{ $curriculum->class_size }}</li>
                                <li>DURATION : {{ $curriculum->duration }} hrs</li>
                            </ul>
                        </div>
                        <div class="class-details-inner">
                            <div class="courses__inner">

                                <ul>

                                    <li>Intervals : <i class="fa fa-calendar"></i><span>{{ $curriculum->intervals }}</span>
                                    </li>
                                </ul>
                                <p class="text-justify">{!! $curriculum->description !!}</p>
                            </div>


                        </div>
                        <!-- Start Related Class -->

                        <!-- End Related Class -->

                    </div>
                </div>
                <!-- Start Sidebar -->
                <div class="col-lg-3">
                    <div class="sidebar__widgets sidebar--right">



                        <!-- Single Widget -->
                        <div class="single__widget offer">
                            <div class="offer__thumb">
                                {{-- <img src="https://www.cocoonpreschool.org/themes/public/assets/images/others/2.jpg"
                                    alt="offer images"> --}}
                            </div>
                        </div>
                        <!-- End Widget -->


                        <!-- Single Widget -->
                        <div class="single__widget Popular__classes">
                            <h4>Other Classes</h4>
                            <ul>
                                @foreach ($allCurriculums as $course)
                                    <li><a href="{{ $course->slug }}"> {{ $course->title }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                        <!-- End Widget -->






                    </div>
                </div>
                <!-- End Sidebar -->
            </div>
        </div>
    </section>
@endsection
