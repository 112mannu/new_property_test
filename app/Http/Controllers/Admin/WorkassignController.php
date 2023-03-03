<?php

namespace App\Http\Controllers\Admin;

use App\Models\Ulbtype;
use App\Models\Ulbward;
use App\Models\Ulbbodies;
use App\Models\Workassign;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class WorkassignController extends Controller
{
    public function index()
    {

        $user= User::with('workbod')->get();
        $users= Workassign::with('user')->get();

        $work= Ulbtype::with('worktyp')->get();
        $ulbtype = Workassign::with('ulbtype')->get();   
         
        $ulbboder= Ulbbodies::with('workbod')->get();
        $ulbward = Workassign::with('ulbboder')->get();


        $workassign= Workassign::all();


        return view('work_assign.index', compact('workassign', 'work','ulbtype','ulbboder', 'ulbward', 'user', 'users') );
        
    }

    public function create()
    {
        return view('work_assign.new');
    }


    public function store(Request $request)
    {
        
        $ward_no =  $request->ward_no;

      //  dd($ward_no);

      
        $request->validate([
            'user_id' => 'required',
            'upbtype_id' => 'required',
            'city_id' => 'required',
            'ward_no'=> 'required',
            
        ]);



        $user = Workassign::create([
            'user_id' => $request->user_id,
            'upbtype_id' => $request->upbtype_id,
            'city_id' => $request->city_id,
            'ward_no' => json_encode($ward_no) ,

        ]);
       
        return redirect()->back()->withSuccess('Work Assine created !!!');
    }


    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
    }


  
    public function update(Request $request, $id)
    {
        //
    }

 
    public function destroy(Request $request, Workassign $workassign)
    {     
        $workassign->delete();

        return redirect()->back()->withSuccess('Work Assign deleted !!!');
    }

}
