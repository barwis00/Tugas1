<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\MatkulSeeder;
use DB;

class MatkulSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('matkul')->insert([
        'nama_matkul' => 'Web Framework',
    	'kode_matkul' => '00011',
    	'id_dosen' => 001
        ]);
    }
}
