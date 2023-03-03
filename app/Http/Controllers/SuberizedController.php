<?php

namespace App\Http\Controllers;

use App\Models\suberized;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class SuberizedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getLogin()
    {
        return view('superbizer.login');
    }


    public function Index()
    {

        $user_dep= suberized::latest()->get();

        return view('superbizer.index',['user_dep'=>$user_dep]);

       
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
    public function create(Request $request)
    {

        return view('superbizer.new');
       
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
        $data = suberized::create($data);
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
    public function edit($id)
    {
        
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
        
    }
}
