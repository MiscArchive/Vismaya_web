<!DOCTYPE html>
<html lang="en" data-bs-theme="light">


<!-- Mirrored from grostore-html.themetags.com/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 01 Aug 2023 06:59:27 GMT -->
<head>
    <!--required meta tags-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--meta-->
    <meta name="description"
          content="Grostore Grocery  eCommerce html template. Multivendor responsive eCommerce template">
    <meta name="author" content="ThemeTags">
    <meta name="keywords"
          content="Grostore Grocery  ecommerce, admin template, online shop, e-commerce, ecommerce template, marketplace, modern, responsive,  business, mobile, bootstrap, html5, css3, js, gallery, slider, touch, creative, clean">
    <!--favicon icon-->
    {{-- <link rel="icon" href="{{ asset('assets/img/favicon.png') }}" type="image/png" sizes="16x16"> --}}

    <!--title-->
    <title>Vismaya</title>

    <!--build:css-->
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <!-- endbuild -->
    <style>
        body {
            overflow-x: hidden;
        }

        /* Add this CSS to your existing styles */
        /* Adjust the existing styles as needed */

        /* Add this CSS to your existing styles */
        .popular-category__item {
            position: relative;
            overflow: hidden;
        }

        .popular-category__overlay {
            /* Position the overlay absolutely to cover the entire item */
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.8);
            /* Adjust opacity and color as needed */
            color: white;
            padding: 20px;
            transform: translateY(100%);
            /* Move the overlay out of sight initially */
            transition: transform 0.3s ease;
            /* Add smooth transition animation */
        }

        .popular-category__item:hover .popular-category__overlay {
            transform: translateY(0);
            /* Move the overlay into view on hover */
        }
    </style>
</head>

<body>

    <!--preloader start-->
    <div id="preloader">
        <img src="{{ asset('assets/img/preloader.gif') }}" alt="preloader" width="450" class="img-fluid">
    </div>
