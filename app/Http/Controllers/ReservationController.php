<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use DateTime;
use Carbon\Carbon;
class ReservationController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        Validator::make($request->all(), [
            'datestring' => [
                'required',
                'string',
                'regex:/^\d{2}-\d{2}-\d{4} - \d{2}-\d{2}-\d{4}$/',
                function ($attribute, $value, $fail) {
                    $dates = explode(' - ', $value);
                    $startDate = $dates[0];
                    $endDate = $dates[1];

                    if ($startDate > $endDate) {
                        $fail('The second date must be larger than the first date.');
                    }
                },
            ],
        ]);

        $formFields = $request->validate([
            'input' => 'required|string|regex:/^\d{2}-\d{2}-\d{4} - \d{2}-\d{2}-\d{4}$/',
            'roomId' => 'required|integer',
        ]);

        $dates = explode(' - ', $formFields['input']);

        if (self::store($dates,$formFields['roomId'])) {
            return back()->with('message', 'Added new currency to watchlist');
        } else {
            return back()->with('message', 'Something wrong');
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store($dates,$roomId)
    {
        $checkinDate = DateTime::createFromFormat('d-m-Y', $dates[0]);
        $checkoutDate = DateTime::createFromFormat('d-m-Y', $dates[1]);
        $reservation = new Reservation;
        $reservation->userId = Auth::id();
        $reservation->roomId = $roomId;
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
        return back()->with('message', 'Removed from watchlist');
    }
}
