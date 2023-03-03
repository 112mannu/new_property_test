<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\RoleStatus;
use Illuminate\Http\Request;

class RolestatusController extends Controller
{
    public function index()
    {
        $role= RoleStatus::latest()->get();

        return view('role.index',['roles'=>$role]);
    }


    public function create()
    {
        $permissions = Premission::get();
        return view('role.new',['permissions'=>$permissions]);
    }


    public function store(Request $request)
    {
        $request->validate(['name'=>'required']);
        
        $role = RoleStatus::create(['name'=>$request->name]);
  

        return redirect()->back()->withSuccess('Role created !!!');
    }



}
