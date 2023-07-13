<?php

use App\Http\Controllers\EmployeeController;
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

Route::get('/', [EmployeeController::class, 'index']);
Route::delete('/employee/delete/{id}', [EmployeeController::class, 'delete'])->name('employee.delete');
Route::get('/succeed', function () {
    return view('employee/succeed');
})->name('succeed');

Route::resource('employee', EmployeeController::class);

// Route::controller(EmployeeController::class)->group(function () {
//     Route::prefix('employee')->group(function () {
//     });
// });
