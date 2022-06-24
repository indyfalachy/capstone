<?php

use App\Http\Controllers\Admin\MedicalInitialController;
use App\Http\Controllers\Admin\MedicalRecordController;
use App\Http\Controllers\Admin\PasienController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\SupportController;
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

Route::get('/', function () {
    return redirect(\route('admin.dashboard'));
});
Route::get('/dashboard', function () {
    return redirect(\route('admin.dashboard'));
});
//Route::get('/admin', function () {
//    return view('layouts.admin');
//});
Route::post('/summernote', [SupportController::class, 'upload'])->name('summernote');
Route::middleware(['auth:sanctum',])->name('admin.')->prefix('admin')->group(function () {
    Route::get('dashboard', function () {
        if (auth()->user()->role==0){
            return view('dashboard-resepsionis');
        }else{
            return view('dashboard-dokter');
        }
    })->name('dashboard');

//    Route::get('dashboard-dokter', function () {})->name('dashboard-dokter');
//    Route::get('dashboard-resepsionis', function () {})->name('dashboard-resepsionis');

    Route::get('pasien',[PasienController::class,'index'])->name('pasien.index');
    Route::get('pasien/create',[PasienController::class,'create'])->name('pasien.create');
    Route::get('pasien/edit/{id}',[PasienController::class,'edit'])->name('pasien.edit');

    Route::get('medical-record',[MedicalRecordController::class,'index'])->name('medical-record.index');
    Route::get('medical-record/create',[MedicalRecordController::class,'create'])->name('medical-record.create');
    Route::get('medical-record/edit/{id}',[MedicalRecordController::class,'edit'])->name('medical-record.edit');

    Route::get('medical-initial',[MedicalInitialController::class,'index'])->name('medical-initial.index');
    Route::get('medical-initial/create',[MedicalInitialController::class,'create'])->name('medical-initial.create');
    Route::get('medical-initial/edit/{id}',[MedicalInitialController::class,'edit'])->name('medical-initial.edit');

    Route::get('user',[UserController::class,'index'])->name('user.index');
    Route::get('user/create',[UserController::class,'crreate'])->name('user.create');
    Route::get('user/edit/{id}',[UserController::class,'edit'])->name('user.edit');


});
