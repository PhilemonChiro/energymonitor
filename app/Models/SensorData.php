<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SensorData extends Model
{
    use HasFactory;
    protected $table = 'sensor_data';

    protected $fillable = [
        'voltage1',
        'current1',
        'power1',
        'energy1',
        'frequency1',
        'pf1',
        'voltage2',
        'current2',
        'power2',
        'energy2',
        'frequency2',
        'pf2',
        'voltage3',
        'current3',
        'power3',
        'energy3',
        'frequency3',
        'pf3',
    ];
}
