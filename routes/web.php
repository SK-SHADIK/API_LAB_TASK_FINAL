<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CrudController;

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

Route::get('/createstudent',[StudentController::class,'createstudent'])->name('createstudent');
Route::post('/createstudent',[StudentController::class,'createSubmit'])->name('createsubmit');
Route::get('/studentlist',[StudentController::class,'studentlist'])->name('studentlist');
Route::get('/studentdetails',[StudentController::class,'studentdetails'])->name('studentdetails');
Route::get('/otp',[StudentController::class, 'mailer']);





Route::get('/crud',[CrudController::class,'Crud'])->name('crud');
Route::get('/createNews',[CrudController::class,'CreateNews'])->name('createNews');
Route::post('/storeNews',[CrudController::class,'StoreNews'])->name('storeNews');
Route::get('/updateNews/{id}',[CrudController::class,'showNews']);
Route::post('/updateNews',[CrudController::class,'UpdateNews'])->name('submit.updateNews');
Route::get('/deleteNews/{id}',[CrudController::class,'DeleteNews']);
Route::get('/crud/{id}', [CrudController::class, 'newsById']);
Route::get('/crud/{type}', [CrudController::class, 'newsByType']);
Route::get('/crud/{date}', [CrudController::class, 'newsByDate']);
