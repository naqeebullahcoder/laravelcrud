
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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

;

Route::group(['prefix' => '/student'], function(){

    Route::get('/',[App\Http\Controllers\StudentController::class, 'index']);
    Route::get('create',[App\Http\Controllers\StudentController::class, 'create']);
    Route::post('store',[App\Http\Controllers\StudentController::class, 'store'])->name('student.store');
    Route::get('edit/{id}',[App\Http\Controllers\StudentController::class, 'edit']);
    Route::post('update',[App\Http\Controllers\StudentController::class, 'update'])->name('student.update');
    Route::get('delete/{id}',[App\Http\Controllers\StudentController::class, 'destroy']);
    Route::get('show/{id}',[App\Http\Controllers\StudentController::class, 'show']);
});


