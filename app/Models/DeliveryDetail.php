<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DeliveryDetail extends Model
{
    protected $primaryKey = 'delivery_id';
    protected $fillable = ['order_id', 'recipient_name', 'address_street', 'city_suburb', 'state_territory', 'mobile_number', 'email'];
}
