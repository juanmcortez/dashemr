<?php

namespace App\Http\Controllers\Doctors;

use App\Models\Doctors\Referring;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreReferringRequest;
use App\Http\Requests\UpdateReferringRequest;

class ReferringController extends Controller
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
     * @param  \App\Http\Requests\StoreReferringRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreReferringRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Doctors\Referring  $referring
     * @return \Illuminate\Http\Response
     */
    public function show(Referring $referring)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Doctors\Referring  $referring
     * @return \Illuminate\Http\Response
     */
    public function edit(Referring $referring)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateReferringRequest  $request
     * @param  \App\Models\Doctors\Referring  $referring
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateReferringRequest $request, Referring $referring)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Doctors\Referring  $referring
     * @return \Illuminate\Http\Response
     */
    public function destroy(Referring $referring)
    {
        //
    }
}
