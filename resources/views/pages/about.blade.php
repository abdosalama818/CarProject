@extends('pagesLayout.layout')
@section('content')


<!-- Breadcromb Area Start -->
<section class="elgazal-breadcromb-area section_70">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcromb-box">
                    <h3>{{ __('trans.ABOUT US') }}</h3>
                    <ul>
                        <li><i class="fa fa-home"></i></li>
                        <li><a href="{{ url('/') }}">{{ __('trans.Home') }}</a></li>
                        <li><i class="fa fa-angle-right"></i></li>
                        <li>{{ __('trans.ABOUT US') }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcromb Area End -->


<!-- About Page Area Start -->
<section class="about-page-area section_70">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="about-page-left text-right-rtl">
                    <h4>{{ __('trans.ABOUT US') }}</h4>
                    <h3>{{ __('trans.We Are Committed To Provide Safe Ride Solutions') }}</h3>
                    <p><span>since 2003</span>,Claritas est etiam processus dynamicus, qui sequitur mutationem
                        consuetudi- um lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram,
                        anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima.</p>
                    <p>Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.litterarum
                        formas humanitatis per seacula quarta decima et quinta decima</p>
                    <div class="about-page-call">
                        <div class="page-call-icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="call-info">
                            <p>{{ __('trans.Need Any Help?') }}</p>
                            <h4><a href="#">(965) 12345678</a></h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-page-right">
                    <img src="{{asset('assetscar/img/about-page.jpg')}}" alt="about page"/>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Page Area End -->


<!-- Promo Area Start -->
<section class="elgazal-promo-area">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="promo-box-left">
                    <img src="{{asset('assetscar/img/toyota-offer-2.png')}}" alt="promo car"/>
                </div>
            </div>
            <div class="col-md-6">
                <div class="promo-box-right">
                    <h3>{{ __("trans.Do You Want To Reserve A Car? So Don't Be Late.") }}</h3>
                    <a href="{{ url('fleats') }}" class="elgazal-btn">{{ __('trans.RESERVE NOW') }}</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Promo Area End -->
<!-- Call Area End -->
@endsection
