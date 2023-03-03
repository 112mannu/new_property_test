<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<style>
 /* .box {
    display: flex;
    align-items: center;
    justify-content: center;
    background: #aaa;
    margin: 20px 0;
    padding: 10px;
    width: 100%;
    min-height: 200px;
    border: 2px #ccc solid;
    color: #fff;
  }
  ._my_input_1{
    border: none;
    width: 100%;
    border: 1px #aaa solid;
    padding: 2px 10px;
    border-radius: 5px;
  }
  
  .my_sumite_btn{
	  
	  boder-display:none; 
	  padding:10px 30px;
	  border-radius:5px;
	  background-color: #9f9f9f; 
	  color:#fff;
  }
	   */


  .table-survey{
margin-top: 30px;
}
.w-50{
   width: 50%;
}

.quck-save-btn {
    background-color: #dd5200!important;
    border: none;
    padding: 14px 70px;
    font-family: Poppins;
    font-size: 20px;
    font-weight: 600;
    line-height: 21px;
    letter-spacing: 0em;
    text-align: center;
}


</style>
<x-app-layout>
    <div>
        <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
            <div class="container mx-auto px-6 py-1 pb-16">
                <div class="bg-white shadow-md rounded my-6 p-5">


                <section>
      <div class="container">
         <div class="survey-form">
            <div class="row">
               <div class="table-survey">
               <table class="table table-striped">

               <tr>
    <td class="w-50"> Unique Id :-</td>
    <td class="w-50"> {{$municipal->unique_id }}</td>
     </tr>
    
  <tr>
    <td class="w-50">Property Owner Name MR./MRS.  :-</td>
    <td class="w-50"> {{$municipal->property_owner_name }}</td>
     </tr>

       <tr>
    <td class="w-50">Father/Husband Name MR. :-</td>
    <td class="w-50">{{$municipal->father_husband_name }}</td>
     </tr>
       <tr>
    <td class="w-50">Mobile Number :-</td>
    <td class="w-50">{{$municipal->mobile_number }}</td>
     </tr>
       <tr>
    <td class="w-50">Aadhar Card Number:-</td>
    <td class="w-50">{{$municipal->aadhar_card_no }} </td>
     </tr>
     <tr>
    <td class="w-50">Property Number :-</td>
    <td class="w-50">{{$municipal->property_no }}</td>
     </tr>

     <tr>
    <td class="w-50">Mohhalla :-</td>
    <td class="w-50">{{$municipal->mohhalla }}</td>
     </tr>


     <tr>
    <td class="w-50">Ward Number :-</td>
    <td class="w-50">{{$municipal->ward_no }}</td>
     </tr>
     <tr>
    <td class="w-50">Genter :-</td>
    <td class="w-50">{{$municipal->category}}</td>
     </tr>

   


     <tr>
    <td class="w-50">Ownership type :-</td>
    <td class="w-50">{{$municipal->ownership}}</td>
     </tr>

     <tr>
    <td class="w-50">Toilet Type :-</td>
    <td class="w-50">{{$municipal->toilet_type}}</td>
</tr>
<tr>
    <td class="w-50">Water Source :-</td>
    <td class="w-50">{{$municipal->water_source}}</td>
</tr>

<tr>
    <td class="w-50">Septic Tank Last :</td>
    <td class="w-50">{{$municipal->septic_tank_last}} 
</tr>


</table>


@foreach (explode(',', $municipal->image) as $image)
                            <br>                          
                            <a class="image-popup-vertical-fit" href="/images/survey/{{$image}}">
                                <img src="/images/survey/{{$image}}" style="width:100%; high">
                            </a>
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
   </section>


   <!-- <div class="container">
                            <div class="row">

                            

                                <div class="col-xs-12 col-sm-6">
                                    <div>
                                        <p>Property Owner Name MR./MRS.  :-</P>
                                       
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-6">
                                    <div>
                                   {{$municipal->property_owner_name }}
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="container">
                            <div class="row">

                                <div class="col-xs-12 col-sm-6">
                                    <div>
                                        <p>Father/Husband Name MR.  :-</P>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-6">
                                    <div>
                                    {{$municipal->father_husband_name }}
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="container">
                            <div class="row">

                                <div class="col-xs-12 col-sm-6">
                                    <div>
                                        <p>Mobile Number :- 
                                        </P>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-6">
                                    <div>
                                    {{$municipal->mobile_number }}
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="container">
                            <div class="row">

                                <div class="col-xs-12 col-sm-6">
                                    <div>
                                        <p>Aadhar Card Number:- </P>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-6">
                                    <div>

                                    {{$municipal-> aadhar_card_no }} -->
                                   
                                        <!-- <input type="text" name="presbyter_name" class="_my_input_1" required> -->
                                    <!-- </div>
                                </div>

                            </div>
                            </div>
                       

                            <div class="container">
                            <div class="row">

                                <div class="col-xs-12 col-sm-6">
                                    <div>
                                        <p>Property Number :- 
                                        </P>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-6">
                                    <div>
                                    {{$municipal->property_no }}
                                    </div>
                                </div>

                            </div>
                        </div>


                        <div class="container">
                            <div class="row">

                                <div class="col-xs-12 col-sm-6">
                                    <div>
                                        <p>Ward Number :- 
                                        </P>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-6">
                                    <div>
                                    {{$municipal->ward_no }}
                                    </div>
                                </div>

                            </div>
                        </div>

                             

                        <div class="container">
                            <div class="row">

                                <div class="col-xs-12 col-sm-6">
                                    <div>
                                        <p>Genter :- 
                                        </P>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-6">
                                    <div>
                                    {{$municipal->category }}
                                    </div>
                                </div>

                            </div>
                        </div>
   

                        <div class="container">
                            <div class="row">

                                <div class="col-xs-12 col-sm-6">
                                    <div>
                                        <p>Mohhalla :- 
                                        </P>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-6">
                                    <div>
                                    {{$municipal->mohhalla }}
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="container">
                            <div class="row">

                                <div class="col-xs-12 col-sm-6">
                                    <div>
                                        <p>ownership type :- 
                                        </P>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-6">
                                    <div>
                                    {{$municipal->ownership }}
                                    </div>
                                </div>

                            </div>
                        </div>

                        </div>

                        <div class="container">
                            <div class="row">

                                <div class="col-xs-12 col-sm-6">
                                    <div>
                                        <p>Name of Joint Owners :- 
                                        </P>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-6">
                                    <div>
                                    {{$municipal->joint_name }}
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="container">
                            <div class="row">

                                <div class="col-xs-12 col-sm-4">
                                    <div>
                                        <p>PROPERTY NO</p>
                                        <input type="text" name="polt_number" class="_my_input_1" required>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-4">
                                    <div>
                                        <p>Colony...</p>
                                        <input type="text " name="coloney" class="_my_input_1" required>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-4">
                                    <div>
                                        <p>Ward (light...</p>
                                        <input type="text " name="ward" class="_my_input_1" required>
                                    </div>
                                </div>


                            </div>
                        </div>

                        <div class="container mt-3">
                            <p>6. Total area of the plot </P>

                            <div class="row">

                                <div class="col-xs-12 col-sm-6">
                                    <div>
                                        <p>(1) In Square Meter</p>
                                        <input type="text" name="sqm" class="_my_input_1" required>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-6">
                                    <div>
                                        <p>(2) In Square Feet</p>
                                        <input type="text " name="square_feet" class="_my_input_1" required>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="container mt-4 pt-2">
                            <div class="row">

                                <div class="col-xs-12 col-sm-6">
                                    <div>
                                        <p>7. Total covered area (in square feet) of the building constructed on the plot.</P>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-6">
                                    <div>
                                        <input type="text" name="total_covered_area" class="_my_input_1" required>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="container">
                            <p>8. Carpet Area per Floor (in sq. ft.):</P>
                            <div class="row">


                                <div class="col-xs-12 col-sm-6">
                                    <div>
                                        <p>A) Basement..</P>
                                        <input type="text" name="carpet_area_basemen" class="_my_input_1" required>

                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-6">
                                    <div>
                                        <p>B) Ground floor..</P>
                                        <input type="text" name="carpet_area_ground" class="_my_input_1" required>

                                    </div>
                                </div>

                            </div>
                            <div class="row">


                                <div class="col-xs-12 col-sm-6">
                                    <div class="mt-3">
                                        <p>C) First floor.</P>
                                        <input type="text" name="carpet_area_first" class="_my_input_1" required>

                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-6">
                                    <div class="mt-3">
                                        <p>D) Second floor.</P>
                                        <input type="text" name="carpet_area_second" class="_my_input_1" required>

                                    </div>
                                </div>

                            </div>

                            <div class="row">


                                <div class="col-xs-12 col-sm-6">
                                    <div class="mt-3">
                                        <p>E) 3rd floor...</P>
                                        <input type="text" name="carpet_area_third" class="_my_input_1" required>

                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-6">
                                    <div class="mt-3">
                                        <p>R) Other floor...</P>
                                        <input type="text" name="carpet_area_Other" class="_my_input_1">

                                    </div>
                                </div>

                            </div>

                            <div class="row">


                                <div class="col-xs-12 col-sm-6">
                                    <div class="mt-3">
                                        <p>Total (in sq. ft.)</P>
                                        <input type="text" name="sum_sq_ft" class="_my_input_1" required>

                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-6">
                                    <div> -->
                                        <!-- <input type="text" class="_my_input_1"> -->
                                    <!-- </div>
                                </div>

                            </div>


                        </div>

                        <div class="container mt-3">
                            9.  Plot/Building Status:
                            <div class="row mt-3">

                                <div class="col-xs-12 col-sm-6">
                                    <div>
                                        <p>a) on a road up to 12 meters wide</P>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-6"> -->
                                    <!-- <div class="_my_checkbox">
                        <input class="checkbox-in" type="checkbox">
                    </div> -->
                    <!-- <input type="radio"  name="plot_appearance_12_meters" value="on a road up to 12 meters wide">
                    

                                </div>
                                <div class="col-xs-12 col-sm-6">
                                    <div>
                                        <p>b) On a road more than 12 meters up to 24 meters wide</P>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-6">
                                    <div>
                                        <input type="radio"  value="On a road more than 12 meters up to 24 meters wide" name="plot_appearance_12_meters" type="checkbox" required>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6">
                                    <div>
                                        <p>c) On a road more than 24 meters wide

                                        </P>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-6">
                                    <div>
                                        <input type="radio"  value="On a road more than 24 meters wide" name="plot_appearance_12_meters" type="checkbox" required>
                                    </div>
                                </div>

                            </div>
                        </div>


                        <div class="container">
                            <div class="row">

                                <div class="col-xs-12 col-sm-6">
                                    <div>
                                        <p>10. Carpet area (in square feet) of the area being used by the building owner himself.
                                        </P>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-6">
                                    <div>
                                        <input type="text" name="carpet_area_used_owner" class="_my_input_1" required>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="container">
                            <div class="row">

                                <div class="col-xs-12 col-sm-6">
                                    <div>
                                        <p>11. (A) If on rent, the carpet area (in square feet) of the area being used by the tenant.</P>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-6">
                                    <div>
                                        <input type="text" name="carpet_area_used_renter" class="_my_input_1" required>
                                    </div>
                                </div>

                            </div>
                            <div class="row">


                                <div class="col-xs-12 col-sm-6">
                                    <div>
                                        <p>Rent per month...</P>
                                        <input type="text" name="monthly_rental" class="_my_input_1">

                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-6">
                                    <div>
                                        <p>b) If any part of the building is in commercial use, then its covered area in square feet..</P>
                                        <input type="text" name="carpet_area_use_commercial" class="_my_input_1" required>

                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="container mt-3">
                            <div class="row">

                                <div class="col-xs-12 col-sm-6">
                                    <div>
                                        <p>12. Year of construction..
                                        </P>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-6">
                                    <div>
                                        <input type="text" name="construction_year" class="_my_input_1" required>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="container mt-2">
                            <div class="row">

                                <div class="col-xs-12 col-sm-6">
                                    <div>
                                        <p>13. Monthly rental rate (in per sq. ft.) fixed by the municipality.
                                        </P>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-6">
                                    <div>
                                        <input type="text" name="monthly_rental_fixed_municipality" class="_my_input_1" required>
                                    </div>
                                </div>

                                <input class="my_sumite_btn" type="submit">      -->
                                <!-- <a href="#"  ><button > Submit </button></a> -->

                            <!-- </div>
                        </div>
                    </form>

                </div> -->
        </main>
    </div>
    </div>
</x-app-layout>