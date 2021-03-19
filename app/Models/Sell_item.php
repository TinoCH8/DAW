<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sell_item extends Model
{
    use HasFactory;

    protected $table="sells_items";

    protected $fillable = [
        'id_sell',
        'id_product',
        'price',
        'quantity',
    ];
}
