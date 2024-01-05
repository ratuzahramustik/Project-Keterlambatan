<?php

use App\Http\Controllers\RayonController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\RombelController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Models\Student;

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

Route::get('/home', function () {
    return view('home');
});
Route::get('/', function () {
    return view('dashboard');
});

Route::prefix('/Users')->name('user.')->group(function(){
Route::get('/', [UserController::class, 'index'])->name('index');
Route::get('/create', [UserController::class, 'create'])->name('create');
Route::post('/store', [UserController::class, 'store'])->name('store');
Route::delete('/delete/{id}', [UserController::class, 'destroy'])->name('delete');

});

Route::prefix('/Rombels')->name('rombel.')->group(function(){
    Route::get('/', [RombelController::class, 'index'])->name('index');
    Route::get('/create', [RombelController::class, 'create'])->name('create');
    Route::post('/store', [RombelController::class, 'store'])->name('store');
    Route::delete('/{id}', [RombelController::class, 'destroy'])->name('delete');
    Route::get('/{id}', [RombelController::class, 'edit'])->name('edit');
    Route::patch('/{id}', [RombelController::class, 'update'])->name('update');




});

Route::prefix('/Rayons')->name('rayon.')->group(function(){
    Route::get('/', [RayonController::class, 'index'])->name('index');
    Route::get('/create', [RayonController::class, 'create'])->name('create');
    Route::post('/store', [RayonController::class, 'store'])->name('store');
    Route::get('/{id}', [RayonController::class, 'edit'])->name('edit');
    Route::patch('/{id}', [RayonController::class, 'update'])->name('update');
    Route::delete('/{id}', [RayonController::class, 'destroy'])->name('delete');

});

Route::prefix('/Students')->name('student.')->group(function(){
    Route::get('/', [StudentController::class, 'index'])->name('index');
    Route::get('/create', [StudentController::class, 'create'])->name('create');
    Route::post('/store', [StudentController::class, 'store'])->name('store');

});
