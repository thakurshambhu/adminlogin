<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use Validator;
use Image;
use App\Admin;
use App\Photographer;
use LaravelDaily\LaravelCharts\Classes\LaravelChart;

class DashboardController extends Controller
{
     /**
     * Create a new controller instance.
     *
     * @return void
     */

     private $profile;

    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
       
        return view('Admin.dashboard');
    }
    

    public function profileUpdtae(Request $request)
    {    
        $id = $request->id;
       // dd($request->profile_image);
        $user = Admin::find($id);
        if($request->isMethod('POST')) {
           
            $this->validate($request,[
                'name' => 'required',
              
            ]);
         
            $user->name = $request->get('name');
            $user->email = $request->get('email');

            if($request->hasFile('profile_image')){
                
                        $profile_name = time().'.'.$request->profile_image->getClientOriginalExtension();
                        $destinationPath = public_path('/admin-profile-images');
                        $resize_image = Image::make(($request->profile_image)->getRealPath());
                        $resize_image->resize(230,230, function($constraint){
                            $constraint->aspectRatio();
                           })->save($destinationPath . '/' . $profile_name); 
                           $user->profile_pic= $profile_name;
                         }
            $user->save();
            return redirect()->back()->with('flash_message_success','Profile Updated');
        }

       
        return view('Admin.profile',compact('user'));
    }
   
    
    
}
