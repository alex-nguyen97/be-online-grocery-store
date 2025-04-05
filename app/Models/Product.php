<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    // Custom primary key
    protected $primaryKey = 'product_id';

    // Mass assignable attributes
    protected $fillable = [
        'name',
        'description',
        'price',
        'stock',
        'image',
        'sub_category_id',
    ];

    /**
     * Relationship: A product belongs to a sub-category
     */
    public function subCategory()
    {
        return $this->belongsTo(SubCategory::class, 'sub_category_id', 'sub_category_id');
    }
}
