<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\FacultyController;
use App\Http\Controllers\MaterialsController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [IndexController::class, 'index']);
Route::post('/', [IndexController::class, 'inquiry']);

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'validate_login']);

Route::get('/registration', [LoginController::class, 'register']);
Route::post('/registration', [LoginController::class, 'validate_registration']);

Route::get('/logout', [LoginController::class, 'logout']);

Route::get('/home', [IndexController::class, 'index']);
Route::post('/home', [IndexController::class, 'inquiry']);


Route::get('/about', [AboutController::class, 'index']);

Route::get('/courses', [CoursesController::class, 'index']);

Route::get('/materials', [MaterialsController::class, 'index']);
// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::get('/facultydashboard', [FacultyController::class, 'index']);
Route::middleware('auth:sanctum')->get('/faculty/materials', [FacultyController::class, 'material']);
Route::get('/materialview', [MaterialsController::class, 'materialview']);
Route::get('/faculty/upload', [FacultyController::class, 'upload']);
Route::post('/faculty/upload', [FacultyController::class, 'uploadmaterial']);

Route::get('/contact', [ContactController::class, 'index']);
Route::post('/contact', [ContactController::class, 'store']);



Route::get('/makepdf', [PdfController::class, 'makepdf']);
Route::post('/makepdf', [PdfController::class, 'makepdf']);


Route::post('/generatepdf', [PdfController::class, 'generatePDF']);
Route::get('/generatepdf', [PdfController::class, 'generatePDF']);
