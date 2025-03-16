<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DeliveryController extends Controller
{
    public function create()
    {
        return view('homeDelivery.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|string',
            'date' => 'required|date',
            'time' => 'required',
            'guests' => 'required|integer|min:1|max:10',
        ]);

        Reservation::create($validated);

        return redirect()->route('reservations.create')
            ->with('success', 'Reservation submitted successfully!');
    }
}
