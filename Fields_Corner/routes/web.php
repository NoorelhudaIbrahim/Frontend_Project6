<?php
use App\Http\Controllers\MasterController;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\reservationController;
use App\Http\Controllers\registerController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\searchController;




use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[MasterController::class,'index'])->name('puplicUser.welcome');
Route::get('/fields',[categoryController::class,'index'])->name('puplicUser.fields');
Route::get('/reservation',[reservationController::class,'index'])->name('puplicUser.reservation');
Route::get('/register',[registerController::class,'index'])->name('puplicUser.register');
Route::get('/login',[loginController::class,'index'])->name('puplicUser.login');



Route::get('/about', function () {
    return view('puplicUser.about');
});
Route::get('contact', function () {
    return view('puplicUser.contact');
});
Route::get('UserProfile',function(){
    return view('puplicUser.userprofile');
});
Route::get('Edit',function(){
    return view('puplicUser.userprofileEdit');
});
