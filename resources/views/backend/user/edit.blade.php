@extends('backend.layout.app')
@section('content')
<style>
    .error {
        color: red !important;
    }
</style>

<div class="page-body">

    <div class="container-fluid">
        <form method="POST" action="{{route('admin.staff.update', $user->id)}}"  enctype="multipart/form-data">
            @csrf
                  @method('put')

            <div class="row">

                <div class="col-xl-12">
                    <div class="card tab2-card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="name" class="mb-1">Fist Name <span class="text-danger">*</label>
                                        <input class="form-control"  value="{{old('name',$user->name) }}" id="name" type="text" name="name" >
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="last_name" class="mb-1">Last Name <span class="text-danger">*</label>
                                        <input class="form-control" value="{{ old('last_name',$user->last_name) }}" id="last_name" type="text" name="last_name" placeholder="Enter Last name">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="father_name" class="mb-1">Father's Name <span class="text-danger">*</label>
                                        <input name="father_name" value="{{ old('father_name',$user->father_name) }}" placeholder="Father's Name" class="form-control" type="text">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="dob" class="mb-1">Date of Birth <span class="text-danger">*</label>
                                        <input class="form-control" value="{{ old('dob',$user->dob) }}" type="date" id="dob" name="dob" placeholder="Dob (dd/mm/yyyy)" max="2099-04-30">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="phone" class="mb-1">Mobile Number <span class="text-danger">*</label>
                                        <input class="form-control" id="phone" type="text" name="phone" value="{{ old('phone',$user->phone) }}" placeholder="Enter Phone Number">
                                    </div>
                                </div>


                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="email" class="mb-1">Email ID <span class="text-danger">*</label>
                                        <input class="form-control" id="email" type="text" name="email" value="{{ old('email',$user->email) }}" placeholder="Enter email">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="aadhar_no" class="mb-1">Aadhar Number <span class="text-danger">*</label>
                                        <input class="form-control" id="aadhar_no" type="text" name="aadhar_no" value="{{ old('aadhar_no',$user->aadhar_no) }}" placeholder="Enter Aadhar Number" type="text">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="remark" class="mb-1">Remark </label>
                                        <input class="form-control" type="text" value="{{ old('remark',$user->remark) }}" name="remark" placeholder="Enter Remark">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="address" class="mb-1">Address <span class="text-danger">*</label>
                                        <input class="form-control" id="address" value="{{ old('address',$user->address) }}" type="text" name="address" placeholder="Write Address">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="input_file" class="mb-1">Upload Profile <span class="text-danger">*</label>
                                        <input class="form-control" value="{{ old('profile',$user->profile) }}"  id="image" name="profile"  type="file">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="input_file" class="mb-1">Upload Aadhar (Front) <span class="text-danger">*</label>
                                        <input class="form-control" value="{{ old('aadhar_front',$user->aadhar_front) }}" id="aadhar_front" name="aadhar_front" type="file">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="input_file" class="mb-1">Upload Aadhar (Back) <span class="text-danger">*</label>
                                        <input class="form-control" value="{{ old('aadhar_back',$user->aadhar_back) }}" id="aadhar_back" name="aadhar_back" type="file">
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-lg-6 mt-3">
                                    <div class="form-group">
                                        <!-- <input class="btn btn-primary" type="submit" value="Save"> -->

                                        <button class="btn btn-secondary close_form" type="submit" data-dismiss="modal">Save</button>
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