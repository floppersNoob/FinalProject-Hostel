<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $table = 'payments';
    protected $fillable = [
        'customer_id',
        'amount_paid',
        'payment_method',
        'payment_date',
        'status',
    ];

    public function customer()
    {
<<<<<<< HEAD
        return $this->belongsTo(Customer::class, 'id');
=======
        return $this->belongsTo(Customer::class);
>>>>>>> 88160021cdb145de0c91f2fd4b3cd352b6701df3
    }
    

}
