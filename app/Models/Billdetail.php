<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Billdetail extends Model
{
    protected $table='bill_detail';
    protected $fillable = ['id_bill', 'quantity', 'tenxe', 'unit_price'];
    use HasFactory;
}
