<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\{
   
    ProfileController,
    MailSettingController,
    User_depController,
    FormController,
    MunicipalController,
    StateController,
    UlbBodiesController,
    UlbTypController,
    UlbwardController,
    UpdateController,
    UserController,
    WorkassignController,
    WalletController,
    DistrictController,
    HasPermissionController,
    TownController,
    TownctController,
    StaffController,
    SurveyFormController,
    PremissionController,
    
};
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\DepartimentController;
use App\Http\Controllers\HomeController;

use App\Http\Controllers\SuberizedController;
use App\Http\Controllers\TexassesseController;
use Illuminate\Support\Facades\Artisan;


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


Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    // return what you want
});

Route::get('/optimize', function() {
    $exitCode = Artisan::call('optimize');
    return '<h1>Reoptimized class loader</h1>';
});

Route::get('/route-cache', function() {
    $exitCode = Artisan::call('route:cache');
    return '<h1>Routes cached</h1>';
});


Route::get('/', function () {

  //  dd('hello');
    return view('home');
    
});



// Route::get('/test-mail',function(){

//     $message = "Testing mail";

//     \Mail::raw('Hi, welcome!', function ($message) {
//       $message->to('mannujha433@gmail.com')
//         ->subject('Testing mail');
//     });

//     dd('sent');

// });


Route::get('/dashboard', function () {
    return view('front.dashboard');
    
})->middleware(['front'])->name('dashboard');


require __DIR__.'/front_auth.php';

// Admin routes
Route::get('/admin/dashboard', function () {
    return view('backend.home');
})->middleware(['auth'])->name('admin.dashboard');

require __DIR__.'/auth.php';




Route::namespace('App\Http\Controllers\Admin')->name('admin.')->prefix('admin')
    ->group(function(){
        Route::resource('roles','RoleController');
        Route::resource('permissions','PermissionController');
        Route::resource('users','UserController');
        Route::resource('posts','PostController'); 
        Route::resource('form2','Form2Controller');  
        Route::resource('form','FormController');
        Route::resource('form3','Form3Controller');
        Route::resource('municipal','MunicipalController');
        Route::resource('ulbtype','UlbTypController');
        Route::resource('ulbodies','UlbBodiesController');
        Route::resource('ulbward','UlbwardController');
        Route::resource('work-assign','WorkassignController');
        Route::resource('state','StateController');
        Route::resource('district','DistrictController');
        Route::resource('ulb','TownController');
        Route::resource('staff','StaffController');
        Route::resource('wallet','WalletController');


        

  
      //  Route::resource('survey','SurveyFormController');
        Route::resource('premissions','PremissionController');
        Route::resource('has-permission','HasPermissionController');
        Route::resource('survey-form','SurveyFormController');

        Route::get('/filter',[UserController::class,'serach']);

        Route::get('/fund',[WalletController::class,'blance']);




        Route::get('/profile',[ProfileController::class,'index'])->name('profile');
        Route::put('/profile-update',[ProfileController::class,'update'])->name('profile.update');
        Route::get('/mail',[MailSettingController::class,'index'])->name('mail.index');
        Route::put('/mail-update/{mailsetting}',[MailSettingController::class,'update'])->name('mail.update');

        
        Route::get('/update',[UpdateController::class,'index'])->name('index');
        Route::put('/password-update',[UpdateController::class,'update'])->name('password.update');
        
});

Route::get('excel-downloade', [MunicipalController::class,'Excel'] );
//Route::get('pdf-downloade', [MunicipalController::class,'exportpdf'] );

Route::get('pdf-downloade/{id}', [MunicipalController::class,'exportpdf'] );


 Route::get('suberized/login',[HasPermissionController::class, 'getLogin'])->name('getLogin');
// Route::Post('suberized/login',[wall::class, 'postLogin'])->name('getLogin');
// Route::get('suberized',[SuberizedController::class, 'index'])->name('suberized.index');
// Route::get('suberized/add',[SuberizedController::class, 'create'])->name('suberized.add');
// Route::Post('suberized/register',[SuberizedController::class, 'store'])->name('suberized.register');

// Route::get('suberized/login',[SuberizedController::class, 'getLogin'])->name('getLogin');
// Route::Post('suberized/login',[SuberizedController::class, 'postLogin'])->name('getLogin');

Route::any('getcity',[UlbwardController::class,'getcity']);

Route::any('getward',[UserController::class,'getward']);

Route::any('getdistrict',[TownController::class,'getdes']);

Route::get('about-us',[HomeController::class,'about']);

Route::get('contact-us',[HomeController::class,'contact']);

Route::get('services',[HomeController::class,'Services']);

Route::get('search',[MunicipalController::class,'search']);

Route::get('filter',[MunicipalController::class,'filter']);

Route::get('test',[HomeController::class,'test']);





// Route::get('/download-pdf', [MunicipalController::class, 'downloadPDF'])->name('download.pdf');


