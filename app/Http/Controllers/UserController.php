<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Event;
use App\Models\Countrie;
use Hash;
use Auth;
use Validator;
use Session;
class UserController extends Controller
{
    


  public function index(){
 //     $first_name=isset(Auth::guard('user')->user()->first_name) ? Auth::guard('user')->user()->first_name : '';
 //     $last_name=isset(Auth::guard('user')->user()->last_name) ? Auth::guard('user')->user()->last_name : '';
 //      // echo $first_name .' '.$last_name.' Login Succesfull';
          return view('user/my_appointy'); 
    }


    public function getProfile(){
    $user_id=isset(Auth::guard('user')->user()->id) ? Auth::guard('user')->user()->id : '';
    $user = User::Find($user_id);
    $countries = Countrie::All();

    return view('user/profile',compact('user','countries'));

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
$userData->description = $request->description;
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

public function setCustomHours(Request $request){

$mysunObj = [];
$mymonObj = [];
$mytueObj = [];
$mywedObj = [];
$mythuObj = [];
$myfriObj = [];
$mysatObj = [];

$sunT = $request->sun_total;
$monT = $request->mon_total;
$tueT = $request->tue_total;
$wedT = $request->wed_total;
$thuT = $request->thu_total;
$friT = $request->fri_total;
$satT = $request->sat_total;
for ($i=1; $i < $sunT+1; $i++) { 
 array_push($mysunObj, (object)[
         'from_time_sun'.$i => $request->post('to_time_sun'.$i),
    'to_time_sun'.$i => $request->post('from_time_sun'.$i)
]);
}

for ($i=1; $i < $monT+1; $i++) { 
 array_push($mymonObj, (object)[
         'from_time_mon'.$i => $request->post('to_time_mon'.$i),
    'to_time_mon'.$i => $request->post('from_time_mon'.$i)
]);
}

for ($i=1; $i < $tueT+1; $i++) { 
 array_push($mytueObj, (object)[
         'from_time_tue'.$i => $request->post('to_time_tue'.$i),
    'to_time_tue'.$i => $request->post('from_time_tue'.$i)
]);
}

for ($i=1; $i < $wedT+1; $i++) { 
 array_push($mywedObj, (object)[
         'from_time_wed'.$i => $request->post('to_time_wed'.$i),
    'to_time_wed'.$i => $request->post('from_time_wed'.$i)
]);
}

for ($i=1; $i < $thuT+1; $i++) { 
 array_push($mythuObj, (object)[
         'from_time_thu'.$i => $request->post('to_time_thu'.$i),
    'to_time_thu'.$i => $request->post('from_time_thu'.$i)
]);
}

for ($i=1; $i < $friT+1; $i++) { 
 array_push($myfriObj, (object)[
         'from_time_fri'.$i => $request->post('to_time_fri'.$i),
    'to_time_fri'.$i => $request->post('from_time_fri'.$i)
]);
}

for ($i=1; $i < $satT+1; $i++) { 
 array_push($mysatObj, (object)[
         'from_time_sat'.$i => $request->post('to_time_sat'.$i),
    'to_time_sat'.$i => $request->post('from_time_sat'.$i)
]);
}

 // echo json_decode(json_encode($mysunObj),true);  

//print_r(json_decode(json_encode($mysunObj),true));
}

public function addEvent(){
    return view('user/add_event');
}


public function addEventForm(){

$countries = Countrie::All();
    return view('user/add_event_form',compact('countries'));
}

public function saveEventForm(Request $request){
 $event = new Event;
      $user_id=isset(Auth::guard('user')->user()->id) ? Auth::guard('user')->user()->id : '';
if($request->description == ""){
    return response()->json([ 
              'status' => 'failed',
              'message' => 'Plase Enter Event Description',
              'redirect_uri' => '/', 
              'data' => '' ]);
}
if($request->event_name == ""){
    return response()->json([ 
              'status' => 'failed',
              'message' => 'Plase Enter Event Name',
              'redirect_uri' => '/', 
              'data' => '' ]);
}
if($request->event_link == ""){
    return response()->json([ 
              'status' => 'failed',
              'message' => 'Plase Enter Event Link',
              'redirect_uri' => '/', 
              'data' => '' ]);
}
if($request->country == ""){
    return response()->json([ 
              'status' => 'failed',
              'message' => 'Plase select Event Location',
              'redirect_uri' => '/', 
              'data' => '' ]);
}
if($request->color == ""){
    return response()->json([ 
              'status' => 'failed',
              'message' => 'Plase select Event Color',
              'redirect_uri' => '/', 
              'data' => '' ]);
}
    $event->event_name = $request->event_name;
    $event->description = $request->description;
    $event->event_link = $request->event_link;
    $event->country = $request->country;
    $event->color = $request->color;
    $event->event_type = $request->event_type;
    $event->user_id = $user_id;
   
   //$event->country = $request->country;
   


    if($event->save()){
        return response()->json([
            'status' => 'success',
             'message' => 'Event Create Succesfull',
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

}