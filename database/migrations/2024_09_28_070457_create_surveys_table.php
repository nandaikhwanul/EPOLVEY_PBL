<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSurveysTable extends Migration
{
    public function up()
    {
        Schema::create('surveys', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->enum('jenis', ['IKAD', 'Survey kepuasan', 'Jenis baru']);
            $table->enum('semester', ['1', '2', '3', '4', '5', '6']);
            $table->year('tahun');
            $table->enum('status', ['berlangsung', 'selesai']);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('surveys');
    }
}

