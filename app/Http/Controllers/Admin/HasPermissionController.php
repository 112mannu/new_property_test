<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Permission;

class HasPermissionController extends Controller
{
    
    public function index()
    {
        $role= Role::latest()->get();
        return view('permission.index',['roles'=>$role]);
    }


    public function create()
    {
        
        $role= Role::latest()->get();
        return view('permission.new',['roles'=>$role]);
    }
   
    public function store(Request $request)
    { 
        echo "<pre>";  print_r($request->all());

        
        $view[] = array();
        $add[] = array();

        foreach($request->permissions_id as $key=>$val){

            foreach($request->view as $val1 ){
                $view[$key] = $val1;
            }
            dd($view);
            foreach($request->add as $val2 ){
                $add[] = $val2;
            }            
       }

       // $result  = array('permission'=>$request->permissions_id)

       
        $request->validate([
            'role_id'=>'required',
        ]);


        return redirect()->back()->withSuccess('Permission created !!!');
    }

}
