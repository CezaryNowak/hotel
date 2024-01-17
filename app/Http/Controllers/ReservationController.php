<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\Room;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ReservationController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $formFields = $request->validate([
            'input' => 'required|string|regex:/^\d{2}-\d{2}-\d{4} - \d{2}-\d{2}-\d{4}$/',
            'roomId' => 'required|integer',
        ]);

        $dates = explode(' - ', $formFields['input']);
        $startDate = Carbon::parse($dates[0]);
        $endDate = Carbon::parse($dates[1]);

        if ($startDate > $endDate) {
            return back()->with('message', 'The second date must be larger than the first date.');
         }

        $reservatios = Reservation::where('roomId', $formFields['roomId'])->where('checkInDate', '>=', $startDate->format('Y-m-d'))->where('checkOutDate', '<=', $endDate->format('Y-m-d'))->get();
        if (count($reservatios) > 0) {
            return back()->with('message', 'The room is already booked for this date.');
        }

        if (self::store($dates, $formFields['roomId'])) {
            return back()->with('message', 'Booked!');
        } else {
            return back()->with('message', 'Something wrong');
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store($dates, $roomId)
    {
        $room = Room::findOrFail($roomId);

        $checkinDate = Carbon::parse($dates[0]);
        $checkoutDate = Carbon::parse($dates[1]);
        $numberOfDays = $checkinDate->diffInDays($checkoutDate);
        $reservation = new Reservation;
        $reservation->userId = Auth::id();
        $reservation->roomId = $roomId;
        $reservation->totalPrice = $numberOfDays * $room->price;
        $reservation->checkInDate = $checkinDate->format('Y-m-d');
        $reservation->checkOutDate = $checkoutDate->format('Y-m-d');
        $reservation->canceled = false;

        return $reservation->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(Reservation $reservation)
    {
        $reservations = Reservation::where('userId', '=', Auth::id())->get();

        foreach ($reservations as $reservation) {
            $reservation->checkInDate = Carbon::createFromFormat('Y-m-d H:i:s', $reservation->checkInDate)->format('d-m-Y');
            $reservation->checkOutDate = Carbon::createFromFormat('Y-m-d H:i:s', $reservation->checkOutDate)->format('d-m-Y');
        }

        return view('reservations', compact('reservations'));

    }

    public function destroy($id)
    {
        Reservation::where('id', $id)->delete();

        return back()->with('message', 'Reservation canceled!');
    }
}
