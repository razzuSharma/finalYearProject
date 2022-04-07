<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedules extends Model
{
    use HasFactory;
    protected $table = 'schedules';
    protected $fillable = [
        'bus_id',
        'operator_id',
        'city_id',
        'destination_id',
        'departure_time',
        'return_time',
        'departure_date',
        'return_date',
        'pickup_point',
        'drop_point',
        'fare'

       
    ];
    protected $primarykey = 'schedule_id';

    public function operator()
    {
        return $this->belongsTo('App\Models\Operator', 'operator_id');
    }
    
    
}

