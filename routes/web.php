<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homecontrol;
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

Route::get('/',[homecontrol::class,'index']);

Route::get('/redirect',[homecontrol::class,'redirect']);

Route::post('/new',[homecontrol::class,'newdata']);

Route::get('/update/{id}',[homecontrol::class,'upd']);

Route::post('/other',[homecontrol::class,'heh']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
