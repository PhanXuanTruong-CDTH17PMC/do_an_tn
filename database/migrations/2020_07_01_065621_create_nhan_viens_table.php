    <?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNhanViensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('NhanVien', function (Blueprint $table) {
            $table->increments('id'); 
            $table->Text('ho_ten_nv');
            $table->Text('CMND');
            $table->Text('email');
            $table->Text('SDT');
            $table->Date('ngay_sinh');
            $table->Text('uername');
            $table->Text('password');
            $table->Integer('loai_account_id');
            $table->Integer('bo_phan_id');
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
        Schema::dropIfExists('nhan_viens');
    }
}
