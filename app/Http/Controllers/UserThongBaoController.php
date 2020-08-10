<?php

namespace App\Http\Controllers;
use Auth;
use DB;
use App\ThongBao;

use Illuminate\Http\Request;

class UserThongBaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::guard('canho')->check())
		{
            $thongbao=DB::table('thongbao')->orderBy('id', 'desc')->get();
            $thongbao2= DB::table('thongbao')->find(DB::table('thongbao')->max('id'));
            return view('user.user-thongbao',compact('thongbao','thongbao2'));
		}
		else 
		{
			return view('quan-tri-vien.dang-nhap');
		}
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $thongbao=DB::table('thongbao')->orderBy('id', 'desc')->get();
        $thongbao2= ThongBao::find($id);
        return view('user.user-chitietthongbao',compact('thongbao','thongbao2'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
