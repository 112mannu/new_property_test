@extends('backend.layout.app')
@section('content')
<style>

    .error {
    color: red!important;
}
</style>


<div class="page-body">

<div class="container-fluid">
<form method="POST" action="{{ route('admin.users.store')}}" id="NewStaff" enctype="multipart/form-data">
    @csrf
   @method('post')
            <div class="row">
               
                <div class="col-xl-12">
                    <div class="card tab2-card">
                        <div class="card-body">
                           <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="name" class="mb-1">Fist Name <span class="text-danger">*</label>
                                    <input class="form-control" class="error" id="name" type="text" name="name" placeholder="Enter name"   type="text">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group"> 
                                    <label for="last_name" class="mb-1">Last Name <span class="text-danger">*</label>
                                    <input class="form-control" id="last_name" type="text" name="last_name" placeholder="Enter Last name">
                                </div>
                            </div>



                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="phone" class="mb-1">Mobile Number <span class="text-danger">*</label>
                                    <input class="form-control"   id="phone" type="text" name="phone" placeholder="Enter Phone Number" >
                                </div>
                            </div>


                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="email" class="mb-1">Email ID <span class="text-danger">*</label>
                                    <input class="form-control"  id="email" type="text" name="email" placeholder="Enter email">
                                </div>
                            </div>


                            <div class="col-lg-6">
                                <label for="validationCustom02" class="mb-1">Role</label>
                                <ul class="stylish-checkbox mt-1">

                                @foreach($roles as $role)
                                    <li>
                                      <input class="form-checkbox  h-5 w-5 text-blue-600 " type="checkbox"  name="roles[]" value="{{$role->id}}">
                                      <label for="styled-checkbox-1">{{ $role->name }}</label>
                                    </li>
                                    @endforeach

                                    <!-- <li>
                                      <input class="styled-checkbox" id="styled-checkbox-2" type="checkbox" value="value2" checked>
                                      <label for="styled-checkbox-2">CSS Only</label>
                                    </li> -->
                                   
                                  </ul>
                            </div>


                            <!-- @foreach($roles as $role)
                      <div class="flex flex-col justify-cente">
                          <div class="flex flex-col">
                              <label class="inline-flex items-center ">
                                  <input type="checkbox" class="form-checkbox h-5 w-5 text-blue-600" name="roles[]" value="{{$role->id}}"
                                  ><span class="ml-2 text-gray-700">{{ $role->name }}</span>
                              </label>
                          </div>
                      </div>
                  @endforeach -->





                       
                           </div>
                        
                           <div class="row">
                            <div class="col-lg-6 mt-3">
                                <div class="form-group">
                                    <!-- <input class="btn btn-primary" type="submit" value="Save"> -->

                                    <button class="btn btn-secondary close_form" type="submit" data-dismiss="modal">Create</button>
                                </div>
                            </div>
                           </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
            </div>
        </div>


@endsection
