<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bus extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'bus_name',
        'bus_number',
        'operator_id',
        'total_seats',
        'status',
    ];
    protected $primarykey = 'bus_id';
}
