<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\District;
use App\Models\state;
use App\Models\Town;
use Illuminate\Http\Request;


class DistrictController extends Controller
{
    public function index()
    {

        $district= District::with('state')->get();
        $state = state::with('district')->get();


      //  $district= District::all();
        return view('backend.district.index',  compact('district', 'state'));

    }


    public function create()
    {
        return view('backend.district.add');
    }


    public function store(Request $request)
    {

        $request->validate([
            'state_id'=> 'required',
            'name' => 'required| max:50',
            'district_code' => 'required| unique:districts',

        ]);

        $state = District::create([

            'state_id'=> $request->state_id,
            'name' => $request->name,   
            'district_code' => $request->district_code,
        ]);

        return redirect()->back()->withSuccess('District created !!!');

    }


    public function destroy(District $district)
    {
       

        $distri = Town::where('district_id', '=', $district->id)->first();
   
        if($distri == null)

        {
            $district->delete();
            return redirect()->back()->withSuccess('District deleted !!!');
            
        }

        return redirect()->back()->withSuccess('Something went really wrong!');
    }

}
