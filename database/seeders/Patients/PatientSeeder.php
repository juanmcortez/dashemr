<?php

namespace Database\Seeders\Patients;

use Illuminate\Database\Seeder;
use App\Models\Patients\Patient;
use App\Models\Patients\Demographic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PatientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Patient::factory(1000)->create()->each(function ($patient) {
            Demographic::factory()->create(['pid' => $patient->pid]);
        });
    }
}
