<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Customer::create([
            'nama_cus' => "Deka",
            'point' => 0,
            'is_vip' => 0
        ]);
        Customer::create([
            'nama_cus' => "Mamad",
            'point' => 0,
            'is_vip' => 1
        ]);
    }
}
