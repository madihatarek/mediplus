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
                                <li class="{{ Route::is('home') ? 'active' : '' }}"><a href="{{ route('home') }}"> {{ __('messages.home') }} </i></a>
                                    {{-- <ul class="dropdown">
                                        <li><a href="index.html">Home Page 1</a></li>
                                    </ul> --}}
                                </li>
                                <li class="{{ Route::is('doctors') ? 'active' : '' }}"><a href="{{ route('doctors') }}"> {{ __('messages.doctors') }} </a></li>
                                <li class="{{ Route::is('services') ? 'active' : '' }}"><a href="{{ route('services') }}"> {{ __('messages.services') }} </a></li>
                                <li class="{{ Route::is('error404') ? 'active' : '' }}"><a href="#">{{ __('messages.pages') }} <i class="icofont-rounded-down"></i></a>
                                    <ul class="dropdown">
                                        <li><a href="{{ route('error404') }}">{{ __('messages.error') }}</a></li>
                                    </ul>
                                </li>
                                <li class="{{ Route::is('blog-single') ? 'active' : '' }}"><a href="#">{{ __('messages.blogs') }} <i class="icofont-rounded-down"></i></a>
                                    <ul class="dropdown">
                                        <li><a href="{{ route('blog-single') }}"> {{ __('messages.blog_details') }} </a></li>
                                    </ul>
                                </li>
                                <li class="{{ Route::is('contact') ? 'active' : '' }}"><a href="{{ route('contact') }}">{{ __('messages.contact_us') }}</a></li>
                            </ul>
                        </nav>
                    </div>
                    <!--/ End Main Menu -->
                </div>
                <div class="col-lg-2 col-12">
                    <div class="get-quote">
                        <a href="{{ route('bookAppointment') }}" class="btn">{{ __('messages.book_appointment') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>