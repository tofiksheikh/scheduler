<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use App\Models\User;
class AdminController extends Controller
{
    //
    public function index(){
       // echo "iqrar khan";
        return view('Admin/index');
    }
    public function signin(){
        return view('Admin/Auth/auth-login');
    }
    public function signup(){
        return view('Admin/Auth/auth-register');
        
    }
    public function profile()
    {
        $admin_id = \Auth::guard('admin')->user()->id;
        $user = Admin::find($admin_id);
        return view('admin/profile',['user'=>$user]);
    }

    public function saveAbout(Request $request){
            
        $admin_id = \Auth::guard('admin')->user()->id;

   
        $validator = \Validator::make($request->all(), [
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'required|email',
         
             
              
        ]);
         
        if ($validator->fails()) {
           
             return response()->json(['status' => 'failed','message' => $validator->messages()->first(), ]);

        }else{
         
    
        $admin = admin::where('id','=', $admin_id)->first(); 
        $admin->first_name = $request->first_name;
        $admin->last_name = $request->last_name;
        // $admin->email = $request->email;
        $admin->phone = $request->phone;
        $admin->save();
       
       if($admin->save()){
        if (request()->ajax()) {
           return response()->json([
               'status' => 'success',
                'message' => 'About Information update Succesfull',
                'redirect_uri' => '/', 
                'data' => $admin ]);
           }else
           {
            return redirect()->route('admin.profile')->with('success','Added Successfully');
           }
        }else{
            return response()->json([
                'status' => 'failed',
                 'message' => 'Somthing went wrong',
                 'redirect_uri' => '/', 
                 'data' => '' ]);
       }
       
    }
       }
       public function profileUpload(Request $request){
       
        $admin_id = \Auth::guard('admin')->user()->id;
        if($request->profile_image){
            $file = $request->file('profile_image');
            $file->getClientOriginalName();
            $file->getClientOriginalExtension();
            $file->getRealPath();
            $file->getSize();
            $file->getMimeType();
            //Move Uploaded File
            $destinationPath = 'uploads/profiles/';
            $profile_image =  $destinationPath.'cmP'.time().'.'.$file->getClientOriginalExtension();
            $file->move($destinationPath,$profile_image);
                    
                        $tutor = Admin::where('id','=', $admin_id)->first();     
                      
                    $tutor->profile_image = $profile_image;
                    if($tutor->save()){
                        if (request()->ajax()) {
                        return response()->json([
                            'status' => 'success',
                             'message' => 'Profile Image update Succesfull',
                             'redirect_uri' => '/', 
                             'data' => $profile_image ]);
                        }else
                        {
                            return redirect()->route('admin.profile')->with('success','Added Successfully');
                        }
                     }else{
                         return response()->json([
                             'status' => 'failed',
                              'message' => 'Somthing went wrong',
                              'redirect_uri' => '/', 
                              'data' => '' ]);
                    }

}
}

public function userList(){
 $users = User::all();
      
    return view('Admin/user-list',compact('users'));
}

   public function delete($id)
    {
        $education = User::findOrFail($id);
        if($education->delete()){
        return response()->json([
            'status' => 'success',
             'message' => 'User Deleted Succesfull',
             'redirect_uri' => '/', 
             'data' => "" ]);
     }else{
         return response()->json([
             'status' => 'failed',
              'message' => 'Somthing went wrong',
              'redirect_uri' => '/', 
              'data' => '' ]);
    }
    }

    public function editUser($id)
    {
        $user = User::findOrFail($id);
       return view('Admin/user-edit',compact('user'));
    }
}
