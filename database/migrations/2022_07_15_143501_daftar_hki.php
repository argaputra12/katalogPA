<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DaftarHki extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('daftar_hkis', function (Blueprint $table) {
            $table->id();
            $table->string('kategoriKI');
            $table->string('jenisKI');
            $table->string('subjenisKI');
            $table->string('judulKI');
            $table->string('Surat_pernyataan_internal');
            $table->string('Surat_pengalihan_hakcipta');
            $table->string('Scan_ktp');
            $table->string('contoh_ciptaan');
            $table->string('url_ciptaan');
            $table->string('summary_katsinov');
            $table->string('link_ciptaan_katsinov');
            $table->enum('konfirmasi', ['Belum dikonfirmasi', 'disetujui', 'ditolak'])->nullable()->default('Belum dikonfirmasi');
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
        Schema::dropIfExists('daftar_hkis');
    }
}
