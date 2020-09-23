<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Session;
use App\User;
use App\Admin;  


use DB;

use Illuminate\Support\Facades\Hash;
class PasswordResetController extends Controller
{
    public function checkpassword(Request $request)
    {
        $data = $request->all();
    
        $current_password = $data['current_pwd'];
        $check_password = Admin::where(['id'=>$data['id']])->first();
        if(Hash::check($current_password,$check_password->password)){
            echo "true"; die;
        } else {
            echo "false"; die;
        }
    }



    public function updatePassword(Request $request)
    {
        if($request->isMethod('post'))
        {
            $data = $request->all();
            $check_password = Admin::where(['email'=>Auth::guard('admin')->user()->email])->first();
            $current_password = $data['current_pwd'];
            if(Hash::check($current_password,$check_password->password)){
                $password = bcrypt($data['new_pwd']);
                Admin::where('email',Auth::guard('admin')->user()->email)->update(['password'=>$password]);
                $notification = array(
                    'message' => 'Password Updated Successfully!', 
                    'alert-type' => 'success'
                );
                return redirect('/admin/profile/'.Auth::guard('admin')->user()->id)->with($notification,'Password Updated Successfully');
            } else {
                return redirect('/admin/profile/'.Auth::guard('admin')->user()->id);
            }
        }
    }
}
