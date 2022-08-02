<?php

namespace App\Http\Controllers\Invoices\Extras;

use App\Http\Controllers\Controller;
use App\Models\Invoices\Extras\Problem;
use App\Http\Requests\Invoices\Extras\StoreProblemRequest;
use App\Http\Requests\Invoices\Extras\UpdateProblemRequest;

class ProblemController extends Controller
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
     * @param  \App\Http\Requests\Invoices\Extras\StoreProblemRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProblemRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Invoices\Extras\Problem  $problem
     * @return \Illuminate\Http\Response
     */
    public function show(Problem $problem)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Invoices\Extras\Problem  $problem
     * @return \Illuminate\Http\Response
     */
    public function edit(Problem $problem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Invoices\Extras\UpdateProblemRequest  $request
     * @param  \App\Models\Invoices\Extras\Problem  $problem
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProblemRequest $request, Problem $problem)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Invoices\Extras\Problem  $problem
     * @return \Illuminate\Http\Response
     */
    public function destroy(Problem $problem)
    {
        //
    }
}
