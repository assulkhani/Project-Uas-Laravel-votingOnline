<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableKaryawan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('karyawan_tbl', function (Blueprint $table) {
            $table->bigIncrements('id')->unique();
            $table->string('nama',50);
            $table->enum('jenis_kelamin',['L','P']);
            $table->string('jabatan',30);
            $table->string('tempat_lahir',30);
            $table->date('tgl_lahir');
            $table->string('alamat');
            $table->string('foto')->nullable();
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
        Schema::dropIfExists('karyawan_tbl');
    }
}
