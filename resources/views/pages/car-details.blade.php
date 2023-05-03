@extends('pagesLayout.layout')
@section('content')
 <!-- Breadcromb Area Start -->
<section class="elgazal-breadcromb-area section_70">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcromb-box">
                    <h3>{{ __("trans.CAR BOOKING") }}</h3>
                    <ul>
                        <li><i class="fa fa-home"></i></li>
                        <li><a href="{{ url('/') }}">{{ __("trnas.Home") }}</a></li>
                        <li><i class="fa fa-angle-right"></i></li>
                        <li>{{ __("trans.car Details") }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcromb Area End -->


<!-- Car Booking Area Start -->
<section class="elgazal-car-booking section_70">
    <div class="container">
        <div class="row">

            <div class="col-lg-6">
                <div class="car-booking-image">
                   <div class = "card">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">

                          <div class="carousel-item active">
                            <img class="d-block w-100"src = '{{asset("uploads/$car->img")}}'alt="First slide">
                          </div>


                          @foreach ($car->images as $img )

                          <div class="carousel-item">

                                <img class="d-block w-100" src = "{{asset("uploads/$img->filename")}}" alt = "Car Image">

                          </div>
                          @endforeach


                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>

                        </a>
                      </div>
                   </div>
                   @foreach ($car->images as $img )

                   <div class = "img-item col-md-3 w-25 d-inline-block">
                      <a href = "#" data-id = "1">
                         <img src = "{{asset("uploads/$img->filename")}}" alt = "Car Image">
                      </a>
                   </div>
                   @endforeach
                </div>
            </div>
         {{--    <div class="col-lg-6">
                <div class="car-booking-image">
                   <div class = "card">
                      <!-- card left -->
                      <div class = "product-imgs">
                         <div style="height: 280px;" class = "img-display">
                            <div class = "img-showcase">
                               <img src = '{{asset("uploads/$car->img")}}' alt = "Car image">

                            </div>
                         </div>
                         <div class = "img-select">
                            @foreach ($car->images as $img )

                            <div class = "img-item">
                               <a href = "#" data-id = "1">
                                  <img src = "{{asset("uploads/$img->filename")}}" alt = "Car Image">
                               </a>
                            </div>
                            @endforeach

                         <div class = "img-item">
                               <a href = "#" data-id = "2">
                                   <img src = "assets/img/marcedes-offer.png" alt = "Car image">
                               </a>
                            </div>
                            <div class = "img-item">
                               <a href = "#" data-id = "3">
                                   <img src = "assets/img/toyota-offer-2.png" alt = "Car image">
                               </a>
                            </div>
                            <div class = "img-item">
                               <a href = "#" data-id = "4">
                                   <img src = "assets/img/marcedes-offer.png" alt = "Car image">
                               </a>
                            </div>

                         </div>
                      </div>
                   </div>
                </div>
            </div> --}}
            <div class="col-lg-6">
                <div class="car-booking-right">
                    <p class="rental-tag">rental</p>
                    <h3>{{$car->name}}</h3>
                    <div class="price-rating">
                        <div class="price-rent">
                            <h4>{{$car->price}}<span>/ Day</span></h4>
                        </div>
                        <div class="car-rating">
                            <ul>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star"></i></li>
                                <li><i class="fa fa-star-half-o"></i></li>
                            </ul>
                            <p>(123 rating)</p>
                        </div>
                    </div>
                    <p>{{$car->desc}}</p>
                    <div class="car-features clearfix">
                        <ul style="width:50% !important">
                            <li><i class="fa fa-car"></i> {{ __("trans.Model:") }}: {{$car->modelcar->name}}</li>
                            <li><i class="fa fa-cogs"></i>{{ __("trans.type") }}: {{$car->type}}</li>
                            <li><i class="fa fa-dashboard"></i>{{ __("trans.Seats Number: ") }}: {{$car->seats}}</li>
                        </ul>
                        <ul style="width:50% !important">
                            <li><i class="fa fa-car"></i> {{ __("trans.Category") }}: {{$car->cat->name}}</li>
                            <li><i class="fa fa-cogs"></i> {{ __("trans.Color") }}: {{$car->color}}</li>
                            <li><i class="fa fa-cogs"></i>{{  __("trans.Pice Per Day") }} : {{$car->price}}</li>
                            <li><i class="fa fa-cogs"></i>{{  __("trans.price Delivery") }}: {{$car->price_delivery}}</li>
                            <li><i class="fa fa-cogs"></i>{{  __("trans.price Insurance") }}: {{$car->price_insurance}}</li>
                            <li><i class="fa fa-cogs"></i> {{  __("trans.price total") }}: {{$car->total_price}}</li>


                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Car Booking Area End -->


<!-- Booking Form Area Start -->
<section class="elgazal-booking-form section_70">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="booking-right">
                    <div class="action-btn">
                        <a style="width: 100%" href="{{route('car.reserve',$car->id)}}" class="elgazal-btn">Reserve Now!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Booking Form Area End -->


@endsection
