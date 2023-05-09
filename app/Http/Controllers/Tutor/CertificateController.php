<?php

namespace App\Http\Controllers\Tutor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tutor;
use App\Models\Tutor_certificate;
use Hash;
use Auth;
use Validator;

class CertificateController extends Controller
{
    
    public function saveCertificate(Request $request){
        
        $tutor_id = Auth::guard('tutor')->user()->id;
        $validator = Validator::make($request->all(), [
            'subject' => 'required',
            'certificate_type' => 'required',
            'description' => 'required',
            'issued_by' => 'required',
            'from_year' => 'required',
            'to_year' => 'required',
            
        ]);
         
        if ($validator->fails()) {
           
             return response()->json(['status' => 'failed','message' => $validator->messages()->first(), ]);

        }else{
         
    if($request->certificate_id!=''){
        $certificate = Tutor_certificate::where('id','=', $request->certificate_id)->first(); 
        $result = 'update';
        }else{
        $certificate = new Tutor_certificate; 
        $result = 'create';
        $certificate->tutor_id = $tutor_id;
        }
        
   
        $certificate->tutor_id = $tutor_id;
        $certificate->subject = $request->subject;
        $certificate->certificate_type = $request->certificate_type;
        $certificate->description    = $request->description;
        $certificate->issued_by = $request->issued_by;
        $certificate->from_year = $request->from_year;
        $certificate->to_year = $request->to_year;
        $certificate->document = '_';
        $certificate->save();
       
       if($certificate->save()){
           return response()->json([
               'status' => 'success',
                'message' => 'Certificate '.$result.'  Succesfull',
                'redirect_uri' => '/', 
                'data' => $certificate ]);
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
