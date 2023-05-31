<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Auth\AuthController;
use  App\Http\Controllers\Tutor\ProfileController;
use  App\Http\Controllers\Tutor\CertificateController;
use  App\Http\Controllers\Tutor\EducationController;
use  App\Http\Controllers\Tutor\TutorSchedule;
use  App\Http\Controllers\Student\StudentController;
use  App\Http\Controllers\Admin\AdminController;

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


 Route::group(['prefix'=>'admin','as'=>'admin.'],function(){
    
    Route::controller(AdminController::class)->group(function () {
                Route::get('signin', 'signin')->name('signin');
                Route::get('signup', 'signup')->name('signup');
    // Route::group(['middleware' => 'AdminAuthenticate'], function ()
    // {
            Route::get('dashboard', 'index')->name('dashboard');
            Route::get('profile','profile')->name('profile');
            Route::get('user-list', 'userList')->name('user-list');
            Route::delete('delete-user/{id}','delete')->name('delete-user'); 
            Route::get('edit-user/{id}','editUser')->name('edit-user');
            
            
      // });
});
Route::group(['middleware' => 'AdminAuthenticate'], function ()
{
            //     subjetc crud
Route::controller(SubjectController::class)->group(function(){

        Route::post('/saveSubject', 'saveSubject')->name('saveSubject');
        Route::get('subject','index')->name('subject');
        Route::get('add-subject','add')->name('add-subject');
        Route::get('edit-subject/{id}','edit')->name('edit-subject');
        Route::delete('delete-subject/{id}','delete')->name('delete-subject');     
});




    });
    });

// group of controller
Route::controller(AuthController::class)->group(function () {
      Route::get('/', 'index')->name('/');
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
              Route::get('/home', 'index')->name('/home');
              Route::get('/profile', 'getProfile')->name('profile');
              Route::post('/save-phone-number', 'savePhoneNumber')->name('save-phone-number');
              Route::post('/save-profile-information', 'saveProfileInformation')->name('save-profile-information');
              Route::post('/save-branding-information', 'saveBrandingInformation')->name('save-branding-information');
              Route::post('/save-my-link-information', 'saveMyLinkData')->name('save-my-link-information');
              Route::post('/change-password', 'changePassword')->name('change-password');
              Route::get('/delete-account','deleteAccount')->name('delete-account');
              Route::post('/set-custom-hours', 'setCustomHours')->name('set-custom-hours');
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
   