<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class prCar extends Model
{
    protected $table = 'product_car';
    protected $fillable = ['name', 'description', 'unit_price', 'image'];
    use HasFactory;
}
