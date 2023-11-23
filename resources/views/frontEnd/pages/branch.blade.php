@extends('frontEnd.layouts.branch.app')

@section('content')
    <!--hero section start-->
    <section class="healthcare-hero pt-7 pb-120 overflow-hidden">
        <div class="container">
            <div class="row g-5 g-xl-4 align-items-center justify-content-center">
                <div class="col-xl-12">
                    <div class="healthcare-hero-slider-box overflow-hidden position-relative">
                        <div class="healthcare-hero-slider swiper">
                            <div class="swiper-wrapper">

                                @foreach ($banners as $banner)
                                    <div class="healthcare-hero-single swiper-slide bg-white rounded">
                                        <div class="left-content">
                                            <div class="d-flex align-items-center gap-1 gap-sm-2 mb-2 flex-wrap">
                                                <h5 class="mb-0 fw-normal text-primary gshop-subtitle">Vismaya Ventures
                                                    at Your Service
                                                </h5>
                                                <span>
                                                    <svg width="138" height="16" viewBox="0 0 138 16" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <line y1="8" x2="132" y2="8" stroke="#4EB529"
                                                            stroke-width="2" />
                                                        <path d="M138 8L126 14.9282L126 1.0718L138 8Z" fill="#4EB529" />
                                                    </svg>
                                                </span>
                                            </div>
                                            <h1 class="display-4 mb-3">{{ $banner->establishment->name }}</h1>
                                            <p class="mb-6">
                                                {{ Str::limit(strip_tags($banner->establishment->description), 150) }}
                                            </p>
                                            <a href="{{ route('establishment', $banner->establishment->slug) }}"
                                                class="btn btn-primary">Explore More<span class="ms-2"><i
                                                        class="fas fa-arrow-right"></i></span></a>
                                        </div>
                                        <img src="{{ asset('uploads/' . $banner->image) }}" alt="banner"
                                            class="slide-product img-fluid d-none d-md-block">
                                        {{-- <img src="assets/img/products/orange-slice.png" alt="orange"
                                            class="slide-product img-fluid d-md-none"> --}}
                                    </div>
                                @endforeach



                            </div>
                        </div>
                        <div class="healthcare-hero-thumbnail-slider swiper">
                            <div class="swiper-wrapper">
                                {{-- @foreach ($banners as $banner)
                                    <div class="swiper-slide thumbnail-single">
                                        <img src="{{ asset('uploads/' . $banner->image) }}" alt="thumbnail"
                                            class="img-fluid rounded-circle">
                                    </div>
                                @endforeach --}}
                            </div>
                        </div </div>
                    </div>
                </div>
            </div>
    </section> <!--hero section end-->

    <!--category section start-->
    <div id="about-us">
        <section class="category-section pb-120">


            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-10">
                        <div class="section-title text-center">
                            <h2 class="mb-2">About Us</h2>
                            <p class="mb-0" style=""> {!! $establishment->description !!}</p>
                        </div>
                    </div>
                </div>
            </div>






        </section> <!--category section end-->
    </div>
    <!--category section start-->
    <section class="category-section pt-10">
        <div id="branches" class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6">
                    <div class="section-title text-center">
                        <h2 class="mb-2">Branches</h2>
                        <p class="mb-0">Sticky niche markets via goal-oriented networks Completely recaptiualize</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center g-4 mt-4">
                @foreach ($branches as $branch)
                    <div class="col-xxl-2 col-lg-3 col-md-4 col-sm-6">
                        <div
                            class="gshop-animated-iconbox py-5 px-4 text-center border rounded-3 position-relative overflow-hidden hover-shadow">
                            <div
                                class="animated-icon d-inline-flex align-items-center justify-content-center rounded-circle position-relative">
                                <img src="{{ asset('assets/img/category/branch.png') }}" alt="flower" class="img-fluid">
                            </div>
                            <a href="{{ filled($branch->location_link) ? $branch->location_link : '#' }}" class="text-dark fs-sm fw-bold d-block mt-3" target="_blank">{{ $branch->name }}</a>
                            {{-- <span class="total-count position-relative ps-3 fs-sm fw-medium doted-primary">25 Items</span> --}}
                            <a href="{{ filled($branch->location_link) ? $branch->location_link : '#' }}" class="explore-btn position-absolute" target="_blank"><i class="fa-solid fa-arrow-up"></i></a>
                        </div>
                    </div>
                @endforeach





            </div>

        </div>
    </section> <!--category section end-->
    <section class="pb-100 pt-80 position-relative overflow-hidden z-1 trending-products-area">
        <img src="{{ asset('assets/img/shapes/garlic.png') }}" alt="garlic" class="position-absolute garlic z--1"
            data-parallax="{&quot;y&quot;: 100}"
            style="transform:translate3d(0px, 48.388px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scaleX(1) scaleY(1) scaleZ(1); -webkit-transform:translate3d(0px, 48.388px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scaleX(1) scaleY(1) scaleZ(1); ">

        <img src="{{ asset('assets/img/shapes/carrot.png') }}" alt="carrot" class="position-absolute carrot z--1"
            data-parallax="{&quot;y&quot;: -100}"
            style="transform:translate3d(0px, -48.358px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scaleX(1) scaleY(1) scaleZ(1); -webkit-transform:translate3d(0px, -48.358px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scaleX(1) scaleY(1) scaleZ(1); ">

        <img src="{{ asset('assets/img/shapes/mashrom.png') }}" alt="mashrom" class="position-absolute mashrom z--1"
            data-parallax="{&quot;x&quot;: 100}"
            style="transform:translate3d(48.388px, 0px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scaleX(1) scaleY(1) scaleZ(1); -webkit-transform:translate3d(48.388px, 0px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scaleX(1) scaleY(1) scaleZ(1); ">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6">
                    <div class="section-title text-center">
                        <h2 class="mb-2">Our Offers</h2>

                    </div>
                </div>
            </div>

            <div class="row justify-content-center g-4 mt-5">
                <div class="products-slider-wrapper mt-8 position-relative">
                    <div class="swiper pb-6">


                        <div class="swiper-wrapper">
                            @foreach ($products as $product)
                            <div class="swiper-slide" id="{{$product->id}}" style="width:25%;margin-left:10px;border-radius: 20px;">
                                <div class="vertical-product-card rounded-2 position-relative border-0 bg-white" style="box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.2);">
                                    <div class="thumbnail position-relative text-center p-4">
                                        <a href="#"><img src="{{ asset('uploads/' . $product->image) }}" alt="product" class="img-fluid"></a>
                                    </div>
                                    <div class="card-content text-center">
                                        <a href="#" class="card-title fw-bold d-block mb-2"><h4>{{$product->title}}</h4></a>
                                        <div class="pricing mb-2 d-flex align-items-center justify-content-center gap-2">
                                            <p class="mb-0">{{strip_tags($product->description)}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach


                            <!-- Additional slides go here -->
                        </div>

                    </div>

                    <button style="margin-bottom: 150px;" class="ofp-slider-prev"><i class="fas fa-angle-left"></i></button>
                    <button style="margin-bottom: 150px;" class="ofp-slider-next"><i class="fas fa-angle-right"></i></button>
                </div>
            </div>

        </div>
    </section>

    <section id="testimonials">
        <section style="margin-top:50px;"
            class="feedback-section pt-120 has-banner-bottom position-relative z-1 overflow-hidden bg-floral-white">
            <div id="testimonials" class="container">
                <div class="row align-items-center g-4">
                    <div class="col-xl-7">
                        <div class="clients_thumb">
                            <img src="{{ asset('assets/img/about/clients.png') }}" alt="clients" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-xl-5">
                        <div class="swiper feedback-slider-2">
                            <div class="swiper-wrapper">
                                @foreach ($testimonials as $testimonial)
                                    <div class="swiper-slide feedback-card bg-white rounded py-6 px-4"
                                        style="min-height: 300px;">
                                        <div class="d-flex align-items-center gap-4 flex-wrap mb-4">
                                            <img src="{{ asset('uploads/' . $testimonial->image) }}" alt="client"
                                                class="img-fluid rounded-circle flex-shrink-0" width="20%">
                                            <div class="clients-info">
                                                <h5 class="mb-1">{{ $testimonial->title }}</h5>
                                                <ul class="d-flex align-items-center fs-xs text-warning">
                                                    <li><b><em>{{ $testimonial->author }}</em></b></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <p class="mb-0">“{{ Str::limit(strip_tags($testimonial->description), 350) }}”
                                        </p>
                                    </div>
                                @endforeach

                            </div>
                            <div class="slider-arrows text-end mt-5">
                                <button type="button" class="fd2-arrow-left"><i class="fas fa-angle-left"></i></button>
                                <button type="button" class="fd2-arrow-right"><i
                                        class="fas fa-angle-right"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> <!--feedback section end-->

    </section>
    <section id="contact-us">
        <div class="row justify-content-center pt-120">
            <div class="col-xl-12">
                <div class="breadcrumb-content">
                    <h2 class="mb-2 text-center">Get In Touch</h2>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="contact-box rounded-2 bg-white overflow-hidden mt-8 pb-5">
                <div class="row g-4">
                    <div class="col-xl-12">
                        <form class="contact-form ps-5 ps-xl-4 py-6 pe-6" action="{{ route('enquiry.store') }}"
                            method="POST">
                            @csrf
                            <input type="hidden" name="establishment_id" value="{{ $establishment->id }}">
                            <h5 class="mb-6">Make An Enquiry? Send Message</h5>
                            <div class="row g-4">
                                <div class="col-sm-12">
                                    <div class="label-input-field">
                                        <label>Full Name</label>
                                        <input type="text" placeholder="Enter Your Name" name="name"
                                            id="name" value="{{ old('name') }}">
                                    </div>
                                    @if ($errors->has('name'))
                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                    @endif

                                </div>
                                <div class="col-sm-6">
                                    <div class="label-input-field">
                                        <label>Email</label>
                                        <input type="email" placeholder="You email" name="email" id="email"
                                            value={{ old('email') }}>
                                    </div>
                                    @if ($errors->has('email'))
                                        <span class="text-danger">{{ $errors->first('email') }}</span>
                                    @endif
                                </div>
                                <div class="col-sm-6">
                                    <div class="label-input-field">
                                        <label>Phone</label>
                                        <input type="tel" placeholder="Your phone" name="telephone" id="telephone"
                                            value="{{ old('telephone') }}">
                                    </div>
                                    @if ($errors->has('telephone'))
                                        <span class="text-danger">{{ $errors->first('telephone') }}</span>
                                    @endif
                                </div>
                                <div class="col-12">
                                    <div class="label-input-field">
                                        <label>Messages</label>
                                        <textarea placeholder="Write your message" rows="4" name="comments" id="comments"
                                            value={{ old('comments') }}></textarea>
                                    </div>
                                    @if ($errors->has('comments'))
                                        <span class="text-danger">{{ $errors->first('comments') }}</span>
                                    @endif
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-md rounded-1 mt-6 float-end">Send
                                Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.17/dist/sweetalert2.all.min.js"></script>
<script>
    // Initialize Swiper when the document is ready
    document.addEventListener('DOMContentLoaded', function () {
        var mySwiper = new Swiper('.swiper', {
            // Swiper configuration options here
            slidesPerView: 4, // Show three slides at a time
            navigation: {
                nextEl: '.ofp-slider-next',
                prevEl: '.ofp-slider-prev',
            },
        });
    });
</script>
@if (session('success'))
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            Swal.fire({
                icon: 'success',
                title: 'Success',
                text: '{{ session('success') }}',
            });
        });
    </script>
@endif
@if (session('error'))
    <script>
        // Wait for the DOM to be fully loaded
        document.addEventListener('DOMContentLoaded', function() {
            // Display SweetAlert with the general error message
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: '{{ session('error') }}',
            });
        });
    </script>
@endif
