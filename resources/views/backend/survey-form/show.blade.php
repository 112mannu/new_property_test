@extends('backend.layout.app')
@section('content')

<div class="page-body">

        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="page-header-left">
                            <h3>Serve Form Details
                                <small>Property Tax Admin panel</small>
                            </h3>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <ol class="breadcrumb pull-right">
                            <li class="breadcrumb-item"><a href="dashboard.html"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg></a></li>
                            <li class="breadcrumb-item">Settings</li>
                            <li class="breadcrumb-item active">Serve</li>
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
                    <div class="card">
                        <div class="card-body">
                          
                            <hr>
                            <div class="project-status">
                               
                               <div class="row">
                                <div class="col-lg-1"></div>
                                <div class="col-lg-9">
                                    <h5 class="f-w-600">Serve Details</h5>
                                    <div class="table-responsive profile-table">
                                        <table class="table table-responsive">
                                            <tbody>
                                            <tr>
                                                <td style="width:
                                                300px !important;">Unique Id:</td>
                                                <td>{{$municipal->unique_id }}</td>
                                            </tr>
                                            <tr>
                                                <td>Property Owner Name MR./MRS.:</td>
                                                <td>{{$municipal->property_owner_name }}</td>
                                            </tr>
                                            <tr>
                                                <td>Father/Husband Name MR.:</td>
                                                <td>{{$municipal->father_husband_name }}</td>
                                            </tr>
                                            <tr>
                                                <td>Mobile Number:</td>
                                                <td>{{$municipal->mobile_number }}</td>
                                            </tr>
                                            <tr>
                                                <td>Aadhar Number:</td>
                                                <td>{{$municipal->aadhar_card_no }}</td>
                                            </tr>
                                           
                                            <tr>
                                                <td>Property Number:</td>
                                                <td>{{$municipal->property_no }}</td>
                                            </tr>
                                             <tr>
                                                <td>Mohhalla:</td>
                                                <td>{{$municipal->mohhalla }}</td>
                                            </tr>
                                            <tr>
                                                <td>Ward Number:</td>
                                                <td>{{$municipal->ward_no }}</td>
                                            </tr>

                                            <tr>
                                                <td>Genter:</td>
                                                <td>{{$municipal->category}}</td>
                                            </tr>

                                              <tr>
                                                <td>Ownership Type:</td>
                                                <td>{{$municipal->ownership}}</td>
                                            </tr> 
                                             <tr>
                                                <td>Water source:</td>
                                                <td>{{$municipal->water_source}}</td>
                                            </tr>
                                            <tr>
                                                <td>Septic Tank Last:</td>
                                                <td>{{$municipal->septic_tank_last}}/td>
                                            </tr>
                                            
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-lg-2"></div>
                               </div>
                            </div>
                           <div class="wraper-baner">
                           @foreach (explode(',', $municipal->image) as $image)
                            <div class="image-banner">
                                <img src="/images/survey/{{$image}}" alt="">
                            </div>
                            <!-- <div class="image-banner">
                                <img src="./assets/images/pdf-banner/main-banner-bg.jpg" alt="">
                            </div> -->
                            @endforeach
                           </div>

                           <div class="col-lg-12 text-end mt-5" >
              
                                 <!-- <button type="button" class="btn btn-primary quck-save-btn">Edit</button> -->
                                 <a href="{{route('admin.municipal.index')}}">   <button type="button"  class="btn btn-primary quck-save-btn"> Back </button></a>
                                <a href="{{url('pdf-downloade', $municipal->id)}}"> <button type="button" class="btn btn-primary quck-save-btn">download PDF </button></a>
                              </div>
         
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
</div>


@endsection