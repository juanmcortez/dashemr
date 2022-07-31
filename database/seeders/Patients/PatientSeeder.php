<?php

namespace Database\Seeders\Patients;

use Illuminate\Database\Seeder;
use App\Models\Patients\Patient;
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
        Patient::factory(100)->create();
    }
}
