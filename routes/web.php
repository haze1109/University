<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\StudentsController;
use App\Http\Controllers\FacultiesController;

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/cafeteria', [OrdersController::class, 'showCafeteria']);
Route::post('/cafeteria', [OrdersController::class, 'takeOrder']);
Route::post('/cafeteria/checkout', [OrdersController::class, 'placeOrder']);
Route::get('/cafeteria/done', function () {
    return view('users_cafeteria_done');
});

Route::get('/shop/{id?}', [ShopController::class, 'show']);

Route::get('/register', [UsersController::class, 'showRegister']);
Route::post('/register', [UsersController::class, 'register']);

Route::get('/login', [UsersController::class, 'showLogin']);
Route::post('/login', [UsersController::class, 'login']);
Route::get('/logout', [UsersController::class, 'logout']);

Route::get('/profile', [UsersController::class, 'showProfile']);
Route::get('/profile/edit', [UsersController::class, 'showProfileEdit']);
Route::post('/profile/edit', [UsersController::class, 'editProfile']);

Route::get('/orders', [OrdersController::class, 'showMyOrders']);
Route::post('/orders/confirm', [OrdersController::class, 'confirmOrder']);
Route::post('/orders/cancel', [OrdersController::class, 'cancelOrder']);

//admin pages
Route::get('/admin', [AdminController::class, 'adminDashboard']);
Route::get('/admin/register', [AdminController::class, 'showAdminRegister']);
Route::post('/admin/register', [AdminController::class, 'adminRegister']);

Route::get('/admin/students', [StudentsController::class, 'index']);
Route::post('/admin/students/search', [StudentsController::class, 'searchStudent']);

Route::resource('/admin/faculties', FacultiesController::class);

Route::get('/admin/students/{id}/upload', [StudentsController::class, 'showUpload']);
Route::post('/admin/students/{id}/upload', [StudentsController::class, 'upload']);

Route::get('/admin/students/{id}/classes', [StudentsController::class, 'showClasses']);
Route::post('/admin/students/{id}/classes', [StudentsController::class, 'enroll']);

Route::get('/admin/students/{id}/email', [StudentsController::class, 'showEmail']);
Route::post('/admin/students/{id}/email', [StudentsController::class, 'sendEmail']);

Route::get('/admin/orders', [OrdersController::class, 'showOrders']);
Route::get('/admin/orders/{id}', [OrdersController::class, 'showOrderItems']);
Route::post('/admin/orders/{id}', [OrdersController::class, 'updateStatus']);
?>