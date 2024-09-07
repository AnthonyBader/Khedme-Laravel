<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    // A payment belongs to a booking
    public function booking()
    {
        return $this->belongsTo(Booking::class);
    }

    // A payment belongs to a customer (User)
    public function customer()
    {
        return $this->belongsTo(User::class, 'customer_id');
    }

    // A payment belongs to a service provider (User)
    public function serviceProvider()
    {
        return $this->belongsTo(User::class, 'service_provider_id');
    }
}