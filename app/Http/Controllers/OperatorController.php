<?php

namespace App\Http\Controllers;

use App\Models\Operator;
use Illuminate\Http\Request;

class OperatorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $usera = User::find($id);
        
        
        return view('operators.index', [
            'operators' => Operator::all()
            
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('operators.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $operators = new Operator;
        $operators->operator_name = $request->operator_name;
        $operators->operator_email = $request->operator_email;
        $operators->operator_phone = $request->operator_phone;
        $operators->operator_address = $request->operator_address;
        $operators->operator_status = $request->operator_status;
        $operators->save();
        return redirect()->route('operators.index')->with('success', 'Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Operator  $operator
     * @return \Illuminate\Http\Response
     */
    public function show(Operator $operator)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Operator  $operator
     * @return \Illuminate\Http\Response
     */
    public function edit(Operator $operator)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Operator  $operator
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Operator $operator)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Operator  $operator
     * @return \Illuminate\Http\Response
     */
    public function destroy(Operator $operator)
    {
        //
    }
}
