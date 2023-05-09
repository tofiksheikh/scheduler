<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\AuthController;
use  App\Http\Controllers\Tutor\ProfileController;
use  App\Http\Controllers\Tutor\CertificateController;
use  App\Http\Controllers\Tutor\EducationController;
use  App\Http\Controllers\Tutor\TutorSchedule;
use  App\Http\Controllers\Student\StudentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


 

// group of controller
Route::controller(AuthController::class)->group(function () {
     
    Route::get('/signin', 'signin')->name('signin');
    Route::get('/signup', 'signup')->name('signup');
    Route::get('/logout', 'logout')->name('logout');
    //post method
   
    Route::post('/createAccount', 'createAccount')->name('createAccount');
    Route::post('/verifyAccount', 'verifyAccount')->name('verifyAccount');  

  });

 Route::controller(UserController::class)->group(function () {
  
     Route::group(['middleware' => 'UserAuthenticate'], function ()
        {
              Route::get('/', 'index')->name('/');
              Route::get('/profile', 'getProfile')->name('profile');
              Route::post('/save-phone-number', 'savePhoneNumber')->name('save-phone-number');
              Route::post('/save-profile-information', 'saveProfileInformation')->name('save-profile-information');
              Route::post('/save-branding-information', 'saveBrandingInformation')->name('save-branding-information');
              Route::post('/save-my-link-information', 'saveMyLinkData')->name('save-my-link-information');
              Route::post('/change-password', 'changePassword')->name('change-password');
              route::get('/delete-account','deleteAccount')->name('delete-account');
        });



// Route::group(['prefix'=>'student','as'=>'student.'], function(){   
//      Route::get('/index', 'index')->name('/');
      
//      Route::group(['middleware' => 'StudentAuthenticate'], function ()
//         {
//                 Route::get('/home', 'home')->name('/');
//                 Route::get('/logout', 'studentLogout')->name('logout');
//         });

// });
 });
 
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
   