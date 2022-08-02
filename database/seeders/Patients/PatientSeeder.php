<?php

namespace Database\Seeders\Patients;

use Illuminate\Database\Seeder;
use App\Models\Patients\Patient;
use App\Models\Invoices\Encounter;
use App\Models\Invoices\Extras\Lab;
use App\Models\Patients\Demographic;
use App\Models\Invoices\Extras\Problem;
use App\Models\Invoices\Extras\Miscellaneous;
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
            Demographic::factory()
                ->create(['pid' => $patient->pid]);

            $rnd = random_int(1, 6);
            Encounter::factory($rnd)
                ->create(['pid' => $patient->pid])
                ->each(function ($invoice) {
                    Problem::factory()->create(['encounter' => $invoice->encounter]);
                    Miscellaneous::factory()->create(['encounter' => $invoice->encounter]);
                    Lab::factory()->create(['encounter' => $invoice->encounter]);
                });
        });
    }
}
