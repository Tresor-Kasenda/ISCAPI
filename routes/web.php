<?php

use App\Http\Controllers\Backend\CommunicateController;
use App\Http\Controllers\Backend\ResultController;
use App\Http\Controllers\Backend\StudentController;
use App\Modules\Exports\ResultExport;
use App\Modules\Exports\StudentExport;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Maatwebsite\Excel\Facades\Excel;

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('student', StudentController::class);
Route::resource('result', ResultController::class);
Route::resource('communiquer', CommunicateController::class);

Route::get('/down', function (){
    return Excel::download(
        new StudentExport, 'student.xlsx'
    );
})->name('student.download');

Route::get('/download', function (){
    return Excel::download(
        new ResultExport, 'result.xlsx'
    );
})->name('result.download');
