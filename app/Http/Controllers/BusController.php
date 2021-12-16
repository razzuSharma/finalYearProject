<?php

namespace App\Http\Controllers;

use App\Models\bus;
use App\Models\Operator;
use Illuminate\Http\Request;

class BusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        return view('buses.index', [
            'bus' => bus::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        // $bus = new bus();
        // $bus->bus_name = $request->bus_name;
        // $bus->bus_number = $request->bus_number;
        // $bus->operator_id = $request->operator_id;
        // $bus->total_seats = $request->total_seats;
        // $bus->save();
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $bus = new bus();
        // $bus->bus_name = $request->bus_name;
        // $bus->bus_number = $request->bus_number;
        // $bus->operator_id = $request->operator_id;
        // $bus->total_seats = $request->total_seats;
        // $bus->save()->redirect(view('buses.index', [
        //     'bus' => bus::all()
        // ]));

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\bus  $bus
     * @return \Illuminate\Http\Response
     */
    public function show(bus $bus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\bus  $bus
     * @return \Illuminate\Http\Response
     */
    public function edit(bus $bus)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\bus  $bus
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, bus $bus)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\bus  $bus
     * @return \Illuminate\Http\Response
     */
    public function destroy(bus $bus)
    {
        //
    }
}
