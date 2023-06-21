<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PortofolioController;
use App\Http\Controllers\ProfileController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('Admin', function () {
    return view('admiin');
});

Route::get('profile', function () {
    return view('profile');
});

Route::get('portofolio', function () {
    return view('portofolio');
});

Route::get('/',function(){
    return view('welcome');
})->name('login');
// Route::get('/',function(){
//     return view('welcome');
// })->name('login');

Route::post('auth',[UserController::class,'auth']);
Route::get('logout',[UserController::class,'logout']);
Route::get('daftar',[UserController::class,'daftar']);
Route::post('daftar/create',[UserController::class,'create']);
// Route::get('Admin',function(){
//     return view('admiin');
// })->name('login');
Route::middleware('auth')->group(function () {
Route::get('Admin',[AdminController::class,'show']);
Route::get('Admin/add',[AdminController::class,'add']);
Route::post('Admin/create',[AdminController::class,'create']);
Route::get('Admin/hapus/{id}',[AdminController::class,'hapus']);
Route::get('Admin/edit/{id}',[AdminController::class,'edit']);
Route::post('Admin/update/{id}',[AdminController::class,'update']);
Route::get('Admin/cari',[AdminController::class,'cari']);
Route::get('portofolio',[PortofolioController::class,'show']);


});
Route::get('profile',[ProfileController::class,'show']);
Route::get('profile/add',[ProfileController::class,'add']);
Route::post('profile/create',[ProfileController::class,'create']);
Route::get('profile/hapus/{id}',[ProfileController::class,'hapus']);
Route::get('profile/edit/{id}',[ProfileController::class,'edit']);
Route::post('profile/update/{id}',[ProfileController::class,'update']);
Route::get('profile/cari',[ProfileController::class,'cari']);


Route::get('portofolio',[PortofolioController::class,'show']);
// Route::get('portofolio/add',[PortofolioController::class,'add']);
// Route::post('portofolio/create',[PortofolioController::class,'create']);
// Route::get('portofolio/hapus/{id}',[PortofolioController::class,'hapus']);
// Route::get('portofolio/edit/{id}',[PortofolioController::class,'edit']);
// Route::post('portofolio/update/{id}',[PortofolioController::class,'update']);
// Route::get('portofolio/cari',[PortofolioController::class,'cari']);