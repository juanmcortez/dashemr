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
use App\Models\Invoices\Extras\SpecialCode;
use App\Models\Invoices\Extras\Miscellaneous;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PatientSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create patients
        $totPatients = 1000;
        $this->command->line('Creating ' . $totPatients . ' patients.');
        // $this->command->newLine();

        Patient::factory($totPatients)->create()->each(function ($patient) {
            // For each patient create demographics
            Demographic::factory()
                ->create(['pid' => $patient->pid]);

            // For each patient create a random number of encounters
            $rnd = random_int(0, 6);
            if ($rnd) {
                // $this->command->info('Creating patient\'s encounters.');
                // $this->command->newLine();
                Encounter::factory($rnd)
                    ->create(['pid' => $patient->pid])
                    ->each(function ($invoice) {
                        // For each new encounter update the patient latest service date
                        $invoice->patient->touch('latestServiceDate');

                        // For each encounter create tabs
                        Problem::factory()->create(['encounter' => $invoice->encounter]);
                        Miscellaneous::factory()->create(['encounter' => $invoice->encounter]);
                        Lab::factory()->create(['encounter' => $invoice->encounter]);

                        // For each encounter create a random number of charges
                        $rnd = random_int(1, 12);
                        //$this->command->info('Creating encounter\'s charges.');
                        //$this->command->newLine();
                        Charge::factory($rnd)
                            ->create(['encounter' => $invoice->encounter,])
                            ->each(function ($chargeItem) {

                                // If code is anesthesia, add relationship to charge
                                if ($chargeItem->codeType == 'ANES') {
                                    Anesthesia::factory()->create(['charge' => $chargeItem->charge]);
                                } elseif ($chargeItem->codeType == 'HCPCS' || $chargeItem->codeType == 'CVX') {
                                    // If code is HCPCS or CVX, add relationship to charge
                                    SpecialCode::factory()->create(['charge' => $chargeItem->charge]);
                                }
                            });
                        // $this->command->comment('Creating encounter\'s charges, DONE!');
                        // $this->command->newLine();
                    });
                // $this->command->comment('Creating patient\'s encounters, DONE!');
                // $this->command->newLine();
            }
        });

        $this->command->info('Creating ' . $totPatients . ' patients, DONE!');
        $this->command->newLine();
    }
}
