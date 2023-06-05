<?php

use App\Http\Controllers\Admin\MedicalInitialController;
use App\Http\Controllers\Admin\MedicalRecordController;
use App\Http\Controllers\Admin\PasienController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\SupportController;
use App\Models\PatientQueue;
use Carbon\Carbon;
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
    return view('frontpage.index');
//    return redirect(\route('admin.dashboard'));
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
        if (auth()->user()->role == 1) {
            $data['monthlyVisitor'] = PatientQueue::whereStatus(2)
                ->whereMonth('created_at', Carbon::now()->month)
                ->whereYear('created_at', Carbon::now()->year)
                ->get()->count();

            $now = Carbon::now();
            $weekStartDate = $now->startOfWeek()->format('Y-m-d H:i');
            $weekEndDate = $now->endOfWeek()->format('Y-m-d H:i');

            $data['weeklyVisitor'] = PatientQueue::whereStatus(2)->whereBetween('created_at', [$weekStartDate, $weekEndDate])->get()->count();


            return view('dashboard-resepsionis', compact('data'));
        } else {
            return view('dashboard-dokter');
        }
    })->name('dashboard');

    Route::get('dashboard-dokter', function () {
        return view('dashboard-dokter');
    })->name('dashboard-dokter');
//    Route::get('dashboard-resepsionis', function () {})->name('dashboard-resepsionis');

    Route::get('pasien', [PasienController::class, 'index'])->name('pasien.index');
    Route::get('pasien/create', [PasienController::class, 'create'])->name('pasien.create');
    Route::get('pasien/edit/{id}', [PasienController::class, 'edit'])->name('pasien.edit');

    Route::get('queue',function (){
        return view('pages.queue.create');
    })->name('queue.create');

    Route::get('queue/update/{patient}/{unit_service}/{status}',function ($patient,$unit,$status){
        $p=PatientQueue::wherePatientId($patient)
            ->whereUnitServiceId($unit)
            ->whereDate('created_at',Carbon::today());
        $p->update(['status'=>$status]);
        return redirect(\route('admin.dashboard'));
    })->name('queue.update');


    Route::get('medical-record', [MedicalRecordController::class, 'index'])->name('medical-record.index');
    Route::get('medical-record/{id}/create', [MedicalRecordController::class, 'create'])->name('medical-record.create');
    Route::get('medical-record/edit/{id}', [MedicalRecordController::class, 'edit'])->name('medical-record.edit');
    Route::get('medical-record/{id}/show', [MedicalRecordController::class, 'show'])->name('medical-record.show');
    Route::get('medical-record/{id}/show/odontogram', [MedicalRecordController::class, 'showOdontogram'])->name('medical-record.show-Odontogram');
    Route::get('medical-record/{id}/add/odontogram', [MedicalRecordController::class, 'addOdontogram'])->name('medical-record.add-Odontogram');
    Route::post('medical-record/{id}/store/odontogram', [MedicalRecordController::class, 'storeOdontogram'])->name('medical-record.store-Odontogram');

//    Route::post('odontogram',function (\Illuminate\Http\Request $request){
//
//    })->name('odontogram');


    Route::get('medical-initial', [MedicalInitialController::class, 'index'])->name('medical-initial.index');
    Route::get('medical-initial/create', [MedicalInitialController::class, 'create'])->name('medical-initial.create');
    Route::get('medical-initial/edit/{id}', [MedicalInitialController::class, 'edit'])->name('medical-initial.edit');

    Route::get('user', [UserController::class, 'index'])->name('user.index');
    Route::get('user/create', [UserController::class, 'crreate'])->name('user.create');
    Route::get('user/edit/{id}', [UserController::class, 'edit'])->name('user.edit');

    Route::view('rekam-medik','rm');


});
