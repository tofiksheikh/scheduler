<?php

namespace App\Http\Controllers\Tutor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tutor;
use App\Models\Tutor_schedule;
use Hash;
use Auth;
use Validator;

class TutorSchedule extends Controller
{
    
    public function tutorTimeSchedule(Request $request){
        
        $tutor_id = Auth::guard('tutor')->user()->id;
        $validator = Validator::make($request->all(), [
            // 'university' => 'required',
            // 'degree' => 'required',
            // 'degree_type' => 'required',
            // 'specialization' => 'required',
            // 'from_year' => 'required',
            // 'to_year' => 'required',
            
        ]);
         
        if ($validator->fails()) {
           
             return response()->json(['status' => 'failed','message' => $validator->messages()->first(), ]);

        }else{
   
        $count = count($request->day);
        for($i=0; $i<$count; $i++){
        $schedule = new Tutor_schedule; 
        $schedule->tutor_id = $tutor_id;
        $schedule->timezone = $request->timezone;
        $schedule->day = $request->day[$i];
        $schedule->available_from = $request->from[$i];
        $schedule->avaiable_to    = $request->to[$i];
        $schedule->save();
        }
       if($schedule->save()){

        $tutor = Tutor::where('id','=', $tutor_id)->first(); 
        $tutor->profile_step = 8;
        $tutor->save();

           return response()->json([
               'status' => 'success',
                'message' => 'Schedule Create  Succesfull',
                'redirect_uri' => '/', 
                'data' => $schedule ]);
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
