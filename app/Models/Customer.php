<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'status',
        'full_name',
        'phone_number',
        'plate_number',
        'imei',
        'date_of_installation',
    ];
}
