<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHkisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hkis', function (Blueprint $table) {
            $table->id();
            $table->string('kategori_ki');
            $table->string('jenis_ki');
            $table->string('subjenis_ki');
            $table->string('judul_ki');
            $table->string('surat_pernyataan_internal');
            $table->string('surat_pengalihan_hakcipta');
            $table->string('scan_ktp');
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
        Schema::dropIfExists('hkis');
    }
}
