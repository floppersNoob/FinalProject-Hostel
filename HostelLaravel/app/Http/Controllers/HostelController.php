<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class HostelController extends Controller
{
<<<<<<< HEAD
    // Fetch all rooms that are not archived
=======
    //kwaon tanan rooms nga wala pa ka archived
>>>>>>> 88160021cdb145de0c91f2fd4b3cd352b6701df3
    public function index()
    {
        $rooms = Room::where('archived_stat', 0)->get();
        return response()->json($rooms);
    }

<<<<<<< HEAD
    // Store a new room
=======
>>>>>>> 88160021cdb145de0c91f2fd4b3cd352b6701df3
    public function store(Request $request)
    {
        $room = Room::create([
            'room_number' => $request->room_number,
            'type' => $request->type,
            'price_per_night' => $request->price_per_night,
            'status' => 'Available',
        ]);
<<<<<<< HEAD
        return response()->json($room, 200);
    }

    // Update an existing room
    public function update(Request $request, $id)
    {
        $room = Room::find($id);
        if (!$room) {
            return response()->json(['error' => 'Room not found.'], 404);
        }

        if ($room->status === 'Reserved' || $room->status === 'Not Available') {
            return response()->json(['error' => 'Cannot update an occupied or unavailable room.'], 403);
        }
=======

        return response()->json($room, 201);
    }

    public function show($id)
    {
        return Room::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $room = Room::findOrFail($id);
        if ($room->status === 'Occupied' || $room->status === 'Not Available') {
            }
>>>>>>> 88160021cdb145de0c91f2fd4b3cd352b6701df3
        $request->validate([
            'room_number' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'price_per_night' => 'required|numeric|min:0',
        ]);
        $room->update([
            'room_number' => $request->room_number,
            'type' => $request->type,
            'price_per_night' => $request->price_per_night,
        ]);
<<<<<<< HEAD
        return response()->json(['message' => 'Room updated successfully.', 200]);
    }

    // Archive a room
    public function archive($id)
    {
        $room = Room::find($id);
        if (!$room) {
            return response()->json(['error' => 'Room not found.'], 404);
        }
=======
        return response()->json(['message' => 'Room updated successfully.']);
    }


    // public function destroy($id)
    // {
    //     Room::destroy($id);

    //     return response()->json(['message' => 'Room deleted']);
    // }

    public function archive($id)
    {
        $room = Room::findOrFail($id);
>>>>>>> 88160021cdb145de0c91f2fd4b3cd352b6701df3
        $room->archived_stat = 1;
        $room->save();

        return response()->json(['message' => 'Room archived successfully.']);
    }

<<<<<<< HEAD
    // Fetch all archived rooms
=======
>>>>>>> 88160021cdb145de0c91f2fd4b3cd352b6701df3
    public function archived()
    {
        $rooms = Room::where('archived_stat', 1)->get();
        return response()->json($rooms);
    }

<<<<<<< HEAD
    // Recover an archived room
    public function recover($id)
    {
        $room = Room::find($id);
        if (!$room) {
            return response()->json(['error' => 'Room not found.'], 404);
        }
=======
    public function recover($id)
    {
        $room = Room::findOrFail($id);
>>>>>>> 88160021cdb145de0c91f2fd4b3cd352b6701df3
        $room->update(['archived_stat' => 0]);
        return response()->json(['message' => 'Room recovered successfully.']);
    }
}
