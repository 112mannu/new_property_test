<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
           // $response = array('status'=>201,'Message'=>'Failed');
            //return response()->json(['message' => 'Unauthorized'], 403);
            return abort(response()->json([
                'status' => 'error', 
                'message' =>  'Login First'], 403));

            //return route('login');
        }
    }
}
