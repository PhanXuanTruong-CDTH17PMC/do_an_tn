<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NhanVienController extends Controller
{
    public function them_nv(){
        $title ="Thêm nhân viên";
        return view('nhan-vien.them-moi-nv')->with('title',$title);
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
