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

Route::get('/can-ho', function () {
    return view('can-ho.danh-sach-can-ho');
});

Route::get('/them-can-ho', function () {
    return view('can-ho.them-can-ho');
});


Route::get('/cu-dan', function () {
    return view('cu-dan.danh-sach-cu-dan');
});
Route::get('/them-moi-cu-dan', function () {
    return view('cu-dan.them-moi-cu-dan');
});
Route::get('/moi-quan-he', function () {
    return view('cu-dan.quan-he.danh-sach-moi-quan-he');
});
Route::get('/them-moi-quan-he', function () {
    return view('cu-dan.quan-he.them-moi-quan-he');
});


Route::get('/phuong-tien', function () {
    return view('phuong-tien.danh-sach-phuong-tien');
});
Route::get('/them-moi-phuong-tien', function () {
    return view('phuong-tien.them-moi-phuong-tien');
});
Route::get('/khu-vuc', function () {
    return view('phuong-tien.khu-vuc.danh-sach-khu-vuc');
});
Route::get('/them-moi-khu-vuc', function () {
    return view('phuong-tien.khu-vuc.them-moi-khu-vuc');
});


Route::get('/dich-vu', function () {
    return view('dich-vu.danh-sach-dich-vu');
});
Route::get('/them-moi-dich-vu', function () {
    return view('dich-vu.them-moi-dich-vu');
});
Route::get('/loai-dich-vu', function () {
    return view('dich-vu.loai-dich-vu.danh-sach-loai-dich-vu');
});
Route::get('/them-moi-loai-dich-vu', function () {
    return view('dich-vu.loai-dich-vu.them-moi-loai-dich-vu');
});

Route::get('/hoa-don', function () {
    return view('hoa-don.danh-sach-hoa-don');
});
Route::get('/them-moi-hoa-don', function () {
    return view('hoa-don.them-moi-hoa-don');
});