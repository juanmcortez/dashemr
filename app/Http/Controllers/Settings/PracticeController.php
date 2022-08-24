<?php

namespace App\Http\Controllers\Settings;

use App\Models\Settings\Practice;
use App\Http\Controllers\Controller;
use App\Http\Requests\Settings\StorePracticeRequest;
use App\Http\Requests\Settings\UpdatePracticeRequest;

class PracticeController extends Controller
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
     * @param  \App\Http\Requests\Settings\StorePracticeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePracticeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Settings\Practice  $practice
     * @return \Illuminate\Http\Response
     */
    public function show(Practice $practice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Settings\Practice  $practice
     * @return \Illuminate\Http\Response
     */
    public function edit(Practice $practice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Settings\UpdatePracticeRequest  $request
     * @param  \App\Models\Settings\Practice  $practice
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePracticeRequest $request, Practice $practice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Settings\Practice  $practice
     * @return \Illuminate\Http\Response
     */
    public function destroy(Practice $practice)
    {
        //
    }
}
