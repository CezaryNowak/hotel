<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\Room;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Carbon\CarbonPeriod;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rooms = Room::all();

        return view('rooms', compact('rooms'));
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $dates = [];
        $room = Room::findOrFail($id);
        $roomReservations = Reservation::where('roomId', $id)->where('cancelled', 0)->where('checkOutDate', '>=', Carbon::now())->get();
        foreach ($roomReservations as $reservation) {
            $checkOutDate = Carbon::createFromFormat('Y-m-d H:i:s', $reservation->checkOutDate);
            $checkOutDate->subDay();
            $period = CarbonPeriod::create($reservation->checkInDate, $checkOutDate);
            foreach ($period as $date) {
                $dates[] = $date->format('Y-m-d');
            }
        }
        $dates = json_encode($dates);
        return view('room', compact('room','dates'));
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
