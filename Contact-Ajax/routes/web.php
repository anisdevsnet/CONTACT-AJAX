<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('admin/contacts',[ContactController::class,'getIndex']);
Route::get('admin/contacts/data',[ContactController::class,'getData']);
Route::post('admin/contacts/store', [ContactController::class,'postStore']);
Route::post('admin/contacts/update', [ContactController::class,'postUpdate']);
Route::post('admin/contacts/delete', [ContactController::class,'postDelete']);


