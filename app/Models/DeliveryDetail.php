<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DeliveryDetail extends Model
{
    use HasFactory;

    // Custom primary key
    protected $primaryKey = 'delivery_id';

    protected $fillable = [
        'order_id',
        'recipient_name',
        'address_street',
        'city_suburb',
        'state_territory',
        'mobile_number',
        'email',
    ];

    /**
     * Relationship: A delivery detail belongs to an order
     */
    public function order()
    {
        return $this->belongsTo(Order::class, 'order_id', 'order_id');
    }
}
