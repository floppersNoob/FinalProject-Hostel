<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
<<<<<<< HEAD
=======
use App\Models\Room;
>>>>>>> 88160021cdb145de0c91f2fd4b3cd352b6701df3

class CustomerController extends Controller
{
    // Get all customers
    public function index()
    {
        return Customer::with('room')->get();
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
<<<<<<< HEAD
=======
            'email' => 'nullable|email',
>>>>>>> 88160021cdb145de0c91f2fd4b3cd352b6701df3
            'phone' => 'required',
            'room_id' => 'required|exists:rooms,id',
            'check_in_date' => 'required|date',
            'check_out_date' => 'nullable|date|after_or_equal:check_in_date',
            'total_payment' => 'nullable|numeric',
            'payment_status' => 'nullable|string'
        ]);

        $customer = Customer::create(attributes: $validated);

<<<<<<< HEAD
        return response()->json(Customer::with('room')->find($customer->id), 200);
    }

    public function updatePaymentStatus(Request $request, $customerId)
    {
        $customer = Customer::find($customerId);
        $customer->payment_status = 'Approved';
        $customer->save();

        return response()->json($customer, 200);
=======
        $room = Room::find($validated['room_id']);
        $room->status = 'Occupied';
        $room->save();

        return response()->json(Customer::with('room')->find($customer->id), 201);
    }

    public function show($id)
    {
        return Customer::with('room')->findOrFail($id);
    }

    // public function destroy($id)
    // {
    //     $customer = Customer::findOrFail($id);
    //     $roomId = $customer->room_id;

    //     $customer->delete();
    //     $room = Room::find($roomId);
    //     if ($room) {
    //         $room->status = 'Available';
    //         $room->save();
    //     }

    //     return response()->json(['message' => 'Customer deleted']);
    // }

    public function updatePaymentStatus(Request $request, $customerId)
    {
        $customer = Customer::findOrFail($customerId);
        $customer->payment_status = 'Approved';  // Update to approved status
        $customer->save();

        return response()->json($customer);
>>>>>>> 88160021cdb145de0c91f2fd4b3cd352b6701df3
    }

    public function update(Request $request, $id)
{
<<<<<<< HEAD
    $customer = Customer::find($id);
    $customer->update($request->only('payment_status'));

    return response()->json($customer, 200);
}

=======
    $customer = Customer::findOrFail($id);
    $customer->update($request->only('payment_status'));

    return response()->json($customer);
}


>>>>>>> 88160021cdb145de0c91f2fd4b3cd352b6701df3
}
