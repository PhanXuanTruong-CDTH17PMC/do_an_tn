<?php

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

Route::get('/', function () {
    return view('layout');
});

Route::get('/log-in','QuanTriVienController@login');
Route::get('/admin-info','QuanTriVienController@trangcanhan');
Route::get('/danh-sach-nhan-vien','QuanTriVienController@danh_sach_nhan_vien');
Route::get('/them-moi-nhan-vien','NhanVienController@them_nv');

Route::get('/bo-phan', function () {
    return view('nhan-vien.bo-phan.danh-sach-bo-phan');
});

Route::get('/them-bo-phan', function () {
    return view('nhan-vien.bo-phan.them-bo-phan');
});