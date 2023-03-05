<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
            'name' => "Deka",
            'email' => "dekapra@gmail.com",
            'password' => Hash::make('deka'),
            'is_admin' => 0,
        ]);
        User::create([
            'name' => "mamad",
            'email' => "mamad@gmail.com",
            'password' => Hash::make('mamad'),
            'is_admin' => 1,
        ]);
    }
}
