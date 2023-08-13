<?php

namespace App\Http\Controllers;

use App\Models\Rooms;
use App\Models\Bookingrooms;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Collection;

class BookingroomsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (request('search')) {
            $searchDate = request('search');
            $bookingroomsData = Bookingrooms::where('br_date', $searchDate)->get();
        } else {
            $bookingroomsData = collect();
        }

        $roomsData = Rooms::all();
        $finalData = [];
        foreach ($roomsData as $room) {
            $existingBooking = $bookingroomsData->where('br_room_id', $room->r_id)->first();
    
            if ($existingBooking) {
                // If both morning and evening slots exist in the database for this room, set availableSlots to an empty array
                if ($bookingroomsData->where('br_room_id', $room->r_id)->where('br_slot', 'morning')->count() && $bookingroomsData->where('br_room_id', $room->r_id)->where('br_slot', 'evening')->count()) {
                    $availableSlots = [];
                } else {
                    $availableSlots = $existingBooking->br_slot === 'morning' ? ['evening'] : ['morning'];
                }
            } else {
                $availableSlots = ['morning', 'evening'];
            }
    
            $finalData[] = (object)[
                'room_id' => $room->r_id,
                'searchdate' => request('search'),
                'name' => $room->r_name,
                'type' => $room->r_type,
                'capacity' => $room->r_capacity,
                'facility' => $room->r_facility,
                'available_slots' => $availableSlots,
            ];
        }
        return view('booking-rooms.main', [
            'tittle' => 'Booking Rooms',
            'bookingrooms' => $finalData,
        ]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $room_id = $request->input('room_id');
        $slot = $request->input('slot');

        $selectedRoom = Rooms::findOrFail($room_id);

        return view('booking-rooms.create', [
            'tittle' => 'Create Booking Rooms',
            'selectedRoom' => $selectedRoom,
            'selectedSlot' => $slot,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'br_name' => 'required|max:255',
            'br_purpose' => 'required|max:255',
            'br_participants' => 'required|max:255',
        ]);
    
        $user_id = auth()->user()->id;
        $room_id = $request->input('room_id');
        $slot = $request->input('slot');
        $searchdate = $request->input('date');

        Bookingrooms::create([
            'br_user_id' => $user_id,
            'br_room_id' => $room_id,
            'br_slot' => $slot,
            'br_date' => $searchdate,
            'br_name' => $validated['br_name'],
            'br_purpose' => $validated['br_purpose'],
            'br_participants' => $validated['br_participants'],
            'br_status' => '2',
        ]);
        

        return redirect('/booking-rooms')->with('success', 'Booking Room has been created!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

}
