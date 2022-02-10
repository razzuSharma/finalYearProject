<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    use HasFactory;
    protected $table = 'destinations';
    protected $fillable = [
        'destination_name',
        'destination_code',
        'city_id',
        'status'
    ];
    protected $primarykey = 'destination_id';
}
