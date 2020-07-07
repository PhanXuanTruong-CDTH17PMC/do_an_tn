<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChiTietHoaDonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ChiTietHoaDon', function (Blueprint $table) {
            $table->increments('id');
            $table->Integer('can_ho_id');
            $table->Integer('hoa_don_id');
            $table->Integer('service_id');
            $table->Float('so_luong');
            $table->Date('ngay_thanh_toan');
            $table->Float('thanh_tien');
            $table->Boolean('tinh_trang_tt');
            $table->softDeletes();
            $table->timestamps();    
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chi_tiet_hoa_dons');
    }
}
