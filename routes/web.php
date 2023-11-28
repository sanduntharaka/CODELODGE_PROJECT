<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\RoomtypeController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\StaffDepartment;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ServiceController;

use App\Http\Controllers\StaffAdminController;
use App\Http\Controllers\StaffCustomerController;
use App\Http\Controllers\StaffRoomController;
use App\Http\Controllers\StaffBookingController;
use App\Http\Controllers\CustomerBookingController;

//testing
use App\Http\Controllers\TestController;

//Frontend
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class, 'home']);
Route::get('service', [HomeController::class, 'service']);

//Admin login
Route::get('admin/login', [AdminController::class, 'login']);
Route::post('admin/login', [AdminController::class, 'check_login']);
Route::get('admin/logout', [AdminController::class, 'logout']);

//Admin Dashboard
Route::get('admin', [AdminController::class, 'dashboard']);

//RoomType Routes
Route::get('admin/roomtype/{id}/delete', [RoomtypeController::class, 'destroy']);
Route::resource('admin/roomtype', RoomtypeController::class);

//Room Routes
Route::get('admin/rooms/{id}/delete', [RoomController::class, 'destroy']);
Route::resource('admin/rooms', RoomController::class);

//Customer Routes
Route::get('admin/customer/{id}/delete', [CustomerController::class, 'destroy']);
Route::resource('admin/customer', CustomerController::class);

//Delete Image
Route::get('admin/roomtypeimage/delete/{id}', [RoomtypeController::class, 'destroy_image']);

//Department Routes
Route::get('admin/department/{id}/delete', [StaffDepartment::class, 'destroy']);
Route::resource('admin/department', StaffDepartment::class);

//Staff Payment
Route::get('admin/staff/payments/{id}', [StaffController::class, 'all_payments']);
Route::get('admin/staff/payment/{id}/add', [StaffController::class, 'add_payment']);
Route::post('admin/staff/payment/{id}', [StaffController::class, 'save_payment']);
Route::get('admin/staff/payment/{id}/{staff_id}/delete', [StaffController::class, 'delete_payment']);

//Staff CRUD
Route::get('admin/staff/{id}/delete', [StaffController::class, 'destroy']);
Route::resource('admin/staff', StaffController::class);

//Booking 
Route::get('admin/booking/{id}/delete', [BookingController::class, 'destroy']);
Route::get('admin/booking/available-rooms/{checkin_date}', [BookingController::class, 'available_rooms']);
Route::resource('admin/booking', BookingController::class);

//Simple login
Route::get('login', [CustomerController::class, 'login']);
//Customer login
Route::post('customer/login', [CustomerController::class, 'customer_login']);
//Simple register
Route::get('register', [CustomerController::class, 'register']);
//Simple Logout
Route::get('logout', [CustomerController::class, 'logout']);

//Customer booking
Route::get('booking', [BookingController::class, 'front_booking']);

//Service CRUD
Route::get('admin/service/{id}/delete', [ServiceController::class, 'destroy']);
Route::resource('admin/service', ServiceController::class);


//Staff Login
Route::get('staff/login', [StaffAdminController::class, 'login']);
Route::post('staff/login', [StaffAdminController::class, 'check_login']);

//Staff Dashboard
Route::get('staff/dashboard', [StaffAdminController::class, 'staffdashboard']);

//Staff Booking
//Route::get('staff/booking', [BookingController::class, 'staffbooking']);
//Route::get('staff/booking/create', [BookingController::class, 'staffbookingcreate']);
Route::get('staff/booking/{id}/delete', [BookingController::class, 'staffadmindestroy']);

Route::resource('staff/booking', StaffBookingController::class);

//Staff Room 
Route::get('admin/rooms/{id}/delete', [RoomController::class, 'destroy']);
//Route::get('staff/rooms', [RoomController::class, 'staffindex']);
Route::get('staff/create', [RoomController::class, 'staffcreate']);
Route::get('staff/room/show/{id}', [RoomController::class, 'staffroomshow']);
//Route::get('staff/room/edit/{id}', [RoomController::class, 'staffroomedit']);

Route::resource('staff/room', StaffRoomController::class);

//Staff Customer Routes
Route::get('admin/customer/{id}/delete', [CustomerController::class, 'destroy']);
//Route::get('staff/customer', [CustomerController::class, 'staffcustomerindex']);
//Route::get('staff/customer/create', [CustomerController::class, 'staffcustomercreate']);
Route::get('staff/customer/show/{id}', [CustomerController::class, 'staffcustomershow']);
Route::resource('staff/customer', StaffCustomerController::class);

//About us
Route::get('about', [HomeController::class, 'about']);

//Contact us
Route::get('contact', [HomeController::class, 'contact']);

//Customer Booking
Route::resource('front/booking', CustomerBookingController::class);

//testing
Route::get('testing', [TestController::class, 'testdashboard']);