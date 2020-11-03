<?php

use App\Exports\StudentExport;
use App\Http\Controllers\Backend\CommunicateController;
use App\Http\Controllers\Backend\ResultController;
use App\Http\Controllers\Backend\StudentController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Maatwebsite\Excel\Facades\Excel;

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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('student', StudentController::class);
Route::resource('result', ResultController::class);
Route::resource('communiquer', CommunicateController::class);

Route::get('/download', function (){
    return Excel::download(
        new StudentExport, 'student.xlsx'
    );
})->name('student.download');
