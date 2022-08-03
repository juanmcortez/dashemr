<?php

namespace App\Http\Controllers\Invoices\Extras;

use App\Http\Controllers\Controller;
use App\Models\Invoices\Extras\Anesthesia;
use App\Http\Requests\Invoices\Extras\StoreAnesthesiaRequest;
use App\Http\Requests\Invoices\Extras\UpdateAnesthesiaRequest;

class AnesthesiaController extends Controller
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
     * @param  \App\Http\Requests\Invoices\Extras\StoreAnesthesiaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAnesthesiaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Invoices\Extras\Anesthesia  $anesthesia
     * @return \Illuminate\Http\Response
     */
    public function show(Anesthesia $anesthesia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Invoices\Extras\Anesthesia  $anesthesia
     * @return \Illuminate\Http\Response
     */
    public function edit(Anesthesia $anesthesia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Invoices\Extras\UpdateAnesthesiaRequest  $request
     * @param  \App\Models\Invoices\Extras\Anesthesia  $anesthesia
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAnesthesiaRequest $request, Anesthesia $anesthesia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Invoices\Extras\Anesthesia  $anesthesia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Anesthesia $anesthesia)
    {
        //
    }
}
