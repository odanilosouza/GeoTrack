<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use SebastianBergmann\CodeCoverage\Driver\Driver;

class vehicle extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'type',
        'driver_id'

    ];

    public function driver()
    {
        return $this->belongsTo(Driver::class);
    }
}
