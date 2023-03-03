<?php

namespace App\Http\Controllers\Admin;

use App\Models\Premission;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PremissionController extends Controller
{

    public function index()
    {
        $premission= Premission::latest()->get();

        return view('premission.index',['permissions'=>$premission]);
    }

    public function create()
    {
        return view('premission.new');
    }

    public function store(Request $request)
    {
        // validation 

        $request->validate([
            'name'=>'required',
        ]);


        $premission = Premission::create(['name'=>$request->name]);
        return redirect()->back()->withSuccess('Permission created !!!');
    }



    public function edit(Premission $premission)
    {
       return view('premission.edit',['permission' => $premission]);
    }

    public function update(Request $request, Premission $premission)
    {
        $premission->update(['name'=>$request->name]);
        return redirect()->back()->withSuccess('Permission updated !!!');
    }

    public function destroy(Premission $permission)
    {
        $permission->delete();
        return redirect()->back()->withSuccess('Permission deleted !!!');
    }
    
}
