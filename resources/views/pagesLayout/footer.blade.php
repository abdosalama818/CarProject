
<!-- Footer Area Start -->
<footer class="elgazal-footer-area main-rtl">
    <div class="footer-top-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 ">
                    <div class="single-footer text-right-rtl">
                        <div class="footer-logo">
                            <a href="#">
                                <img style="width: 125px;" src="{{asset('assetscar/img/logo.jpg')}}" alt="footer-logo"/>
                            </a>
                        </div>
                        <p>sed do eiusmod tempor incididunt ut labore et dolore magna as aliqua. Ut enim ad minim
                            veniam, quis nostrud exercitation ullamco.</p>
                        <div class="footer-address">
                            <h3>{{ trans('trans.Head office') }}</h3>
                            <p>{{ trans('trans.King Khalid Airport Terminal 2 - Riyadh') }}</p>
                            <ul>
                                <li>{{ trans('trans.Phone: 123456789') }} </li>
                                <li>{{ trans('trans.Email: example@mail.com') }} </li>
                                <li>{{ trans('trans.Office Time: 9AM- 4PM') }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-footer quick_links text-right-rtl">
                        <h3>Quick Links</h3>
                        <ul class="quick-links">
                            <li><a href="{{ url('about') }}">{{ trans('trans.ABOUT US') }}</a></li>
                            <li><a href="{{ url('fleats') }}">{{ trans('trans.Our Cars') }}</a></li>
                            <li><a href="{{ url('deals') }}">{{ trans('trans.Our Deals') }}</a></li>
                            <li><a href="{{ url('contact') }}">{{ trans('trans.Contact us') }}</a></li>
                        </ul>
                        <ul class="quick-links">
                            <li><a href="{{ url('login') }}">{{ trans('trans.Register') }}</a></li>
                            <li><a href="#">{{ trans('trans.Privacy Policy') }}</a></li>
                            <li><a href="#">{{ trans('trans.Terms and Condition') }}</a></li>
                        </ul>
                    </div>
                    <div class="single-footer newsletter_box text-right-rtl">
                        <h3>{{ trans('trans.NEWSLETTER') }}</h3>
                        <form style="direction: ltr">
                            <input type="email" placeholder="Email Address"/>
                            <button type="submit"><i class="fa fa-paper-plane"></i></button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-footer text-right-rtl">
                        <h3>{{ trans('trans.RECENT CARS') }}</h3>
                        <ul>
                            <li>
                                <div class="single-footer-post">
                                    <div class="footer-post-image">
                                        <a href="#">
                                            <img src="{{asset('assetscar/img/offer-toyota.png')}}" alt="footer post"/>
                                        </a>
                                    </div>
                                    <div class="footer-post-text">
                                        <h3>
                                            <a href="#">
                                                Toyota Alphard
                                            </a>
                                        </h3>
                                        <p>$50.00/ Day</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="single-footer-post">
                                    <div class="footer-post-image">
                                        <a href="#">
                                            <img src="{{asset('assetscar/img/offer-toyota.png')}}" alt="footer post"/>
                                        </a>
                                    </div>
                                    <div class="footer-post-text">
                                        <h3>
                                            <a href="#">
                                                Toyota Alphard
                                            </a>
                                        </h3>
                                        <p>$50.00/ Day</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="single-footer-post">
                                    <div class="footer-post-image">
                                        <a href="#">
                                            <img src="{{asset('assetscar/img/offer-toyota.png')}}" alt="footer post"/>
                                        </a>
                                    </div>
                                    <div class="footer-post-text">
                                        <h3>
                                            <a href="#">
                                                Toyota Alphard
                                            </a>
                                        </h3>
                                        <p>$50.00/ Day</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="single-footer-post">
                                    <div class="footer-post-image">
                                        <a href="#">
                                            <img src="{{asset('assetscar/img/offer-toyota.png')}}" alt="footer post"/>
                                        </a>
                                    </div>
                                    <div class="footer-post-text">
                                        <h3>
                                            <a href="#">
                                                Toyota Alphard
                                            </a>
                                        </h3>
                                        <p>$50.00/ Day</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom-area">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="copyright">
                        <p>&copy; {{ trans('trans.© CopyRight 2023 ElGhazal Company') }} </p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="footer-social">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-skype"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Area End -->


<!--Jquery js-->
<script src="{{asset('assetscar/js/jquery.min.js')}}"></script>
<!-- Popper JS -->
<script src="{{asset('assetscar/js/popper.min.js')}}"></script>
<!--Bootstrap js-->
<script src="{{asset('assetscar/js/bootstrap.min.js')}}"></script>
<!--Owl-Carousel js-->
<script src="{{asset('assetscar/js/owl.carousel.min.js')}}"></script>
<!--Lightgallery js-->
<script src="{{asset('assetscar/js/lightgallery-all.js')}}"></script>
<script src="{{asset('assetscar/js/custom_lightgallery.js')}}"></script>
<!--Slicknav js-->
<script src="{{asset('assetscar/js/jquery.slicknav.min.js')}}"></script>
<!--Magnific js-->
<script src="{{asset('assetscar/js/jquery.magnific-popup.min.js')}}"></script>
<!--Nice Select js-->
<script src="{{asset('assetscar/js/jquery.nice-select.min.js')}}"></script>
<!-- Datepicker JS -->
<script src="{{asset('assetscar/js/jquery.datepicker.min.js')}}"></script>
<!--ClockPicker JS-->
<script src="{{asset('assetscar/js/jquery-clockpicker.min.js')}}"></script>
<!--Main js-->
<script src="{{asset('assetscar/js/main.js')}}"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>


</body>
</html>

