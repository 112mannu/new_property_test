@extends('backend.layout.app')
@section('content')
<div class="page-body">

    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <div class="page-header-left">
                        <h3>Add New District</h3>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ol class="breadcrumb pull-right">
                        <li class=""><a href="{{route('admin.dashboard')}}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
                                    <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                    <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                </svg></a></li>

                        <li class="breadcrumb-item active">/Add District</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->

    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">

                <form method="POST" action="{{ route('admin.district.store') }}">
                    @csrf
                    <div class="card tab2-card">
                        <div class="card-body">
                            <div class="row">

                                <div class="form-group col-lg-6">
                                    <label for="">Select State*</label>
                                    <select class="form-control" name="state_id">
                                        @foreach(\App\Models\state::where(['name'=>0])->get() as $state)
                                        <option value="{{$state['id']}}">{{$state['name']}}</option>
                                        @endforeach
                                    </select>
                                </div>


                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="validationCustom01" class="mb-1">District *</label>
                                        <input class="form-control"  type="text" name="name" placeholder="District" >
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="Code" class="mb-1">District Code*</label>
                                        <input class="form-control"  type="text" name="district_code" placeholder="Code">
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-lg-6 mt-3">
                                    <div class="form-group">
                                        <button class="btn btn-primary" type="submit">Submit</button>
                                        <!-- <button class="btn btn-secondary" type="button" data-dismiss="modal">Close</button> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>





@endsection