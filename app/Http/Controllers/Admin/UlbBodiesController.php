<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Ulbbodies;
use App\Models\Ulbtype;
use Illuminate\Http\Request;

class UlbBodiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
  $ulb= Ulbbodies::with('ulbtype')->get();
  $ulbtype = Ulbtype::with('ulbbodies')->get();

        return view('backend.ulbodies.index', compact('ulb', 'ulbtype'));
    }

    
    public function create()
    {

        $ulbtype = Ulbtype::where(['position' => 1]);

        return view('backend.ulbodies.add',  compact('ulbtype'));
    }



    public function store(Request $request)
    {
        $data = $request->all();
        Ulbbodies::create($data);
        return redirect()->back()->withSuccess('UL Bodies Type created !!!');
    }


    public function show($id)
    {
        //
    }

    
    


    public function edit(Ulbbodies $ulb)
    {

//dd("hello");

      return view('backend.ulbodies.edit', ['ulb'=>$ulb]);
    }



    public function update(Request $request, Ulbbodies $ulbbodies)
    {
        $ulbbodies->update($request->all());
        return redirect()->back()->withSuccess('Ulbbodies type updated !!!');
    }

  


    public function destroy(Ulbbodies $ulbbodies )
    {
        $ulbbodies->delete();
        return redirect()->back()->withSuccess('ULB bodies Type deleted !!!');
    }
}
