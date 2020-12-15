<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class productParticipant extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_participant')->insert([
            'product_id' => 43,
            'participant_id' => 3,
            'sertifikat_number' => Str::random(10),
            'sertifikat_point' => '5',
            'nomor_ketetapan_point' => Str::random(10),
            'tanggal' => 'Bogor-Indonesia, 26-28 Oktober 2020',
        ]);
    }
}
