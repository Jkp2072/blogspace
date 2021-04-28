<?php

use App\Http\Controllers\Userauthcontroller;
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
    return view('login');
});

/*Route::get('/register', function () {
    return view('register');
});  using normal view without any controllers

*/

// using controller
Route::get('/login', [UserauthController::class,'login']) ->middleware('Loggedin'); // loogedin middleware to check if it is not loged in  a nd redirects to login
Route::get('/register', [UserauthController::class,'register'])-> middleware('Loggedin') ;
Route::post('/create',[UserauthController::class,'create'])->name('a.create');
Route::post('/check',[UserauthController::class,'check'])->name('a.check');
Route::get('/profile',[UserauthController::class,'profile'])->middleware('isLogged'); // including middleware for hidding our protected pages. hides by not allowing it to open
Route::get('/logout',[UserauthController::class,'logout']);
Route::get('/message', [UserauthController::class,'message'])-> middleware('isLogged');
Route::post('/sendmessage', [UserauthController::class,'sendmessage'])->name('a.sendmessage');
Route::get('/compose', [UserauthController::class,'compose'])-> middleware('isLogged');
Route::post('/composecreate',[UserauthController::class,'composecreate'])->name('a.composecreate');
Route::get('/activity', [UserauthController::class,'activity'])->middleware('isLogged'); 
Route::get('/mail', [UserauthController::class,'mail'])-> middleware('isLogged');
Route::get('/sendmail', [UserauthController::class,'sendmail'])->name('a.sendmail');
Route::get('/inbox', [UserauthController::class,'inbox'])->middleware('isLogged'); 
Route::post('/delete',[UserauthController::class,'delete'])->name('a.delete');
Route::post('/deletemess',[UserauthController::class,'deletemess'])->name('a.deletemess');
Route::get('/sent',[UserauthController::class,'sent'])->middleware('isLogged');
Route::post('/edit',[UserauthController::class,'edit'])->name('a.edit');
Route::post('/editm',[UserauthController::class,'editm'])->name('a.editm');
