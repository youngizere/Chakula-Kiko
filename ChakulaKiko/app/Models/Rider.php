<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rider extends Model
{   
    use HasFactory;

    public $fillable = ['rider_name',
                        'rider_vehicle_number_plate',
                        'rider_phone_number'
    ];

    public function shipment(){
        return $this->hasMany(Shipment::class);
    }

}
