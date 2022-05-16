<?php
namespace App\Http\Controllers;
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

Route::group(['middleware' => 'login'], function(){
    Route::get('/profile', [UserController::class, 'showProfilePage']);
    Route::post('/profile/{id}', [UserController::class, 'update']);

    Route::get('/cart', [CartController::class, 'showCartPage']);
    Route::get('/cart/add/{id}', [CartController::class, 'addToCart']);
    Route::get('/cart/remove/{id}', [CartController::class, 'remove']);
    Route::post('/checkout', [TransactionController::class, 'checkout']);

    Route::get('/logout', [UserController::class, 'logout']);
});

Route::group(['middleware' => ['login', 'admin']], function(){
    Route::get('/flower/manage', [FlowerController::class, 'showManageFlowerPage']);
    Route::get('/flower/insert', [FlowerController::class, 'showInsertFlowerPage']);
    Route::post('/flower/insert', [FlowerController::class, 'insert']);
    Route::get('/flower/manage/search', [FlowerController::class, 'searchAtManage']);
    Route::get('/flower/delete/{id}', [FlowerController::class, 'delete']);
    Route::get('/flower/update/{id}', [FlowerController::class, 'showUpdatePage']);
    Route::post('/flower/update/{id}', [FlowerController::class, 'update']);

    Route::get('/flower-type/manage', [FlowerTypeController::class, 'showManageFlowerTypePage']);
    Route::get('/flower-type/manage/search', [FlowerTypeController::class, 'search']);
    Route::get('/flower-type/insert', [FlowerTypeController::class, 'showInsertFlowerTypePage']);
    Route::post('/flower-type/insert', [FlowerTypeController::class, 'insert']);
    Route::get('/flower-type/update/{id}', [FlowerTypeController::class, 'showUpdateFlowerTypePage']);
    Route::post('/flower-type/update/{id}', [FlowerTypeController::class, 'update']);
    Route::get('/flower-type/delete/{id}', [FlowerTypeController::class, 'delete']);

    Route::get('/courier/manage', [CourierController::class, 'showManageCourierPage']);
    Route::get('/courier/manage/search', [CourierController::class, 'search']);
    Route::get('/courier/insert', [CourierController::class, 'showInsertCourierPage']);
    Route::post('/courier/insert', [CourierController::class, 'insert']);
    Route::get('/courier/update/{id}', [CourierController::class, 'showUpdateCourierPage']);
    Route::post('/courier/update/{id}', [CourierController::class, 'update']);
    Route::get('/courier/delete/{id}', [CourierController::class, 'delete']);

    Route::get('/user/manage', [UserController::class, 'showManageUserPage']);
    Route::get('/user/update/{id}', [UserController::class, 'showUpdateUserPage']);
    Route::post('/user/update/{id}', [UserController::class, 'update']);
    Route::get('/user/delete/{id}', [UserController::class, 'delete']);

    Route::get('/transaction-history', [TransactionController::class, 'showTransactionHistory']);
});

Route::group(['middleware' => 'guest'], function(){
    Route::get('/login', [UserController::class, 'showLoginPage']);
    Route::post('/login', [UserController::class, 'login']);
    Route::get('/register', [UserController::class, 'showRegisterPage']);
    Route::post('/register', [UserController::class, 'register']);
});

Route::get('/search', [FlowerController::class, 'searchAtHome']);
Route::get('/', [FlowerController::class, 'showHomePage']);
Route::get('/flower/detail/{id}', [FlowerController::class, 'showDetailPage']);

