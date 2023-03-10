@extends('backend.layout.app')
@section('content')

<div class="page-body">

        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="page-header-left">
                            <h3>Survey Form Details
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
                                    <h5 class="f-w-600">Survey Details</h5>
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
                                                <td>Toilet Type:</td>
                                                <td>{{$municipal->toilet_type}}</td>
                                            </tr>

                                            <tr>
                                                <td>Septic Tank Last Cleaned :</td>
                                                <td>{{$municipal->septic_tank_last}}</td>
                                            </tr>
                                            
                                            <tr>
                                                <td>Connected To sewage Line:</td>
                                                <td>{{$municipal->connected_to_sewage_line}}</td>
                                            </tr>

                                            <tr>
                                                <td>Type of Property:</td>
                                                <td>{{$municipal->type_of_property}}</td>
                                            </tr>

                                            <tr>
                                                <td>Property Situated on (Road Width):</td>
                                                <td>{{$municipal->property_situated	}}</td>
                                            </tr>


                                            <tr>
                                                <td>Constuction Year:</td>
                                                <td>{{$municipal->construction_year}}</td>
                                            </tr>

                                            <tr>
                                                <td>Floor :</td>
                                                <td>{{$municipal->floor_no}}</td>
                                            </tr>


                                            <tr>
                                                <td>Carpet floor area :</td>
                                                <td>{{$municipal->caret_area_of_floor}}</td>
                                            </tr>

                                            <tr>
                                                <td>Room No. :</td>
                                                <td>{{$municipal->no_of_rooms	}}</td>
                                            </tr>

                                            
                                            <tr>
                                                <td>Room area :</td>
                                                <td>{{$municipal->rooms_area}}</td>
                                            </tr>


                                            <tr>
                                                <td>Room Carpet area :</td>
                                                <td>{{$municipal->room_carpetarea}}</td>
                                            </tr>


                                            <tr>
                                                <td>Balcony area:</td>
                                                <td>{{$municipal->balcony_area}}</td>
                                            </tr>


                                            <tr>
                                                <td>Balcony Carpet area:</td>
                                                <td>{{$municipal->barcoly_carpet}}</td>
                                            </tr>


                                            <tr>
                                                <td>Galiyaara area:</td>
                                                <td>{{$municipal->galiyaara_area}}</td>
                                            </tr>

                                            <tr>
                                                <td>Galiyaara Carpet area:</td>
                                                <td>{{$municipal->galyara_carpet}}</td>
                                            </tr>

                                            <tr>
                                                <td>Kitchen area:</td>
                                                <td>{{$municipal->kitchen_area}}</td>
                                            </tr>


                                            <tr>
                                                <td>Kitchen Carpet area:</td>
                                                <td>{{$municipal->kitchan_carpet}}</td>
                                            </tr>

                                            <tr>
                                                <td>Bhandar area:</td>
                                                <td>{{$municipal->bhandar_garh_area}}</td>
                                            </tr>


                                            <tr>
                                                <td>Bhandar Carpet area:</td>
                                                <td>{{$municipal->bhandar_carpet}}</td>
                                            </tr>

                                            <tr>
                                                <td>Other area:</td>
                                                <td>{{$municipal->other_area}}</td>
                                            </tr>

                                            <tr>
                                                <td>Other Carpet area:</td>
                                                <td>{{$municipal->other_carpet}}</td>
                                            </tr>

                                            <tr>
                                                <td>Total area of property:</td>
                                                <td>{{$municipal->Total_area_of_property}}</td>
                                            </tr>

                                            <tr>
                                                <td>Total Covered of House:</td>
                                                <td>{{$municipal->Total_covered_area_house}}</td>
                                            </tr>

                                            <tr>
                                                <td>Total area of House:</td>
                                                <td>{{$municipal->total_carpet_area_of_house}}</td>
                                            </tr>

                                            <tr>
                                                <td>Monthly rate:</td>
                                                <td>{{$municipal->monthly_rate}}</td>
                                            </tr>


                                            <tr>
                                                <td>Total Carpet Area of house Monthly rate:</td>
                                                <td>{{$municipal->yearly_assessment_value_of_property}}</td>
                                            </tr>


                                            <tr>
                                                <td>House Tax:</td>
                                                <td>{{$municipal->house_tax}}</td>
                                            </tr>

                                            <tr>
                                                <td>Water Tax:</td>
                                                <td>{{$municipal->water_tax}}</td>
                                            </tr>

                                            <tr>
                                                <td>Other Tax:</td>
                                                <td>{{$municipal->other_tax}}</td>
                                            </tr>

                                            <tr>
                                                <td>Total Tax:</td>
                                                <td>{{$municipal->total_tax}}</td>
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