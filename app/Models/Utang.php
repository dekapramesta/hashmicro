<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Utang extends Model
{
    use HasFactory;
    protected $fillable = [
        'nominal',
        'id_bank'
    ];
    public function bank()
    {
        return $this->belongsTo(BankAccount::class, 'id_bank', 'id');
    }
}
