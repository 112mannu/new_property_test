<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Wallet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;

class WalletController extends Controller
{
    public function index()
    {
        $blance=   DB::table('wallets')
        ->select('*')
        ->join('users','wallets.user_id','=','users.id')
       //  ->groupBy('users.id', 'wallets.user_id')
         ->orderBy('wallets.id', 'desc')
        ->get();
    
     //   $blance = Wallet::all();
        return view('backend.wallet.index', compact('blance'));
    }

    public function create()
    {

        return view('backend.wallet.add');
    }


    public function store(Request $request)
    {
        $request->validate([

            'user_id' => 'required',
            'credit' => 'required'

        ]);

        $user = Wallet::create([
            'admin_id' =>   Auth::user()->id,
            'user_id' => $request->user_id,
            'credit' => $request->credit,
        ]);
        
        return redirect()->back()->withSuccess('Request Balance Successfully !!!');
    }

    public function edit(Wallet $Wallet)
    {
        return view('backend.wallet.edit', ['Wallet' => $Wallet]);
    }


    public function update(Request $request)
    {

        // dd ($request->user_id);


        $data = Wallet::where('user_id', $request->user_id)->first('id');

      //  dd($data);

        $user_id =  $data->id;


     if($request->status == 1 )

     {

      
        $totalcred =  DB::table('wallets')
            ->select('*')
            ->where('user_id', $user_id)
            ->where('credit', '!=', '')
            ->orderBy('id', 'desc')
            ->limit(1)
            ->get('credit');

            // dd($totalcred->credit);

         $cred= $totalcred[0]->credit;

        $totalbalance=  DB::table('wallets')
        ->select('*')
        ->where('user_id', $user_id)
        ->where('balance', '!=', '')
        ->orderBy('id', 'desc')
        ->limit(1)
        ->get();

        $blance = $totalbalance[0]->balance;
        $total = $cred + $blance ;

        $user = Wallet::find($request->user_id);

        $user->status = $request->status;
        $user->admin_status = $request->status;
        $user->remark = $request->remark;
        $user->balance = $total;
        $user->update();
        return back()->with('status', 'successfully updated');
   }

   else
   {

    dd('ookjjj');

    if($request->status == 0 )

    {

        $totalbalance=  DB::table('wallets')
        ->select('*')
        ->where('user_id', $user_id)
        ->where('balance', '!=', '')
        ->orderBy('id', 'desc')
        ->limit(1)
        ->get();

        $blance = $totalbalance[0]->balance;


        $user = Wallet::find($request->user_id);
        $user->status = $request->status;
        $user->admin_status = $request->status;
        $user->remark = $request->remark;
        $user->balance = $blance;
        $user->update();
        return back()->with('status', 'successfully updated');

    }

   }
        // return redirect()->back()->withSuccess('User updated !!!');
    
    }


    public function blance(Request $request)
    {

        $user = auth()->user();

        // dd  ($user->id);

        $user = User::with('wellate')->get();
        $wallet = Wallet::with('user')->get();

        $userss = User::with('adminName')->get();
        $admin = Wallet::with('admin')->get();


        $blance = Wallet::latest()->get();
        return view('backend.wallet.Emaply_fund', compact('blance', 'wallet', 'user', 'admin', 'userss'));
    }
}
