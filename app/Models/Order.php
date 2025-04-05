<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;

    // Custom primary key
    protected $primaryKey = 'order_id';

    // Mass assignable fields
    protected $fillable = [
        'user_id',
        'total_price',
        'status',
    ];

    /**
     * Relationship: An order belongs to a user
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'user_id');
    }
}
