<?php

namespace App\Http\Controllers\Locations;

use App\Http\Controllers\Controller;
use App\Models\Locations\PlaceOfService;
use App\Http\Requests\Locations\StorePlaceOfServiceRequest;
use App\Http\Requests\Locations\UpdatePlaceOfServiceRequest;

class PlaceOfServiceController extends Controller
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
     * @param  \App\Http\Requests\Locations\StorePlaceOfServiceRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePlaceOfServiceRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Locations\PlaceOfService  $placeOfService
     * @return \Illuminate\Http\Response
     */
    public function show(PlaceOfService $placeOfService)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Locations\PlaceOfService  $placeOfService
     * @return \Illuminate\Http\Response
     */
    public function edit(PlaceOfService $placeOfService)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Locations\UpdatePlaceOfServiceRequest  $request
     * @param  \App\Models\Locations\PlaceOfService  $placeOfService
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePlaceOfServiceRequest $request, PlaceOfService $placeOfService)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Locations\PlaceOfService  $placeOfService
     * @return \Illuminate\Http\Response
     */
    public function destroy(PlaceOfService $placeOfService)
    {
        //
    }
}
