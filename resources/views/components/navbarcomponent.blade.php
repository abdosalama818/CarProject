<section class="elgazal-mainmenu-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-9">
                <div class="mainmenu">
                    <nav>
                        <ul id="elgazal_navigation">
                            <li class="active"><a href="{{route('home')}}">{{ __('trans.Home') }}</a></li>
                            <li><a href="{{route('about')}}">{{ __('trans.ABOUT US') }}</a></li>
                            <li><a href="{{route('fleats')}}">{{ __('trans.OUR FLEET') }}</a></li>
                            <li><a href="{{route('deals')}}">{{ __('trans.Our Deals') }}</a></li>
                            <li><a href="{{route('contact')}}">{{ __('trans.CONTACT US') }}</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="col-lg-3 col-sm-12">
                <div class="main-search-right">
                    <!-- Responsive Menu Start -->
                    <div class="elgazal-responsive-menu"></div>
                    <!-- Responsive Menu Start -->
                    <!-- Search Box Start -->
                    <div style="direction: ltr !important;" class="search-box">
                          <form action="{{ route('car.search') }}" method="get">
                                    @csrf
                            <input type="search" placeholder="{{ __('trans.search') }}" name='name'>
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                    <!-- Search Box End -->

                </div>
            </div>
        </div>
    </div>
</section>
