
<?php

use Illuminate\Support\Facades\Route;
// CustomAuthenticationSystem
use App\Http\Controllers\CustomAuthenticationController;
use App\Models\customauthenticationsystem;
// crud operation-student
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

Route::view('/', 'index')->name('index');
Route::get('/CustomAuthenticationSystem/login', [CustomAuthenticationController::class, 'login'])->name('login');
Route::get('/CustomAuthenticationSystem/register', [CustomAuthenticationController::class, 'register'])->name('register');
Route::post('/CustomAuthenticationSystem/register-user', [CustomAuthenticationController::class, 'registeruser'])->name('registeruser');
Route::post('/CustomAuthenticationSystem/login-user', [CustomAuthenticationController::class, 'loginuser'])->name('loginuser');
Route::get('/afterloginpage', [CustomAuthenticationController::class, 'afterloginpage'])->name('afterloginpage');
Route::get('/logout', [CustomAuthenticationController::class, 'logout']);
Route::get('/CustomAuthenticationSystem/edit/{id}', [CustomAuthenticationController::class, 'edituser'])->name('edituser');
Route::put('/CustomAuthenticationSystem/update/{id}', [CustomAuthenticationController::class, 'updateuser'])->name('updateuser');

// crud operation-student

Route::get('/Student-crud/addstudent', [StudentController::class, 'add'])->name('add');
Route::post('/Student-crud/add-student', [StudentController::class, 'addstudent'])->name('addstudent');
Route::get('/Student-crud/display', [StudentController::class, 'display'])->name('display');
Route::get('/Student-crud/delete/{id}', [StudentController::class, 'delete'])->name('delete');
