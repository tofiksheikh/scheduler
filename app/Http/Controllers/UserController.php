<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Auth;
use Validator;
use Session;
class UserController extends Controller
{
    


 public function index(){
     $first_name=isset(Auth::guard('user')->user()->first_name) ? Auth::guard('user')->user()->first_name : '';
     $last_name=isset(Auth::guard('user')->user()->last_name) ? Auth::guard('user')->user()->last_name : '';
      // echo $first_name .' '.$last_name.' Login Succesfull';
         return view('user/dashboard'); 
    }


    public function getProfile(){
      $user_id=isset(Auth::guard('user')->user()->id) ? Auth::guard('user')->user()->id : '';
    $user = User::Find($user_id);
    return view('user/profile',compact('user'));

    }


     public function savePhoneNumber(Request $request){
    $user_id=isset(Auth::guard('user')->user()->id) ? Auth::guard('user')->user()->id : '';
    $userData = User::where('id','=', $user_id)->first();
   
    
    $userData->phone = $request->phone_no;

    if($userData->save()){
        return response()->json([
            'status' => 'success',
             'message' => 'User Phone Number update Succesfull',
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




 public function saveProfileInformation(Request $request){
    $user_id=isset(Auth::guard('user')->user()->id) ? Auth::guard('user')->user()->id : '';
    $userData = User::where('id','=', $user_id)->first();
    $full_name = $request->full_name;
    $name = explode(' ',$full_name);
    //print_r($name);exit;
    $first_name = isset($name[0]) ? $name[0] : '';
    $last_name = isset($name[1]) ? $name[1] : '';


    $userData->first_name = $first_name;
    $userData->last_name = $last_name;
    $userData->language = $request->language;
    $userData->date_format = $request->date_format;
    $userData->time_format = $request->time_format;
   
    $userData->country = $request->country;
    $userData->time_zone = $request->time_zone;

    if($request->profile_image){
        $file = $request->file('profile_image');
        $file->getClientOriginalName();
        $file->getClientOriginalExtension();
        $file->getRealPath();
        $file->getSize();
        $file->getMimeType();
        //Move Uploaded File
        $destinationPath = 'uploads/profiles/';
        $profile_image =  $destinationPath.'user'.time().'.'.$file->getClientOriginalExtension();
        $file->move($destinationPath,$profile_image);
        $userData->profile_image = $profile_image;
    }

    if($userData->save()){
        return response()->json([
            'status' => 'success',
             'message' => 'Profile Information update Succesfull',
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


public function saveBrandingInformation(Request $request){
    $user_id=isset(Auth::guard('user')->user()->id) ? Auth::guard('user')->user()->id : '';
    $userData = User::where('id','=', $user_id)->first();
   if($request->logo_image){
        $file = $request->file('logo_image');
        $file->getClientOriginalName();
        $file->getClientOriginalExtension();
        $file->getRealPath();
        $file->getSize();
        $file->getMimeType();
        //Move Uploaded File
        $destinationPath = 'uploads/profiles/';
        $logo_image =  $destinationPath.'user'.time().'.'.$file->getClientOriginalExtension();
        $file->move($destinationPath,$logo_image);
        $userData->logo = $logo_image;
    }

    if($userData->save()){
        return response()->json([
            'status' => 'success',
             'message' => 'Branding Information update Succesfull',
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

public function saveMyLinkData(Request $request){
    $user_id=isset(Auth::guard('user')->user()->id) ? Auth::guard('user')->user()->id : '';
    $userData = User::where('id','=', $user_id)->first();
   
    
    $userData->link = $request->link;

    if($userData->save()){
        return response()->json([
            'status' => 'success',
             'message' => 'My Link update Succesfull',
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


 public function deleteAccount(){
    $user_id=isset(Auth::guard('user')->user()->id) ? Auth::guard('user')->user()->id : '';
    $suserData = User::where('id','=', $user_id)->delete();
  //  $wishList->delete();
    if($suserData){
        return response()->json([
            'status' => 'success',
             'message' => 'User Account Deleted Succesfull',
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


 public function changePassword(Request $request){

    $validator = Validator::make($request->all(), [
        'current_password' => 'required',
         'new_password' => 'required',
    ]);

    if ($validator->fails()) {
           
        return response()->json(['status' => 'failed','message' => $validator->messages()->first(), ]);

   }else{

    $user_id=isset(Auth::guard('user')->user()->id) ? Auth::guard('user')->user()->id : '';
if(Auth::guard('user')->attempt(['id' => $user_id, 'password' => $request->current_password])){
    $studentData = User::where('id','=', $user_id)->first();
    $password = Hash::make($request->new_password);

    $studentData->password = $password;

    if($studentData->save()){
        return response()->json([
            'status' => 'success',
             'message' => 'Change Password Succesfull',
             'redirect_uri' => '/', 
             'data' => "" ]);
     }
   }else{
    return response()->json([
            'status' => 'failed',
            'message' => 'Invalid Current Password',
            'redirect_uri' => '/', 
            'data' => '' 
    ]);

   }
   }
  
 }




}