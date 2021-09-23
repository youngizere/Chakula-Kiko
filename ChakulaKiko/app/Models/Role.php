<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    public $fillable = ['role_name'];
    protected $table = 'roles';
    public $timestamps = false;

    public function user(){
        return $this->hasMany(User::class);
    }
}
