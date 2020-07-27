<?php

use Illuminate\Database\Seeder;

class LoaiAccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('LoaiAccount')->insert([
        [
            'ten_loai_acciunt'=> 'Admin',
        ],
    	[
            'ten_loai_acciunt'=> 'Nhân viên',
        ]
        ]);
    }
}
