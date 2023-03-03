<?php

namespace App\Http\Controllers\Admin\api;

use Auth;
use App\Models\Survey;
use App\Models\SurveyFormB;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\District;
use App\Models\state;
use App\Models\State_all_data;
use App\Models\Town;
use App\Models\Ulbward;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Symfony\Contracts\Service\Attribute\Required;
use Illuminate\Support\Facades\DB;

class SurveyFormBController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:api', ['except' ]);
    }



    public function index()
    {

        $user = auth()->user();

        //dd($user->id);
 
        $surveyb = SurveyFormB::where('user_id', $user->id)->get();

        return response()->json([
            'surveyb' => $surveyb
        ], 200);

    }



 public function store(Request $request){

    // $data= $request->all();
       
    // $forms = SurveyFormB::create($data);



 $state= $request->state_id;

 $state = state::where('id', $state)->get();

 foreach($state as $state){
    $state = $state->sates_code;
   
  }


 $district= $request->district_id;

 $district = District::where('id', $district  )->get('district_code');

 foreach($district as $district){
    $district = $district->district_code;
   
  }

 $ulb= $request->ulb_id;

 $ulb = Town::where('id', $ulb)->get();

 foreach($ulb as $ulb){
    $ulb = $ulb->ulb_code;  
  }

//    $time = time();
  
//    dd($time);


  $number = mt_rand(100000000, 999999999);

   $unique_id= $state.$district. $ulb.$number;


      
    if($request->hasFile('image'))
    
    {
      
      $file = $request->file('image');
      $extension = $file->getClientOriginalExtension();
      $filename = time().'.'.$extension;
      $file->move('images/survey',$filename );
    }
    

    $validator = Validator::make($request->all(),[   
        'state_id' => 'required ',
        'district_id'=>'required ',
        'ulb_id'=>'required ',
        'floor_no' => 'required ',
        'caret_area_of_floor' => 'required ',
        'construction_year' => 'required',
        'no_of_rooms' => 'required',
        'rooms_area' => 'required',
        // 'no_of_baramda' => 'required',
        'baramda_area' => 'required',
        // 'no_of_balcony'=> 'required',
        'balcony_area'=> 'required',
        // 'no_of_galiyaara'=>'required',
        'galiyaara_area'=>'required',
         'kitchen_area'=>'required',
        // 'no_of_kitchen'=>'required',
        // 'no_of_bhandar_garh'=>'required',
        'bhandar_garh_area' =>'required',
        // 'no_of_other' =>'required',
        'other_area'=>'required',
        // 'Total_carpet_area_of_basement'=> 'required',
        // 'derail_of_tatal_carpet_area_of_house'=>'required',
        // 'yearly_assessment_value_and_tax_on_property'=>'required',
        'Total_area_of_property'=>'required',
        'Total_covered_area_house'=>'required',
        'total_carpet_area_of_house'=> 'required',
        'monthly_rate'=>'required',
        'yearly_assessment_value_of_property',
        'house_tax'=>'required',
        'water_tax'=>'required',
        'other_tax'=>'required',
        'total_tax'=>'required',

        // 'remark'

    ]);

    if ($validator->fails()) {
        return response()->json([
            'message' => "Something went really wrong!"
        ], 500);
    }

 
   $survey_id = Survey::latest('id')->first();
   $id=($survey_id->id);
 

$user = SurveyFormB::create([ 
    
    'from_a_id' => $id,
    'user_id' => Auth::user()->id,

    'state_id'=>$request->state_id,
    'district_id'=>$request->district_id,
    'ulb_id'=>$request->ulb_id,
    'floor_no' => $request->floor_no,
    'caret_area_of_floor' => $request->caret_area_of_floor,
    'construction_year' => $request->construction_year,
    'no_of_rooms' => $request->no_of_rooms,
    'rooms_area' => $request->rooms_area,
    // 'no_of_baramda' => $request->no_of_baramda,
    'baramda_area' => $request->baramda_area,
    // 'no_of_balcony' => $request->no_of_balcony,
    'balcony_area' => $request->balcony_area,
    // 'no_of_galiyaara' => $request->no_of_galiyaara,
    'galiyaara_area' => $request->galiyaara_area,
    // 'no_of_kitchen' => $request->no_of_kitchen,
    'kitchen_area' => $request->kitchen_area,
    // 'no_of_bhandar_garh' => $request->no_of_bhandar_garh,
    'bhandar_garh_area'=> $request->bhandar_garh_area,
    // 'no_of_other' =>  $request->no_of_other,
    'other_area'=>$request->other_area,
    // 'Total_carpet_area_of_basement'=>$request->Total_carpet_area_of_basement,
    // 'derail_of_tatal_carpet_area_of_house'=>$request->derail_of_tatal_carpet_area_of_house,
    // 'yearly_assessment_value_and_tax_on_property' => $request->yearly_assessment_value_and_tax_on_property,

    'Total_area_of_property' =>  $request->Total_area_of_property,
    'Total_covered_area_house'=>$request->Total_covered_area_house,
    'total_carpet_area_of_house'=> $request->total_carpet_area_of_house,
    'monthly_rate' =>  $request->monthly_rate,
    'yearly_assessment_value_of_property'=>$request->yearly_assessment_value_of_property,
    'house_tax'=>$request->house_tax,
    'water_tax'=>$request->water_tax,
    'other_tax' => $request->other_tax,
    'total_tax' =>  $request->total_tax,
  
    'image'=>$filename,
    'unique_id'=> $unique_id,
 
]);


return response()->json([
    'message' => "Survey Form fill successfully."
], 200);
}

public function edit(Request $request)
{

    $surveyform = SurveyFormB::find($request->id);
    if(!$surveyform){
        return response()->json([
        'message'=>'Survey Form Not Found.'
        ],404);
    }

    return response()->json([
        'SurveyFormB' => $surveyform
    ],200);
}


public function update (Request $request)
{
   // dd ($request->id);
    $user = SurveyFormB::find($request->id);

   // $user = auth()->user();
    $validated = $request->validate([

        
        'floor_no' => 'required',
        'caret_area_of_floor' => 'required',
        'construction_year' => 'required',
        'no_of_rooms' => 'required',
        'rooms_area' => 'required',
        // 'no_of_baramda' => 'required',
        'baramda_area' => 'required',
        // 'no_of_balcony' =>'required',
        'balcony_area' => 'required',
        // 'no_of_galiyaara' => 'required',
        'galiyaara_area' => 'required',
        // 'no_of_kitchen' => 'required',
        'kitchen_area' => 'required',
        // 'no_of_bhandar_garh' =>'required',
        'bhandar_garh_area'=>'required',
        // 'no_of_other' => 'required',
        'other_area'=>'required',
        // 'Total_carpet_area_of_basement'=>'required',
        // 'derail_of_tatal_carpet_area_of_house'=>'required',
        // 'yearly_assessment_value_and_tax_on_property' => 'required',
        'Total_area_of_property' =>  'required',
        'Total_covered_area_house'=>'required',
        'total_carpet_area_of_house'=> 'required',
        'monthly_rate' =>  'required',
        'yearly_assessment_value_of_property'=>'required',
        'house_tax'=>'required',
        'water_tax'=>'required',
        'other_tax' => 'required',
        'total_tax' =>  'required',
        //'remark'=>'required'

    ]);


    // if($request->hasFile('image')){
    //     if($name = $this->saveImage($request->image)){
    //         $validated['image'] = $name;
    //     }
    // }

    // if($request->hasFile('image'))
    // {
      
    //   $file = $request->file('image');
    //   $extension = $file->getClientOriginalExtension();
    //   $validated = time().'.'.$extension;
    //   $file->move('images/survey',$validated );
    // }

    $user->update($validated);

    return response()->json([
        'message' => "Survey Form updated successfully !!!"
    ], 200);

}





}
