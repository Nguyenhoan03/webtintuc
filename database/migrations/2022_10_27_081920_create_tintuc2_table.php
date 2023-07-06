<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTintuc2Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tintuc2', function (Blueprint $table) {
            $table->id();
            $table->string('hinhanh');
            $table->text('noidung');
            $table->string('thoigian');
            $table->string('tacgia');
            $table->text('noidungphu');

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
        Schema::dropIfExists('tintuc2');
    }
}
