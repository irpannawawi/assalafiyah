<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKesiswaansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kesiswaans', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap');
            $table->string('no_hp')->nullable();
            $table->string('jenjang_pendidikan')->nullable();
            $table->enum('jenis_kelamin',['Laki','Perempuan']);
            $table->string('ukuran_seragam')->nullable();
            $table->string('agama')->nullable();
            $table->string('golongan_darah')->nullable();
            $table->string('tanggal_lahir')->nullable();
            $table->string('tempat_lahir')->nullable();
            $table->string('asal_sekolah')->nullable();
            $table->string('no_skhun')->nullable();
            $table->string('no_nisn')->nullable();
            $table->string('no_un')->nullable();
            $table->string('no_ijazah')->nullable();
            $table->string('kelas_id')->nullable();
            $table->string('ruang_id')->nullable();
            $table->string('no_induk')->nullable();
            $table->string('anakke')->nullable();
            $table->string('jmlh_saudara')->nullable();
            $table->string('no_kk')->nullable();
            $table->string('nama_ayah')->nullable();
            $table->string('nama_ibu')->nullable();
            $table->string('nik_ayah')->nullable();
            $table->string('nik_ibu')->nullable();
            $table->string('tl_ayah')->nullable();
            $table->string('tl_ibu')->nullable();
            $table->string('tgl_ayah')->nullable();
            $table->string('tgl_ibu')->nullable();
            $table->string('pekerjaan_ayah')->nullable();
            $table->string('pekerjaan_ibu')->nullable();
            $table->string('no_hp_ayah')->nullable();
            $table->string('no_hp_ibu')->nullable();
            $table->string('penghasilan_ayah')->nullable();
            $table->string('penghasilan_ibu')->nullable();
            $table->string('status_siswa')->nullable();
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
        Schema::dropIfExists('kesiswaans');
    }
}
