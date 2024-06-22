<div class="topbar">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-5 col-12">
                <!-- Contact -->
                <ul class="top-link">
                    <li><a href="#"> About </a></li>
                    <li class="{{ Route::is('doctors') ? 'active' : '' }}"><a href="{{ route('doctors') }}"> Doctors </a>
                    </li>
                    <li class="{{ Route::is('contact') ? 'active' : '' }}"><a href="{{ route('contact') }}">Contact</a>
                    </li>
                    <li><a href="#">FAQ</a></li>
                </ul>
                <!-- End Contact -->
            </div>

            <div class="col-lg-6 col-md-7 col-12">
                <!-- Top Contact -->
                <ul class="top-contact">
                    <li><i class="fa fa-phone"></i>+880 1234 56789</li>
                    <li><i class="fa fa-envelope"></i><a href="mailto:support@yourmail.com">support@yourmail.com</a>
                    </li>
                </ul>
                <!-- End Top Contact -->
            </div>
            <div class="col-lg-6 col-md-9 col-12 nav menu">
                <li class="active"><a href="">{{ __('messages.lang') }}<i
                            class="icofont-rounded-down"></i></a>
                    <ul class="dropdown">
                        <li><a href="{{ LaravelLocalization::getLocalizedURL('en') }}">English</a></li>
                        <li><a href="{{ LaravelLocalization::getLocalizedURL('ar') }}"> العربية </a></li>
                    </ul>
                </li>
            </div>

        </div>
    </div>
</div>
