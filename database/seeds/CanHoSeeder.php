<?php

use Illuminate\Database\Seeder;

class CanHoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('CanHo')->insert([
            'Tang'=> 1,
            'dien_tich' => '150',
            'name' => 'Căn hộ 3',
            'mat_khau' => Hash::make('123454'),
            'loai_can_ho_id' => 2,
            'chu_ho_id'=> 3,         
        ]);
        
    }
}
