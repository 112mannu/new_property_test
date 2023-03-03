<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\District;
use App\Models\state;
use App\Models\Town;
use Illuminate\Http\Request;
use DB;

class TownController extends Controller
{
    public function index()
    {

        $state= state::with('town')->get(); 
        $town = Town::with('state')->get();  
        
        
        $district= District::with('town')->get();
        $townes = Town::with('district')->get();


    $ulb= Town::all();
    return view('backend.ulb.index',compact('ulb', 'state','town', 'district', 'townes' )  );
    }


    public function create()
    {

    return view('backend.ulb.add');
    }


    public function store(Request $request)
    {
        $request->validate([
            'state_id'=> 'required',
            'district_id'=> 'required',
            'name' => 'required| max:50',
            'ulb_code' => 'required| unique:towns',

        ]);

        $state = Town::create([

            'state_id'=> $request->state_id,
            'district_id'=> $request->district_id,
            'name' => $request->name,   
            'ulb_code' => $request->ulb_code,
        ]);

        return redirect()->back()->withSuccess('District created !!!');

    }


    public function edit( $id)
    {     
       

        return redirect()->back()->withSuccess('Work Assign deleted !!!');
    }


    public function destroy( Town $ulb)
    {     
        $ulb->delete();

        return redirect()->back()->withSuccess('Work Assign deleted !!!');
    }


    


    
   
    public function getdes(Request $request)
    {
        $id = $request->selectedVal;
        $data = DB::table('districts')->where('state_id',$id)->get();
        $option="";
        foreach ($data as $d) {
            $option.="<option value='".$d->id."'>".$d->name."</option>";
        }
        return $option;
    }

}



