@extends('frontEnd.layouts.app')
@section('content')
    <div class="ht__bradcaump__area">
        <div class="ht__bradcaump__container">
            <img src="https://www.cocoonpreschool.org/themes/public/assets/images/bg-png/6.png" alt="bradcaump images">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="bradcaump__inner text-center">
                            <h2 class="bradcaump-title">Contact Us</h2>
                            <nav class="bradcaump-inner">
                                <a class="breadcrumb-item" href="index.html">Home</a>
                                <span class="brd-separetor"><img
                                        src="https://www.cocoonpreschool.org/themes/public/assets/images/icons/brad.png"
                                        alt="separator images"></span>
                                <span class="breadcrumb-item active">Contact Us</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="page__contact bg--white pb--150 pt--180">
        <div class="container">
            <div class="row">
                <!-- Start Single Address -->
                <div class="col-md-6 col-sm-6 col-12 col-lg-4">
                    <div class="address location">
                        <div class="ct__icon">
                            <i class="fa fa-home"></i>
                        </div>
                        <div class="address__inner">
                            <h2>Our Location</h2>

                            <ul>
                                <li>Bhadra, Gandhinagar, puliyarakonam junction, <br> Near Panchayat Rd, Puliyarakonam,
                                    Vilappil, Kerala 695573</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- End Single Address -->
                <!-- Start Single Address -->
                <div class="col-md-6 col-sm-6 col-12 col-lg-4 xs-mt-60">
                    <div class="address phone">
                        <div class="ct__icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="address__inner">
                            <h2>Phone Number</h2>
                            <ul>
                                <li><a href="tel:+91 81297 76611">+91 81297 76611</a></li>

                            </ul>
                            <br>
                            <br>
                        </div>
                    </div>
                </div>
                <!-- End Single Address -->
                <!-- Start Single Address -->
                <div class="col-md-6 col-sm-6 col-12 col-lg-4 md-mt-60 sm-mt-60">
                    <div class="address email">
                        <div class="ct__icon">
                            <i class="fa fa-envelope"></i>
                        </div>
                        <div class="address__inner">
                            <h2>E-mail Address</h2>
                            <ul>
                                <li><a href="mailto:info@cocoonpreschool.org">info@cocoonpreschool.org</a></li>
                            </ul>
                            <br>
                            <br>
                        </div>
                    </div>
                </div>
                <!-- End Single Address -->
            </div>
        </div>
    </section>
    {{-- 
        <div class="contact__map">
        	<div class="container-fluid">
        		<div class="row">
        			<div class="col-lg-7">
        				<div class="google__map">
        					<div id="googleMap">
        						
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d328.15663304361266!2d77.02245285738047!3d8.539528000378823!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b05b722a7c2403f%3A0x6f131c4f86cb0d75!2sCocoon%20Pre%20School!5e1!3m2!1sen!2sin!4v1582527982728!5m2!1sen!2sin" width="100%" height="781" frameborder="0" style="border:0;" allowfullscreen=""></iframe>

        					</div>
        				</div>
        			</div>
        			<div class="col-lg-5">
        				<div class="child__image">
        					<img src="https://www.cocoonpreschool.org/themes/public/assets/images/others/4.jpg" alt="children images">
        				</div>
        			</div>
        		</div>
        	</div>
        </div> --}}


    <section class="contact__box section-padding--lg bg-image--27">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-sm-12 col-md-12">
                    <div class="section__title text-center">
                        <h2 class="title__line">Feel Free To write Us</h2>
                    </div>
                </div>
            </div>
            <div class="row mt--80">
                <div class="col-lg-12">
                    <div class="contact-form-wrap">


                        <form  method="POST" action="{{ route('contactForm') }}">
                            @csrf

                            <input class="form-control" type="hidden" name="from" value="contact.htm">
                            <div class="single-contact-form name">
                                <input type="text" name="name" placeholder="Your Name*" required="">
                                <input type="email" name="email" placeholder="Mail*" required="">
                            </div>
                            <div class="single-contact-form name">
                                <input type="text" name="subject" placeholder="Subject*" required="">
                                <input type="text" name="telephone" placeholder="Telephone*" required="">
                            </div>
                            <div class="single-contact-form message">
                                <textarea name="comments" placeholder="Type your message here.." required=""></textarea>
                            </div>
                            <div class="contact-btn">
                                <button type="submit" class="dcare__btn">submit</button>
                            </div>
                          
                        </form>
                    </div>
                    <div class="form-output">
                        <p class="form-messege">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
