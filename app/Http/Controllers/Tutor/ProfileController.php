<?php

namespace App\Http\Controllers\Tutor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tutor;
use App\Models\Student;
use App\Models\Tutor_certificate;
use App\Models\Tutor_education;
use Hash;
use Auth;
use Validator;

class ProfileController extends Controller
{
    //
    public function index(){
        $tutor_id = Auth::guard('tutor')->user()->id;
        $data['tutor'] = Tutor::where('id','=', $tutor_id)->first();
        $data['certificate'] = Tutor_certificate::where('tutor_id','=', $tutor_id)->first();
        $data['education'] = Tutor_education::where('tutor_id','=', $tutor_id)->first();
        
        if($data['tutor']->profile_step==10){
            return redirect()->route('tutor.dashboard');
        }else{
            return view('Tutor/profile-setup/index' ,$data);
        }
        }
        public function saveAbout(Request $request){
        
            $tutor_id = Auth::guard('tutor')->user()->id;
 
            $userType = $request->user_type;
        
        
       
            $validator = Validator::make($request->all(), [
                'first_name' => 'required|string',
                'last_name' => 'required|string',
                'email' => 'required|email',
                'language' => 'required',
                'level' => 'required|string',
                'birth_country' => 'required|string',
                'subject_taught' => 'required|string',
                'teaching_experience' => 'required|string',
                'current_status' => 'required|string',
                 
                  
            ]);
             
            if ($validator->fails()) {
               
                 return response()->json(['status' => 'failed','message' => $validator->messages()->first(), ]);
    
            }else{
             
        
            $tutor = Tutor::where('id','=', $tutor_id)->first(); 
            $tutor->first_name = $request->first_name;
            $tutor->last_name = $request->last_name;
            // $tutor->email = $request->email;
            $tutor->birth_country    = $request->birth_country;
            $tutor->language = $request->language;
            $tutor->level = $request->level;
            $tutor->subject_taught = $request->subject_taught;
            $tutor->teaching_experience = $request->teaching_experience;
            $tutor->current_status = $request->current_status;
            $tutor->phone = $request->phone;
            $tutor->save();
           
           if($tutor->save()){
               return response()->json([
                   'status' => 'success',
                    'message' => 'About Information update Succesfull',
                    'redirect_uri' => '/', 
                    'data' => $tutor ]);
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
           
            $tutor_id = Auth::guard('tutor')->user()->id;
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
                        
                            $tutor = Tutor::where('id','=', $tutor_id)->first();     
                          
                        $tutor->profile_image = $profile_image;
                        if($tutor->save()){
                            return response()->json([
                                'status' => 'success',
                                 'message' => 'Profile Image update Succesfull',
                                 'redirect_uri' => '/', 
                                 'data' => $profile_image ]);
                         }else{
                             return response()->json([
                                 'status' => 'failed',
                                  'message' => 'Somthing went wrong',
                                  'redirect_uri' => '/', 
                                  'data' => '' ]);
                        }
    
    }
}

// profile description 

public function profileDescription(Request $request){
        
    $tutor_id = Auth::guard('tutor')->user()->id;

    $userType = $request->user_type;



    $validator = Validator::make($request->all(), [
        'display_heading' => 'required|string',
        'bio' => 'required',
        'teaching_experience_desc' => 'required',
        'about_motivational_status' => 'required',

          
    ]);
     
    if ($validator->fails()) {
       
         return response()->json(['status' => 'failed','message' => $validator->messages()->first(), ]);

    }else{
     

    $tutor = Tutor::where('id','=', $tutor_id)->first(); 
    $tutor->display_heading = $request->display_heading;
    $tutor->bio = $request->bio;
    $tutor->teaching_experience_desc    = $request->teaching_experience_desc;
    $tutor->about_motivational_status    = $request->about_motivational_status;
  $tutor->save();
   
   if($tutor->save()){
       return response()->json([
           'status' => 'success',
            'message' => 'Profile Description update Succesfull',
            'redirect_uri' => '/', 
            'data' => $tutor ]);
    }else{
        return response()->json([
            'status' => 'failed',
             'message' => 'Somthing went wrong',
             'redirect_uri' => '/', 
             'data' => '' ]);
   }
   
}
   }


//    video update
   
public function videioUpdate(Request $request){
        
    $tutor_id = Auth::guard('tutor')->user()->id;

    $userType = $request->user_type;



    $validator = Validator::make($request->all(), [
        'display_video' => 'required',
          
    ]);
     
    if ($validator->fails()) {
       
         return response()->json(['status' => 'failed','message' => $validator->messages()->first(), ]);

    }else{
     

    $tutor = Tutor::where('id','=', $tutor_id)->first(); 
    $tutor->display_video = $request->display_video;
    $tutor->save();
   
   if($tutor->save()){
       return response()->json([
           'status' => 'success',
            'message' => 'Video  update Succesfull',
            'redirect_uri' => '/', 
            'data' => $tutor ]);
    }else{
        return response()->json([
            'status' => 'failed',
             'message' => 'Somthing went wrong',
             'redirect_uri' => '/', 
             'data' => '' ]);
   }
   
}
   }
       

//    update price per hour
public function updatePricePerHour(Request $request){
        
    $tutor_id = Auth::guard('tutor')->user()->id;

    $userType = $request->user_type;



    $validator = Validator::make($request->all(), [
        'price_in_hour' => 'required|numeric',
          
    ]);
     
    if ($validator->fails()) {
       
         return response()->json(['status' => 'failed','message' => $validator->messages()->first(), ]);

    }else{
     

    $tutor = Tutor::where('id','=', $tutor_id)->first(); 
    $tutor->price_in_hour = $request->price_in_hour;
    $tutor->save();
   
   if($tutor->save()){
       return response()->json([
           'status' => 'success',
            'message' => 'Price update Succesfull',
            'redirect_uri' => '/', 
            'data' => $tutor ]);
    }else{
        return response()->json([
            'status' => 'failed',
             'message' => 'Somthing went wrong',
             'redirect_uri' => '/', 
             'data' => '' ]);
   }
   
}
   }
   
       
//    update price per hour
public function submitProfile(Request $request){
        
    $tutor_id = Auth::guard('tutor')->user()->id;

    $userType = $request->user_type;



    $validator = Validator::make($request->all(), [
        // 'price_in_hour' => 'required|numeric',
          
    ]);
     
    if ($validator->fails()) {
       
         return response()->json(['status' => 'failed','message' => $validator->messages()->first(), ]);

    }else{
     

        $tutor = Tutor::where('id','=', $tutor_id)->first(); 
        $tutor->profile_step = 10;
        $tutor->save();
   
   if($tutor->save()){
    return redirect()->route('tutor.dashboard');
    }else{
        return response()->json([
            'status' => 'failed',
             'message' => 'Somthing went wrong',
             'redirect_uri' => '/', 
             'data' => '' ]);
   }
   
}
   }

       
}
