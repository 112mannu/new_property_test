<?php

namespace App\Http\Controllers\Admin;

use DB;

use App\Models\Ulbward;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Ulbbodies;
use App\Models\Ulbtype;


class UlbwardController extends Controller
{
 
    public function index()
    {
        $ulb= Ulbtype::with('ulbward')->get();
        $ulbtype = Ulbward::with('ulbtype')->get();      
        
        

        
        $ulbboder= Ulbbodies::with('ulbward')->get();
        $ulbward = Ulbward::with('ulbboder')->get();

        // echo  $ulbboder;
        // die();

     //   dd($ulbward);

        $ulb= Ulbward::all();
        return view('backend.ulb_ward.index',compact('ulb', 'ulbtype', 'ulbboder', 'ulbward' ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.ulb_ward.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

// dd($request);
       
        $data= $request->all();
        Ulbward::create($data);         
         return redirect()->back()->withSuccess('Ulb Type created !!!');
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ulbward $ulbward)
    {
        $ulbward->delete();
        return redirect()->back()->withSuccess('UBL Type deleted !!!');
    }


    
    public function getcity(Request $request)
    {
        $id = $request->selectedVal;
        $data = DB::table('ulbbodies')->where('upbtype_id',$id)->get();
        $option="";
        foreach ($data as $d) {
            $option.="<option value='".$d->id."'>".$d->city."</option>";
        }
        return $option;
    }
}
