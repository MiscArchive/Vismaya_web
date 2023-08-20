<!DOCTYPE html>
<html lang="en" data-bs-theme="light">


<!-- Mirrored from grostore-html.themetags.com/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 01 Aug 2023 06:59:27 GMT -->

<head>
    <!--required meta tags-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--meta-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="">
    <meta name="author" content="ThemeTags">
    <meta name="keywords"
        content="">
    <!--favicon icon-->
    {{-- <link rel="icon" href="{{ asset('uploads/'.$settings->favicon) }}" type="image/png" sizes="16x16"> --}}

    <!--title-->
    <title>Vismaya</title>

    <!--build:css-->
    <link rel="stylesheet" href="assets/css/main.css">
    <!-- endbuild -->
</head>
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

<body>

    <!--preloader start-->
    <div id="preloader">
        <img src="{{ asset('assets/img/preloader.gif') }}" alt="preloader" width="450" class="img-fluid">
    </div>
