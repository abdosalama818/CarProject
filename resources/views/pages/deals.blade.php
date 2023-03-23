@extends('pagesLayout.layout')
@section('content')







  <!-- Breadcromb Area Start -->
<section class="elgazal-breadcromb-area section_70">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="breadcromb-box">
                    <h3>Our Deals</h3>
                    <ul>
                        <li><i class="fa fa-home"></i></li>
                        <li><a href="index.html">Home</a></li>
                        <li><i class="fa fa-angle-right"></i></li>
                        <li>Our Deals</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcromb Area End -->


<!-- Car Listing Area Start -->
<section class="elgazal-car-listing section_70">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="car-list-left">
                    <div class="sidebar-widget">
                        <form>
                            <p>
                                <input type="text" placeholder="Car Name"/>
                            </p>
                            <p>
                                <select>
                                    <option>Car Category</option>
                                    <option data-display="Select">AC Car</option>
                                    <option>Non-AC Car</option>
                                </select>
                            </p>
                            <p>
                                <select>
                                    <option>Car Model</option>
                                    <option data-display="Select">AC Car</option>
                                    <option>Non-AC Car</option>
                                </select>
                            </p>
                            <p>
                                <select>
                                    <option>Car Brand</option>
                                    <option data-display="Select">AC Car</option>
                                    <option>Non-AC Car</option>
                                </select>
                            </p>
                            <p>
                                <button type="submit" class="elgazal-theme-btn">Find Car</button>
                            </p>
                        </form>
                    </div>
                    <div class="sidebar-widget">

                    </div>
                    <div class="sidebar-widget display">
                        <ul class="service-menu">
                            <li class="active">
                                <a href="#">All Brands<span>(2376)</span></a>
                            </li>
                            <li>
                                <a href="#">Toyota<span>(237)</span></a>
                            </li>
                            <li>
                                <a href="#">nissan<span>(123)</span></a>
                            </li>
                            <li>
                                <a href="#">mercedes<span>(23)</span></a>
                            </li>
                            <li>
                                <a href="#">hyundai<span>(467)</span></a>
                            </li>
                        </ul>
                    </div>
                    <div class="sidebar-widget display">
                        <ul class="service-menu">
                            <li class="active">
                                <a href="#">All Categories<span>(2376)</span></a>
                            </li>
                            <li>
                                <a href="#">Toyota<span>(237)</span></a>
                            </li>
                            <li>
                                <a href="#">nissan<span>(123)</span></a>
                            </li>
                            <li>
                                <a href="#">mercedes<span>(23)</span></a>
                            </li>
                            <li>
                                <a href="#">hyundai<span>(467)</span></a>
                            </li>
                        </ul>
                    </div>
                    <div class="sidebar-widget display">
                        <ul class="service-menu">
                            <li class="active">
                                <a href="#">All Models<span>(2376)</span></a>
                            </li>
                            <li>
                                <a href="#">Toyota<span>(237)</span></a>
                            </li>
                            <li>
                                <a href="#">nissan<span>(123)</span></a>
                            </li>
                            <li>
                                <a href="#">mercedes<span>(23)</span></a>
                            </li>
                            <li>
                                <a href="#">hyundai<span>(467)</span></a>
                            </li>
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
                            <div class="col-md-6">
                                <div class="single-offers">
                                    <div class="offer-image">
                                        <a href="#">
                                            <img src="assets/img/nissan-offer.png" alt="offer 1"/>
                                        </a>
                                    </div>
                                    <div class="offer-text">
                                        <a href="#">
                                            <h3>Nissan 370Z</h3>
                                        </a>
                                        <h4><del>$75.00</del> $60.00<span>/ Day</span></h4>
                                        <ul>
                                            <li><i class="fa fa-car"></i>Model:2017</li>
                                            <li><i class="fa fa-cogs"></i>Automatic</li>
                                            <li><i class="fa fa-dashboard"></i>20kmpl</li>
                                        </ul>
                                        <div class="offer-action">
                                            <a href="reserve.html" class="offer-btn-1">Rent Car</a>
                                            <a href="car-details.html" class="offer-btn-2">Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-offers">
                                    <div class="offer-image">
                                        <a href="#">
                                            <img src="assets/img/audi-offer.png" alt="offer 1"/>
                                        </a>
                                    </div>
                                    <div class="offer-text">
                                        <a href="#">
                                            <h3>Audi Q3</h3>
                                        </a>
                                        <h4><del>$75.00</del> $60.00<span>/ Day</span></h4>
                                        <ul>
                                            <li><i class="fa fa-car"></i>Model:2017</li>
                                            <li><i class="fa fa-cogs"></i>Automatic</li>
                                            <li><i class="fa fa-dashboard"></i>20kmpl</li>
                                        </ul>
                                        <div class="offer-action">
                                            <a href="reserve.html" class="offer-btn-1">Rent Car</a>
                                            <a href="car-details.html" class="offer-btn-2">Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="single-offers">
                                    <div class="offer-image">
                                        <a href="#">
                                            <img src="assets/img/bmw-offer.png" alt="offer 1"/>
                                        </a>
                                    </div>
                                    <div class="offer-text">
                                        <a href="#">
                                            <h3>BMW X3</h3>
                                        </a>
                                        <h4><del>$75.00</del> $60.00<span>/ Day</span></h4>
                                        <ul>
                                            <li><i class="fa fa-car"></i>Model:2017</li>
                                            <li><i class="fa fa-cogs"></i>Automatic</li>
                                            <li><i class="fa fa-dashboard"></i>20kmpl</li>
                                        </ul>
                                        <div class="offer-action">
                                            <a href="reserve.html" class="offer-btn-1">Rent Car</a>
                                            <a href="car-details.html" class="offer-btn-2">Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-offers">
                                    <div class="offer-image">
                                        <a href="#">
                                            <img src="assets/img/toyota-offer-2.png" alt="offer 1"/>
                                        </a>
                                    </div>
                                    <div class="offer-text">
                                        <a href="#">
                                            <h3>Toyota Camry</h3>
                                        </a>
                                        <h4><del>$75.00</del> $60.00<span>/ Day</span></h4>
                                        <ul>
                                            <li><i class="fa fa-car"></i>Model:2017</li>
                                            <li><i class="fa fa-cogs"></i>Automatic</li>
                                            <li><i class="fa fa-dashboard"></i>20kmpl</li>
                                        </ul>
                                        <div class="offer-action">
                                            <a href="reserve.html" class="offer-btn-1">Rent Car</a>
                                            <a href="car-details.html" class="offer-btn-2">Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="single-offers">
                                    <div class="offer-image">
                                        <a href="#">
                                            <img src="assets/img/marcedes-offer.png" alt="offer 1"/>
                                        </a>
                                    </div>
                                    <div class="offer-text">
                                        <a href="#">
                                            <h3>marcedes S-class</h3>
                                        </a>
                                        <h4><del>$75.00</del> $60.00<span>/ Day</span></h4>
                                        <ul>
                                            <li><i class="fa fa-car"></i>Model:2017</li>
                                            <li><i class="fa fa-cogs"></i>Automatic</li>
                                            <li><i class="fa fa-dashboard"></i>20kmpl</li>
                                        </ul>
                                        <div class="offer-action">
                                            <a href="reserve.html" class="offer-btn-1">Rent Car</a>
                                            <a href="car-details.html" class="offer-btn-2">Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="single-offers">
                                    <div class="offer-image">
                                        <a href="#">
                                            <img src="assets/img/audi-offer.png" alt="offer 1"/>
                                        </a>
                                    </div>
                                    <div class="offer-text">
                                        <a href="#">
                                            <h3>Audi Q3</h3>
                                        </a>
                                        <h4><del>$75.00</del> $60.00<span>/ Day</span></h4>
                                        <ul>
                                            <li><i class="fa fa-car"></i>Model:2017</li>
                                            <li><i class="fa fa-cogs"></i>Automatic</li>
                                            <li><i class="fa fa-dashboard"></i>20kmpl</li>
                                        </ul>
                                        <div class="offer-action">
                                            <a href="reserve.html" class="offer-btn-1">Rent Car</a>
                                            <a href="car-details.html" class="offer-btn-2">Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pagination-box-row">
                        <p>Page 1 of 6</p>
                        <ul class="pagination">
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li>...</li>
                            <li><a href="#">6</a></li>
                            <li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Car Listing Area End -->

  
@endsection
