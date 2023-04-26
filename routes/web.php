<?php

use App\Http\Controllers\Admin\UsersController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\SlidersController;
use \App\Http\Controllers\Admin\PagesController;
use \App\Http\Controllers\Admin\AgencyController;
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


//});
    Route::group(['prefix' => 'pages', 'as' => 'pages'], function () {
        Route::get('/', [PagesController::class, 'index'])->name('.index');
        Route::get('/datatable', [PagesController::class, 'datatable'])->name('.datatable');
        Route::get('/create', [PagesController::class, 'create'])->name('.create');
        Route::post('/store', [PagesController::class, 'store'])->name('.store');
        Route::get('/edit/{id}', [PagesController::class, 'edit'])->name('.edit');
        Route::post('/update/{id}', [PagesController::class, 'update'])->name('.update');
        Route::get('delete', [PagesController::class, 'destroy'])->name('.delete');
        Route::post('/change_active', [PagesController::class, 'changeActive'])->name('.change_active');
        Route::get('/add-button', [PagesController::class, 'table_buttons'])->name('.table_buttons');
    });
    Route::group(['prefix' => 'contact_us', 'as' => 'contact_us'], function () {
        Route::get('/', [SlidersController::class, 'index'])->name('.index');
        Route::get('delete', [SlidersController::class, 'destroy'])->name('.delete');
    });

    Route::group(['prefix' => 'categories', 'as' => 'categories'], function () {
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

    Route::group(['prefix' => 'products', 'as' => 'products'], function () {
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
    Route::group(['prefix' => 'orders', 'as' => 'orders'], function () {
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
    Route::group(['prefix' => 'agencies', 'as' => 'agencies'], function () {
        Route::get('/', [AgencyController::class, 'index'])->name('.index');
        Route::get('/datatable', [AgencyController::class, 'datatable'])->name('.datatable');
        Route::get('/create', [AgencyController::class, 'create'])->name('.create');
        Route::post('/store', [AgencyController::class, 'store'])->name('.store');
        Route::get('/edit/{id}', [AgencyController::class, 'edit'])->name('.edit');
        Route::post('/update/{id}', [AgencyController::class, 'update'])->name('.update');
        Route::get('delete', [AgencyController::class, 'destroy'])->name('.delete');
        Route::post('/change_active', [AgencyController::class, 'changeActive'])->name('.change_active');
        Route::get('/add-button', [AgencyController::class, 'table_buttons'])->name('.table_buttons');
    });

    Route::group(['prefix' => 'whyus', 'as' => 'whyus'], function () {
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
    Route::group(['prefix' => 'coupons', 'as' => 'coupons'], function () {
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
    Route::group(['prefix' => 'settings', 'as' => 'settings'], function () {
        Route::get('/', [SlidersController::class, 'index'])->name('.index');
        Route::post('/update/{id}', [SlidersController::class, 'update'])->name('.update');
    });
});
