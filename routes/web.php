<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployController;

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
Route::get('/',[EmployController::class,'create']);
Route::post('store',[EmployController::class,'store']);
Route::get('list',[EmployController::class,'list']);
Route::get('edit/{id}',[EmployController::class,'edit']);
Route::post('update/{id}',[EmployController::class,'update']);
Route::get('delete/{id}',[EmployController::class,'delete']);

