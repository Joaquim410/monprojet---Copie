<?php

use App\Http\Controllers\livresController;
use App\Http\Controllers\auteurController;
use App\Http\Controllers\AuthController;
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

route::get('/livres', [livresController::class, 'getall'])->name('livres');



route::post('/register', [AuthController::class, 'add'])->name('addUser');

route::get('/register', [AuthController::class, 'getregister']);

route::get('/login', [AuthController::class, 'getlogin'])->name('login');

route::post('/login', [AuthController::class, 'authenticate'])->name('login');

route::get('/logout', [AuthController::class, 'logout'])->name('logout');




route::delete('/delete/{id}', [livresController::class, 'destroy'])->name('delete');

route::get('livre/{id}', [livresController::class, 'show'])->whereNumber('id');

route::get('auteur/{id}', [auteurController::class, 'show'])->whereNumber('id');

route::get('/update/{id}', [livresController::class, 'showUpdate'])->whereNumber('id')->name('update');






route::middleware(['auth','role:ADMIN'])->group(function () {

    route::post('/livres', [livresController::class, 'add'])->name('add');

    route::post('/update/{id}', [livresController::class, 'update'])->name('updateLivre');

    
});
