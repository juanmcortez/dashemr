<?php

namespace App\Http\Controllers\Patients;

use Inertia\Inertia;
use App\Models\Patients\Patient;
use App\Http\Controllers\Controller;
use App\Models\Patients\Demographic;
use App\Http\Requests\Patients\StorePatientRequest;
use App\Http\Requests\Patients\UpdatePatientRequest;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // This line returns the paginated list of elements, with only selected columns in relationship
        $patients = Patient::with('demographic:pid,firstName,middleName,lastName,dateOfBirth,socialSecurityNumber,homePhone')
            ->orderBy(
                Demographic::select('lastName')
                    ->orderBy('lastName')
                    ->orderBy('firstName')
                    ->orderBy('middleName')
                    ->whereColumn('demographics.pid', 'patients.pid')
            )
            ->paginate(100);
        return Inertia::render('Patients/Table', ['patients' => $patients]);
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
     * @param  \App\Http\Requests\Patients\StorePatientRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePatientRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Patients\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function show(Patient $patient)
    {
        // Retrive all the information and load the encounters in descending order by serviceDate and encounter
        $patient->load('demographic', 'encounters')->encountersCharges();
        return Inertia::render('Patients/Show', ['patient' => $patient]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Patients\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function edit(Patient $patient)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Patients\UpdatePatientRequest  $request
     * @param  \App\Models\Patients\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePatientRequest $request, Patient $patient)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Patients\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function destroy(Patient $patient)
    {
        //
    }
}
