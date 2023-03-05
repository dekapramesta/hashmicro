<?php

namespace Database\Seeders;

use App\Models\MST_POINT;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MSTPOINTSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        MST_POINT::create([
            "nama_bank" => "BCA",
            "point" => 50
        ]);
        MST_POINT::create([
            "nama_bank" => "Mandiri",
            "point" => 70
        ]);
    }
}
