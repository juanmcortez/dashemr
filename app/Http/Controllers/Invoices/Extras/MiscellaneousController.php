<?php

namespace App\Http\Controllers\Invoices\Extras;

use App\Http\Controllers\Controller;
use App\Models\Invoices\Extras\Miscellaneous;
use App\Http\Requests\Invoices\Extras\StoreMiscellaneousRequest;
use App\Http\Requests\Invoices\Extras\UpdateMiscellaneousRequest;

class MiscellaneousController extends Controller
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
     * @param  \App\Http\Requests\Invoices\Extras\StoreMiscellaneousRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMiscellaneousRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Invoices\Extras\Miscellaneous  $miscellaneous
     * @return \Illuminate\Http\Response
     */
    public function show(Miscellaneous $miscellaneous)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Invoices\Extras\Miscellaneous  $miscellaneous
     * @return \Illuminate\Http\Response
     */
    public function edit(Miscellaneous $miscellaneous)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Invoices\Extras\UpdateMiscellaneousRequest  $request
     * @param  \App\Models\Invoices\Extras\Miscellaneous  $miscellaneous
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMiscellaneousRequest $request, Miscellaneous $miscellaneous)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Invoices\Extras\Miscellaneous  $miscellaneous
     * @return \Illuminate\Http\Response
     */
    public function destroy(Miscellaneous $miscellaneous)
    {
        //
    }
}
