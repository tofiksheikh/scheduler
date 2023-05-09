<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tutor;
use App\Models\Wish_list;
use Illuminate\Support\Facades\DB;
use Auth;
class StudentController extends Controller
{
    public function signup(){
        return view('Tutor/Auth/signup');
        
    }
    public function signin(){
        return view('Tutor/Auth/signin');
        
    }

    public function home(){
        $tutors = Tutor::All();
        return view('student/home',compact('tutors'));
    }
 
    public function getWishList(){
        $wishList = Wish_list::All();
        return response()->json([
            'status' => 'success',
             'message' => 'Get Wish list data Succesfull',
             'redirect_uri' => '', 
             'data' => $wishList]);
    }

  public function addWishList(Request $request){
    $wishList = new Wish_list();
    $data = DB::table('wish_lists')
                ->where('user_id', '=', $request->user_id)
                ->where('tutor_id', '=',$request->tutor_id)
                ->get();
                if(!empty($data[0]->user_id) && $data[0]->user_id){
                    DB::table('wish_lists')
                    ->where('id', '=',$data[0]->id)
                    ->delete();
                    return response()->json([
                        'status' => 'remove',
                         'message' => 'Remove For Wish list',
                         'redirect_uri' => '', 
                         'data' => '']);
                }else{
                    $wishList->user_id = $request->user_id;
                    $wishList->tutor_id = $request->tutor_id;
                    $wishList->save();
                    return response()->json([
                        'status' => 'success',
                         'message' => 'Add For Wish list',
                         'redirect_uri' => '', 
                         'data' => '']);
                }

  }


 public function getMyWishList(){
    $student_id=isset(Auth::guard('student')->user()->id) ? Auth::guard('student')->user()->id : '';
   //echo $student_id;
   $tutors = DB::table('tutors')
   ->join('wish_lists', 'tutors.id', '=', 'wish_lists.tutor_id')
   ->select('tutors.*')
   ->where('wish_lists.user_id', '=', $student_id)
   ->get();
 //print_r(count($tutors));exit();
    return view('student/Wish_list',compact('tutors'));
 } 
}
