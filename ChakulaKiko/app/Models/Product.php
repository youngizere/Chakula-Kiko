<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public $fillable = ['product_type', 
                        'product_name',
                        'product_unit_price',
    ];

    public function order(){
        return $this->hasMany(Order::class);
    }
    public function store(){
        return $this->hasMany(Store::class);
    }

}
