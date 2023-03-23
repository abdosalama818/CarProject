@extends('adminlayouts.master')
@section('adminContent')
    
    <!-- Page Body Start-->
    <div class="page-body-wrapper">
        <!-- Page Sidebar Start-->
      @include('adminlayouts.sidebar')
        <!-- Page Sidebar Ends-->
        <div class="page-body">
            <div class="container-fluid">
                <div class="page-title">
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <h3>Edit Profile</h3>
                        </div>
                        <div class="col-12 col-sm-6">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"></i></a></li>
                                <li class="breadcrumb-item">Username</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="edit-profile">
                    <div class="row">
                        <div class="col-xl-4">
                            <div class="card">
                                <div class="card-header pb-0">
                                    <h4 class="card-title mb-0">My Profile</h4>
                                    <div class="card-options"><a class="card-options-collapse" href="#"
                                                                 data-bs-toggle="card-collapse"><i
                                            class="fe fe-chevron-up"></i></a><a class="card-options-remove" href="#"
                                                                                data-bs-toggle="card-remove"><i
                                            class="fe fe-x"></i></a></div>
                                </div>
                                <div class="card-body">
                                    <form action='{{ route("Adminsetting.update", $admin->id) }}' method="post" autocomplete="off" enctype="multipart/form-data">
                                         @csrf
                                        @method('PUT')
                                        <div class="row mb-2">
                                            <div class="profile-title">
                                                <div class="media"><img class="img-70 rounded-circle" alt=""
                                                                        src="assets/images/user/7.jpg">
                                                    <div class="media-body">
                                                        <h3 class="mb-1 f-20 txt-primary">{{$admin->name}}</h3>
                                                        <p class="f-12">Admin</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Name</label>
                                            <input class="form-control" placeholder="name" name='name'>
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Email-Address</label>
                                            <input type="email" name='email' class="form-control" placeholder="your-email@domain.com">
                                        </div>

                                        <div class="mb-3">
                                            <label class="form-label">Password</label>
                                            <input class="form-control" name='password' type="password">
                                        </div>
                                        <div class="mb-3">
                                            <label class="form-label">Photo</label>
                                            <input class="form-control" name='img' accept="image/*" multiple type="file">
                                        </div>
                                        <div class="form-footer">
                                            <button class="btn btn-primary btn-block">Save</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-8">
                            <form class="card">
                                <div class="card-header pb-0">
                                    <h4 class="card-title mb-0">Website Information</h4>
                                    <div class="card-options">
                                        <a class="card-options-collapse" href="#"
                                                                 data-bs-toggle="card-collapse"><i
                                            class="fe fe-chevron-up"></i></a><a class="card-options-remove" href="#"
                                                                                data-bs-toggle="card-remove"><i
                                            class="fe fe-x"></i></a></div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Website Logo</label>
                                                <input class="form-control" type="file">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Address</label>
                                                <input class="form-control" type="text" placeholder="Address">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Email</label>
                                                <input class="form-control" type="email" placeholder="Email">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Phone Number</label>
                                                <input class="form-control" type="number" placeholder="Phone Number">
                                            </div>
                                        </div>
                                        <div class="col-sm-6 col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Website Description</label>
                                                <input class="form-control" type="text" placeholder="Website Description">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Website Keywords</label>
                                                <input class="form-control" type="text" placeholder="Website Keywords">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">About Footer</label>
                                                <input class="form-control" type="text" placeholder="About Footer">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Work Time</label>
                                                <input class="form-control" type="text" placeholder="Work Time">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Facebook</label>
                                                <input class="form-control" type="text" placeholder="Facebook">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Twitter</label>
                                                <input class="form-control" type="text" placeholder="Twitter">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label">Instagram</label>
                                                <input class="form-control" type="text" placeholder="Instagram">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer text-end">
                                    <button class="btn btn-primary" type="submit">Update Information</button>
                                </div>
                            </form>
                            <!-- Container-fluid Ends-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Container-fluid Ends-->
@endsection
