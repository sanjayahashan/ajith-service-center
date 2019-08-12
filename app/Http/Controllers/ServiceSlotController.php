<?php

namespace App\Http\Controllers;

use App\ServiceSlot;
use Illuminate\Http\Request;

class ServiceSlotController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('serviceSlots.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $serviceSlot = new ServiceSlot;

        $serviceSlot->save();
        return redirect()->route('appointments.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ServiceSlot  $serviceSlot
     * @return \Illuminate\Http\Response
     */
    public function show(ServiceSlot $serviceSlot)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ServiceSlot  $serviceSlot
     * @return \Illuminate\Http\Response
     */
    public function edit(ServiceSlot $serviceSlot)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ServiceSlot  $serviceSlot
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ServiceSlot $serviceSlot)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ServiceSlot  $serviceSlot
     * @return \Illuminate\Http\Response
     */
    public function destroy(ServiceSlot $serviceSlot)
    {
        //
    }
}
