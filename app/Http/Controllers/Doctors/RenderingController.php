<?php

namespace App\Http\Controllers\Doctors;

use App\Models\Doctors\Rendering;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreRenderingRequest;
use App\Http\Requests\UpdateRenderingRequest;

class RenderingController extends Controller
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
     * @param  \App\Http\Requests\StoreRenderingRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRenderingRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Doctors\Rendering  $rendering
     * @return \Illuminate\Http\Response
     */
    public function show(Rendering $rendering)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Doctors\Rendering  $rendering
     * @return \Illuminate\Http\Response
     */
    public function edit(Rendering $rendering)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateRenderingRequest  $request
     * @param  \App\Models\Doctors\Rendering  $rendering
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRenderingRequest $request, Rendering $rendering)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Doctors\Rendering  $rendering
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rendering $rendering)
    {
        //
    }
}
