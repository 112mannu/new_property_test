<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use PhpParser\Node\Stmt\Return_;

class UpdateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = auth()->user();
        return view('setting.profile',['user'=>$user]);
    }
   
    public function update(Request $request)
    {
        $user = auth()->User();

        $request->validate([
            'password' => 'required|confirmed',
            
        ]);
        $validated['password'] = bcrypt($request->password);
        $validated ['statces'] = 1;

        $user->update($validated);

        return View('dashboard');
        
      
    }
}
