<?php

use App\Http\Controllers\Admin\UsersController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\SlidersController;
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


Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::post('Login', [\App\Http\Controllers\frontController::class, 'login']);
Route::get('forget-password', [\App\Http\Controllers\frontController::class, 'showForgetPasswordForm'])->name('forget.password.get');
Route::post('forget-password', [\App\Http\Controllers\frontController::class, 'submitForgetPasswordForm'])->name('forget.password.post');
Route::get('reset-password/{token}/{email}', [\App\Http\Controllers\frontController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [\App\Http\Controllers\frontController::class, 'submitResetPasswordForm'])->name('reset.password.post');

Route::group(['middleware' => ['web']], function () {


        Route::get('/Dashboard', [HomeController::class, 'index'])->name('dashboard.index');

        Route::get('Setting', [\App\Http\Controllers\frontController::class, 'Setting'])->name('profile');

    Route::get('Setting', [\App\Http\Controllers\frontController::class, 'Setting'])->name('profile');

    Route::group(['prefix' => 'sliders', 'as' => 'sliders'], function () {
        Route::get('/', [SlidersController::class, 'index'])->name('.index');
        Route::get('/datatable', [SlidersController::class, 'datatable'])->name('.datatable');
        Route::get('/create', [SlidersController::class, 'create'])->name('.create');
        Route::post('/store', [SlidersController::class, 'store'])->name('.store');
        Route::get('/edit/{id}', [SlidersController::class, 'edit'])->name('.edit');
        Route::post('/update/{id}', [SlidersController::class, 'update'])->name('.update');
        Route::get('delete', [SlidersController::class, 'destroy'])->name('.delete');
        Route::post('/change_active', [SlidersController::class, 'changeActive'])->name('.change_active');
        Route::get('/add-button', [SlidersController::class, 'table_buttons'])->name('.table_buttons');
    });

    Route::group(['prefix'=>'users','as'=>'users'],function (){
        Route::get('/', [UsersController::class, 'index'])->name('.index');
        Route::get('/datatable', [UsersController::class, 'datatable'])->name('.datatable');
        Route::post('/store', [UsersController::class, 'store'])->name('.store');
        Route::get('/edit/{id}', [UsersController::class, 'edit'])->name('.edit');
        Route::post('/update/{id}', [UsersController::class, 'update'])->name('.update');
        Route::get('delete', [UsersController::class, 'destroy'])->name('.delete');
        Route::get('/add-button', [UsersController::class, 'table_buttons'])->name('.table_buttons');

    });


});
