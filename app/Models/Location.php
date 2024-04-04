<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use SebastianBergmann\CodeCoverage\Driver\Driver;

class Location extends Model
{
    protected $fillable = [
        'vehicle_id',
        'latitude',
        'longitude',
        'timestamp',
        'speed',
        'heading',
        'altitude'
    ];

    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class);
    }

    public function driver()
    {
        return $this->belongsTo(Driver::class);
    }

    use HasFactory;
}
