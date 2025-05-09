<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;
    protected $table = 'rooms';
    protected $fillable = ['room_number', 'type', 'price_per_night', 'status', 'archived_stat'];

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'room_id');
    }
}
