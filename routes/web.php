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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [StudentController::class,'index']);
Route::get('/list', [StudentController::class,'list']);
Route::get('/add', [StudentController::class,'addStudent']);
Route::post('/add', [StudentController::class,'postStudent'])->name('add');

Route::get('/edit/{id}', [StudentController::class,'editStudent'])->name('edit');

Route::delete('/delete/{id}', [StudentController::class,'delete'])->name('delete');
Route::put('/update/{id}', [StudentController::class,'updateStudent'])->name('update');

