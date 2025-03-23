<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Item extends Model
{
    use HasFactory;
    protected $primaryKey = 'item_id';
    protected $fillable = ['name', 'image_url', 'unit', 'price', 'stock_quantity', 'category_id'];
}
