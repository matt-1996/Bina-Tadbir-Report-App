<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\registerController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\clientController;
use App\Http\Controllers\reportController;
use App\Http\Controllers\profileController;
use App\Http\Controllers\ticketController;
use App\Http\Controllers\notificationController;


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


Route::get('/' , [loginController::class , 'index'])->name('root');

Route::post('login' , [loginController::class , 'login'])->name('login');

Route::group(['middleware' =>['auth', 'isAdmin']], function(){
    Route::get('dashboard' , [adminController::class , 'index'])->name('dashboard');
});

Route::group(['middleware' => ['auth']], function(){

    Route::get('auth/getMyId', [LoginController::class, 'getMyId'])->name('getMyId');

    Route::get('notification/get/reportAdded/{userId}', [notificationController::class, 'getNewReports'])->name('notification.get.reports');

    Route::get('register' , [registerController::class , 'index'])->name('client.add');

    Route::get('client' , [clientController::class , 'index'])->name('client.index');

    Route::get('client/search/{name}' , [clientController::class , 'searchUsers'])->name('client.search');

    Route::get('client/edit' , [clientController::class , 'edit'])->name('client.edit');

    Route::post('client/update' , [clientController::class , 'update'])->name('client.update');

    Route::get('client/profile' , [clientController::class , 'profile'])->name('client.profile');

    Route::get('report' , [reportController::class , 'index'])->name('report.index');

    Route::get('report/add', [reportController::class , 'add'])->name('report.add');

    Route::get('report/view/single/{id}', [reportController::class , 'viewSingle'])->name('report.view.single');

    Route::get('report/getAgentById/{id}', [reportController::class , 'getAgentById'])->name('getAgentById');

    Route::post('report/form/new', [reportController::class , 'new'])->name('report.form.new');

    Route::get('report/single' , [reportController::class , 'single'])->name('report.single');

    Route::get('report/edit' , [reportController::class , 'edit'])->name('report.edit');

    Route::get('report/edit/single/{id}' , [reportController::class , 'editSingle'])->name('report.edit.single');

    Route::post('report/update' , [reportController::class , 'update'])->name('report.update');

    Route::get('report/searchClient/{name}' , [reportController::class , 'searchClient'])->name('report.searchClient');

    Route::get('report/request' , [reportController::class , 'request'])->name('report.request');

    Route::get('report/delete/{id}' , [reportController::class , 'destroy'])->name('report.delete');

    Route::get('profile' , [profileController::class , 'index'])->name('profile.index');

    Route::get('profile/edit' , [profileController::class , 'edit'])->name('profile.edit');

    Route::get('ticket' , [ticketController::class , 'index'])->name('ticket.index');

    Route::get('ticket/single/{id}' , [ticketController::class , 'single'])->name('ticket.single');

    Route::get('ticket/new' , [ticketController::class , 'new'])->name('ticket.new');

    Route::post('ticket/reply/new' , [ticketController::class , 'newReply'])->name('ticket.reply.new');

    Route::post('ticket/add', [ticketController::class , 'add'])->name('ticket.add');

    Route::get('notifications', [notificationController::class,'handleNotification'])->name('notifications');

    route::get('logout' , [loginController::class , 'logout'])->name('logout');
});


route::get('hash/{keyword}', [loginController::class , 'hash'])->name('hash');










