@extends('backend.layout.app')
@section('content')

<div class="page-body">

        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="page-header-left">
                            <h3>Profile
                                <small>Welcome : {{ auth()->user()->name }}</small>
                            </h3>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <ol class="breadcrumb pull-right">
                            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg></a></li>
                            <li class="breadcrumb-item">Settings</li>
                            <li class="breadcrumb-item active">Profile</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid Ends-->

        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-5">
                    <div class="card">
                        <div class="card-body">
                            <div class="profile-details text-center">
                                <img src="/images/{{ auth()->user()->profile }}" alt="" class="img-fluid img-90 rounded-circle blur-up lazyloaded">
                                <h5 class="f-w-600 mb-0">{{ old('name', $user->name) }}</h5>
                                <span>{{ old('name', $user->unique_id) }}</span>
                            </div>
                            <hr>
                            <div class="project-status">
                                <h5 class="f-w-600">Admin Details</h5>
                                <div class="table-responsive profile-table">
                                    <table class="table table-responsive">
                                        <tbody>
                                        <tr>
                                            <td>Name:</td>
                                            <td>{{ $user->name}}  {{ $user->last_name}}</td>
                                        </tr>
                                        <tr>
                                            <td>Email:</td>
                                            <td>{{ $user->email }}</td>
                                        </tr>
                                        <!-- <tr>
                                            <td>Gender:</td>
                                            <td>Male</td>
                                        </tr> -->
                                        <tr>
                                            <td>Mobile Number:</td>
                                            <td>{{ $user->phone }}</td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-7">
                    <div class="card tab2-card">
                        <div class="card-body">
                            <ul class="nav nav-tabs nav-material" id="top-tab" role="tablist">
                                <li class="nav-item"><a class="nav-link active" id="top-profile-tab" data-toggle="tab" href="#top-profile" role="tab" aria-controls="top-profile" aria-selected="true"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user mr-2"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>Edit Profile</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" id="contact-top-tab" data-toggle="tab" href="#top-contact" role="tab" aria-controls="top-contact" aria-selected="false"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-settings mr-2"><circle cx="12" cy="12" r="3"></circle><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83 2 2 0 0 1-2.83 0l-.06-.06a1.65 1.65 0 0 0-1.82-.33 1.65 1.65 0 0 0-1 1.51V21a2 2 0 0 1-2 2 2 2 0 0 1-2-2v-.09A1.65 1.65 0 0 0 9 19.4a1.65 1.65 0 0 0-1.82.33l-.06.06a2 2 0 0 1-2.83 0 2 2 0 0 1 0-2.83l.06-.06a1.65 1.65 0 0 0 .33-1.82 1.65 1.65 0 0 0-1.51-1H3a2 2 0 0 1-2-2 2 2 0 0 1 2-2h.09A1.65 1.65 0 0 0 4.6 9a1.65 1.65 0 0 0-.33-1.82l-.06-.06a2 2 0 0 1 0-2.83 2 2 0 0 1 2.83 0l.06.06a1.65 1.65 0 0 0 1.82.33H9a1.65 1.65 0 0 0 1-1.51V3a2 2 0 0 1 2-2 2 2 0 0 1 2 2v.09a1.65 1.65 0 0 0 1 1.51 1.65 1.65 0 0 0 1.82-.33l.06-.06a2 2 0 0 1 2.83 0 2 2 0 0 1 0 2.83l-.06.06a1.65 1.65 0 0 0-.33 1.82V9a1.65 1.65 0 0 0 1.51 1H21a2 2 0 0 1 2 2 2 2 0 0 1-2 2h-.09a1.65 1.65 0 0 0-1.51 1z"></path></svg>Change Password</a>
                                </li>
                            </ul>
                            <div class="tab-content" id="top-tabContent">
                                <div class="tab-pane fade show active" id="top-profile" role="tabpanel" aria-labelledby="top-profile-tab">
                                    <form class="needs-validation" method="POST" action="{{ route('admin.profile.update')}}" enctype="multipart/form-data">
                                    @csrf
                             @method('put')
                                        <div class="form">
                                            <div class="form-group">
                                                <label for="validationCustom01" class="mb-1">First Name </label>
                                                <input class="form-control"  name="name" value="{{ old('name',$user->name) }}" id="validationCustom01" type="text">
                                            </div>
                                           
                                            <div class="form-group">
                                                <label for="validationCustom01" class="mb-1">Last Name </label>
                                                <input class="form-control"  name="last_name" value="{{ old('name',$user->last_name) }}" id="validationCustom01" type="text">
                                            </div>
                                            <div class="form-group ">
                                                <label for="validationCustom02" class="mb-1">Image :</label>
                                                <input class="form-control" name="profile" id="validationCustom02" type="file">
                                            </div>
                                            <div class="form-group">
                                                <label for="validationCustom01"  class="mb-1">Email :</label>
                                                <input class="form-control" name="email" value="{{ old('email',$user->email) }}" id="validationCustom01" type="email">
                                            </div>
                                       
                                            <div class="form-group">
                                                <label for="validationCustom01" class="mb-1">Mobile :</label>
                                                <input class="form-control" name="phone" value="{{ old('phone',$user->phone) }}" id="validationCustom01" type="text">
                                            </div>
                                            <div class="form-group">
                                                 <input class="btn btn-primary" type="submit" value="Update"> 
                                                <!-- <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button> -->
                                            </div>
                                        </div>
                                  </form>                                    
                                </div>


                                <div class="tab-pane fade" id="top-contact" role="tabpanel" aria-labelledby="contact-top-tab">
                                    <form class="needs-validation" method="POST" action="{{ route('admin.users.update',$user->id)}}">
                                    @csrf
                                    @method('put')
                                        <div class="form">
                                            <!-- <div class="form-group">
                                                <label for="validationCustom01" class="mb-1">Old Password :</label>
                                                <input class="form-control" id="validationCustom01" type="password">
                                            </div> -->
                                            <div class="form-group mb-0">
                                                <label for="validationCustom02" class="mb-1">New Password :</label>
                                                <input class="form-control"  name="password" value="{{ old('password') }}" id="validationCustom02" type="password">
                                            </div>
                                            <div class="form-group">
                                                <label for="validationCustom01" class="mb-1">Confirm Password :</label>
                                                <input class="form-control" name="password_confirmation" id="validationCustom01" type="password">
                                            </div>
                                            <div class="form-group">
                                                 <button class="btn btn-primary" type="submit">Update</button>
                                                <!-- <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button> -->
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid Ends-->
    </div>

@endsection