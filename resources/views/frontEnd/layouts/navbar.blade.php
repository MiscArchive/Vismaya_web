    <!-- Start Mainmenu Area -->
    <div class="mainmenu__wrapper bg--white sticky__header">
        <div class="container">
            <div class="row d-none d-lg-flex">
                <div class="col-sm-4 col-md-6 col-lg-2 order-1 order-lg-1">
                    <div class="logo">
                        <a href="#">
                            <img src="{{ asset('frontEnd/assets/images/logo/2.png') }}" alt="logo-images">
                        </a>
                    </div>
                </div>
                <div class="col-sm-4 col-md-2 col-lg-9 order-3 order-lg-2">
                    <div class="mainmenu__wrap">
                        <nav class="mainmenu__nav">
                            <ul class="mainmenu">
                                <li><a href="{{route('homepage')}}">Home</a></li>
                                <li><a href="{{route('aboutpage')}}">About</a></li>
                                <li class="drop"><a href="#">Curriculum</a>
                                    <ul class="dropdown__menu">
                                        @foreach ($curriculams as $curriculam )
                                        <li><a href="{{ 'curriculum/'.$curriculam->slug }}"><i class="fa fa-futbol-o"
                                            aria-hidden="true"></i> {{ $curriculam->title }}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li><a href="{{route('admissionpage')}}">Addmissions</a></li>
                                <li><a href="{{ route('image.gallery') }}">Image Gallery</a></li>
                                <li><a href="{{ route('video.gallery') }}">Video Gallery</a></li>
                                <li><a href="{{route('contactpage')}}">Contact Us</a></li>


                            </ul>
                        </nav>
                    </div>
                </div>

            </div>
            <!-- Mobile Menu -->
            <div class="mobile-menu d-block d-lg-none">
                <div class="logo">
                    <a href="#"><img src="{{ URL::to('themes/public/assets/images/logo/2.png') }}"
                            alt="logo"></a>
                </div>

            </div>
            <!-- Mobile Menu -->
        </div>
    </div>
    <!-- End Mainmenu Area -->
    </header>
