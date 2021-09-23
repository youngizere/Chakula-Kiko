<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Household extends Model
{
    
    use HasFactory;

    public $fillable = ['first_name',
                        'last_name',
                        'phone_number',
                        'address',
                        'profile_image'];
    
    public function order(){
        return $this->hasMany(Order::class);
    }
}
