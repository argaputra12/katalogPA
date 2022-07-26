<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Katalog extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('katalogs', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('deskripsi');
            $table->string('nim');
            $table->string('nama_mhs');
            $table->string('pembimbing1');
            $table->string('pembimbing2');
            $table->string('link_video');
            $table->string('link_demo');
            $table->string('link_hki');
            $table->foreignId('kategori_id')->nullable()->constrained();
            $table->foreignId('user_id')->nullable()->constrained();
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
        Schema::dropIfExists('katalogs');
    }
}
