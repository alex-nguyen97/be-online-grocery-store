<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    protected $primaryKey = 'order_item_id';
    protected $fillable = ['order_id', 'item_id', 'quantity', 'unit_price'];
}
