<!DOCTYPE html>
@if (App::getLocale() == 'ar')
<html lang="en-US" class="rtl">
@else
<html lang="ar" class="ltr">
@endif
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Elghazal Website Description">
    <meta name="keyword" content="Website Keywords">
    <meta name="author" content="Elghazal">
    @yield('css')
        @include('pagesLayout.header')
</head>

<body>
<!-- Header Top Area Start -->
<section style="direction: ltr" class="elgazal-header-top-area">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="header-top-left">
                    <p>Need Help?: <i class="fa fa-phone"></i> Call: +965 12345678</p>
                </div>
            </div>
            <div class="col-md-6">


                <div class="header-top-right">
@guest

                    <a href="{{route('login')}}">
                        <i class="fa fa-key"></i>
                        {{ __('trans.Login') }}
                    </a>

                    <a href="{{route('register')}}">
                        <i class="fa fa-user"></i>
                          {{ __('trans.Register') }}
                    </a>
 @endguest

 @auth

 <a href="{{route('dashbord.user')}}">
    <i class="fa fa-key"></i>
    {{ __('trans.Dashbord') }}
</a>



<a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
     {{ __('trans.Logout') }}
</a>

<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    {{ csrf_field() }}
</form>
 @endauth




                    <div class="dropdown">
                        @if (App::getLocale() == 'ar')
                        <button class="btn-dropdown dropdown-toggle" type="button" id="dropdownlang"
                                data-toggle="dropdown" aria-haspopup="true">
                            {{ LaravelLocalization::getCurrentLocaleName() }}
                        </button>
                        @else
                        <button class="btn-dropdown dropdown-toggle" type="button" id="dropdownlang"
                                data-toggle="dropdown" aria-haspopup="true">
                            {{ LaravelLocalization::getCurrentLocaleName() }}
                        </button>
                        @endif
                        <ul class="dropdown-menu" aria-labelledby="dropdownlang">
                            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                <li>
                                    <a style="display:block" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                        {{ $properties['native'] }}
                                    </a>
                                </li>
                            @endforeach

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Header Top Area End -->


<!-- Main Header Area Start -->
<header class="elgazal-main-header-area">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="site-logo">
                    <a href="index.html">
                        <img style="width: 234px;margin-top: -16px !important;margin-bottom: -14px;" src="{{asset('assetscar/img/logo.jpg')}}" alt="elgazal"/>
                    </a>
                </div>
            </div>
            <div style="margin-top: 15px;" class="col-lg-6 col-sm-9">
                <div class="header-promo">
                    <div class="single-header-promo">
                        <div class="header-promo-icon">
                            <img src="{{asset('assetscar/img/globe.png')}}" alt="globe"/>
                        </div>
                        <div class="header-promo-info">
                            <h3>{{ __('trans.Saudi Arabia') }}</h3>
                            <p>{{ __('trans.King Khalid Airport Terminal 2 - Riyadh') }}</p>
                        </div>
                    </div>
                    <div class="single-header-promo">
                        <div class="header-promo-icon">
                            <img src="{{asset('assetscar/img/clock.png')}}" alt="clock"/>
                        </div>
                        <div class="header-promo-info">
                            <h3>{{ __('trans.Saturday to Thursday') }}</h3>
                            <p>9:00am - 6:00pm</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="header-action">
                    <a href="contact.html"><i class="fa fa-phone"></i> {{ trans('trans.REQUEST A CALL') }} </a>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Main Header Area End -->


<!-- Mainmenu Area Start -->
@component('components.navbarcomponent')

@endcomponent
<!-- Mainmenu Area End -->
@yield('content')


@include('pagesLayout.footer')
@yield('scripts')
