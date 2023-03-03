<x-app-layout>
   <div>
        <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
            <div class="container mx-auto px-6 py-8">

                
                <h3 class="text-gray-700 text-3xl font-medium">Welcome : {{ auth()->user()->name }}</h3>                

                <p>Role : <b>
                    @foreach(auth()->user()->roles as $role)
                        {{ $role->name }}
                    @endforeach 
                </b> </p>


                <div class="container-fluid">
                    <div class="page-header">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="page-header-left">
                                    <h3>Dashboard
                                        <small>TRIPBEL Admin Panel</small>
                                    </h3>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <ol class="breadcrumb pull-right">
                                    <li class="breadcrumb-item"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg></a>
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
                                            <div class="align-self-center text-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user font-warning"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
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
                                            <div class="align-self-center text-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-list font-primary"><line x1="8" y1="6" x2="21" y2="6"></line><line x1="8" y1="12" x2="21" y2="12"></line><line x1="8" y1="18" x2="21" y2="18"></line><line x1="3" y1="6" x2="3" y2="6"></line><line x1="3" y1="12" x2="3" y2="12"></line><line x1="3" y1="18" x2="3" y2="18"></line></svg>
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
                                            <div class="align-self-center text-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-list font-secondary"><line x1="8" y1="6" x2="21" y2="6"></line><line x1="8" y1="12" x2="21" y2="12"></line><line x1="8" y1="18" x2="21" y2="18"></line><line x1="3" y1="6" x2="3" y2="6"></line><line x1="3" y1="12" x2="3" y2="12"></line><line x1="3" y1="18" x2="3" y2="18"></line></svg>
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


                    
        
                    <h4>Latest Users</h4>
                    <div class="card">
                          
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
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
                    </div>
                <!-- Container-fluid Ends-->
                </div>
            </div>

  
            </div>
        </main>
    </div>
</div>
</x-app-layout>

