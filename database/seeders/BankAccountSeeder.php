<?php

namespace Database\Seeders;

use App\Models\BankAccount;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BankAccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        BankAccount::create([
            'id_customer' => 1,
            'nama_bank' => 'Mandiri',
            'rekening' => '182781728',
            'saldo' => 1000000,
        ]);
        BankAccount::create([
            'id_customer' => 1,
            'nama_bank' => 'BCA',
            'rekening' => '7132173',
            'saldo' => 2000000,
        ]);
    }
}
