<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateThongBaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ThongBao', function (Blueprint $table) {
            $table->increments('id');
            $table->string('noi_dung_tb');
            $table->Date('ngay_tb');
            $table->Boolean('tinh_trang');
            $table->Integer('nhan_vien_id');
            $table->Integer('can_ho_id');
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
        Schema::dropIfExists('thong_baos');
    }
}
