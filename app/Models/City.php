<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;
    protected $table = 'cities';
    
    protected $fillable = [
        'city_name',
        'city_code',
        'status'
    ];
    protected $primarykey = 'city_id';
}
