<!DOCTYPE html>
<html>
<head>
    <title>Nagar Sahayak</title>
</head>
<body>

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
                                    <h5 class="f-w-600">Property Details</h5>
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
                          

                           @endforeach  
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
</div>

     
              
</body>
</html>