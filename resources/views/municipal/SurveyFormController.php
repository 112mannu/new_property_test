<?php

namespace App\Http\Controllers\Admin\api;

use App\Http\Controllers\Controller;
use App\Models\District;
use App\Models\state;
use App\Models\Survey;
use App\Models\Town;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\URL;

class SurveyFormController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:api', ['except' ]);
    }


    public function index()
    {

       

        $user = auth()->user();
        $survey = Survey::where('user_id', $user->id)->get();

        
   foreach( $survey as  $surve)
    {
        $img= [];
        foreach  (explode(',' , $surve->image) as $image)
        {
        array_push($img, URL::to('/') .'/images/survey/'.$image);          
             $surve->image = $img;
        }
            
        }
    
        return response()->json([
            'survey' => $survey
        ], 200);
    }




// public function stores(Request $request)
// {
//   $state= $request->state_id;

//   $state = state::where('id', $state)->get();

//  foreach($state as $state){
//     $state = $state->sates_code;
   
//   }


//  $district= $request->district_id;

//  $district = District::where('id', $district  )->get('district_code');

//  foreach($district as $district){
//     $district = $district->district_code;
   
//   }

//  $ulb= $request->ulb_id;

//  $ulb = Town::where('id', $ulb)->get();

//  foreach($ulb as $ulb){
//     $ulb = $ulb->ulb_code;  
//   }

// //    $time = time();
  
// //    dd($time);


//   $number = mt_rand(100000000, 999999999);

//    $unique_id= $state.$district. $ulb.$number;




      
//     // if($request->hasFile('image'))
    
//     // {
      
//     //   $file = $request->file('image');
//     //   $extension = $file->getClientOriginalExtension();
//     //   $filename = time().'.'.$extension;
//     //   $file->move('images/survey',$filename );
//     // }



// $files = [];
// if($request->hasfile('image'))
//  {
//     foreach($request->file('image') as $file)
//     {
//         $name = time().rand(1,50).'.'.$file->extension();
//         $file->move('images/survey', $name);  
//         $files[] = $name;  
//     }
//     }
//      $image= implode(",",$files);




//     $validator = Validator::make($request->all(),[
        
//      //   'date' => 'required ',
//         'property_owner_name' => 'required ',
//         'father_husband_name' => 'required',
//         'mobile_number' => 'required',
//         'aadhar_card_no' => 'required',
//         'property_no' => 'required',
//         'mohhalla' => 'required',
//         'ward_no'=> 'required',
//         'category'=> 'required',
//         'sub_category'=>'required',
//         'ownership'=>'required',
//         'joint_name',
//         'use_of_property',
//         'use_mix' =>'required',
//         'rental_than_no_of_families',
//         'water_source'=> 'required',
//         'toilet_type'=>'required',
//         'septic_tank_last'=>'required',
//         'connected_to_sewage_line',
//         'type_of_property'=>'required',
//         'property_situated'=> 'required',

        

//         'state_id' => 'required ',
//         'district_id'=>'required ',
//         'ulb_id'=>'required ',
//         'floor_no' => 'required ',
//         'caret_area_of_floor' => 'required ',
//         'construction_year' => 'required',
//         'no_of_rooms' => 'required',
//         'rooms_area' => 'required',
//         'galiyaara_area'=>'required',
//         'kitchen_area'=>'required',
//         'bhandar_garh_area' =>'required', 
//         'other_area'=>'required',
//         'Total_area_of_property'=>'required',
//         'Total_covered_area_house'=>'required',
//         'total_carpet_area_of_house'=> 'required',
//         'monthly_rate'=>'required',
//         'yearly_assessment_value_of_property',
//         'house_tax'=>'required',
//         'water_tax'=>'required',
//         'other_tax'=>'required',
//         'total_tax'=>'required',
//         'balcony_area'=> 'required',

//          'baramda_area' => 'required',
//         'room_carpetarea'=> 'required',
//         'baramda_carpet'=> 'required',
//         'barcoly_carpet'=> 'required',
//         'galyara_carpet'=> 'required',
//         'kitchan_carpet'=> 'required',
//         'bhandar_carpet'=> 'required',
//         'other_carpet'=> 'required',
//         'total_basment_carpet'=> 'required',
//         'yearly_assesment'=> 'required',


//         'remark'

//     ]);

//    // dd($request->all());

//     if ($validator->fails()) {
//         return response()->json([
//             'message' => "Something went really wrong!"
//         ], 500);
//     }


//     $user = Survey::create([
//         'user_id' => Auth::user()->id,
//      //   'date' => $request->date,
//         'property_owner_name' => $request->property_owner_name,
//         'father_husband_name' => $request->father_husband_name,
//         'mobile_number' => $request->mobile_number,
//         'aadhar_card_no' => $request->aadhar_card_no,
//         'property_no' => $request->property_no,
//         'mohhalla' => $request->mohhalla,
//         'ward_no' => $request->ward_no,
//         'category' => $request->category,
//         'sub_category' => $request->sub_category,
//         'ownership' => $request->ownership,
//         'joint_name' => $request->joint_name,
//         'use_of_property' => $request->use_of_property,
//         'use_mix' => $request->use_mix,
//        // 'carpet_area'=> $request->carpet_area,
//         'rental_than_no_of_families' =>  $request->rental_than_no_of_families,
//         'water_source'=>$request->water_source,
//         'toilet_type'=>$request->toilet_type,
//         'septic_tank_last'=>$request->septic_tank_last,
//         'connected_to_sewage_line' => $request->connected_to_sewage_line,
//         'type_of_property' =>  $request->type_of_property,
//         'property_situated'=>$request->property_situated,


//         'state_id'=>$request->state_id,
//         'district_id'=>$request->district_id,
//         'ulb_id'=>$request->ulb_id,
//         'floor_no' => $request->floor_no,
//         'caret_area_of_floor' => $request->caret_area_of_floor,
//         'construction_year' => $request->construction_year,
//         'no_of_rooms' => $request->no_of_rooms,
//         'rooms_area' => $request->rooms_area,
//         'baramda_area' => $request->baramda_area,
//         'balcony_area' => $request->balcony_area,
//         'galiyaara_area' => $request->galiyaara_area,
//         'kitchen_area' => $request->kitchen_area,
//         'bhandar_garh_area'=> $request->bhandar_garh_area,
//         'other_area'=>$request->other_area,
//         'Total_area_of_property' =>  $request->Total_area_of_property,
//         'Total_covered_area_house'=>$request->Total_covered_area_house,
//         'total_carpet_area_of_house'=> $request->total_carpet_area_of_house,
//         'monthly_rate' =>  $request->monthly_rate,
//         'yearly_assessment_value_of_property'=>$request->yearly_assessment_value_of_property,
//         'house_tax'=>$request->house_tax,
//         'water_tax'=>$request->water_tax,
//         'other_tax' => $request->other_tax,
//         'total_tax' =>  $request->total_tax,
//         'image'=>$image,
//         'unique_id'=> $unique_id,
//         'remark'=>$request->remark,
//         'room_carpetarea' =>  $request->room_carpetarea,
//         'baramda_carpet' =>  $request->baramda_carpet,
//         'barcoly_carpet' =>  $request->barcoly_carpet,
//         'galyara_carpet' =>  $request->galyara_carpet,
//         'kitchan_carpet' =>  $request->kitchan_carpet,
//         'bhandar_carpet' =>  $request->bhandar_carpet,
//         'other_carpet' =>  $request->other_carpet,
//         'total_basment_carpet' =>  $request->total_basment_carpet,
//         'yearly_assesment' =>  $request->yearly_assesment,
     
//     ]);
//     return response()->json([
//         'message' => "Survey Form fill successfully."
//     ], 200);

  
  
// }






public function stores(Request $request)
{

if($request->type == 'store')
{
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



  $number = mt_rand(100000000, 999999999);
   $unique_id= $state.$district. $ulb.$number;


$files = [];
if($request->hasfile('image'))
 {
    foreach($request->file('image') as $file)
    {
        $name = time().rand(1,50).'.'.$file->extension();

      //  $image = ''
        $file->move('public/images/survey', $name);  
        $files[] = $name;

     
    }
    }
     $image= implode(",",$files);



    $validator = Validator::make($request->all(),[
            
     //   'date' => 'required ',
        'property_owner_name' => 'required ',
        'father_husband_name' => 'required',
        'mobile_number' => 'required',
        'aadhar_card_no' => 'required',
        'property_no' => 'required',
        'mohhalla' => 'required',
        'ward_no'=> 'required',
        'category'=> 'required',
        'sub_category'=>'required',
        'ownership'=>'required',
        'joint_name',
        'use_of_property',
        'use_mix' =>'required',
        'rental_than_no_of_families',
        'water_source'=> 'required',
        'toilet_type'=>'required',
        'septic_tank_last'=>'required',
        'connected_to_sewage_line',
        'type_of_property'=>'required',
        'property_situated'=> 'required',

        'state_id' => 'required ',
        'district_id'=>'required ',
        'ulb_id'=>'required ',
        'floor_no' => 'required ',
        'caret_area_of_floor' => 'required ',
        'construction_year' => 'required',
        'no_of_rooms' => 'required',
        'rooms_area' => 'required',
        'galiyaara_area'=>'required',
        'kitchen_area'=>'required',
        'bhandar_garh_area' =>'required', 
        'other_area'=>'required',
        'Total_area_of_property'=>'required',
        'Total_covered_area_house'=>'required',
        'total_carpet_area_of_house'=> 'required',
        'monthly_rate'=>'required',
        'yearly_assessment_value_of_property',
        'house_tax'=>'required',
        'water_tax'=>'required',
        'other_tax'=>'required',
        'total_tax'=>'required',

        'baramda_area' => 'required',
        'room_carpetarea'=> 'required',
        'baramda_carpet'=> 'required',
        'barcoly_carpet'=> 'required',
        'galyara_carpet'=> 'required',
        'kitchan_carpet'=> 'required',
        'bhandar_carpet'=> 'required',
        'other_carpet'=> 'required',
        'total_basment_carpet'=> 'required',
        'yearly_assesment'=> 'required',
        'remark'

    ]);

   // dd($request->all());

    if ($validator->fails()) {
        return response()->json([
            'message' => "Something went really wrong!"
        ], 500);
    }


    $user = Survey::create([
        'user_id' => Auth::user()->id,
     //   'date' => $request->date,
        'property_owner_name' => $request->property_owner_name,
        'father_husband_name' => $request->father_husband_name,
        'mobile_number' => $request->mobile_number,
        'aadhar_card_no' => $request->aadhar_card_no,
        'property_no' => $request->property_no,
        'mohhalla' => $request->mohhalla,
        'ward_no' => $request->ward_no,
        'category' => $request->category,
        'sub_category' => $request->sub_category,
        'ownership' => $request->ownership,
        'joint_name' => $request->joint_name,
        'use_of_property' => $request->use_of_property,
        'use_mix' => $request->use_mix,
       // 'carpet_area'=> $request->carpet_area,
        'rental_than_no_of_families' =>  $request->rental_than_no_of_families,
        'water_source'=>$request->water_source,
        'toilet_type'=>$request->toilet_type,
        'septic_tank_last'=>$request->septic_tank_last,
        'connected_to_sewage_line' => $request->connected_to_sewage_line,
        'type_of_property' =>  $request->type_of_property,
        'property_situated'=>$request->property_situated,


        'state_id'=>$request->state_id,
        'district_id'=>$request->district_id,
        'ulb_id'=>$request->ulb_id,
        'floor_no' => $request->floor_no,
        'caret_area_of_floor' => $request->caret_area_of_floor,
        'construction_year' => $request->construction_year,
        'no_of_rooms' => $request->no_of_rooms,
        'rooms_area' => $request->rooms_area,
        'baramda_area' => $request->baramda_area,
        'balcony_area' => $request->balcony_area,
        'galiyaara_area' => $request->galiyaara_area,
        'kitchen_area' => $request->kitchen_area,
        'bhandar_garh_area'=> $request->bhandar_garh_area,
        'other_area'=>$request->other_area,
        'Total_area_of_property' =>  $request->Total_area_of_property,
        'Total_covered_area_house'=>$request->Total_covered_area_house,
        'total_carpet_area_of_house'=> $request->total_carpet_area_of_house,
        'monthly_rate' =>  $request->monthly_rate,
        'yearly_assessment_value_of_property'=>$request->yearly_assessment_value_of_property,
        'house_tax'=>$request->house_tax,
        'water_tax'=>$request->water_tax,
        'other_tax' => $request->other_tax,
        'total_tax' =>  $request->total_tax,

        'room_carpetarea' =>  $request->room_carpetarea,
        'baramda_carpet' =>  $request->baramda_carpet,
        'barcoly_carpet' =>  $request->barcoly_carpet,
        'galyara_carpet' =>  $request->galyara_carpet,
        'kitchan_carpet' =>  $request->kitchan_carpet,
        'bhandar_carpet' =>  $request->bhandar_carpet,
        'other_carpet' =>  $request->other_carpet,
        'total_basment_carpet' =>  $request->total_basment_carpet,
        'yearly_assesment' =>  $request->yearly_assesment,

      
        'image'=>$image,
        'unique_id'=> $unique_id,


        'remark'=>$request->remark,
     
    ]);
    return response()->json([
        'message' => "Survey Form fill successfully."
    ], 200);
}
else

{
    if($request->type == 'edit')

    {
        $survey = Survey::find($request->id);

            $img= [];
            foreach(explode(',', $survey->image) as $image)            
            {
            array_push($img, URL::to('/') .'/images/survey/'.$image);  

           $survey->image = $img;

            }

        if(!$survey){
            return response()->json([
            'message'=>'Survey Form Not Found.'
            ],404);
        }
    
        return response()->json([
            'survey' => $survey
        ],200);
    }

    else
    {


        if($request->type == 'update')
        {

    $user = Survey::find($request->id);

    $files = [];
    if($request->hasfile('image'))
     {
        foreach($request->file('image') as $file)
        {
            $name = time().rand(1,50).'.'.$file->extension();
            $file->move('public/images/survey', $name);  


            $files[] = $name;  
        }
        }

        $image= implode(",",$files);


       // dd($image);

     $validated = $request->validate([
 
       //   'date' => 'required ',
       'property_owner_name' => 'required ',
       'father_husband_name' => 'required',
       'mobile_number' => 'required',
       'aadhar_card_no' => 'required',
       'property_no' => 'required',
       'mohhalla' => 'required',
       'ward_no'=> 'required',
       'category'=> 'required',
       'sub_category'=>'required',
       'ownership'=>'required',
       'joint_name'=>'',
       'use_of_property',
       'use_mix' =>'required',
       'rental_than_no_of_families',
       'water_source'=> 'required',
       'toilet_type'=>'required',
       'septic_tank_last'=>'required',
       'connected_to_sewage_line',
       'type_of_property'=>'required',
       'property_situated'=> 'required',

       'state_id' => 'required ',
       'district_id'=>'required ',
       'ulb_id'=>'required ',
       'floor_no' => 'required ',
       'caret_area_of_floor' => 'required ',
       'construction_year' => 'required',
       'no_of_rooms' => 'required',
       'rooms_area' => 'required',
       'galiyaara_area'=>'required',
       'kitchen_area'=>'required',
       'bhandar_garh_area' =>'required', 
       'other_area'=>'required',
       'Total_area_of_property'=>'required',
       'Total_covered_area_house'=>'required',
       'total_carpet_area_of_house'=> 'required',
       'monthly_rate'=>'required',
       'yearly_assessment_value_of_property',
       'house_tax'=>'required',
       'water_tax'=>'required',
       'other_tax'=>'required',
       'total_tax'=>'required',

       'baramda_area' => 'required',
       'room_carpetarea'=> 'required',
       'baramda_carpet'=> 'required',
       'barcoly_carpet'=> 'required',
       'galyara_carpet'=> 'required',
       'kitchan_carpet'=> 'required',
       'bhandar_carpet'=> 'required',
       'other_carpet'=> 'required',
       'total_basment_carpet'=> 'required',
       'yearly_assesment'=> 'required',
       'remark'=>'',

     ]);

$user->image= $image;


     $user->update($validated);

     return response()->json([
         'message' => "Survey Form updated successfully !!!"
     ], 200);

          
       }

    }

} 
  
}




    public function edit(Request $request)
    {
    
        $survey = Survey::find($request->id);
        if(!$survey){
            return response()->json([
            'message'=>'Survey Form Not Found.'
            ],404);
        }
    
        return response()->json([
            'survey' => $survey
        ],200);
    }
    



    public function update (Request $request)
{
   // dd ($request->id);
    $user = Survey::find($request->id);

   // $user = auth()->user();
    $validated = $request->validate([

       // 'date' => 'required ',
        'property_owner_name' => 'required ',
        'father_husband_name' => 'required',
        'mobile_number' => 'required',
        'aadhar_card_no' => 'required',
        'property_no' => 'required',
        'mohhalla' => 'required',
        'ward_no'=> 'required',
        'category'=> 'required',
        'sub_category'=>'required',
        'ownership'=>'required',
        'joint_name',
        'use_of_property',
        'use_mix' =>'required',
     //   'carpet_area' =>'required',
        'rental_than_no_of_families',
        'water_source'=> 'required',
        'toilet_type'=>'required',
        'septic_tank_last'=>'required',
        'connected_to_sewage_line',
        'type_of_property'=>'required',
        'property_situated'=> 'required',
    ]);

    $user->update($validated);

    return response()->json([
        'message' => "Survey Form updated successfully !!!"
    ], 200);
}




public function state()
{

    $state = state::get();

    return response()->json([
        'state' => $state
    ], 200);

}

public function districts(Request $request)
{

    $state = $request->id;

     $districts = District::where('state_id', $state)->get();

    return response()->json([
        'districts' => $districts
    ], 200);

}

public function ulb(Request $request)
{

    $ulb = $request->id;


     $districts = Town::where('district_id', $ulb)->get();

    return response()->json([
        'districts' => $districts
    ], 200);

}


}