<?php
namespace App\Http\Controllers;

<<<<<<< HEAD
use App\Models\Room;
use App\Models\Payment;
use App\Models\Customer;
use Illuminate\Http\Request;
=======
use Illuminate\Http\Request;
use App\Models\Payment;
>>>>>>> 88160021cdb145de0c91f2fd4b3cd352b6701df3

class PaymentController extends Controller
{
    public function index()
    {
        $payments = Payment::with('customer')->get();
        return response()->json($payments);
    }

    public function store(Request $request)
    {
        $request->validate([
            'customer_id' => 'required|exists:customers,id',
            'amount_paid' => 'required|numeric|min:0',
<<<<<<< HEAD
            'payment_method' => 'required|string|max:255',
            'payment_date' => 'required|date',
            'status' => 'required|string|in:Approved,Pending',
        ]);
    
        $payment = new Payment();
        $payment->customer_id = $request->customer_id;
        $payment->amount_paid = $request->amount_paid;
        $payment->payment_method = $request->payment_method;
        $payment->payment_date = $request->payment_date;
        $payment->status = $request->status;
        $payment->save();
    
        // Handle Customer and Room status updates
        $customer = Customer::find($request->customer_id);
        if ($customer) {
            $customer->payment_status = 'Approved';
            $customer->save();
        }
    
        $room = Room::find($customer->room_id);
        if ($room) {
            $room->status = 'Reserved';
            $room->save();
        }
    
        return response()->json(['message' => 'Payment successfully submitted.'], 200);
    }
    
=======
            'payment_method' => 'required|string',
            'payment_date' => 'required|date',
            'status' => 'required|in:Pending,Approved',
        ]);
            $payment = Payment::create([
            'customer_id' => $request->customer_id,
            'amount_paid' => $request->amount_paid,
            'payment_method' => $request->payment_method,
            'payment_date' => $request->payment_date,
            'status' => $request->status,
        ]);
    
        return response()->json($payment, 201);
    }
    
    
>>>>>>> 88160021cdb145de0c91f2fd4b3cd352b6701df3
}
