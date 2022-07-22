<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/crud',[CrudController::class,'Crud'])->name('crud');
Route::get('/createNews',[CrudController::class,'CreateNews'])->name('createNews');
Route::post('/storeNews',[CrudController::class,'StoreNews'])->name('storeNews');
Route::get('/updateNews/{id}',[CrudController::class,'showNews']);
Route::post('/updateNews',[CrudController::class,'UpdateNews'])->name('submit.updateNews');
Route::get('/deleteNews/{id}',[CrudController::class,'DeleteNews']);
Route::get('/crud/{id}', [CrudController::class, 'newsById']);
Route::get('/crud/{type}', [CrudController::class, 'newsByType']);
Route::get('/crud/{date}', [CrudController::class, 'newsByDate']);