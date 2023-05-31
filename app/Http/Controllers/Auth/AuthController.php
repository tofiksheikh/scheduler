<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Admin;

use Hash;
use Auth;
use Validator;
use Session;
class AuthController extends Controller
{

     public function index(){
   
         return view('auth/landing'); 
    }
    
    public function signup(){
        return view('auth/signup');
        
    }
    public function signin(){
        return view('auth/signin');
        
    }
    // Tutor signup Method start
    public function createAccount(Request $request){
         
       // $userType = $request->user_type;
        
        
       
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|unique:users',
            'full_name' => 'required|string|max:50',
           // 'phone' => 'required|integer|min:10',
            'password' => 'required'
        ]);
         
        if ($validator->fails()) {
           
             return response()->json(['status' => 'failed','message' => $validator->messages()->first(), ]);

        }else{
           $password = Hash::make($request->password);
          // if($userType=='tutor'){
            $user= new User;

        // }else{
        //     $tutor= new Student;

        // }
            $full_name = $request->full_name;
            $name = explode(' ',$full_name);
            //print_r($name);exit;
            $first_name = isset($name[0]) ? $name[0] : '';
            $last_name = isset($name[1]) ? $name[1] : '';

           
           $user->email = $request->email;
           $user->password = $password;
           $user->phone = "";
           $user->first_name = $first_name;
            $user->last_name = $last_name;

           //$user->save();
       
       if($user->save()){
           return response()->json([
               'status' => 'success',
                'message' =>'user Signup Succesfull',
                'redirect_uri' => '/', 
                'data' => '' ]);
        }else{
            return response()->json([
                'status' => 'failed',
                 'message' => 'Somthing went wrong',
                 'redirect_uri' => '/', 
                 'data' => '' ]);
       }
       
    }
       }
   
   
   
       public function verifyAccount(Request $request){
              
            $email = $request->email;
            $password = $request->password;
             $user_type = $request->user_type;
            if($user_type=='admin'){
                $redirect= 'admin/dashboard';
            }else{
                $redirect= '/home';

            }
             
            $validator = Validator::make($request->all(), [
                'email' => 'required|email',
                'password' => 'required'
            ]);
             
            if ($validator->fails()) {
               
                 return response()->json(['status' => 'failed','message' => $validator->messages()->first(), ]);
    
            }else{
       
          // if(Auth::guard($user_type)->attempt(['email' => $request->email, 'password' => $request->password])){

                if(Auth::guard($user_type)->attempt(['email' => $request->email, 'password' => $request->password])){
            Auth::guard($user_type)->user()->role = $user_type;
            \Session::put('role',$user_type);
            return response()->json([
                'status' => 'success',
                'message' => 'Login Succesfull', 
                'redirect_uri' => $redirect, 
                'data' => ''
            ]);

           }else{
            return response()->json([
                    'status' => 'failed',
                    'message' => 'Invalid Credentials',
                    'redirect_uri' => '/', 
                    'data' => '' 
            ]);

           }
        }
           
      }

      public function dashboard()
      {
        return view('tutor/dashboard/index');
      }

      public function logout(){
        Session::flush();
         return redirect('/signin');
    }
    public function studentLogout(){
        Session::flush();
         return redirect('/');
    }
    
}
