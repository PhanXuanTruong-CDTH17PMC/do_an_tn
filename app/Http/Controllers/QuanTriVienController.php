<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuanTriVienController extends Controller
{
    public function login(){
        $title ="Log-in";
        return view('quan-tri-vien.dang-nhap')->with('title',$title);
    }
    public function trangcanhan(){
        $title ="Trang cá nhân";
        return view('quan-tri-vien.trang-ca-nhan')->with('title',$title);
    }
    public function danh_sach_nhan_vien(){
        $title ="Log-in";
        return view('nhan-vien.danh-sach-nhan-vien')->with('title',$title);
    }
    
}
