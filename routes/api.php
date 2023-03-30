<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group([

    'middleware' => 'api',
    'prefix' => 'auth',

], function ($router) {

    Route::post('register', [AuthController::class, 'register'])->name('register');
    Route::post('login', [AuthController::class, 'login'])->name('login');
    Route::post('logout', [AuthController::class, 'logout'])->name('logout');
    Route::post('refresh', [AuthController::class, 'refresh'])->name('refresh');

});


Route::controller(ProductController::class)->group(function () {
    // product crud operations
    Route::post('/product/create', 'create')->name('create.product');
    Route::get('/product/view', 'view')->name('view.product');
    Route::get('/product/edit/{id}', 'edit')->name('edit.product');
    Route::post('/product/update/{id}', 'update')->name('update.product');

    //soft and permanent delete
    Route::get('/product/soft-delete/{id}', 'softDelete')->name('softDelete.product');
    Route::get('/soft-delete-items', 'softDeleteItems')->name('softe.delete.items');
    Route::get('/product/restore/{id}', 'productDataRestore')->name('restore.product');
    Route::get('/product/delete/{id}', 'productDataDelete')->name('delete.product');

    // search option
    Route::get('/product/{name}', 'searchProduct')->name('search.prodcut');

    // pagiantion
    Route::post('/product/paginate', 'paginateProduct')->name('paginate.prodcut');
});

