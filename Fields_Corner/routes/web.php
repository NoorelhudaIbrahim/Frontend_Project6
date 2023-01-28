<?php
use App\Http\Controllers\MasterController;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\reservationController;
use App\Http\Controllers\registerController;
use App\Http\Controllers\loginController;



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

Route::get('/',[MasterController::class,'index'])->name('welcome');
Route::get('/category',[categoryController::class,'index'])->name('category');
Route::get('/reservation',[reservationController::class,'index'])->name('reservation');
Route::get('/register',[registerController::class,'index'])->name('register');
Route::get('/login',[loginController::class,'index'])->name('login');



Route::get('/about', function () {
    return view('about');
});
Route::get('contact', function () {
    return view('contact');
});
Route::get('UserProfile',function(){
    return view('userprofile');
});
Route::get('Edit',function(){
    return view('userprofileEdit');
});
