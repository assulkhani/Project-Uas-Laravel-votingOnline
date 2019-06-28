<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_tbl', function (Blueprint $table) {
            $table->bigIncrements('id')->unique();
            $table->string('nama',50);
            $table->string('username',20)->unique();
            $table->string('email')->unique();
            $table->string('password',60);
            $table->string('foto')->nullable();
            $table->enum('level',['admin','operator']);
            $table->rememberToken();
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
        Schema::dropIfExists('user_tbl');
    }
}
