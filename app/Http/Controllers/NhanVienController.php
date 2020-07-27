<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NhanVienController extends Controller
{
    public function create(){
        $title ="Thêm nhân viên";
        return view('nhan-vien.them-moi-nv')->with('title',$title);
    }
    public function trangcanhan(){
        $title ="Trang cá nhân";
        return view('quan-tri-vien.trang-ca-nhan')->with('title',$title);
    }
    public function index(){
        $title ="Log-in";
        return view('nhan-vien.danh-sach-nhan-vien')->with('title',$title);
    }
    
}
