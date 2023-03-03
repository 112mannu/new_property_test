<?php

namespace App\Http\Controllers\Admin;

use App\Models\State;
use App\Models\District;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class StateController extends Controller
{

    public function index()
    {
        $state= State::all();
        return view('backend.state.index', ['state'=> $state]);
        
    }


    public function create()
    {
        return view('backend.state.add');
    }

    public function store(Request $request)
    {

        $request->validate([

            'name' => 'required|max:50',
            'sates_code' => 'required| unique:states',
          
        ]);

        $state = State::create([
            'name' => $request->name,
            'sates_code' => $request->sates_code,
        ]);
    
        return redirect()->back()->withSuccess('State created !!!');

    }
    public function edit($id)
    {
        $state= State::find($id);
       
        return view('backend.state.edit',compact('state'));
    }


    public function update(Request $request, State $state)
    {
    
        $state->update($request->all());
        return redirect()->back()->withSuccess('State updated !!!');
    }


    public function destroy(State $state)
    {

        
   $stat = District::where('state_id', '=', $state->id)->first();


   if($stat == null)
    {       
     $state->delete();
     return redirect()->back()->withSuccess('state deleted !!!');         
    }
    
    return redirect()->back()->withSuccess('Something went really wrong!');
    }

    
}
