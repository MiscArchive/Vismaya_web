@extends('frontEnd.layouts.app')

@section('content')
    <!--hero section start-->
    <section id="home">

        <div class="healthcare-hero pt-7 pb-120 overflow-hidden">
            <div class="container">
                <div class="row g-5 g-xl-4 align-items-center justify-content-center">
                    <div class="col-xl-12">
                        <div class="healthcare-hero-slider-box overflow-hidden position-relative">
                            <div class="healthcare-hero-slider swiper">
                                <div class="swiper-wrapper">
                                    <div class="healthcare-hero-single swiper-slide bg-white rounded">
                                        <div class="left-content">
                                            <div class="d-flex align-items-center gap-1 gap-sm-2 mb-2 flex-wrap">
                                                <h5 class="mb-0 fw-normal text-primary gshop-subtitle">100% Organic Food
                                                    Provide
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
                                            <h1 class="display-4 mb-3">Natural & Organic Health Care</h1>
                                            <p class="mb-6">Assertively target market-driven intellectual capital with
                                                worldwide human capital holistic.</p>
                                            <a href="product-details.html" class="btn btn-primary">Shop Now<span
                                                    class="ms-2"><i class="fas fa-arrow-right"></i></span></a>
                                        </div>
                                        <img src="assets/img/products/orange.png" alt="orange"
                                            class="slide-product img-fluid d-none d-md-block">
                                        <img src="assets/img/products/orange-slice.png" alt="orange"
                                            class="slide-product img-fluid d-md-none">
                                    </div>
                                    <div class="healthcare-hero-single swiper-slide bg-white rounded">
                                        <div class="left-content">
                                            <div class="d-flex align-items-center gap-1 gap-sm-2 mb-2 flex-wrap">
                                                <h5 class="mb-0 fw-normal text-primary gshop-subtitle">100% Organic Food
                                                    Provide
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
                                            <h1 class="display-4 mb-3">Natural & Organic Health Care</h1>
                                            <p class="mb-6">Assertively target market-driven intellectual capital with
                                                worldwide human capital holistic.</p>
                                            <a href="product-details.html" class="btn btn-primary">Shop Now<span
                                                    class="ms-2"><i class="fas fa-arrow-right"></i></span></a>
                                        </div>
                                        <img src="assets/img/products/orange.png" alt="orange"
                                            class="slide-product img-fluid d-none d-md-block">
                                        <img src="assets/img/products/orange-slice.png" alt="orange"
                                            class="slide-product img-fluid d-md-none">
                                    </div>
                                    <div class="healthcare-hero-single swiper-slide bg-white rounded">
                                        <div class="left-content">
                                            <div class="d-flex align-items-center gap-1 gap-sm-2 mb-2 flex-wrap">
                                                <h5 class="mb-0 fw-normal text-primary gshop-subtitle">100% Organic Food
                                                    Provide
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
                                            <h1 class="display-4 mb-3">Natural & Organic Health Care</h1>
                                            <p class="mb-6">Assertively target market-driven intellectual capital with
                                                worldwide human capital holistic.</p>
                                            <a href="product-details.html" class="btn btn-primary">Shop Now<span
                                                    class="ms-2"><i class="fas fa-arrow-right"></i></span></a>
                                        </div>
                                        <img src="assets/img/products/orange.png" alt="orange"
                                            class="slide-product img-fluid d-none d-md-block">
                                        <img src="assets/img/products/orange-slice.png" alt="orange"
                                            class="slide-product img-fluid d-md-none">
                                    </div>
                                </div>
                            </div>
                            <div class="healthcare-hero-thumbnail-slider swiper">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide thumbnail-single">
                                        <img src="assets/img/home-3/thumbnail-1.png" alt="thumbnail"
                                            class="img-fluid rounded-circle">
                                    </div>
                                    <div class="swiper-slide thumbnail-single">
                                        <img src="assets/img/home-3/thumbnail-1.png" alt="thumbnail"
                                            class="img-fluid rounded-circle">
                                    </div>
                                    <div class="swiper-slide thumbnail-single">
                                        <img src="assets/img/home-3/thumbnail-1.png" alt="thumbnail"
                                            class="img-fluid rounded-circle">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!--hero section end-->
    </section>
    <!--category section start-->
    <section id="about-us">
        <div class="category-section pb-120">


            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-10">
                        <div class="section-title text-center">
                            <h2 class="mb-2">About Us</h2>
                            <p class="mb-0" style="">{{ filled($settings) ? $settings->description : '' }}</p>
                        </div>
                    </div>
                </div>
            </div>






        </div> <!--category section end-->
    </section>

    <section id="branches">
        <div class="category-section pt-10">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6">
                        <div class="section-title text-center">
                            <h2 class="mb-2">Branches</h2>
                            <p class="mb-0">Sticky niche markets via goal-oriented networks Completely recaptiualize</p>
                        </div>
                    </div>
                </div>


                <div class="container mt-4">
                    <div class="row justify-content-center g-4 mt-4">
                        <div class="col-12">
                            <div class="popular-category">
                                @if (filled($establishments))
                                    @foreach ($establishments as $index => $establishment)
                                    <div class="popular-category__item {{ $index == 1 ? 'active' : '' }}" style="box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;">
                                        <div class="popular-category__container">
                                            <div class="popular-category__img">
                                                <img src="{{ asset('uploads/'.$establishment->logo) }}" alt="image" class="img-fluid">
                                            </div>
                                            <div class="popular-category__content">
                                                <h5 class="popular-category__content-title">{{ $establishment->name }}</h5>
                                            </div>
                                            <div class="popular-category__overlay">
                                                <h5 class="popular-category__overlay-title">{{ $establishment->name }}</h5>
                                                <p class="popular-category__overlay-para">
                                                    {{ Str::limit(strip_tags($establishment->description), 150) }}
                                                </p>
                                                <a href="#" class="popular-category__overlay-btn">
                                                    <img src="assets/img/home-6/icon-arrow.png" alt="image" class="img-fluid">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                @endif

                            </div>
                        </div>
                    </div>
                </div>





{{--
                <div class="row justify-content-center g-4 mt-4">
                    @if (filled($establishments))
                        @foreach ($establishments as $establishment)
                            <div class="col-xxl-2 col-lg-3 col-md-4 col-sm-6">
                                <div
                                    class="gshop-animated-iconbox py-5 px-4 text-center border rounded-3 position-relative overflow-hidden hover-shadow">
                                    <div
                                        class="animated-icon d-inline-flex align-items-center justify-content-center rounded-circle position-relative">
                                        <img src="assets/img/category/vegetable.png" alt="flower" class="img-fluid">
                                    </div>
                                    <a href="http://vismaya_web.test/branch"
                                        class="text-dark fs-sm fw-bold d-block mt-3">{{ $establishment->name }}</a>

                                    <a href="http://vismaya_web.test/branch" class="explore-btn position-absolute"><i
                                            class="fa-solid fa-arrow-up"></i></a>
                                </div>
                            </div>
                        @endforeach
                    @endif

                </div> --}}

            </div>
        </div>
    </section>



    <section class="pb-100 pt-80 position-relative overflow-hidden z-1 trending-products-area">
        <img src="assets/img/shapes/garlic.png" alt="garlic" class="position-absolute garlic z--1"
            data-parallax="{&quot;y&quot;: 100}"
            style="transform:translate3d(0px, 48.388px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scaleX(1) scaleY(1) scaleZ(1); -webkit-transform:translate3d(0px, 48.388px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scaleX(1) scaleY(1) scaleZ(1); ">
        <img src="assets/img/shapes/carrot.png" alt="carrot" class="position-absolute carrot z--1"
            data-parallax="{&quot;y&quot;: -100}"
            style="transform:translate3d(0px, -48.358px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scaleX(1) scaleY(1) scaleZ(1); -webkit-transform:translate3d(0px, -48.358px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scaleX(1) scaleY(1) scaleZ(1); ">
        <img src="assets/img/shapes/mashrom.png" alt="mashrom" class="position-absolute mashrom z--1"
            data-parallax="{&quot;x&quot;: 100}"
            style="transform:translate3d(48.388px, 0px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scaleX(1) scaleY(1) scaleZ(1); -webkit-transform:translate3d(48.388px, 0px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scaleX(1) scaleY(1) scaleZ(1); ">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6">
                    <div class="section-title text-center">
                        <h2 class="mb-2">Product List</h2>

                    </div>
                </div>
            </div>

            <div class="row justify-content-center g-4 mt-5">
                <div class="products-slider-wrapper mt-8 position-relative">
                    <div class="offer-product-slider swiper pb-6">
                        <div class="swiper-wrapper">

                            <div class="swiper-slide" style="width: 25%;">
                                <div class="vertical-product-card rounded-2 position-relative border-0 bg-white"
                                    style="box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.2);">
                                    <div class="thumbnail position-relative text-center p-4">
                                        <a href="#"><img src="assets/img/products/apple.png" alt="apple"
                                                class="img-fluid"></a>
                                    </div>
                                    <div class="card-content text-center">
                                        <a href="product-details.html" class="card-title fw-bold d-block mb-2">
                                            <h4>Dried Onion Kinh Men</h4>
                                        </a>
                                        <div class="pricing mb-2 d-flex align-items-center justify-content-center gap-2">
                                            <p class="mb-0">Hi this test description</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide" style="width: 25%;">
                                <div class="vertical-product-card rounded-2 position-relative border-0 bg-white"
                                    style="box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.2);">
                                    <div class="thumbnail position-relative text-center p-4">
                                        <a href="#"><img src="assets/img/products/apple.png" alt="apple"
                                                class="img-fluid"></a>
                                    </div>
                                    <div class="card-content text-center">
                                        <a href="product-details.html" class="card-title fw-bold d-block mb-2">
                                            <h4>Dried Onion Kinh Men</h4>
                                        </a>
                                        <div class="pricing mb-2 d-flex align-items-center justify-content-center gap-2">
                                            <p class="mb-0">Hi this test description</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide" style="width: 25%;">
                                <div class="vertical-product-card rounded-2 position-relative border-0 bg-white"
                                    style="box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.2);">
                                    <div class="thumbnail position-relative text-center p-4">
                                        <a href="#"><img src="assets/img/products/apple.png" alt="apple"
                                                class="img-fluid"></a>
                                    </div>
                                    <div class="card-content text-center">
                                        <a href="product-details.html" class="card-title fw-bold d-block mb-2">
                                            <h4>Dried Onion Kinh Men</h4>
                                        </a>
                                        <div class="pricing mb-2 d-flex align-items-center justify-content-center gap-2">
                                            <p class="mb-0">Hi this test description</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide" style="width: 25%;">
                                <div class="vertical-product-card rounded-2 position-relative border-0 bg-white"
                                    style="box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.2);">
                                    <div class="thumbnail position-relative text-center p-4">
                                        <a href="#"><img src="assets/img/products/apple.png" alt="apple"
                                                class="img-fluid"></a>
                                    </div>
                                    <div class="card-content text-center">
                                        <a href="product-details.html" class="card-title fw-bold d-block mb-2">
                                            <h4>Dried Onion Kinh Men</h4>
                                        </a>
                                        <div class="pricing mb-2 d-flex align-items-center justify-content-center gap-2">
                                            <p class="mb-0">Hi this test description</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Additional slides go here -->
                        </div>
                    </div>
                    <button style="margin-bottom: 150px;" class="ofp-slider-prev"><i
                            class="fas fa-angle-left"></i></button>
                    <button style="margin-bottom: 150px;" class="ofp-slider-next"><i
                            class="fas fa-angle-right"></i></button>
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
                            <img src="assets/img/about/clients.png" alt="clients" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-xl-5">
                        <div class="swiper feedback-slider-2">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide feedback-card bg-white rounded py-6 px-4">
                                    <div class="d-flex align-items-center gap-4 flex-wrap mb-4">
                                        <img src="assets/img/authors/client-1.png" alt="client"
                                            class="img-fluid rounded-circle flex-shrink-0">
                                        <div class="clients-info">
                                            <h5 class="mb-1">George Nakashima</h5>
                                            <ul class="d-flex align-items-center fs-xs text-warning">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <p class="mb-0">“Conveniently synergize premium collaboration and idea-sharing with
                                        compelling "outside the box" thinking. Interactivel product distinctive paradigms
                                        whereas one-to-one intellectual capital. resource sucking services. Objectively
                                        customize vertical.”</p>
                                </div>
                                <div class="swiper-slide feedback-card bg-white rounded py-6 px-4">
                                    <div class="d-flex align-items-center gap-4 flex-wrap mb-4">
                                        <img src="assets/img/authors/client-2.png" alt="client"
                                            class="img-fluid rounded-circle flex-shrink-0">
                                        <div class="clients-info">
                                            <h5 class="mb-1">George Nakashima</h5>
                                            <ul class="d-flex align-items-center fs-xs text-warning">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <p class="mb-0">“Conveniently synergize premium collaboration and idea-sharing with
                                        compelling "outside the box" thinking. Interactivel product distinctive paradigms
                                        whereas one-to-one intellectual capital. resource sucking services. Objectively
                                        customize vertical.”</p>
                                </div>
                                <div class="swiper-slide feedback-card bg-white rounded py-6 px-4">
                                    <div class="d-flex align-items-center gap-4 flex-wrap mb-4">
                                        <img src="assets/img/authors/client-3.png" alt="client"
                                            class="img-fluid rounded-circle flex-shrink-0">
                                        <div class="clients-info">
                                            <h5 class="mb-1">George Nakashima</h5>
                                            <ul class="d-flex align-items-center fs-xs text-warning">
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                                <li><i class="fas fa-star"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <p class="mb-0">“Conveniently synergize premium collaboration and idea-sharing with
                                        compelling "outside the box" thinking. Interactivel product distinctive paradigms
                                        whereas one-to-one intellectual capital. resource sucking services. Objectively
                                        customize vertical.”</p>
                                </div>
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
                        <form class="contact-form ps-5 ps-xl-4 py-6 pe-6" action="{{ route('enquiry.store') }}" method="POST">
                            @csrf
                            <input type="hidden" name="establishment_id" value="" >
                            <h5 class="mb-6">Make An Enquiry? Send Message</h5>
                            <div class="row g-4">
                                <div class="col-sm-12">
                                    <div class="label-input-field">
                                        <label>Full Name</label>
                                        <input type="text" placeholder="Enter Your Name" name="name" id="name" value="{{old('name')}}">
                                    </div>
                                    @if ($errors->has('name'))
                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                   @endif

                                </div>
                                <div class="col-sm-6">
                                    <div class="label-input-field">
                                        <label>Email</label>
                                        <input type="email" placeholder="You email" name="email" id="email" value={{old('email')}}>
                                    </div>
                                    @if ($errors->has('email'))
                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                   @endif
                                </div>
                                <div class="col-sm-6">
                                    <div class="label-input-field">
                                        <label>Phone</label>
                                        <input type="tel" placeholder="Your phone" name="telephone" id="telephone" value="{{old('telephone')}}">
                                    </div>
                                     @if ($errors->has('telephone'))
                                    <span class="text-danger">{{ $errors->first('telephone') }}</span>
                                   @endif
                                </div>
                                <div class="col-12">
                                    <div class="label-input-field">
                                        <label>Messages</label>
                                        <textarea placeholder="Write your message" rows="4" name="comments" id="comments" value={{old('comments')}}></textarea>
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
@if(session('success'))
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
@if(session('error'))
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