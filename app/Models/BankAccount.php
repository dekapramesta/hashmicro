<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BankAccount extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_customer',
        'nama_bank',
        'rekening',
        'saldo',
    ];
    public function utang()
    {
        # code...
        return $this->hasMany(Utang::class, 'id_bank', 'id');
    }
}
