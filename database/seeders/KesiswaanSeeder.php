<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class KesiswaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kesiswaans')->insert([
            'nama_lengkap'=>Str::random(10),
            'no_induk'=>Str::random(10),
            'jenjang_pendidikan'=>Str::random(10),
            'kelas_id'=>Str::random(10),
            'ruang_id'=>Str::random(10),
            'no_hp'=>Str::random(10),
        ]);
    }
}
