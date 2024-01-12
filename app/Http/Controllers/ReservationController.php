<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {

        $formFields = $request->validate([
            'input' => 'required',
        ]);
        dd($formFields);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     */
    public function show(Reservation $reservation)
    {
        $reservations = Reservation::where('userId', '=', Auth::id())->get();

        return view('reservations', compact('reservations'));

    }

    public function destroy(Reservation $reservation)
    {
        //
    }
}
