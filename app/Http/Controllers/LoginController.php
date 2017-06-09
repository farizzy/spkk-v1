<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use Auth;

class LoginController extends Controller
{
    public function login(Request $request){

    	if(Auth::attempt([
    		'email' => $request->email,
    		'password' => $request->password
    	]))
    	{
    		$user = User::where('email', $request->email)->first();
    		if($user->is_admin())
    		{
    			return redirect()->route('dashboard');
    		}
    		return redirect()->route('home');
    	}
    	return redirect()->back();
    }
}
