@extends('backend.layout.app')
@section('content')
<div class="page-body">

    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <div class="page-header-left">
                        <h3>Add  ULB Type</h3>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ol class="breadcrumb pull-right">
                        <li class=""><a href="{{route('admin.dashboard')}}"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
                                    <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                    <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                </svg></a></li>
                        <!-- <li class="breadcrumb-item">Settings</li> -->
                        <li class="breadcrumb-item active">/ Add New State</li>
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

            <form method="POST" name="RegForm"  id="fupForm" action="{{route('admin.state.store')}}">
            @csrf
                <div class="card tab2-card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="validationCustom01" class="mb-1">State Name *</label>
                                    <input class="form-control"   type="text" name="name" placeholder="State Name">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="remark" class="mb-1">State Code *</label>
                                    <input class="form-control" type="text" type="number" name="sates_code" placeholder="State Code">
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