<?php

use Illuminate\Support\Facades\Route;
 dev_basis02
use App\Http\Controllers\PostController;


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
 dev_basis02
Route::get('/', [PostController::class,'index']);

