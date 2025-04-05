<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;
    protected $primaryKey = 'category_id';
    protected $fillable = ['category_name', 'image'];

    public function subcategories()
    {
        return $this->hasMany(SubCategory::class, 'category_id', 'category_id');
    }
}
