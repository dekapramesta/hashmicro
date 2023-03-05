<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_cus',
        'point',
        'is_vip'
    ];

    public function bank()
    {
        # code...
        return $this->hasMany(BankAccount::class, 'id_customer', 'id');
    }
    public function scopeIsVip($query)
    {
        $query->where('is_vip', true);
    }
}
