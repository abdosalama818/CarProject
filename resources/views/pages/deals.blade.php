@extends('pagesLayout.layout')
@section('content')







  <!-- Breadcromb Area Start -->
<section class="elgazal-breadcromb-area section_70">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcromb-box">
                    <h3>{{ __("trans.Our Deals") }}</h3>
                    <ul>
                        <li><i class="fa fa-home"></i></li>
                        <li><a href="{{ url('/') }}">{{ __("trans.Home") }}</a></li>
                        <li><i class="fa fa-angle-right"></i></li>
                        <li>{{ __("trans.Our Deals") }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcromb Area End -->


<!-- Car Listing Area Start -->
<section class="elgazal-car-listing section_70 main-rtl">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="car-list-left">
                    <div class="sidebar-widget">
                        <form action="{{ route('car.search') }}" method="get">
                            @csrf
                    <p>
                        <input type="text" placeholder="{{ __('trans.car Name') }}" name='name'/>
                    </p>
                    <p>
                        <select name='cat'>
                                            <option>{{ __("trans.category car") }}</option>

                                            @foreach ($cats as $cat )
                                                  <option value="{{$cat->id}}">{{$cat->name}}</option>
                                            @endforeach
                                        </select>
                    </p>
                    <p>
                     <select name='model'>
                                            <option>{{ __('trans.model car ') }}</option>

                                           @foreach ($models as $model )
                                                  <option value="{{$model->id}}">{{$model->name}}</option>
                                            @endforeach
                                        </select>
                    </p>
                    <p>
                          <select>
                                            <option name='brand'>{{ __('trans.Car Brand') }}</option>

                                           @foreach ($brands as $brand )
                                                  <option value="{{$brand->id}}">{{$brand->name}}</option>
                                            @endforeach
                                        </select>
                    </p>
                    <p>
                        <button type="submit" class="elgazal-theme-btn">{{ __('trans.car name') }}</button>
                    </p>
                </form>
                    </div>
                    <div class="sidebar-widget">

                    </div>
                    <div class="sidebar-widget display">
                        <ul class="service-menu">
                            <li class="active">
                                <a href="#">{{ __("trans.All Brands") }}<span>({{$brands->count()}})</span></a>
                            </li>

                            @foreach ($brands as $brand )
                                  <li>
                                <a href="#">{{$brand->name}}<span>

                                   ({{$brand->cars->count()}})



                                </span></a>
                            </li>
                            @endforeach


                        </ul>
                    </div>
                    <div class="sidebar-widget display">
                        <ul class="service-menu">
                            <li class="active">
                                <a href="#">{{ __("trans.All Categories") }} <span>({{$cats->count()}})</span></a>
                            </li>
                            @foreach ($cats as $cat )
                                  <li>
                                <a href="#">{{$cat->name}}<span>
                                 ({{$cat->cars->count()}})

                                </span></a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="sidebar-widget display">
                        <ul class="service-menu">
                            <li class="active">
                                <a href="#">{{ __("trans.All Models") }} <span>({{$models->count()}})</span></a>
                            </li>
                                @foreach ($models as $model )
                                  <li>
                                <a href="#">{{$model->name}}<span>
                               ({{$model->cars->count()}})

                                </span></a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="car-listing-right">
                    <div class="property-page-heading">
                        <div class="paging_status">
                            <p>1-10 of 25 results</p>
                        </div>
                        <div class="propertu-page-shortby">
                            <label><i class="fa fa-sort-amount-asc"></i>Sort By</label>
                            <select class="chosen-select-no-single">
                                <option>Default</option>
                                <option>Price (Low to High)</option>
                                <option>Price (High to Low)</option>
                                <option>Featured</option>
                            </select>
                        </div>
                    </div>
                    <div class="car-grid-list">
                        <div class="row">
                        @foreach ($cars as $car ) {{-- foreach loop start --}}
                              <div class="col-md-6">
                                <div class="single-offers">
                                    <div class="offer-image">
                                        <a href="#">
                                            <img src='{{asset("uploads"."/".$car->img)}}' alt="offer 1"/>
                                        </a>
                                    </div>
                                    <div class="offer-text">
                                        <a href="#">
                                            <h3>  {{$car->name}} </h3>

                                        </a>
                                        <h4><del>$ {{$car->total_price}}</del>
                                    <span> Day / {{$car->discount->discount_days}}</span></h4>


                                            @if ($car->discount->discount_type == 'precent')

                                            ${{$car->total_price - ($car->discount->discount_value / 100)* $car->total_price}}
                                    @elseif ($car_dis->discount_type  == 'flat')
                                     ${{$car->total_price - $car->discount->discount_value}}

                                    @endif
                                    <h6>{{ __("trans.Pice Per Day") }} :$ {{$car->price}}</h6>

                                    <h6>{{ __("trans.price Delivery") }} :$ {{$car->price_delivery}}</h6>
                                    <h6>{{ __("trans.price Insurance") }} :$ {{$car->price_insurance}}</h6>


                                    <ul>

                                        <li><i class="fa fa-cogs"></i>Automatic</li>
                                        <li><i class="fa fa-dashboard"></i>20kmpl</li>
                                    </ul>
                                    <div class="offer-action">
                                        @if ($car->stock == 0)

                                        <a href=""  style="pointer-events: none" class="offer-btn-1">No Car </a>

                                       @else
                                       <a href="{{route('car.reserve',$car->id)}}" class="offer-btn-1">{{ __("trans.RENT CAR") }}</a>
                                       @endif
                                        <a href="{{route('car.details',$car->id)}}" class="offer-btn-2">{{ __("trans.DETAILS") }}</a>
                                    </div>

                                   {{--



                                         <span> Day / {{$car_dis->dicount_days}}</span></h4>
                                        <ul>

                                            <li><i class="fa fa-cogs"></i>Automatic</li>
                                            <li><i class="fa fa-dashboard"></i>20kmpl</li>
                                        </ul>
                                        <div class="offer-action">
                                            <a href="{{route('car.reserve',$car_dis->car->id)}}" class="offer-btn-1">Rent Car</a>
                                            <a href="{{route('car.details',$car_dis->car->id)}}" class="offer-btn-2">Details</a>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                        @endforeach   {{-- foreach loop end --}}





                        </div>

                    </div>


                     {{--   {{ $cars_p->links() }}  --}}

                </div>
            </div>
        </div>
    </div>
</section>
<!-- Car Listing Area End -->


@endsection
