@extends('backend.layout.app')

@section('content')

<div class="page-body">
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <div class="page-header-left">
                        <h3>Survey Form List
                        </h3>
                    </div>
                </div>
                <!-- <div class="col-lg-6">
                                <ol class="breadcrumb pull-right">
                                    <li class="breadcrumb-item"><a href="dashboard.html"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg></a></li>
                                    <li class="breadcrumb-item">Users Management</li>
                                    <li class="breadcrumb-item active">User List</li>
                                </ol>
                            </div> -->
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->

    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <form action="{{url('search')}}" method="get">
                    @csrf
                    @method('GET')

                    <div class="form-row">
                        <div class="form-group col-md-3">
                            <label for=""> State Date</label>
                            <input class="form-control" id="daterange" type="date" name="state_date">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="">End Date</label>
                            <input class="form-control" id="daterange" type="date" name="end_date">
                        </div>

                        <div class="form-group col-md-3">
                            <label for="">Owner Name</label>
                            <input type="text" name="name" class="form-control" id="" placeholder="Owner Name">

                        </div>

                        <div class="form-group col-md-3">
                            <label for="">Unique id</label>
                            <input class="form-control" id="" type="text" name="unique_id" placeholder="Unique id">
                        </div>

                        <div class="form-group col-md-3">
                            <label for="">Mobile</label>
                            <input type="text" name="mobile" class="form-control" id="" placeholder="Mobile Number">
                        </div>

                        <div class="form-group col-md-3">
                            <label for="">Aadhaar Number</label>
                            <input type="text" name="aadhaar" class="form-control" id="" placeholder="Aadhaar Number">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="">Staff Login Id</label>
                            <input type="text" name="Staff_unique" class="form-control" id="" placeholder=" Staff Login Id">
                        </div>



                        <!-- <div class="form-group col-md-3">
                                  <label for="">Status</label>
                                  <select class="form-control">
                                      <option>Select Status</option>
                                      <option>Active</option>
                                      <option>Inactive</option>
                                  </select>

                                </div> -->
                        <div class="form-group d-flex align-items-end col-md-3">
                            <button class="btn btn-primary mr-2" type="submit">Search</button>
                            <!-- <button class="btn btn-secondary" type="button">Reset</button> -->
                        </div>
                    </div>
                </form>

                <a href="{{url('excel-downloade')}}"> <button class="btn btn-primary mr-2" type="submit">Download</button> </a>

                <!-- <div class="card-body order-datatable pt-2">
                            <div class="btn-popup pull-right">
                               <a href="./add-user-list.html"> <button type="button" class="btn btn-primary" >Add User</button></a>
                            </div>
                        </div> -->
                <div class="card-body order-datatable">
                    <div id="basic-1_wrapper" class="dataTables_wrapper no-footer">

                        <table class="display table jsgrid dataTable no-footer" id="basic-1" role="grid" aria-describedby="basic-1_info">
                            <thead>
                                <tr role="row">
                                    <th class="sorting_asc" tabindex="0" aria-controls="basic-1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="
                                        S.No.
                                    : activate to sort column descending" style="min-width: 50px;"> S.No.
                                       
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="basic-1" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="min-width: 130px;"> Unique Id</th>
                                    <th class="sorting" tabindex="0" aria-controls="basic-1" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="min-width: 100px;"> Owner Name</th>
                                    <th class="sorting" tabindex="0" aria-controls="basic-1" rowspan="1" colspan="1" aria-label="User Name: activate to sort column ascending" style="min-width: 130px;">Guardian Name</th>
                                    <th class="sorting" tabindex="0" aria-controls="basic-1" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending" style="min-width: 100px;">Mobile No.</th>
                                    <th class="sorting" tabindex="0" aria-controls="basic-1" rowspan="1" colspan="1" aria-label="Mobile: activate to sort column ascending" style="min-width: 100px;">Aadhaar No.</th>
                                    <th class="sorting" tabindex="0" aria-controls="basic-1" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="min-width: 100px;">Staff Name</th>
                                    <th class="sorting" tabindex="0" aria-controls="basic-1" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="min-width: 100px;">Action</th>
                                </tr>
                            </thead>
                            @can('Municipal access') 
                            <?php $i=1; ?>    
          
                            <tbody>
                            @foreach($municipal  as $municipal)
                                <tr role="row" class="odd">
                                <td class="sorting_1">{{$i++}} </td>
                                    <td class="sorting_1">{{$municipal->unique_id}} </td>
                                    <!-- <td>
                                        <img src="assets/images/dashboard/user5.jpg" style="height: 50px; width: 50px;">
                                    </td> -->
                                    <td>{{$municipal->property_owner_name}}</td>
                                    <td>{{$municipal->father_husband_name}}</td>
                                    <td>{{$municipal->mobile_number}}</td>
                                    <td>{{$municipal->aadhar_card_no}}</td>
                                    
                                    <td>{{$municipal->username->name}}</td>
                                    <td>
                                        <!-- <label class="label-switch switch-primary">
                                            <input type="checkbox" hidden="hidden" id="username">
                                            <label class="switch-btn" for="username"></label>
                                        </label> -->
                                   <a href="{{route('admin.municipal.show',$municipal->id)}}"> <button type="buttons" class="btn btn-primarys" data-toggle="modal" data-target="#addblog"><i class="fa fa-eye" aria-hidden="true"></i></button> </a>
                                        <!-- <button class="jsgrid-button jsgrid-delete-button" type="button" title="Delete"></button> -->

                                    </td>
                                <!-- </tr>
                                <tr role="row" class="even">
                                    <td class="sorting_1">
                                        2
                                    </td>
                                    <td>
                                        <img src="assets/images/dashboard/user3.jpg" style="height: 50px; width: 50px;">
                                    </td>
                                    <td>Alonzo Perez</td>
                                    <td>Perez.Alonzo@gmail.com</td>
                                    <td>1234567890</td>
                                    <td><span class="text-success">Active</span></td>
                                    <td>
                                        <label class="label-switch switch-primary">
                                            <input type="checkbox" hidden="hidden" id="username2">
                                            <label class="switch-btn" for="username2"></label>
                                        </label>
                                        <button class="jsgrid-button jsgrid-edit-button" data-toggle="modal" data-target="#editblog" type="button" title="Edit"></button>
                                        <button class="jsgrid-button jsgrid-delete-button" type="button" title="Delete"></button>
                                    </td>
                                </tr>
                                <tr role="row" class="odd">
                                    <td class="sorting_1">
                                        3
                                    </td>
                                    <td>
                                        <img src="assets/images/dashboard/user1.jpg" style="height: 50px; width: 50px;">
                                    </td>
                                    <td>Skylar Lane</td>
                                    <td>Lane.Skylar@gmail.com</td>
                                    <td>1234567890</td>
                                    <td><span class="text-success">Active</span></td>
                                    <td>
                                        <label class="label-switch switch-primary">
                                            <input type="checkbox" hidden="hidden" id="username3">
                                            <label class="switch-btn" for="username3"></label>

                                        </label>
                                        <button class="jsgrid-button jsgrid-edit-button" data-toggle="modal" data-target="#editblog" type="button" title="Edit"></button>
                                        <button class="jsgrid-button jsgrid-delete-button" type="button" title="Delete"></button>
                                    </td>
                                </tr>
                                <tr role="row" class="even">
                                    <td class="sorting_1">
                                        4
                                    </td>
                                    <td>
                                        <img src="assets/images/dashboard/boy-2.png" style="height: 50px; width: 50px;">
                                    </td>
                                    <td>Brody Gray</td>
                                    <td>Gray.Brody@gmail.com</td>
                                    <td>1234567890</td>
                                    <td><span class="text-success">Active</span></td>
                                    <td>
                                        <label class="label-switch switch-primary">
                                            <input type="checkbox" hidden="hidden" id="username4">
                                            <label class="switch-btn" for="username4"></label>
                                        </label>
                                        <button class="jsgrid-button jsgrid-edit-button" data-toggle="modal" data-target="#editblog" type="button" title="Edit"></button>
                                        <button class="jsgrid-button jsgrid-delete-button" type="button" title="Delete"></button>
                                    </td>
                                </tr>
                                <tr role="row" class="odd">
                                    <td class="sorting_1">
                                        5
                                    </td>
                                    <td>
                                        <img src="assets/images/dashboard/designer.jpg" style="height: 50px; width: 50px;">
                                    </td>
                                    <td>Colton Clay</td>
                                    <td>Colton.Clay@gmail.com</td>
                                    <td>1234567890</td>
                                    <td><span class="text-success">Active</span>
                                    </td>
                                    <td>
                                        <label class="label-switch switch-primary">
                                            <input type="checkbox" hidden="hidden" id="username5">
                                            <label class="switch-btn" for="username5"></label>
                                        </label>
                                        <button class="jsgrid-button jsgrid-edit-button" data-toggle="modal" data-target="#editblog" type="button" title="Edit"></button>
                                        <button class="jsgrid-button jsgrid-delete-button" type="button" title="Delete"></button>
                                    </td>
                                    ------------->
                                    @endforeach
                                </tr>
                            </tbody> 
                        </table>
                       
                        @endcan

                    </div>
                </div>
            </div>
        </div>
    </div>



    @endsection