<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Validator;
use Illuminate\Foundation\Auth\User as Authenticatable;
class AdminLoginController extends Controller
{
	public function __construct()
	{
		$this->middleware('guest:admin',['except' => ['logout']]);
	}

    public function showLoginForm()
    {
        
    	return view('Admin.login');
    }







    public function login(Request $request)
    {     

    	Validator::make($request->all(), [
    		'email' => 'required|email',
    		'password' => 'required|min:6',
        ])->validate();
 
             if (Auth::guard('admin')->attempt([
                
                'email' => $request->email,
                'password' => $request->password
            ], 
                $request->remember)) {
                   
                return redirect()->intended(route('admin.dashboard'));
            } else {
                return redirect()->route('admin.login')->with('error','Invalid Username or Password');
            }
    }











    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login')->with('success','Logged Out Successfully');
    }
}
