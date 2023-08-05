@extends('frontEnd.layouts.app')
@section('content')
    <div class="ht__bradcaump__area">
        <div class="ht__bradcaump__container">
            <img src="https://www.cocoonpreschool.org/themes/public/assets/images/bg-png/6.png" alt="bradcaump images">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="bradcaump__inner text-center">
                            <h2 class="bradcaump-title">Addmissions</h2>
                            <nav class="bradcaump-inner">
                                <a class="breadcrumb-item" href="index.html">Home</a>
                                <span class="brd-separetor"><img
                                        src="https://www.cocoonpreschool.org/themes/public/assets/images/icons/brad.png"
                                        alt="separator images"></span>
                                <span class="breadcrumb-item active">Addmissions</span>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <section class="page-class-details bg--white" style="margin-bottom: 50px;margin-top: 50px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p>Admission forms are available at our office. An attested copy of the birth certificate of the child
                        and 2 passport size photographs must be attached with the form. The duly filled form along with the
                        admission fee must be submitted at our office. The Principal is always available in the office for
                        counselling and discussion.</p><br>

                    <p><b>Eligibility:</b></p>
                    <p>Play Group: 2 years &amp; above</p>
                    <p>Nursery: 3 years &amp; above</p>
                    <p>LKG: 4 years &amp; above</p>
                    <p>UKG: 5 years &amp; above</p>

                    <p>Day Care: 1 years &amp; above</p>
                </div>
                <div class="col-lg-12" style="margin-top:15px;">

                    <form action="{{ route('admissionForm') }}" method="POST" class="billing-form checkout-form">
                        @csrf

                        <div class="row">

                            <div class="col-md-6 col-12 mb--20">
                                <input type="text" name="parent_name" required="" placeholder="Parent Name">
                            </div>
                            <div class="col-md-6 col-12 mb--20">
                                <input type="text" name="child_name" required="" placeholder="Child Name">
                            </div>
                            <div class="col-md-6 col-12 mb--20">
                                <input type="text" name="child_age" required="" placeholder="Child Age">
                            </div>

                            <div class="col-6 mb--20">
                                <select name="class" required="">
                                    <option value="">Select a Class</option>

                                    <option value="Pre-Nursery / Play-Group">Pre-Nursery / Play-Group</option>
                                    <option value="Nursery / Montessori-1"> Nursery / Montessori-1</option>
                                    <option value="LKG / Montessori-2">LKG / Montessori-2</option>
                                    <option value="UKG / Montessori-3">UKG / Montessori-3</option>

                                </select>
                            </div>
                            <!-- <div class="col-12 mb--20">
                                                                <input type="text" placeholder="Company Name">
                                                            </div>
                                                            <div class="col-12 mb--20">
                                                                <input placeholder="Street address" type="text">
                                                            </div>
                                                            <div class="col-12 mb--20">
                                                                <input placeholder="Apartment, suite, unit etc. (optional)" type="text">
                                                            </div>
                                                            <div class="col-12 mb--20">
                                                                <input placeholder="Town / City" type="text">
                                                            </div>
                                                            <div class="col-md-6 col-12 mb--20">
                                                                <input type="text" placeholder="State / County">
                                                            </div>
                                                            <div class="col-md-6 col-12 mb--20">
                                                                <input placeholder="Postcode / Zip" type="text">
                                                            </div> -->
                            <div class="col-md-6 col-12 mb--20">
                                <input type="email" name="email" required="" placeholder="Email Address">
                            </div>
                            <div class="col-md-6 col-12">
                                <input placeholder="Phone Number" required="" name="phone" type="text">
                            </div>

                            <div class="col-md-6 col-12">
                                <button type="submit" class="dcare__btn">Register Now</button>
                            </div>


                        </div>
                    </form>


                </div>
            </div>
        </div>
    </section>
@endsection
