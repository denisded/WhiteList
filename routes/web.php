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

Route::get('/', [\App\Http\Controllers\whitelist::class,'index'])->name('whitelist');
Route::get('/whitelist_add', [\App\Http\Controllers\whitelist::class,'whitelist_add'])->name('whitelist_add');
Route::get('/whitelist_edit', [\App\Http\Controllers\whitelist::class,'whitelist_edit'])->name('whitelist_edit');
