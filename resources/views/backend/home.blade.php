@extends('backend.layout.app')

@section('content')

 <div class="page-body">
        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="page-header-left">
                            <h3>Dashboard
                                <small>Nagar Sahayak Admin Panel</small>
                            </h3>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <ol class="breadcrumb pull-right">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i data-feather="home"></i></a>
                            </li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid Ends-->
        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <form>
                  <div class="form-row">
                     <div class="form-group col-md-3">
                      <label for="">Date Range</label>
                      <input type="text" class="form-control" id="daterange" placeholder="">
                    </div>
                    <div class="form-group d-flex align-items-end col-md-3">
                        <button class="btn btn-primary mr-2" type="submit">Search</button>
                        <button class="btn btn-secondary" type="button">Reset</button>
                    </div>
                  </div>
            </form>
            <div class="row">
                <div class="col-xl-4 col-md-4">
                    <div class="card o-hidden widget-cards">
                        <div class="bg-warning card-body">
                            <div class="media static-top-widget row">
                                <div class="icons-widgets col-4">
                                    <div class="align-self-center text-center"><i data-feather="user" class="font-warning"></i>
                                    </div>
                                </div>
                                <div class="media-body col-8"><span class="m-0">Total Visitors</span>
                                    <h3 class="mb-0"> <span class="counter">665</span><!-- <small> This Month</small> -->
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4">
                    <div class="card o-hidden widget-cards">
                        <div class="bg-primary card-body">
                            <div class="media static-top-widget row">
                                <div class="icons-widgets col-4">
                                    <div class="align-self-center text-center"><i data-feather="list" class="font-primary"></i>
                                    </div>
                                </div>
                                <div class="media-body col-8"><span class="m-0">Total Products</span>
                                    <h3 class="mb-0"><span class="counter">30</span><!-- <small> This Month</small> --></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-4">
                    <div class="card o-hidden  widget-cards">
                        <div class="bg-secondary card-body">
                            <div class="media static-top-widget row">
                                <div class="icons-widgets col-4">
                                    <div class="align-self-center text-center"><i data-feather="list" class="font-secondary"></i>
                                    </div>
                                </div>
                                <div class="media-body col-8"><span class="m-0">Total Services</span>
                                    <h3 class="mb-0"><span class="counter">985</span><!-- <small> This Month</small> --></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
               <!--  <div class="col-xl-4 col-md-6">
                    <div class="card o-hidden widget-cards">
                        <div class="bg-danger card-body">
                            <div class="media static-top-widget row">
                                <div class="icons-widgets col-4">
                                    <div class="align-self-center text-center"><i data-feather="users" class="font-danger"></i>
                                    </div>
                                </div>
                                <div class="media-body col-8"><span class="m-0">Stock of Product</span>
                                    <h3 class="mb-0">$ <span class="counter">9345</span></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>

            <!-- <h4>Latest Users</h4>
            <div class="card">
                  
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table" >
                            <thead>
                                <tr>
                                    <th>
                                        S.No.
                                    </th>
                                    <th>Image</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Email</th>
                                    <th>Mobile</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        1
                                    </td>
                                    <td>
                                        <img src="assets/images/dashboard/user5.jpg" style="height: 50px; width: 50px;">
                                    </td>
                                    <td>Rowan</td>
                                    <td>Torres</td>
                                    <td>Rowan.torres@gmail.com</td>
                                    <td>1234567890</td>
                                    <td><span class="text-success">Active</span></td>
                                    <td>
                                        <label class="label-switch switch-primary">
                                            <input type="checkbox" hidden="hidden" id="username">
                                            <label class="switch-btn" for="username"></label>
                                        </label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        2
                                    </td>
                                    <td>
                                        <img src="assets/images/dashboard/user3.jpg" style="height: 50px; width: 50px;">
                                    </td>
                                    <td>Alonzo</td>
                                    <td>Perez</td>
                                    <td>Perez.Alonzo@gmail.com</td>
                                    <td>1234567890</td>
                                    <td><span class="text-success">Active</span></td>
                                    <td>
                                        <label class="label-switch switch-primary">
                                            <input type="checkbox" hidden="hidden" id="username2">
                                            <label class="switch-btn" for="username2"></label>
                                        </label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        3
                                    </td>
                                    <td>
                                        <img src="assets/images/dashboard/user1.jpg" style="height: 50px; width: 50px;">
                                    </td>
                                    <td>Skylar</td>
                                    <td>Lane</td>
                                    <td>Lane.Skylar@gmail.com</td>
                                    <td>1234567890</td>
                                    <td><span class="text-success">Active</span></td>
                                    <td>
                                        <label class="label-switch switch-primary">
                                            <input type="checkbox" hidden="hidden" id="username3">
                                            <label class="switch-btn" for="username3"></label>
                                        </label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                       4
                                    </td>
                                    <td>
                                        <img src="assets/images/dashboard/boy-2.png" style="height: 50px; width: 50px;">
                                    </td>
                                    <td>Brody</td>
                                    <td>Gray</td>
                                    <td>Gray.Brody@gmail.com</td>
                                    <td>1234567890</td>
                                    <td><span class="text-success">Active</span></td>
                                    <td>
                                        <label class="label-switch switch-primary">
                                            <input type="checkbox" hidden="hidden" id="username4">
                                            <label class="switch-btn" for="username4"></label>
                                        </label>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        5
                                    </td>
                                    <td>
                                        <img src="assets/images/dashboard/designer.jpg" style="height: 50px; width: 50px;">
                                    </td>
                                    <td>Colton</td>
                                    <td>Clay</td>
                                    <td>Colton.Clay@gmail.com</td>
                                    <td>1234567890</td>
                                    <td><span class="text-success">Active</span></td>
                                    <td>
                                        <label class="label-switch switch-primary">
                                            <input type="checkbox" hidden="hidden" id="username5">
                                            <label class="switch-btn" for="username5"></label>
                                        </label>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div> -->
        <!-- Container-fluid Ends-->
        </div>
    </div>
    

        @endsection