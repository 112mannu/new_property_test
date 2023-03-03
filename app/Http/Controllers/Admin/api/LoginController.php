<?php

namespace App\Http\Controllers\Admin\api;

use App\Models\User;
use App\Traits\UploadImage;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\URL;
use App\Http\Controllers\Controller;
use App\Models\Transaction;
use App\Models\Wallet;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Symfony\Contracts\Service\Attribute\Required;
use Illuminate\Support\Str;
use DB;



class LoginController extends Controller 
{

    use UploadImage;
    
    public function __construct()
    {
        $this->middleware('auth:api', ['except'=> 'login' ]);
    }

// Staff Logining Loginig API  


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


// Profile Update for user API

public function profile_update(Request $request)
{

     $user = auth()->user();

     // User check 

     if ($user == null) {
        return response()->json([

            'message' => "Not authenticated"
        ], 401);
    }

    else {
        try {

            $user = User::find($user->id);
            if (!$user) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'user Not Found.'
                ], 404);
            }

                $user->name = $request->name;
                $user->phone = $request->phone;
                $user-> name= $request->name;
                $user-> last_name= $request->last_name;
                $user-> father_name= $request->father_name;
                $user-> dob= $request->dob;
                $user-> email= $request->email;
                $user-> address= $request->address;


                // image Upload for for file
                if($request->hasFile('profile')){
                    if($name = $this->saveImage($request->profile)){
                        $user->profile = $name;
                    }
                }

                // Email id check use or not

                $list = User::where('email', '=', $user->email)->first();

                if($list  === null)                
             {  
                $user->save();
                return response()->json([
                    'status' => 'success',
                    'message' => "Profile successfully updated."
                ], 200);
            }
            

            else
                {
                    return response()->json([
                        'status' => 'error',
                        'message' => "Email Already exists"
                    ], 403);
                }
            } 

            
            catch (\Exception $e) {

                return response()->json([
                    'status' => 'error',
                    'message' => "Something Filed messing!"
                ], 500);
              
            }

        }

}


// User profile view API

public function profile_view(Request $request) 
{    
        $user = auth()->user();

        $list['profile'] = User::where('id', $user->id)->latest()->get();

        // image patch defined
        foreach($list['profile'] as $list)
       { 

        $path = URL::to('/').'/images/'.$list->profile;
        $list->profile = $path;
       }
 



        return response()->json([
            'status' => 'success',
            'data' => $list
        ], 200);
}

// User Logout API  


public function logout()
{
    Auth::logout();
    return response()->json([
        'status' => 'success',
        'message' => 'Successfully Logout',
    ]);
}




public function Wallet()
{
    $user = auth()->user();


    $list = Wallet::where('user_id', '=', $user->id)->first();

    if($list  == null) 

    {
            return response()->json([
            'status' => 'error',
            'massage'=> 'Please Add Wallet',
            
        ],200);
    }else

{

 $totalbalance =  DB::table('wallets')
        ->select('*')
        ->where('user_id', $user->id)
        ->where('balance', '!=', '')
        ->orderBy('id', 'desc')
        ->limit(1)
        ->get();       

// $totalbalance = $totalbalance['wallets'];
    // $wallets['wallets']= $totalbalance;


// dd($totalbalance['wallets']);
    return response()->json([
        'status' => 'success',
        'massage'=> 'Access successfully',
        'data' => $totalbalance,
    ],200);  
}

}

public function payment(Request $request)

{

 $staff = auth()->user();

$payment =  DB::table('wallets')
->select('*')
->where('user_id', $staff->id)
->where('balance', '!=', '')
->orderBy('id', 'desc')
->limit(1)
->get('balance');

$blance = $payment[0]->balance;
$paym = $request->payment;
$tranjection =  time();
$user = $request->user_id;

// dd($tranjection);


if($blance >= $paym)

{   
    $pay = Wallet::create([
    'user_id' => $staff->id,
    'debit' => $paym,
    'balance'=>$blance-$paym,

]);

$hello = Transaction::create([

    'transaction_id'=> $tranjection,
    'staff_id' => $staff->id,
    'user_id'=> $user,
    'debit' => $paym,
    'type'=>$request->type,
   
]);


return response()->json([
    'status' => 'success',
    'massage'=> 'Payment Pay successfully',
],200);

}



else
{
    return response()->json([
        'status' => 'error',
        'massage'=> 'Low balance',
    ],200);   
 }


}


}