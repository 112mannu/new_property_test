<?php

namespace App\Http\Controllers;

use App\Models\Departiment;
use Illuminate\Http\Request;

class DepartimentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


     public function getLogin()
     {
        
        
         return view('departiment.login');
     }


    public function index()
    {
        $user_dep= Departiment::latest()->get();

        return view('departiment.index',['user_dep'=>$user_dep]);
    }


    public function postLogin(Request $request)
    {

        $request->validate([
            'email'=>'required|email',
            'password'=> 'required'
        ]);

       // dd($request);

        $validated= auth()->attempt([

            'email'=> $request->email,
            'password'=> $request->password,
            
        ]);

        if($validated){
            return redirect()->route('/')->with('success', 'Login Sucessfull');
        }else{
            return redirect()->back()->with('erroe', 'Invalid ');
        }
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('departiment.new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email' => 'required|email|unique:users',
            'password'=>'required|confirmed'
        ]);

        $data= $request->all();
        $data['password']= bcrypt($request->password);  
        $data = Departiment::create($data);
        return redirect()->back()->withSuccess('User created !!!');
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
    public function edit(Departiment $Departiment)
    {
        return view('post.edit',['Departiment' => $Departiment]);
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
    public function destroy($id)
    {
        //
    }
}
