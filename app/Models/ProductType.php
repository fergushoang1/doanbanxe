<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductType extends Model
{
    use HasFactory;
    protected $table="type_product";
    protected $fillable = ['name','description','image'];
   


    public function product(){
        return $this->hasMany('App\Models\prCar','id_type','id');
    }

    
}