<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Ulbtype;
use Illuminate\Http\Request;
//use Ulbtype;

class UlbTypController extends Controller
{

    function __construct()
    {
        $this->middleware('role_or_permission:UlbType access|UlbType create|UlbType edit|UlbType delete', ['only' => ['index','show']]);
        $this->middleware('role_or_permission:UlbType create', ['only' => ['create','store']]);
        $this->middleware('role_or_permission:UlbType edit', ['only' => ['edit','update']]);
        $this->middleware('role_or_permission:UlbType delete', ['only' => ['destroy']]);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ulb= Ulbtype::all();

        return view('backend.ulb_type.index',['ulb'=>$ulb]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.ulb_type.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data= $request->all();

       Ulbtype::create($data);

        
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
    public function edit(Ulbtype $ulbtype)
    {
        return view('backend.ulb_type.edit', ['ulbtype'=>$ulbtype]);
    }
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ulbtype $ulbtype)
    {
        $ulbtype->update($request->all());
        return redirect()->back()->withSuccess('ULB type updated !!!');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ulbtype $ulbtype)
    {
       

       $ulbtype->delete();
        return redirect()->back()->withSuccess('UBL Type deleted !!!');
    }
}
