<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public $fillable = [
    	'user_id',
    	'ip_address',
        'payment_id',
    	'name',
    	'phone_no',
    	'email',
    	'shipping_address',
    	'message',
    	'is_paid',
    	'is_complete',
    	'is_seen_by_admin',
        'transaction_id'
    ];

    public function user()
    {
    	return $this->belongsTo(User::class);
    }
    public function carts()
    {
    	return $this->hasMany(Cart::class);
    }
    public function payment()
    {
        return $this->belongsTo(Payment::class);
    }
    
}
