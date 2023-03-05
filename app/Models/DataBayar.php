<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataBayar extends Model
{
    use HasFactory;
    protected $fillable = [
        'id_customer',
        'response'
    ];
}
