<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SubCategory extends Model
{
    use HasFactory;

    // Set the custom primary key
    protected $primaryKey = 'sub_category_id';

    // Define fillable fields for mass assignment
    protected $fillable = [
        'sub_category_name',
        'category_id',
    ];

    /**
     * Relationship: A sub-category belongs to a category
     */
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'category_id');
    }
}
