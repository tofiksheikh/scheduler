<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tutor;
use Hash;
use Auth;
use Validator;
use Session;
class HomeController extends Controller
{
    //
    public function index(){
        return view('Home/index');
    }
    public function home(){
        return view('Home/Home');
    }
    public function dashboard(){
        return view('Tutor/Profile');
    }
    
 
}
