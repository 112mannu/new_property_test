<?php

namespace App\Http\Controllers\Admin\api;

use App\Models\Wallet;
use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Tax;
// use Illuminate\Support\Facades\Auth;

use Auth;
use DB;

class WalletController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api', ['except' ]);
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

      $user = Tax::where('survay_id', $request->servey_form_id)->get();
      $servay_id = $user[0]->id;

        $survey_id = $request->servey_form_id;
    
     $staff = auth()->user();

    //  dd($staff->id);

    $payment =  DB::table('wallets')
    ->select('*')
    ->where('user_id', $staff->id)
    ->where('balance', '!=', '')
    ->orderBy('id', 'desc')
    ->limit(1)
    ->get();



    $tax =  DB::table('texes')
    ->select('*')
    ->where('survay_id', $survey_id )
    ->orderBy('id', 'desc')
    ->limit(1)
    ->get();

   $house_tax = $tax['0']->house_tax;
   $water_tax =  $tax['0']->water_tax;
   $other_tax= $tax['0']->other_tax;
   $total_tax = $tax['0']->total_tax;


     
   $blance = $payment[0]->balance;
   $paym = $request->payment;
   $tranjection =  time();

//    $servey_form_id = $request->servey_form_id;

 //dd ($house_tax-$paym);


   if($blance >= $paym)
   {

 if( $request->tex_type == "house_tax" )

    {     
       if($house_tax>=$request->payment)         
    {
     $tax = Tax::find($servay_id);
    $tax->house_tax =  $house_tax- $request->payment; 
     }else
     {
        return response()->json([
            'status' => 'error',
            'massage'=> 'Amount not Valid',
        ],200);

     }

    }

    else
    {
        if($request->tex_type == "water_tax")
        {
            if($water_tax>=$request->payment) 

          {
              $tax = Tax::find($servay_id);
            $tax->water_tax =  $water_tax- $request->payment; 
        }else
        {
            return response()->json([
                'status' => 'error',
                'massage'=> 'Amount not Valid',
            ],200);
        }

        }
        else
        {
            if($request->tex_type == "other_tax")
            
       {
        if($other_tax>=$request->payment) 
        {
            $tax = Tax::find($servay_id);
            $tax->other_tax =  $other_tax- $request->payment; 
        }else
        {
            return response()->json([
                'status' => 'error',
                'massage'=> 'Amount not Valid',
            ],200);
        }

        }

        else
        {
            if($request->tex_type == "total_tax")  
            {
                if($total_tax>=$request->payment) 
               { 
                  $tax = Tax::find($servay_id);
                 $tax->total_tax =  $total_tax- $request->payment; 
                }
                else
               {
                return response()->json([
                'status' => 'error',
                'massage'=> 'Amount not Valid',
                ],200);
              }
                 
             }
        }
        }
    }


    $tax->update();

        $pay = Wallet::create([
        'user_id' => $staff->id,
        'debit' => $paym,
        'balance'=>$blance-$paym,
    ]);


    $hello = Transaction::create([

        'transaction_id'=> $tranjection,
        'staff_id' => $staff->id,
        'survey_form_id'=> $survey_id,
        'amount' => $paym,
        'tex_type'=>$request->tex_type,       
    ]);
    
    
    return response()->json([
        'status' => 'success',
        'massage'=> 'Payment Pay successfully',
    ],200);
    
    }

//}
    
    else
    {
        return response()->json([
            'status' => 'error',
            'massage'=> 'Low balance',
        ],200);   
     }
    
   
}

}
