<?php

use App\Http\Controllers\PlatController;
use App\Http\Controllers\UserController;
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
   return redirect('home');
});



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


Route::resource('home',PlatController::class);

Route::get('/users',[UserController::class,'index'])->name('users');
Route::get('/add/{id}',[UserController::class,'add'])->name('addAdmin');


// Route::get('/home/create',function(){
//     return redirect('/home/create');
// })->middleware('admin')->name('add');
