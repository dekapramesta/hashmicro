<?php

namespace Database\Seeders;

use App\Models\Utang;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UtangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Utang::create([
            'id_bank' => 1,
            'nominal' => 500000
        ]);
    }
}
