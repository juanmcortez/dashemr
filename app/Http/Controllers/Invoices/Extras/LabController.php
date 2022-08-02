<?php

namespace App\Http\Controllers\Invoices\Extras;

use App\Models\Invoices\Extras\Lab;
use App\Http\Controllers\Controller;
use App\Http\Requests\Invoices\Extras\StoreLabRequest;
use App\Http\Requests\Invoices\Extras\UpdateLabRequest;

class LabController extends Controller
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
     * @param  \App\Http\Requests\Invoices\Extras\StoreLabRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLabRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Invoices\Extras\Lab  $lab
     * @return \Illuminate\Http\Response
     */
    public function show(Lab $lab)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Invoices\Extras\Lab  $lab
     * @return \Illuminate\Http\Response
     */
    public function edit(Lab $lab)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Invoices\Extras\UpdateLabRequest  $request
     * @param  \App\Models\Invoices\Extras\Lab  $lab
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLabRequest $request, Lab $lab)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Invoices\Extras\Lab  $lab
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lab $lab)
    {
        //
    }
}
