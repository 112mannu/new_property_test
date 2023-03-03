<?php

namespace App\Http\Controllers\Admin\api;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\District;
use App\Models\state;
use App\Models\Survey;
use App\Models\Town;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Traits\UploadImage;


class LoginController extends Controller 
{
     use UploadImage;
    
    public function __construct()
    {
        $this->middleware('auth:api', ['except'=> 'login' ]);
    }

public function login(Request $request)
{
    $request->validate([
        'unique_id' => 'required|string',
        'password' => 'required|string',
    ]);
    $credentials = $request->only('unique_id', 'password');

    $token = Auth::guard('api')->attempt($credentials);
    if (!$token) {
        return response()->json([
            'status' => 'error',
            'message' => 'Unauthorized',
        ], 401);
    }

    $user = Auth::guard('api')->user();
    return response()->json([
            'status' => 'success',
            'user' => $user,
            'authorisation' => [
            'token' => $token,
            'type' => 'bearer',
            ]
        ]);

}

public function profile_update(Request $request)
{

     $user = auth()->user();
    $validated = $request->validate([
         'name'=>'required',
        'last_name' => 'required',
        'father_name' => 'required',
        'phone' => 'required',
        'dob' => 'required',
        'email' => 'required',
        'address'=>'required',
    ]);


    // $validated = Validator::make($request->all(), [
    //      'name'=>'required',
    //     'last_name' => 'required',
    //     'father_name' => 'required',
    //     'phone' => 'required',
    //     'dob' => 'required',
    //     'email' => 'required|email|unique:users',
    //     'address'=>'required', 
    // ]);

    //  if ($validated->fails('email'))
    // {
    //     return response()->json([
    //     'status' => 'error',
    //     'message'=>'This Email is already exists'
    //     ],500);
    // } 
 
    // if ($validated->fails())
    
    // {
    //     return response()->json([
    //     'status' => 'error',
    //     'message'=>'Something went really wrong!'
    //     ],500);
    // } 



    if($request->password != null){
        $request->validate([
            'password' => 'required|confirmed'
        ]);
        $validated['password'] = bcrypt($request->password);
    }

    if($request->hasFile('profile')){
        if($name = $this->saveImage($request->profile)){
            $validated['profile'] = $name;
        }
    }


    $user->update ($validated);

    return response()->json([

        'message' => "Profile updated successfully !!!"
    ], 200);
}




public function profile_list(Request $request) 
{    
        $user = auth()->user();

        $list = User::where('id', $user->id)->latest()->get();

        // image patch defined
        foreach($list as $list)
       { 

        $path = URL::to('/').'/images/'.$list->profile;
        $list->profile = $path;
       }

       return response()->json([
            'status'=> "success",
            'data' => $list
        ], 200);
}





public function logout()
{
    Auth::logout();
    return response()->json([
        'status' => 'success',
        'message' => 'Successfully logged out',
    ]);
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