<?php

use App\Http\Controllers\Generator\CategoryController;
use App\Http\Controllers\Generator\TodoController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Generator\AgamaController;
use App\Http\Controllers\Generator\KategoriController;
use App\Http\Controllers\Generator\SabukController;
use App\Http\Controllers\Generator\UnlatController;
use App\Http\Controllers\GroupConttroller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;


/**
 * @author Dodi Priyanto<dodi.priyanto76@gmail.com>
 */

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
Route::get('/', [HomeController::class, 'index'])->name('home');

Auth::routes();

Route::group(['prefix' => 'administrator', 'middleware' => ['auth', 'roles']], function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/delete_file', [DashboardController::class, 'deleteFileContent'])->name('file_delete');

    Route::group(['prefix' => 'kategoris'], function () {
        Route::get('/', [KategoriController::class, 'index'])->name('dashboard_kategoris');
        Route::get('/get', [KategoriController::class, 'get'])->name('dashboard_kategoris_detail');
        Route::get('/delete', [KategoriController::class, 'destroy'])->name('dashboard_kategoris_delete');
        Route::post('/', [KategoriController::class, 'store'])->name('dashboard_kategoris_post');
        Route::get('/datatable.json', [KategoriController::class, '__datatable'])->name('dashboard_kategoris_table');
    });

    Route::group(['prefix' => 'agamas'], function () {
        Route::get('/', [AgamaController::class, 'index'])->name('dashboard_agamas');
        Route::get('/get', [AgamaController::class, 'get'])->name('dashboard_agamas_detail');
        Route::get('/delete', [AgamaController::class, 'destroy'])->name('dashboard_agamas_delete');
        Route::post('/', [AgamaController::class, 'store'])->name('dashboard_agamas_post');
        Route::get('/datatable.json', [AgamaController::class, '__datatable'])->name('dashboard_agamas_table');
    });

    Route::group(['prefix' => 'sabuks'], function () {
        Route::get('/', [SabukController::class, 'index'])->name('dashboard_sabuks');
        Route::get('/get', [SabukController::class, 'get'])->name('dashboard_sabuks_detail');
        Route::get('/delete', [SabukController::class, 'destroy'])->name('dashboard_sabuks_delete');
        Route::post('/', [SabukController::class, 'store'])->name('dashboard_sabuks_post');
        Route::get('/datatable.json', [SabukController::class, '__datatable'])->name('dashboard_sabuks_table');
    });

    Route::group(['prefix' => 'unlats'], function () {
        Route::get('/', [UnlatController::class, 'index'])->name('dashboard_unlats');
        Route::get('/get', [UnlatController::class, 'get'])->name('dashboard_unlats_detail');
        Route::get('/delete', [UnlatController::class, 'destroy'])->name('dashboard_unlats_delete');
        Route::post('/', [UnlatController::class, 'store'])->name('dashboard_unlats_post');
        Route::get('/datatable.json', [UnlatController::class, '__datatable'])->name('dashboard_unlats_table');
    });

    Route::group(['prefix' => 'categories'], function () {
        Route::get('/', [CategoryController::class, 'index'])->name('dashboard_categories');
        Route::get('/get', [CategoryController::class, 'get'])->name('dashboard_categories_detail');
        Route::get('/delete', [CategoryController::class, 'destroy'])->name('dashboard_categories_delete');
        Route::post('/', [CategoryController::class, 'store'])->name('dashboard_categories_post');
        Route::get('/datatable.json', [CategoryController::class, '__datatable'])->name('dashboard_categories_table');
    });

    Route::group(['prefix' => 'todos'], function () {
        Route::get('/', [TodoController::class, 'index'])->name('dashboard_todos');
        Route::get('/get', [TodoController::class, 'get'])->name('dashboard_todos_detail');
        Route::get('/delete', [TodoController::class, 'destroy'])->name('dashboard_todos_delete');
        Route::post('/', [TodoController::class, 'store'])->name('dashboard_todos_post');
        Route::get('/datatable.json', [TodoController::class, '__datatable'])->name('dashboard_todos_table');
    });
    Route::group(['prefix' => 'profile'], function () {
        Route::get('/', [ProfileController::class, 'index'])->name('dashboard_profile');
        Route::post('/', [ProfileController::class, 'store'])->name('dashboard_profile_post');
    });

    Route::group(['prefix' => 'menu'], function () {
        Route::get('/', [MenuController::class, 'index'])->name('dashboard_menu');
        Route::get('/get', [MenuController::class, 'get'])->name('dashboard_menu_detail');
        Route::get('/delete', [MenuController::class, 'destroy'])->name('dashboard_menu_delete');
        Route::post('/', [MenuController::class, 'store'])->name('dashboard_menu_post');
        Route::get('/datatable.json', [MenuController::class, '__datatable'])->name('dashboard_menu_table');
    });

    Route::group(['prefix' => 'user'], function () {
        Route::get('/', [UserController::class, 'index'])->name('dashboard_user');
        Route::get('/get', [UserController::class, 'get'])->name('dashboard_user_detail');
        Route::get('/delete', [UserController::class, 'destroy'])->name('dashboard_user_delete');
        Route::post('/', [UserController::class, 'store'])->name('dashboard_user_post');
        Route::get('/datatable.json', [UserController::class, '__datatable'])->name('dashboard_user_table');
    });

    Route::group(['prefix' => 'group'], function () {
        Route::get('/', [GroupConttroller::class, 'index'])->name('dashboard_group');
        Route::get('/get', [GroupConttroller::class, 'get'])->name('dashboard_group_detail');
        Route::get('/delete', [GroupConttroller::class, 'destroy'])->name('dashboard_group_delete');
        Route::post('/', [GroupConttroller::class, 'store'])->name('dashboard_group_post');
        Route::get('/changeAccess', [GroupConttroller::class, 'changeAccess'])->name('dashboard_group_change_access');
        Route::get('/datatable.json', [GroupConttroller::class, '__datatable'])->name('dashboard_group_table');
        Route::get('/menuAccess.json', [GroupConttroller::class, '__menuAccess'])->name('dashboard_group_menu_access');
    });

    Route::group(['prefix' => 'setting'], function () {
        Route::get('/', [SettingController::class, 'index'])->name('dashboard_setting');
        Route::get('/get', [SettingController::class, 'get'])->name('dashboard_setting_detail');
        Route::get('/delete', [SettingController::class, 'destroy'])->name('dashboard_setting_delete');
        Route::post('/', [SettingController::class, 'store'])->name('dashboard_setting_post');
        Route::get('/datatable.json', [SettingController::class, '__datatable'])->name('dashboard_setting_table');
    });

    Route::group(['prefix' => 'permission'], function () {
        Route::get('/administrator/permission', [MenuController::class, 'index'])->name('dashboard_permission');
    });
});
//
//Route::get('/', [HomeController::class, 'index'])->name('home');
//Route::get('/administrator', [DashboardController::class, 'index'])->name('dashboard');
//Route::get('/administrator/menu', [MenuController::class, 'index'])->name('dashboard_menu');
//Route::get('/administrator/user', [UserController::class, 'index'])->name('dashboard_user');
//Route::post('/administrator/user', [UserController::class, 'store'])->name('dashboard_user_post');
//Route::get('/administrator/user/datatable.json', [UserController::class ,'datatable'])->name('user_table');
//
//Route::get('/administrator/group', [GroupConttroller::class, 'index'])->name('dashboard_group');
//Route::get('/administrator/setting', [MenuController::class, 'index'])->name('dashboard_setting');
//Route::get('/administrator/permission', [MenuController::class, 'index'])->name('dashboard_permission');


//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
