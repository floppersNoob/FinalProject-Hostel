<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Room;

class Customer extends Model
{
    use HasFactory;

    protected $table = 'customers';
    protected $fillable = [
        'name',
<<<<<<< HEAD
=======
        'email',
>>>>>>> 88160021cdb145de0c91f2fd4b3cd352b6701df3
        'phone',
        'room_id',
        'check_in_date',
        'check_out_date',
        'total_payment',
        'payment_status',
    ];

    public function room()
    {
<<<<<<< HEAD
        return $this->belongsTo(Room::class, 'id');
=======
        return $this->belongsTo(Room::class);
>>>>>>> 88160021cdb145de0c91f2fd4b3cd352b6701df3
    }

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }
}
