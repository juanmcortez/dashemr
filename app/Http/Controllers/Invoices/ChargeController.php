<?php

namespace App\Http\Controllers\Invoices;

use App\Models\Invoices\Charge;
use App\Http\Controllers\Controller;
use App\Http\Requests\Invoices\StoreChargeRequest;
use App\Http\Requests\Invoices\UpdateChargeRequest;

class ChargeController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Invoices\StoreChargeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreChargeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Invoices\Charge  $charge
     * @return \Illuminate\Http\Response
     */
    public function show(Charge $charge)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Invoices\Charge  $charge
     * @return \Illuminate\Http\Response
     */
    public function edit(Charge $charge)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Invoices\UpdateChargeRequest  $request
     * @param  \App\Models\Invoices\Charge  $charge
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateChargeRequest $request, Charge $charge)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Invoices\Charge  $charge
     * @return \Illuminate\Http\Response
     */
    public function destroy(Charge $charge)
    {
        //
    }
}
