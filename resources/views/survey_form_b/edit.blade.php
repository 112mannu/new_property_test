<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<style>
    .box {
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

    ._my_input_1 {
        border: none;
        width: 100%;
        border: 1px #aaa solid;
        padding: 2px 10px;
        border-radius: 5px;
    }

    .my_sumite_btn {

        boder-display: none;
        padding: 10px 30px;
        border-radius: 5px;
        background-color: #9f9f9f;
        color: #fff;
    }
</style>
<x-app-layout>
    <div>
        <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-200">
            <div class="container mx-auto px-6 py-1 pb-16">
                <div class="bg-white shadow-md rounded my-6 p-5">


                    <form method="POST" action="{{ route('admin.municipal.update',$municipal->id)}}">
                        @csrf
                        @method('put')

                        <div class="container text-center">
                            <h1><b>Municipal Council, Bijnor</b></h1>
                            <p><b>(Phonological Profile)</b></p>
                            <h4><b>Form-A</b></h4>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12 mt-4">
                                    <p><b>नोट:</b> In view of the inherent difficulties in determining the carpet area, the total covered area will be considered as 80 percent of the carpet area.</p>
                                </div>
                            </div>
                        </div>

                        <div class="container">
                            <div class="row">


                                <div class="col-xs-12 col-sm-6">
                                    <div>
                                        <p>1. Name of the plot/building owner Mr./Smt.</P>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-6">
                                    <div>
                                        <input type="text" value="{{ old('owner_name',$municipal->owner_name) }}" name="owner_name" class="_my_input_1" required>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="container">
                            <div class="row">

                                <div class="col-xs-12 col-sm-6">
                                    <div>
                                        <p>2. Name of the building owner's father/husband Sh.</P>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-6">
                                    <div>
                                        <input type="text" value="{{ old('owner_father_husband',$municipal->owner_father_husband) }}" name="owner_father_husband" class="_my_input_1" required>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="container">
                            <div class="row">

                                <div class="col-xs-12 col-sm-6">
                                    <div>
                                        <p>3.  Name of the Plot/Building occupier Shri/Smt.</P>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-6">
                                    <div>
                                        <input type="text" value="{{ old('occupier_name',$municipal->occupier_name) }}" name="occupier_name" class="_my_input_1" required>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="container">
                            <div class="row">

                                <div class="col-xs-12 col-sm-6">
                                    <div>
                                        <p>4. Father's/Husband's Name of the Chairperson Sh.</P>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-6">
                                    <div>
                                        <input type="text" value="{{ old('presbyter_name',$municipal->presbyter_name) }}" name="presbyter_name" class="_my_input_1" required>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="container">
                            <div class="row">

                                <div class="col-xs-12 col-sm-4">
                                    <div>
                                        <p>5. Plot / Building No....</p>
                                        <input type="text" name="polt_number" value="{{ old('polt_number',$municipal->polt_number) }}" class="_my_input_1" required>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-4">
                                    <div>
                                        <p>Colony...</p>
                                        <input type="text" value="{{ old('coloney',$municipal->coloney) }}" name="coloney" class="_my_input_1" required>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-4">
                                    <div>
                                        <p>Ward (light...</p>
                                        <input type="text" value="{{ old('ward',$municipal->ward) }}" name="ward" class="_my_input_1" required>
                                    </div>
                                </div>


                            </div>
                        </div>

                        <div class="container mt-3">
                            <p>6. Total area of the plot </P>


                            <div class="row">

                                <div class="col-xs-12 col-sm-6">
                                    <div>
                                        <p>(1) In Square Meter..</p>
                                        <input type="text" value="{{ old('sqm',$municipal->sqm) }}" name="sqm" class="_my_input_1" required>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-6">
                                    <div>
                                        <p>(2)  In Square Feet</p>
                                        <input type="text" value="{{ old('square_feet',$municipal->square_feet) }}" name="square_feet" class="_my_input_1" required>
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
                                        <input type="text" value="{{ old('total_covered_area',$municipal->total_covered_area) }}" name="total_covered_area" class="_my_input_1" required>
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
                                        <input type="text" value="{{ old('carpet_area_basemen',$municipal->carpet_area_basemen) }}" name="carpet_area_basemen" class="_my_input_1" required>

                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-6">
                                    <div>
                                        <p>B) Ground floor..</P>
                                        <input type="text" value="{{ old('carpet_area_ground',$municipal->carpet_area_ground) }}" name="carpet_area_ground" class="_my_input_1" required>

                                    </div>
                                </div>

                            </div>
                            <div class="row">


                                <div class="col-xs-12 col-sm-6">
                                    <div class="mt-3">
                                        <p>C) First floor.</P>
                                        <input type="text" value="{{ old('carpet_area_first',$municipal->carpet_area_first) }}" name="carpet_area_first" class="_my_input_1" required>

                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-6">
                                    <div class="mt-3">
                                        <p>D) Second floor.</P>
                                        <input type="text" value="{{ old('carpet_area_second',$municipal->carpet_area_second) }}" name="carpet_area_second" class="_my_input_1" required>

                                    </div>
                                </div>

                            </div>

                            <div class="row">


                                <div class="col-xs-12 col-sm-6">
                                    <div class="mt-3">
                                        <p>E) 3rd floor...</P>
                                        <input type="text" value="{{ old('carpet_area_third',$municipal->carpet_area_third) }}" name="carpet_area_third" class="_my_input_1" required>

                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-6">
                                    <div class="mt-3">
                                        <p>R) Other floor...</P>
                                        <input type="text" value="{{ old('carpet_area_Other',$municipal->carpet_area_Other) }}" name="carpet_area_Other" class="_my_input_1">

                                    </div>
                                </div>

                            </div>

                            <div class="row">


                                <div class="col-xs-12 col-sm-6">
                                    <div class="mt-3">
                                        <p>Total (in sq. ft.)</P>
                                        <input type="text" value="{{ old('sum_sq_ft',$municipal->sum_sq_ft) }}" name="sum_sq_ft" class="_my_input_1" required>

                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-6">
                                    <div>
                                        <!-- <input type="text" class="_my_input_1"> -->
                                    </div>
                                </div>

                            </div>


                        </div>

                        <div class="container mt-3">
                            9.  Plot/Building Status:
                            <div class="row mt-3">

                                <div class="col-xs-12 col-sm-6">
                                    <div>
                                        <p>a) On a road up to 12 meters wide</P>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-6">
                                    <!-- <div class="_my_checkbox">
                        <input class="checkbox-in" type="checkbox">
                    </div> -->
                                    <input type="radio" value="{{ old('plot_appearance_12_meters',$municipal->plot_appearance_12_meters) }}" name="plot_appearance_12_meters" value="On a road up to 12 meters wide">


                                </div>
                                <div class="col-xs-12 col-sm-6">
                                    <div>
                                        <p>b) On a road more than 12 meters up to 24 meters wide</P>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-6">
                                    <div>
                                        <input type="radio" value="{{ old('plot_appearance_12_meters',$municipal->plot_appearance_12_meters) }}" value="On a road more than 12 meters up to 24 meters wide" name="plot_appearance_12_meters" type="checkbox" required>
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
                                        <input type="radio" value="{{ old('plot_appearance_12_meters',$municipal->plot_appearance_12_meters) }}" value="On a road more than 24 meters wide" name="plot_appearance_12_meters" type="checkbox" required>
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
                                        <input type="text" value="{{ old('carpet_area_used_owner',$municipal->carpet_area_used_owner) }}" name="carpet_area_used_owner" class="_my_input_1" required>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="container">
                            <div class="row">

                                <div class="col-xs-12 col-sm-6">
                                    <div>
                                        <p>11. (A) If on rent, the carpet area (in square feet) of the area being used by the tenant...
                                        </P>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-6">
                                    <div>
                                        <input type="text" value="{{ old('carpet_area_used_renter',$municipal->carpet_area_used_renter) }}" name="carpet_area_used_renter" class="_my_input_1" required>
                                    </div>
                                </div>

                            </div>
                            <div class="row">


                                <div class="col-xs-12 col-sm-6">
                                    <div>
                                        <p>(C) Rent per month.../P>
                                        <input type="text" value="{{ old('monthly_rental',$municipal->monthly_rental) }}" name="monthly_rental" class="_my_input_1">

                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-6">
                                    <div>
                                        <p>(B) If any part of the building is in commercial use, then its covered area in square feet..</P>
                                        <input type="text" value="{{ old('carpet_area_use_commercial',$municipal->carpet_area_use_commercial) }}" name="carpet_area_use_commercial" class="_my_input_1" required>

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
                                        <input type="text" value="{{ old('construction_year',$municipal->construction_year) }}" name="construction_year" class="_my_input_1" required>
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
                                        <input type="text" value="{{ old('monthly_rental_fixed_municipality',$municipal->monthly_rental_fixed_municipality) }}" name="monthly_rental_fixed_municipality" class="_my_input_1" required>
                                    </div>
                                </div>

                                <input class="my_sumite_btn" type="submit">
                                <!-- <a href="#"  ><button > Submit </button></a> -->

                            </div>
                        </div>
                    </form>

                </div>
        </main>
    </div>
    </div>
</x-app-layout>