<?php

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
    return view('welcome');
});

use App\Http\Controllers\StudentController;
Route::get('/students', [StudentController::class, 'index'])->name('students');
Route::get('/students/create', [StudentController::class, 'create'])->name('products.create');
Route::get('/students/{student}/edit', [StudentController::class, 'edit'])->name('products.edit');
Route::get('/students/{student}', [StudentController::class, 'show'])->name('products.show');

// lưu khi submit 1 sinh viên mới
Route::post('/students', [StudentController::class, 'store'])->name('products.store');
// lưu sau khi sửa
Route::match(['put', 'patch'], '/students/{student}', [StudentController::class, 'update'])->name('products.update');
// xóa
Route::delete('/students/{student}', [StudentController::class, 'destroy'])->name('products.destroy');
