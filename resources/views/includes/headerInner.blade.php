<div class="header-inner">
    <div class="container">
        <div class="inner">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-12">
                    <!-- Start Logo -->
                    <div class="logo">
                        <a href="{{ route('home') }}"><img src="{{ asset('assets/img/logo.png') }}" alt="#"></a>
                    </div>
                    <!-- End Logo -->
                    <!-- Mobile Nav -->
                    <div class="mobile-nav"></div>
                    <!-- End Mobile Nav -->
                </div>
                <div class="col-lg-7 col-md-9 col-12">
                    <!-- Main Menu -->
                    <div class="main-menu">
                        <nav class="navigation">
                            <ul class="nav menu">
                                <li class="{{ Route::is('home') ? 'active' : '' }}"><a href="{{ route('home') }}">Home</i></a>
                                    {{-- <ul class="dropdown">
                                        <li><a href="index.html">Home Page 1</a></li>
                                    </ul> --}}
                                </li>
                                <li class="{{ Route::is('doctors') ? 'active' : '' }}"><a href="{{ route('doctors') }}"> Doctors </a></li>
                                <li class="{{ Route::is('services') ? 'active' : '' }}"><a href="{{ route('services') }}"> Services </a></li>
                                <li class="{{ Route::is('error404') ? 'active' : '' }}"><a href="#">Pages <i class="icofont-rounded-down"></i></a>
                                    <ul class="dropdown">
                                        <li><a href="{{ route('error404') }}">404 Error</a></li>
                                    </ul>
                                </li>
                                <li class="{{ Route::is('blog-single') ? 'active' : '' }}"><a href="#">Blogs <i class="icofont-rounded-down"></i></a>
                                    <ul class="dropdown">
                                        <li><a href="{{ route('blog-single') }}">Blog Details</a></li>
                                    </ul>
                                </li>
                                <li class="{{ Route::is('contact') ? 'active' : '' }}"><a href="{{ route('contact') }}">Contact Us</a></li>
                            </ul>
                        </nav>
                    </div>
                    <!--/ End Main Menu -->
                </div>
                <div class="col-lg-2 col-12">
                    <div class="get-quote">
                        <a href="{{ route('bookAppointment') }}" class="btn">Book Appointment</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>