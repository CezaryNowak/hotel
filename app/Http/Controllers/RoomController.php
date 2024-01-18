<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\Room;
use Carbon\Carbon;
use Carbon\CarbonPeriod;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   $capacity = request('capacity');
        $dates = request('input');
        
        $rooms = ($capacity)
            ? Room::where('capacity', '>=', $capacity)
            : Room::query();
            
        if ($dates) {
            $dates = explode(' - ', $dates);
            $startDate = Carbon::parse($dates[0]);
            $endDate = Carbon::parse($dates[1]);
            $reservations = Reservation::where('checkInDate', '<=', $startDate)->where('checkOutDate', '>=', $endDate)->get();
            foreach ($reservations as $reservation) {
                $rooms->where('id', '!=', $reservation->roomId);
            }
        }
    
        $rooms = $rooms->get();
    
        return view('rooms', compact('rooms'));
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $dates = [];
        $room = Room::findOrFail($id);
        $roomReservations = Reservation::where('roomId', $id)->where('checkOutDate', '>=', Carbon::now())->get();
        foreach ($roomReservations as $reservation) {
            $checkOutDate = Carbon::createFromFormat('Y-m-d H:i:s', $reservation->checkOutDate);
            $checkOutDate->subDay();
            $period = CarbonPeriod::create($reservation->checkInDate, $checkOutDate);
            foreach ($period as $date) {
                $dates[] = $date->format('Y-m-d');
            }
        }
        $dates = json_encode($dates);

        return view('room', compact('room', 'dates'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Room $room)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Room $room)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Room $room)
    {
        //
    }
}
