<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKepegawaiansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kepegawaians', function (Blueprint $table) {
            $table->id();
            $table->string('lembaga')->nullable();
            $table->string('nip')->nullable();
            $table->string('nuptk')->nullable();
            $table->string('nama')->nullable();
            $table->string('jabatan')->nullable();
            $table->string('status_tetap')->nullable();
            $table->string('status_pegawai')->nullable();
            $table->string('mengajar')->nullable();
            $table->string('masa_bakti')->nullable();
            $table->string('no_sk_mengajar')->nullable();
            $table->string('thn_sk_mengajar')->nullable();
            $table->string('penerbit_sk_pengajar')->nullable();
            $table->string('ktp')->nullable();
            $table->string('npwp')->nullable();
            $table->string('tempat_lahir')->nullable();
            $table->string('tgl_lahir')->nullable();
            $table->enum('jenis_kelamin',['Laki','Perempuan']);
            $table->string('agama')->nullable();
            $table->string('golongan_darah')->nullable();
            $table->string('status_nikah')->nullable();
            $table->string('kewarganegaraan')->nullable();
            $table->string('no_hp')->nullable();
            $table->string('email')->nullable();
            $table->string('no_rek')->nullable();
            $table->string('provinsi')->nullable();
            $table->string('kabupaten')->nullable();
            $table->string('kecamatan')->nullable();
            $table->string('kelurahan')->nullable();
            $table->string('jalan')->nullable();
            $table->string('kode_pos')->nullable();
            $table->string('tinggi')->nullable();
            $table->string('berat')->nullable();
            $table->string('hobi')->nullable();
            $table->string('pendidikan')->nullable();
            $table->string('data_keluarga')->nullable();
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
        Schema::dropIfExists('kepegawaians');
    }
}
