<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\registerController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\clientController;
use App\Http\Controllers\reportController;
use App\Http\Controllers\profileController;
use App\Http\Controllers\ticketController;



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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/' , [loginController::class , 'index']);

Route::get('register' , [registerController::class , 'index'])->name('client.add');

Route::get('dashboard' , [adminController::class , 'index'])->name('dashboard');

Route::get('client' , [clientController::class , 'index'])->name('client.index');

Route::get('client/edit' , [clientController::class , 'edit'])->name('client.edit');

Route::get('report' , [reportController::class , 'index'])->name('report.index');

Route::get('report/single' , [reportController::class , 'single'])->name('report.single');

Route::get('report/edit' , [reportController::class , 'edit'])->name('report.edit');

Route::get('report/request' , [reportController::class , 'request'])->name('report.request');

Route::get('profile' , [profileController::class , 'index'])->name('profile.index');

Route::get('profile/edit' , [profileController::class , 'edit'])->name('profile.edit');

Route::get('ticket' , [ticketController::class , 'index'])->name('ticket.index');

Route::get('ticket/single' , [ticketController::class , 'single'])->name('ticket.single');

Route::get('ticket/new' , [ticketController::class , 'new'])->name('ticket.new');

route::get('logout' , [loginController::class , 'logout'])->name('logout');






