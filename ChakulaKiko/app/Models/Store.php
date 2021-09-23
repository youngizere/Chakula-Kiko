<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Store extends Model
{   
    use HasFactory;

    public $fillable = ['farmer_id',
                        'product_id',
                        'store_location',
                        'product_quantity'];

    public function farmer(){
    return $this->belongsTo(Farmer::class);
    }
    public function product(){
    return $this->belongsTo(Product::class);
    }
}
