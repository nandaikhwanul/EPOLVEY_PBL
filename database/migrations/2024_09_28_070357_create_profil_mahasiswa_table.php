<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilMahasiswaTable extends Migration
{
    public function up()
    {
        Schema::create('profil_mahasiswa', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->unique();
            $table->string('email')->unique();
            $table->string('jurusan');
            $table->string('prodi');
            $table->enum('semester', ['1', '2', '3', '4', '5', '6']);
            $table->string('foto')->nullable();
            $table->timestamps();
            
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('profil_mahasiswa');
    }
}

