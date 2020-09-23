<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class UsersManagment extends Controller
{
    public function index(Request $request,$id)
    {
        $userData=User::get()->all();

    if($request->isMethod('post')){
            
        }
        return view('Admin.UserManagment.view_user',compact('userData'));
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   $userData=User::find($id)->first();
    
        return view('Admin.UserManagment.edit',compact('userData'));
    }

        /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {   $userData=User::find($id)->first();
        $userData->name=$request->name;
        $userData->email=$request->email; 
        $userData->save();
        $notification = array(
            'message' => 'User Updated Successfully!', 
            'alert-type' => 'info'
        );
        return back()->with($notification);
        
    }
 
     /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::find($id)->delete();
        $notification = array(
            'message' => 'User Deleted Successfully!', 
            'alert-type' => 'success'
        );
        return back()->with($notification);
    }
}
