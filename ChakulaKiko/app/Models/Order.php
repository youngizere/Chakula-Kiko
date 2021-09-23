<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{    
    use HasFactory;

    public $fillable = ['household_id',
                        'order_date',
                        'order_product_quantity',
                        'product_id'];

    public function household(){
    return $this->belongsTo(Household::class);
    }
    public function product(){
    return $this->belongsTo(Product::class);
    }
    public function shipment(){
        return $this->hasOne(Shipment::class);
    }

}
