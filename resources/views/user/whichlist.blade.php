@extends('userlatouts.user_lay')
@section('content_body')
        <!-- Page Sidebar Ends-->
        <div class="page-body">
            <div class="container-fluid">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <h3>{{ __("trans.Dashbord") }}</h3>
                        </div>
                        <div class="col-12 col-sm-6">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a class="home-item" href="{{ url('/dashbord/user') }}"><i
                                        data-feather="home"></i></a></li>
                                <li class="breadcrumb-item"> {{ __("trans.Dashbord") }}</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container-fluid starts-->
            <div class="container-fluid default-dash">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h5>which list </h5>
                            </div>
                            <div class="table-responsive">
                                  <table class="table">
                                    <thead>
                                    <tr>
                                        <th scope="col">#</th>

                                        <th scope="col">Link</th>




                                        <th scope="col">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>

                                    <?php $i = 0 ; ?>

                                        @foreach ($items as $item )
                                         <tr>
                                         <?php $i++; ?>
                                           <td>{{ $i }}</td>

                                      @foreach ($cars as $car )
                                            <td>
                                            <a href="{{route("car.details",$car->id)}}" class="btn btn-secondary">Link</a>
                                        </td>
                                      @endforeach





                                      @foreach ($cars as $car )
                                               <td>
                                            <div>
                                                <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target=".bd-example-modal-lg{{$car->id}}">Details</button>
                                                <div class="modal fade bd-example-modal-lg{{$car->id}}" tabindex="-1" role="dialog" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h4 class="modal-title">Request Details</h4>
                                                                <button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                        <div class="modal-body">
                                                                <table class="table">
                                                                    <thead>
                                                                    <tr>
                                                                        <th scope="col">Data</th>
                                                                        <th scope="col">Information</th>
                                                                    </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <th>Car Name</th>
                                                                            <td>{{$car->name}}</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th>Car Model</th>
                                                                            <td>{{$car->modelcar->name}}</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th>Car Category</th>
                                                                            <td>{{$car->cat->name}}</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th>Car Price</th>
                                                                            <td>{{$car->price}}</td>
                                                                        </tr>

                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </td>
                                      @endforeach



                                    </tr>
                                    @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Container-fluid Ends-->
@endsection

