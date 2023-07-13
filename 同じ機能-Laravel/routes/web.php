<?php

use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\CalculatorController;
use Illuminate\Support\Facades\Route;

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
Route::resource('employee', EmployeeController::class);

Route::get('/', [EmployeeController::class, 'index']);
Route::get('/employee/delete/{id}', [EmployeeController::class, 'delete'])->name('employee.delete');
Route::get('/succeed', function () {
    return view('employee/succeed');
})->name('succeed');

Route::get('/calculator', [CalculatorController::class, 'index']);
Route::post('/calculator', [CalculatorController::class, 'calc'])->name('calc');

// Route::controller(EmployeeController::class)->group(function () {
//     Route::prefix('employee')->group(function () {
//     });
// });
