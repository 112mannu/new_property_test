<?php

use App\Http\Controllers\Admin\api\LoginController;
use App\Http\Controllers\Admin\api\SurveyFormBController;
use App\Http\Controllers\Admin\api\SurveyFormController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



Route::controller(SurveyFormController::class)->group(function () {
    Route::get('survey','index');
    Route::post('survey-post', 'stores');
    Route::post('survey-post-edit', 'edit');   
    Route::post('survey-post-update', 'update');
    Route::post('survey-post-delete', 'delete');
    Route::get('state', 'state');
    Route::post('district', 'districts');   
    Route::post('ulb', 'ulb');   
    Route::post('search', 'serach');  

  
 });

 Route::controller(SurveyFormBController::class)->group(function () {
    Route::get('survey-form','index');
    Route::post('survey-form-post', 'store');
    Route::post('survey-form-edit', 'edit');
    Route::post('survey-form-update', 'update');
    Route::get('ward', 'ward_no');
  
 });



 Route::controller(LoginController::class)->group(function () {
    Route::post('login', 'login');
    Route::post('profile-update', 'profile_update');
    Route::get('profile-view', 'profile_view');
    Route::post('logout', 'logout');
    Route::get('wallet', 'Wallet');  
    Route::post ('payment','payment');

 
 });

