<?php

use Illuminate\Database\Seeder;

class NhanVienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('NhanVien')->insert([
            
                'ho_ten_nv' => 'Nguyễn Văn A',
                'CMND' => '123456789',
                'email' => 'Nhân sự',
                'SDT' => '012345565',
                'ngay_sinh' => '2000/02/02',
                'uername' => 'nv001',
                'password'=> '123456789',
            	'loai_account_id' => 1,
            	'bo_phan_id'=>1
         
        ]);
        
	}
}
