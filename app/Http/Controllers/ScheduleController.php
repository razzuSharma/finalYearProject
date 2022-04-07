<?php

namespace App\Http\Controllers;

use App\Models\Schedules;
use App\Models\bus;
use App\Models\Operator;
use App\Models\City;
use App\Models\Destination;
use Illuminate\Http\Request;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $schedules = Schedules::get();
        $operator = Operator::get();
        $bus = bus::get();
        $city = City::get();
        $destination = Destination::get();
        // return $operator;
        return view('schedules.index',
        ['operators' => Operator::all()]
        , 
        compact('schedules', 'operator', 'bus', 'city', 'destination'));
        // return view('schedules.index', compact('schedules'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        
        $bus = Bus::all();
        $operator = Operator::all();
        $city = City::all();    
        $destination = Destination::all();
        // return $operator;
        return view ('schedules.create', 
        ['buses' => $bus, 'operators' => $operator, 'cities' => $city, 'destinations' => $destination]);
    }

    public function showOperator(Request $request)
    {
        if ($request->ajax()) {
            return response(Bus::where('operator_id', $request->operator_id)->get());
        }
    }

    public function showRegion(Request $request)
    {
        if ($request->ajax()) {
            return response(Destination::where('city_id', $request->city_id)->get());
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $operator = Operator::all();
        // return $operator;

        
//         if($request->isMethod('post')){
//         $data = $request->all();

//             if (empty($data['return_date'])){
//                 $data['return_date']= "";
//             }


        ;
        // return $operator;
// }

        $schedules  = new Schedules();
        $schedules->operator_id = $request->operator_id;
        $schedules->bus_id = $request->bus_id;
        $schedules->city_id = $request->city_id;
        $schedules->destination_id = $request->destination_id;
        $schedules->departure_time = $request->departure_time;
        $schedules->return_time = $request->return_time;
        $schedules->departure_date = $request->departure_date;
        $schedules->return_date = $request->return_date;
        $schedules->pickup_point = $request->pickup_point;
        $schedules->drop_point = $request->drop_point;
        $schedules->fare = $request->fare;
        return $schedules;
        $schedules->save();
        
        return redirect()->route('schedules.index')->with('success', 'Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BusSchedule  $busSchedule
     * @return \Illuminate\Http\Response
     */
    public function show(BusSchedule $busSchedule)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BusSchedule  $busSchedule
     * @return \Illuminate\Http\Response
     */
    public function edit(BusSchedule $busSchedule)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BusSchedule  $busSchedule
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BusSchedule $busSchedule)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BusSchedule  $busSchedule
     * @return \Illuminate\Http\Response
     */
    public function destroy(BusSchedule $busSchedule)
    {
        //
    }
}
