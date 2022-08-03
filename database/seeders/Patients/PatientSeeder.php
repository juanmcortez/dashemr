<?php

namespace Database\Seeders\Patients;

use App\Models\Invoices\Charge;
use Illuminate\Database\Seeder;
use App\Models\Patients\Patient;
use App\Models\Invoices\Encounter;
use App\Models\Invoices\Extras\Lab;
use App\Models\Patients\Demographic;
use App\Models\Invoices\Extras\Problem;
use App\Models\Invoices\Extras\Anesthesia;
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
        // Create patients
        Patient::factory(100)->create()->each(function ($patient) {
            // For each patient create demographics
            Demographic::factory()
                ->create(['pid' => $patient->pid]);

            // For each patient create a random number of encounters
            $rnd = random_int(1, 6);
            Encounter::factory($rnd)
                ->create(['pid' => $patient->pid])
                ->each(function ($invoice) {
                    // For each encounter create tabs
                    Problem::factory()->create(['encounter' => $invoice->encounter]);
                    Miscellaneous::factory()->create(['encounter' => $invoice->encounter]);
                    Lab::factory()->create(['encounter' => $invoice->encounter]);

                    // For each encounter create a random number of charges
                    $rnd = random_int(1, 12);
                    Charge::factory($rnd)
                        ->create(['encounter' => $invoice->encounter,])
                        ->each(function ($chargeItem) {

                            // If code is anesthesia, add relationship to charge
                            if ($chargeItem->codeType == 'ANES') {
                                Anesthesia::factory()->create(['charge' => $chargeItem->charge]);
                            }
                        });
                });
        });
    }
}
