<?php

use App\Http\Controllers\EmployeeController;
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

Route::get('/',[EmployeeController::class,'index'])->name('employee.index');
// Route::get('/employee/create',[EmployeeController::class,'create'])->name('employee.create');
// Route::post('/employee/store',[EmployeeController::class,'store'])->name('employee.store');
// Route::get('/employee/{employee}',[EmployeeController::class,'show'])->name('employee.show');
// Route::get('/employee/{id}/edit',[EmployeeController::class,'edit'])->name('employee.edit');
// Route::put('/employee/{employee}',[EmployeeController::class,'update'])->name('employee.update');
// Route::delete('/employee/{employee}',[EmployeeController::class,'destroy'])->name('employee.destroy');

// Resource route
Route::resource('employee',EmployeeController::class);