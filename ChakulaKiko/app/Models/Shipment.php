<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shipment extends Model
{
    use HasFactory;

    public $fillable = ['order_id',
                        'rider_id',
                        'shipment_cost',
                        'shipment_date'];

    public function order(){
    return $this->belongsTo(Order::class);
    }
    public function rider(){
    return $this->belongsTo(Rider::class);
    }
}
