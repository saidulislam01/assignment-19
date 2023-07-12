<?php

use App\Http\Controllers\BlogPostController;
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

// Route::get('/', function () {
//     return view('app');
// });





Route::get('/', [BlogPostController::class,'index']);
Route::get('/blog', [BlogPostController::class,'blog']);
Route::get('/blog/{id}', [BlogPostController::class,'show']);



