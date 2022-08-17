<?php

namespace App\Http\Controllers\Invoices\Extras;

use App\Http\Controllers\Controller;
use App\Models\Invoices\Extras\SpecialCode;
use App\Http\Requests\Invoices\Extras\StoreSpecialCodeRequest;
use App\Http\Requests\Invoices\Extras\UpdateSpecialCodeRequest;

class SpecialCodeController extends Controller
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
     * @param  \App\Http\Requests\Invoices\Extras\StoreSpecialCodeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSpecialCodeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Invoices\Extras\SpecialCode  $specialCode
     * @return \Illuminate\Http\Response
     */
    public function show(SpecialCode $specialCode)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Invoices\Extras\SpecialCode  $specialCode
     * @return \Illuminate\Http\Response
     */
    public function edit(SpecialCode $specialCode)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Invoices\Extras\UpdateSpecialCodeRequest  $request
     * @param  \App\Models\Invoices\Extras\SpecialCode  $specialCode
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSpecialCodeRequest $request, SpecialCode $specialCode)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Invoices\Extras\SpecialCode  $specialCode
     * @return \Illuminate\Http\Response
     */
    public function destroy(SpecialCode $specialCode)
    {
        //
    }
}
