@extends('pagesLayout.layout')

@section('content')
<!-- Slider Area Start -->
<section class="elgazal-slider-area fix">
    <div class="elgazal-slide owl-carousel">
        <div class="elgazal-main-slide slide-item-1">
            <div class="elgazal-main-caption">
                <div class="elgazal-caption-cell">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="slider-text text-right-rtl">
                                    <p>{{ __('trans.for rent $65 per day') }}</p>
                                    <h2>{{ __('trans.RESERVE NOW') }} <span>{{ __('trans.50% Off') }}</span></h2>
                                    <a href="#" class="elgazal-btn">{{ __('trans.RESERVE NOW!') }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="elgazal-main-slide slide-item-2">
            <div class="elgazal-main-caption">
                <div class="elgazal-caption-cell">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="slider-text text-right-rtl">
                                    <p>{{ __('trans.for rent $65 per day') }}</p>
                                    <h2>{{ __('trans.RESERVE NOW') }} <span>{{ __('trans.50% Off') }}</span></h2>
                                    <a href="#" class="elgazal-btn">{{ __('trans.RESERVE NOW!') }}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Slider Area End -->


<!-- Find Area Start -->
<section class="elgazal-find-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="find-box">
                    <div class="row">
                        @if (App::getLocale() == 'ar')
                        <div class="col-md-8">

                            <div class="find-form">

                                 <form action="{{ route('car.search') }}" method="get">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-4">
                                            <p>
                                                <input type="text" placeholder="Car Name" name='name'/>
                                            </p>
                                        </div>
                                        <div class="col-md-4">
                                            <p>
                                                <select name='cat'>
                                                    <option>Car Category</option>

                                                    @foreach ($cats as $cat )
                                                          <option value="{{$cat->id}}">{{$cat->name}}</option>
                                                    @endforeach
                                                </select>
                                            </p>
                                        </div>
                                        <div class="col-md-4">
                                            <p>
                                                <select name='model'>
                                                    <option>Car Model</option>

                                                   @foreach ($models as $model )
                                                          <option value="{{$model->id}}">{{$model->name}}</option>
                                                    @endforeach
                                                </select>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <p>
                                                <select>
                                                    <option name='brand'>Car Brand</option>

                                                   @foreach ($brands as $brand )
                                                          <option value="{{$brand->id}}">{{$brand->name}}</option>
                                                    @endforeach
                                                </select>
                                            </p>
                                        </div>
                                        <div class="col-md-4">
                                            <p>
                                                <button type="submit" class="elgazal-theme-btn">Find Car</button>
                                            </p>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="find-text">
                                <h3>{{ __('trans.Search Your Best Cars here') }}</h3>
                            </div>
                        </div>
                        @else
                            <div class="col-md-4">
                            <div class="find-text">
                                <h3>{{ __('trans.Search Your Best Cars here') }}</h3>
                            </div>
                        </div>
                        <div class="col-md-8">

                            <div class="find-form">

                                 <form action="{{ route('car.search') }}" method="get">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-4">
                                            <p>
                                                <input type="text" placeholder="Car Name" name='name'/>
                                            </p>
                                        </div>
                                        <div class="col-md-4">
                                            <p>
                                                <select name='cat'>
                                                    <option>Car Category</option>

                                                    @foreach ($cats as $cat )
                                                          <option value="{{$cat->id}}">{{$cat->name}}</option>
                                                    @endforeach
                                                </select>
                                            </p>
                                        </div>
                                        <div class="col-md-4">
                                            <p>
                                                <select name='model'>
                                                    <option>Car Model</option>

                                                   @foreach ($models as $model )
                                                          <option value="{{$model->id}}">{{$model->name}}</option>
                                                    @endforeach
                                                </select>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <p>
                                                <select>
                                                    <option name='brand'>{{ __('trans.Car Brand') }} </option>

                                                   @foreach ($brands as $brand )
                                                          <option value="{{$brand->id}}">{{$brand->name}}</option>
                                                    @endforeach
                                                </select>
                                            </p>
                                        </div>
                                        <div class="col-md-4">
                                            <p>
                                                <button type="submit" class="elgazal-theme-btn">{{ __('trans.FIND CAR') }}</button>
                                            </p>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Find Area End -->


<!-- About Area Start -->
<section class="elgazal-about-area section_70">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="about-left">
                    <h4>{{ __('trans.ABOUT US') }} </h4>
                    <h2>{{ __('trans.Welcome To Elgazal') }}</h2>
                    <p>Horem Ipsum passages, and more recently with desktop publishing software like aldus pageMaker
                        including versions of all the Rorem Ipsum generators</p>
                    <div class="about-list">
                        <ul>
                            <li><i class="fa fa-check"></i>{{ __('trans.We are a trusted name') }}</li>
                            <li><i class="fa fa-check"></i>{{ __("trans.we deal in have all brands") }}</li>
                            <li><i class="fa fa-check"></i>{{ __('trans.have a larger stock of vehicles') }}</li>
                            <li><i class="fa fa-check"></i>{{ __('trans.we are at worldwide locations') }}</li>
                        </ul>
                    </div>
                    <div class="about-signature">
                        <div class="signature-left">
                            <img src="{{asset('assetscar/img/signature.png')}}" alt="signature"/>
                        </div>
                        <div class="signature-right">
                            <h3>Ahmed Karem</h3>
                            <p>President</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-right">
                    <img src="{{asset('assetscar/img/about.png')}}" alt="car"/>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Area End -->


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
                    <a href="#" class="elgazal-btn">{{ __('trans.Reserve Now') }}</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Promo Area End -->


<!-- Offers Area Start -->
<section class="elgazal-offers-area section_70">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="site-heading">
                    <h4>{{ __('trans.Come With') }}</h4>
                    <h2>{{ __('trans.Offers') }}</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">

                <div class="offer-tabs">
                    <ul class="nav nav-tabs" id="offerTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="all-tab" data-toggle="tab" href="#all" role="tab"
                               aria-controls="all" aria-selected="true">{{ __('trans.All Brands') }}</a>
                        </li>
                        @foreach ($brands as $brand )
                                  <li class="nav-item">
                            <a class="nav-link" id="nissan-tab" data-toggle="tab" href="#nissan" role="tab"
                               aria-controls="nissan" aria-selected="false">{{$brand->name}}</a>
                        </li>

                        @endforeach


                    </ul>
                    <div class="tab-content" id="offerTabContent">
                        <!-- All Tab Start -->
                        <div class="tab-pane fade " id="all" role="tabpanel" aria-labelledby="all-tab">
                            <div class="row">
                                @foreach ($cars as $car )

                                        <div class="col-lg-4">
                                            <div class="single-offers">
                                                <div class="offer-image">
                                                    <a href="{{ route("car.details",$car->id) }}">
                                                        <img src="{{asset("uploads/$car->img")}}" alt="offer 1"/>
                                                    </a>
                                                </div>
                                                <div class="offer-text">
                                                    <a href="{{ route("car.details",$car->id) }}">
                                                        <h3>{{$car->name}}</h3>
                                                    </a>
                                                    <h4>{{$car->price}}<span>/ Day</span></h4>
                                                    <ul>
                                                        <li><i class="fa fa-car"></i>{{$car->modelcar->name}}</li>
                                                        <li><i class="fa fa-cogs"></i>{{$car->type}}</li>
                                                        <li><i class="fa fa-dashboard"></i>20kmpl</li>
                                                    </ul>
                                                    <div class="offer-action">
                                                        <a href="{{ route('car.reserve',$car->id) }}" class="offer-btn-1">Rent Car</a>
                                                        <a href="{{ route("car.details",$car->id) }}" class="offer-btn-2">Details</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                     @endforeach
                            </div>
                        </div>
                        <!-- All Tab End -->

                        <!-- Nissan Tab Start -->
                        <div class="tab-pane fade show active" id="nissan" role="tabpanel" aria-labelledby="nissan-tab">
                            <div class="row">
                            @foreach ($brands as $brand )
                                    @foreach ($brand->cars as $car )
                                        <div class="col-lg-4">
                                            <div class="single-offers">
                                                <div class="offer-image">
                                                    <a href="{{ route("car.details",$car->id) }}">
                                                        <img src="{{asset("uploads/$car->img")}}" alt="offer 1"/>
                                                    </a>
                                                </div>
                                                <div class="offer-text">
                                                    <a href="{{ route("car.details",$car->id) }}">
                                                        <h3>{{$car->name}}</h3>
                                                    </a>
                                                    <h4>{{$car->price}}<span>/ Day</span></h4>
                                                    <ul>
                                                        <li><i class="fa fa-car"></i>{{$car->modelcar->name}}</li>
                                                        <li><i class="fa fa-cogs"></i>{{$car->type}}</li>
                                                        <li><i class="fa fa-dashboard"></i>20kmpl</li>
                                                    </ul>
                                                    <div class="offer-action">
                                                        <a href="{{ route('car.reserve',$car->id) }}" class="offer-btn-1">Rent Car</a>
                                                        <a href="{{ route("car.details",$car->id) }}" class="offer-btn-2">Details</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                     @endforeach

                            @endforeach
                            </div>
                        </div>
                        <!-- Nissan Tab End -->

                        <!-- Toyota Tab Start -->
                        <div class="tab-pane fade" id="Toyota" role="tabpanel" aria-labelledby="Toyota-tab">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="single-offers">
                                        <div class="offer-image">
                                            <a href="#">
                                                <img src="{{asset('assetscar/img/nissan-offer.png')}}" alt="offer 1"/>
                                            </a>
                                        </div>
                                        <div class="offer-text">
                                            <a href="#">
                                                <h3>Nissan 370Z</h3>
                                            </a>
                                            <h4>$75.00<span>/ Day</span></h4>
                                            <ul>
                                                <li><i class="fa fa-car"></i>Model:2017</li>
                                                <li><i class="fa fa-cogs"></i>Automatic</li>
                                                <li><i class="fa fa-dashboard"></i>20kmpl</li>
                                            </ul>
                                            <div class="offer-action">
                                                <a href="#" class="offer-btn-1">Rent Car</a>
                                                <a href="#" class="offer-btn-2">Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="single-offers">
                                        <div class="offer-image">
                                            <a href="#">
                                                <img src="{{asset('assetscar/img/offer-toyota.png')}}" alt="offer 1"/>
                                            </a>
                                        </div>
                                        <div class="offer-text">
                                            <a href="#">
                                                <h3>Toyota Alphard</h3>
                                            </a>
                                            <h4>$50.00<span>/ Day</span></h4>
                                            <ul>
                                                <li><i class="fa fa-car"></i>Model:2017</li>
                                                <li><i class="fa fa-cogs"></i>Automatic</li>
                                                <li><i class="fa fa-dashboard"></i>20kmpl</li>
                                            </ul>
                                            <div class="offer-action">
                                                <a href="#" class="offer-btn-1">Rent Car</a>
                                                <a href="#" class="offer-btn-2">Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="single-offers">
                                        <div class="offer-image">
                                            <a href="#">
                                                <img src="{{asset('assetscar/img/audi-offer.png')}}" alt="offer 1"/>
                                            </a>
                                        </div>
                                        <div class="offer-text">
                                            <a href="#">
                                                <h3>Audi Q3</h3>
                                            </a>
                                            <h4>$45.00<span>/ Day</span></h4>
                                            <ul>
                                                <li><i class="fa fa-car"></i>Model:2017</li>
                                                <li><i class="fa fa-cogs"></i>Automatic</li>
                                                <li><i class="fa fa-dashboard"></i>20kmpl</li>
                                            </ul>
                                            <div class="offer-action">
                                                <a href="#" class="offer-btn-1">Rent Car</a>
                                                <a href="#" class="offer-btn-2">Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Toyota Tab Start -->

                        <!-- Audi Tab Start -->
                        <div class="tab-pane fade" id="Audi" role="tabpanel" aria-labelledby="Audi-tab">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="single-offers">
                                        <div class="offer-image">
                                            <a href="#">
                                                <img src="{{asset('assetscar/img/audi-offer.png')}}" alt="offer 1"/>
                                            </a>
                                        </div>
                                        <div class="offer-text">
                                            <a href="#">
                                                <h3>Audi Q3</h3>
                                            </a>
                                            <h4>$45.00<span>/ Day</span></h4>
                                            <ul>
                                                <li><i class="fa fa-car"></i>Model:2017</li>
                                                <li><i class="fa fa-cogs"></i>Automatic</li>
                                                <li><i class="fa fa-dashboard"></i>20kmpl</li>
                                            </ul>
                                            <div class="offer-action">
                                                <a href="#" class="offer-btn-1">Rent Car</a>
                                                <a href="#" class="offer-btn-2">Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="single-offers">
                                        <div class="offer-image">
                                            <a href="#">
                                                <img src="{{asset('assetscar/img/nissan-offer.png')}}" alt="offer 1"/>
                                            </a>
                                        </div>
                                        <div class="offer-text">
                                            <a href="#">
                                                <h3>Nissan 370Z</h3>
                                            </a>
                                            <h4>$75.00<span>/ Day</span></h4>
                                            <ul>
                                                <li><i class="fa fa-car"></i>Model:2017</li>
                                                <li><i class="fa fa-cogs"></i>Automatic</li>
                                                <li><i class="fa fa-dashboard"></i>20kmpl</li>
                                            </ul>
                                            <div class="offer-action">
                                                <a href="#" class="offer-btn-1">Rent Car</a>
                                                <a href="#" class="offer-btn-2">Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="single-offers">
                                        <div class="offer-image">
                                            <a href="#">
                                                <img src="{{asset('assetscar/img/toyota-offer-2.png')}}" alt="offer 1"/>
                                            </a>
                                        </div>
                                        <div class="offer-text">
                                            <a href="#">
                                                <h3>Toyota Alphard</h3>
                                            </a>
                                            <h4>$50.00<span>/ Day</span></h4>
                                            <ul>
                                                <li><i class="fa fa-car"></i>Model:2017</li>
                                                <li><i class="fa fa-cogs"></i>Automatic</li>
                                                <li><i class="fa fa-dashboard"></i>20kmpl</li>
                                            </ul>
                                            <div class="offer-action">
                                                <a href="#" class="offer-btn-1">Rent Car</a>
                                                <a href="#" class="offer-btn-2">Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Audi Tab End -->

                        <!-- Marcedes Tab Start -->
                        <div class="tab-pane fade" id="mercedes" role="tabpanel" aria-labelledby="mercedes-tab">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="single-offers">
                                        <div class="offer-image">
                                            <a href="#">
                                                <img src="{{asset('assetscar/img/marcedes-offer.png')}}" alt="offer 1"/>
                                            </a>
                                        </div>
                                        <div class="offer-text">
                                            <a href="#">
                                                <h3>marcedes S-class</h3>
                                            </a>
                                            <h4>$50.00<span>/ Day</span></h4>
                                            <ul>
                                                <li><i class="fa fa-car"></i>Model:2017</li>
                                                <li><i class="fa fa-cogs"></i>Automatic</li>
                                                <li><i class="fa fa-dashboard"></i>20kmpl</li>
                                            </ul>
                                            <div class="offer-action">
                                                <a href="#" class="offer-btn-1">Rent Car</a>
                                                <a href="#" class="offer-btn-2">Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="single-offers">
                                        <div class="offer-image">
                                            <a href="#">
                                                <img src="{{asset('assetscar/img/audi-offer.png')}}" alt="offer 1"/>
                                            </a>
                                        </div>
                                        <div class="offer-text">
                                            <a href="#">
                                                <h3>Audi Q3</h3>
                                            </a>
                                            <h4>$45.00<span>/ Day</span></h4>
                                            <ul>
                                                <li><i class="fa fa-car"></i>Model:2017</li>
                                                <li><i class="fa fa-cogs"></i>Automatic</li>
                                                <li><i class="fa fa-dashboard"></i>20kmpl</li>
                                            </ul>
                                            <div class="offer-action">
                                                <a href="#" class="offer-btn-1">Rent Car</a>
                                                <a href="#" class="offer-btn-2">Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="single-offers">
                                        <div class="offer-image">
                                            <a href="#">
                                                <img src="{{asset('assetscar/img/nissan-offer.png')}}" alt="offer 1"/>
                                            </a>
                                        </div>
                                        <div class="offer-text">
                                            <a href="#">
                                                <h3>Nissan 370Z</h3>
                                            </a>
                                            <h4>$75.00<span>/ Day</span></h4>
                                            <ul>
                                                <li><i class="fa fa-car"></i>Model:2017</li>
                                                <li><i class="fa fa-cogs"></i>Automatic</li>
                                                <li><i class="fa fa-dashboard"></i>20kmpl</li>
                                            </ul>
                                            <div class="offer-action">
                                                <a href="#" class="offer-btn-1">Rent Car</a>
                                                <a href="#" class="offer-btn-2">Details</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Marcedes Tab End -->

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Offers Area End -->


<!-- Testimonial Area Start -->
<section class="elgazal-testimonial-area section_70">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="site-heading">
                    <h4>{{ __('trans.Some Words') }}</h4>
                    <h2>{{ __('trans.testimonial') }}</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="testimonial-slider owl-carousel">
                    <div class="single-testimonial">
                        <div class="testimonial-text">
                            <p>"Dorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusm tempor incididunt
                                ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                ullamco laboris nisi ut aliquip ex ea commodo consequat adipisicing elit."</p>
                            <div class="testimonial-meta">
                                <div class="client-image">
                                    <img src="{{asset('assetscar/img/testimonial.jpg')}}" alt="testimonial"/>
                                </div>
                                <div class="client-info">
                                    <h3>Ahmed Karem</h3>
                                    <p>Customer</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-testimonial">
                        <div class="testimonial-text">
                            <p>"Forem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusm tempor incididunt
                                ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                ullamco laboris nisi ut aliquip ex ea commodo consequat adipisicing elit."</p>
                            <div class="testimonial-meta">
                                <div class="client-image">
                                    <img src="{{asset('assetscar/img/testimonial-2.jpg')}}" alt="testimonial"/>
                                </div>
                                <div class="client-info">
                                    <h3>Ahmed Karem</h3>
                                    <p>Customer</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-testimonial">
                        <div class="testimonial-text">
                            <p>"Dorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusm tempor incididunt
                                ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                ullamco laboris nisi ut aliquip ex ea commodo consequat adipisicing elit."</p>
                            <div class="testimonial-meta">
                                <div class="client-image">
                                    <img src="{{asset('assetscar/img/testimonial.jpg')}}" alt="testimonial"/>
                                </div>
                                <div class="client-info">
                                    <h3>Ahmed Karem</h3>
                                    <p>Customer</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-testimonial">
                        <div class="testimonial-text">
                            <p>"Dorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusm tempor incididunt
                                ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                ullamco laboris nisi ut aliquip ex ea commodo consequat adipisicing elit."</p>
                            <div class="testimonial-meta">
                                <div class="client-image">
                                    <img src="" alt="testimonial"/>
                                </div>
                                <div class="client-info">
                                    <h3>Ahmed Karem</h3>
                                    <p>Customer</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Testimonial Area End -->

<!-- Call Area Start -->
<section style="margin: 10px;" class="elgazal-call-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="call-box">
                    <div class="call-box-inner">
                        <h2>{{ __('trans.With Over') }} <span>150+</span> {{ __('trans.Partners Locations') }}</h2>
                        <p>Labore dolore magna aliqua ipsum veniam quis nostrud exercitation voluptate velit cillum
                            dolore feu fugiat nulla excepteur sint occaecat sed ipsum cupidatat proident culpa
                            exercitation ullamco laboris aliquik.</p>
                        <div class="call-number">
                            <div class="call-icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="call-text">
                                <p>{{ __('trans.Need Any Help?') }}</p>
                                <h4><a href="#">(431) 529 2093</a></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Call Area End -->

@endsection

