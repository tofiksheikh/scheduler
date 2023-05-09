<?php

namespace App\Http\Controllers\Tutor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tutor;
use App\Models\Tutor_education;
use Hash;
use Auth;
use Validator;

class EducationController extends Controller
{
    
    public function saveEducation(Request $request){
        
        $tutor_id = Auth::guard('tutor')->user()->id;
        $validator = Validator::make($request->all(), [
            'university' => 'required',
            'degree' => 'required',
            'degree_type' => 'required',
            'specialization' => 'required',
            'from_year' => 'required',
            'to_year' => 'required',
            
        ]);
         
        if ($validator->fails()) {
           
             return response()->json(['status' => 'failed','message' => $validator->messages()->first(), ]);

        }else{
         
        if($request->education_id!=''){
        $education = Tutor_education::where('id','=', $request->education_id)->first(); 
        $result = 'update';
        }else{
        $education = new Tutor_education; 
        $result = 'create';
        $education->tutor_id = $tutor_id;
        }
        
       
        $education->university = $request->university;
        $education->degree = $request->degree;
        $education->degree_type    = $request->degree_type;
        $education->specialization = $request->specialization;
        $education->from_year = $request->from_year;
        $education->to_year = $request->to_year;
         $education->higher_education_degree = $request->higher_education_degree;
        $education->save();
       
       if($education->save()){
           return response()->json([
               'status' => 'success',
                'message' => 'Education '.$result.'  Succesfull',
                'redirect_uri' => '/', 
                'data' => $education ]);
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
