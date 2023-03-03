<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Spatie\Permission\Models\Permission;



class PermissionController extends Controller
{

    public function index()
    {
        $permission= Permission::latest()->get();

        return view('setting.permission.index',['permissions'=>$permission]);
    }


    

    public function create()
    {
        return view('setting.permission.new');
    }

   


    public function store(Request $request)
    {
        // validation 
        $request->validate([
            'name'=>'required',
        ]);
        $permission = Permission::create(['name'=>$request->name]);
        return redirect()->back()->withSuccess('Permission created !!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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
    public function edit(Permission $permission)
    {
       return view('setting.permission.edit',['permission' => $permission]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Permission $permission)
    {
        $permission->update(['name'=>$request->name]);
        return redirect()->back()->withSuccess('Permission updated !!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Permission $permission)
    {
        $permission->delete();
        return redirect()->back()->withSuccess('Permission deleted !!!');
    }
}
