@extends('backend.layout.app')

@section('content')

<div class="page-body">
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <div class="page-header-left">
                        <h3>User List
                        </h3>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ol class="breadcrumb pull-right">
                        <li class="breadcrumb-item"><a href="dashboard.html"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
                                    <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                    <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                </svg></a></li>

                        <li class="breadcrumb-item active">User List</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->

    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <form action="{{url('admin/filter')}}" method="get">
                    <div class="form-row">

                        <div class="form-group col-md-3">
                            <label for="">Employee Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Employee Name">
                        </div>

                        <div class="form-group col-md-3">
                            <label for="">Login Id</label>
                            <input type="text" class="form-control" name="unique_id" placeholder="Login Id">
                        </div>

                        <div class="form-group d-flex align-items-end col-md-3">
                            <button class="btn btn-primary mr-2" type="submit">Search</button>

                        </div>
                    </div>
                </form>

                <div class="card-body order-datatable pt-2">
                    <div class="btn-popup pull-right">
                        <a href="{{route('admin.staff.create')}}"> <button type="button" class="btn btn-primary">Add User</button></a>
                    </div>
                </div>
                <div class="card-body order-datatable">
                    <div id="basic-1_wrapper" class="dataTables_wrapper no-footer">

                        <table class="display table jsgrid dataTable no-footer" id="basic-1" role="grid" aria-describedby="basic-1_info">
                            <thead>
                                <tr role="row">
                                    <th class="sorting_asc" tabindex="0" aria-controls="basic-1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="S.No.
                                    : activate to sort column descending" style="width: 20px; min-width:20px;"> S.No.
                                    </th>
                                    <th class="sorting" tabindex="0" aria-controls="basic-1" rowspan="1" colspan="1" aria-label="Image: activate to sort column ascending" style="width: 184px; ">Employee Name</th>
                                    <th class="sorting" tabindex="0" aria-controls="basic-1" rowspan="1" colspan="1" aria-label="User Name: activate to sort column ascending" style="width: 100px; min-width:100px;">Mobile No.</th>
                                    <th class="sorting" tabindex="0" aria-controls="basic-1" rowspan="1" colspan="1" aria-label="Email: activate to sort column ascending" style="width: 100px; min-width:100px;">Aadhar No.</th>
                                    <th class="sorting" tabindex="0" aria-controls="basic-1" rowspan="1" colspan="1" aria-label="Mobile: activate to sort column ascending" style="min-width: 100px;">Login Id </th>
                                    <!-- <th class="sorting" tabindex="0" aria-controls="basic-1" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 184px;">Status</th> -->
                                    <th class="sorting" tabindex="0" aria-controls="basic-1" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending" style="width: 50px; min-width:50px;">Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php $i = 1 ?>
                                @can('Staff access')
                                @foreach($users as $user)

                                <tr role="row" class="odd">
                                    <td class="sorting_1">{{$i++}}</td>
                                    <!-- <td>
                                        <img src="assets/images/dashboard/user5.jpg" style="height: 50px; width: 50px;">
                                    </td> -->

                                    <td>{{ $user->name}} {{ $user->last_name }} </td>
                                    <td>{{$user->phone}} </td>
                                    <td>{{ $user->aadhar_no }}</td>
                                    <td>{{ $user->unique_id }}</td>

                                    <!-- <td><span class="text-success">Active</span></td> -->
                                    <td>
                                        <!-- <label class="label-switch switch-primary">
                                            <input type="checkbox" hidden="hidden" id="username">
                                            <label class="switch-btn" for="username"></label>
                                        </label> -->
                                        <a href="{{route('admin.staff.edit',$user->id)}}"  class="jsgrid-button jsgrid-edit-button"></a>


                                        <!-- <a href="{{route('admin.staff.destroy',$user->id)}}" ><button class="jsgrid-button jsgrid-delete-button" ></button></a> -->
                                  
                                    </td>
                                </tr>

                                @endforeach
                                @endcan

                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection