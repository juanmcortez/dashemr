<?php

namespace Database\Seeders\Patients;

use Illuminate\Support\Str;
use App\Models\Invoices\Charge;
use Illuminate\Database\Seeder;
use App\Models\Patients\Patient;
use App\Models\Doctors\Referring;
use App\Models\Doctors\Rendering;
use App\Models\Invoices\Encounter;
use App\Models\Locations\Facility;
use Illuminate\Support\Facades\DB;
use App\Models\Invoices\Extras\Lab;
use App\Models\Patients\Demographic;
use App\Models\Invoices\Extras\Problem;
use App\Models\Invoices\Extras\Anesthesia;
use App\Models\Invoices\Extras\SpecialCode;
use App\Models\Invoices\Extras\Miscellaneous;
use Database\Seeders\Locations\PlaceOfServiceSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PatientClonerSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Run the database seeds.
     *
     * @param string $dbname
     *
     * @return void
     */
    public function run()
    {
        // Total chunk size
        $chunkItems = 500;
        $dbname = config('database.connections.OriginalDatabase.database');

        // $this->command->line('Cloning: ' . $dbname);
        // $this->command->newLine();

        //Config the selected database
        // config()->set('database.connections.OriginalDatabase.database', $dbname);
        // DB::purge('OriginalDatabase');

        // Connect to the original database and retrieve information.
        $patientData = DB::connection('OriginalDatabase')->select('SELECT * FROM patient_data');

        $this->command->line('         <bg=cyan;fg=white> PROC </> Copying patient details.');
        $this->command->newLine();

        // INSERT the information on the correct table.
        $patients = $demographics = [];
        foreach ($patientData as $patientInfo) {
            $patients[] = [
                'pid'                   => $patientInfo->pid,
                'externalPid'           => $patientInfo->pubpid,
                'accountLevelAccession' => $patientInfo->lab_accession_no,
                'created_at'            => $patientInfo->date,
                'updated_at'            => $patientInfo->date,
            ];
            $demographics[] = [
                'pid'                   => $patientInfo->pid,
                'title'                 => $patientInfo->title,
                'firstName'             => $patientInfo->fname,
                'middleName'            => $patientInfo->mname,
                'lastName'              => $patientInfo->lname,
                'dateOfBirth'           => ($patientInfo->DOB == '0000-00-00' || $patientInfo->DOB == null) ? now() : $patientInfo->DOB,
                'genre'                 => $patientInfo->sex,
                'socialSecurityNumber'  => $patientInfo->ss,
                'driverLicenseNumber'   => $patientInfo->drivers_license,
                'street'                => $patientInfo->street,
                'city'                  => $patientInfo->city,
                'state'                 => $patientInfo->state,
                'zip'                   => $patientInfo->postal_code,
                'country'               => $patientInfo->country_code,
                'homePhone'             => $patientInfo->phone_home,
                'cellPhone'             => (strlen($patientInfo->phone_cell) > 18) ? null : $patientInfo->phone_cell,
                'emailAddress'          => ($patientInfo->email != '') ? $patientInfo->email : $patientInfo->phone_cell,
                'civilStatus'           => $patientInfo->status,
                'language'              => $patientInfo->language,
                'ethnicity'             => $patientInfo->ethnicity,
                'race'                  => $patientInfo->race,
                'dateDeceased'          => ($patientInfo->deceased_date == '0000-00-00 00:00:00') ? null : $patientInfo->deceased_date,
                'reasonDeceased'        => $patientInfo->deceased_reason,
                'created_at'            => $patientInfo->date,
                'updated_at'            => $patientInfo->date,
            ];
        }
        foreach (array_chunk($patients, $chunkItems) as $chunk) {
            Patient::insert($chunk);
        }
        foreach (array_chunk($demographics, $chunkItems) as $chunk) {
            Demographic::insert($chunk);
        }

        $this->command->line('         <bg=green;fg=white> DONE </> Copying patient details.');
        $this->command->newLine();

        $this->command->line('         <bg=cyan;fg=white> PROC </> Copying referring doctors details.');
        $this->command->newLine();

        // Connect to the original database and retrieve information.
        $refDoctorsData = DB::connection('OriginalDatabase')
            ->select('SELECT * FROM users WHERE active = 1 AND (authorized = 1 OR username = "") AND fname != "Unknown"');

        $doctorList = [];
        foreach ($refDoctorsData as $doctor) {
            $doctorList[] = [
                'id'                    => $doctor->id,
                'title'                 => $doctor->title,
                'firstName'             => Str::ucfirst(Str::lower($doctor->fname)),
                'middleName'            => Str::ucfirst(Str::lower($doctor->mname)),
                'lastName'              => Str::ucfirst(Str::lower($doctor->lname)),
                'authorized'            => $doctor->authorized,
                'npi'                   => $doctor->npi,
                'upin'                  => $doctor->upin,
                'claimAs'               => $doctor->claim_as,
                'taxonomy'              => $doctor->taxonomy,
                'stateLicenseNumber'    => $doctor->state_license_number,
                'federalTaxID'          => $doctor->federaltaxid,
                'federalDrugID'         => $doctor->federaldrugid,
                'specialty'             => $doctor->specialty,
                'billName'              => $doctor->billname,
                'info'                  => $doctor->info,
                'notes'                 => $doctor->notes,
                'assistant'             => $doctor->assistant,
                'organization'          => $doctor->organization,
                'valedictory'           => $doctor->valedictory,
                'street'                => $doctor->street,
                'streetExtended'        => $doctor->streetb,
                'city'                  => Str::ucfirst(Str::lower($doctor->city)),
                'state'                 => $doctor->state,
                'zip'                   => $doctor->zip,
                'country'               => 'US',
                'street2'               => $doctor->street2,
                'streetExtended2'       => $doctor->streetb2,
                'city2'                 => Str::ucfirst(Str::lower($doctor->city2)),
                'state2'                => $doctor->state2,
                'zip2'                  => $doctor->zip2,
                'country2'              => 'US',
                'email'                 => $doctor->email,
                'website'               => $doctor->url,
                'phone'                 => $doctor->phone,
                'cellphone'             => $doctor->phonecell,
                'fax'                   => $doctor->fax,
                'workPhone1'            => $doctor->phonew1,
                'workPhone2'            => $doctor->phonew2,
                'facilityID'            => ($doctor->facility_id == 0) ? null : $doctor->facility_id,
                'created_at'            => now(),
                'updated_at'            => now(),
            ];
        }
        foreach (array_chunk($doctorList, $chunkItems) as $chunk) {
            Referring::insert($chunk);
        }

        $this->command->line('         <bg=green;fg=white> DONE </> Copying referring doctors details.');
        $this->command->newLine();

        $this->command->line('         <bg=cyan;fg=white> PROC </> Copying rendering doctors details.');
        $this->command->newLine();

        // Connect to the original database and retrieve information.
        $renDoctorsData = DB::connection('OriginalDatabase')->select('SELECT * FROM users WHERE fname != "Unknown" AND authorized = 1');

        $renderingList = [];
        foreach ($renDoctorsData as $doctor) {
            $renderingList[] = [
                'id'                    => $doctor->id,
                'title'                 => $doctor->title,
                'firstName'             => Str::ucfirst(Str::lower($doctor->fname)),
                'middleName'            => Str::ucfirst(Str::lower($doctor->mname)),
                'lastName'              => Str::ucfirst(Str::lower($doctor->lname)),
                'abbreviation'          => $doctor->username,
                'authorized'            => $doctor->authorized,
                'npi'                   => $doctor->npi,
                'upin'                  => $doctor->upin,
                'claimAs'               => $doctor->claim_as,
                'taxonomy'              => $doctor->taxonomy,
                'stateLicenseNumber'    => $doctor->state_license_number,
                'federalTaxID'          => $doctor->federaltaxid,
                'federalDrugID'         => $doctor->federaldrugid,
                'specialty'             => $doctor->specialty,
                'billName'              => $doctor->billname,
                'info'                  => $doctor->info,
                'notes'                 => $doctor->notes,
                'assistant'             => $doctor->assistant,
                'organization'          => $doctor->organization,
                'valedictory'           => $doctor->valedictory,
                'street'                => $doctor->street,
                'streetExtended'        => $doctor->streetb,
                'city'                  => Str::ucfirst(Str::lower($doctor->city)),
                'state'                 => $doctor->state,
                'zip'                   => $doctor->zip,
                'country'               => 'US',
                'street2'               => $doctor->street2,
                'streetExtended2'       => $doctor->streetb2,
                'city2'                 => Str::ucfirst(Str::lower($doctor->city2)),
                'state2'                => $doctor->state2,
                'zip2'                  => $doctor->zip2,
                'country2'              => 'US',
                'email'                 => $doctor->email,
                'website'               => $doctor->url,
                'phone'                 => $doctor->phone,
                'cellphone'             => $doctor->phonecell,
                'fax'                   => $doctor->fax,
                'workPhone1'            => $doctor->phonew1,
                'workPhone2'            => $doctor->phonew2,
                'facilityID'            => ($doctor->facility_id == 0) ? null : $doctor->facility_id,
                'created_at'            => now(),
                'updated_at'            => now(),
            ];
        }
        foreach (array_chunk($renderingList, $chunkItems) as $chunk) {
            Rendering::insert($chunk);
        }

        $this->command->line('         <bg=green;fg=white> DONE </> Copying rendering doctors details.');
        $this->command->newLine();

        $this->command->line('         <bg=cyan;fg=white> PROC </> Copying facilities details.');
        $this->command->newLine();

        // Connect to the original database and retrieve information.
        $facilitiesData = DB::connection('OriginalDatabase')->select('SELECT * FROM facility');

        $facilitiesList = [];
        foreach ($facilitiesData as $facility) {
            $facilitiesList[] = [
                'id'                    => $facility->id,
                'fillingAs'             => ($facility->filing_as == 2) ? 'group' : 'individual',
                'groupName'             => ($facility->filing_as == 2) ? $facility->name : null,
                'firstName'             => ($facility->filing_as == 2) ? null : $facility->name,
                'middleName'            => ($facility->filing_as == 2) ? null : $facility->middle_name,
                'lastName'              => ($facility->filing_as == 2) ? null : $facility->last_name,
                'street'                => $facility->street,
                'streetExtended'        => null,
                'city'                  => $facility->city,
                'state'                 => $facility->state,
                'zip'                   => $facility->postal_code,
                'country'               => $facility->country_code,
                'payToStreet'           => $facility->pto_street,
                'payToStreetExtended'   => null,
                'payToCity'             => $facility->pto_city,
                'payToState'            => $facility->pto_state,
                'payToZip'              => $facility->pto_postal_code,
                'payToCountry'          => $facility->country_code,
                'phone'                 => $facility->phone,
                'fax'                   => $facility->fax,
                'email'                 => $facility->email,
                'website'               => $facility->website,
                'serviceLocation'       => ($facility->service_location == 1) ? true : false,
                'billingLocation'       => ($facility->billing_location == 1) ? true : false,
                'primaryBusinessEntity' => ($facility->primary_business_entity == 1) ? true : false,
                'referenceLab'          => ($facility->reference_lab == 1) ? true : false,
                'acceptsAssigment'      => ($facility->accepts_assignment == 1) ? true : false,
                'prefix'                => $facility->practicePrefix,
                'attn'                  => $facility->attn,
                'creditCardsAccepted'   => $facility->cc_accepted,
                'federalEIN'            => $facility->federal_ein,
                'X12SenderID'           => $facility->x12_sender_id,
                'domainIdentifier'      => $facility->domain_identifier,
                'taxonomy'              => $facility->taxonomy,
                'facilityNPI'           => $facility->facility_npi,
                'taxIDType'             => $facility->tax_id_type,
                'placeOfServiceID'      => $facility->pos_code,
                'created_at'            => now(),
                'updated_at'            => now(),
            ];
        }
        foreach (array_chunk($facilitiesList, $chunkItems) as $chunk) {
            Facility::insert($chunk);
        }

        $this->command->line('         <bg=green;fg=white> DONE </> Copying facilities details.');
        $this->command->newLine();

        $this->command->line('         <bg=cyan;fg=white> PROC </> Setting place of service details.');
        $this->command->newLine();

        $this->callSilent(PlaceOfServiceSeeder::class);

        $this->command->line('         <bg=green;fg=white> DONE </> Setting place of service details.');
        $this->command->newLine();

        $this->command->line('         <bg=cyan;fg=white> PROC </> Copying encounter details.');
        $this->command->newLine();

        // Connect to the original database and retrieve information.
        $encounterData = DB::connection('OriginalDatabase')->select('SELECT * FROM form_encounter');

        // INSERT the information on the correct table.
        $encounter = $problemsTab = $miscellaneousTab = $labTab = [];
        foreach ($encounterData as $encounterInfo) {
            $encounterInfo->date = ($encounterInfo->date == '1969-12-31 00:00:00') ? now() : $encounterInfo->date;

            $encounter[] = [
                'encounter'             => $encounterInfo->encounter,
                'pid'                   => $encounterInfo->pid,
                'entryDate'             => $encounterInfo->date,
                'serviceDate'           => $encounterInfo->date,
                'serviceDateTo'         => ($encounterInfo->date_to == '0000-00-00 00:00:00' || $encounterInfo->date_to == null) ? null : $encounterInfo->date_to,
                'facilityID'            => $encounterInfo->facility_id,
                'billingFacilityID'     => $encounterInfo->billing_facility,
                'placeOfServiceID'      => $encounterInfo->place_of_service,
                'sensitivity'           => $encounterInfo->sensitivity,
                'admisionDate'          => ($encounterInfo->onset_date == '0000-00-00 00:00:00' || $encounterInfo->onset_date == null) ? null : $encounterInfo->onset_date,
                'dischargeDate'         => ($encounterInfo->discharge_date == '0000-00-00' || $encounterInfo->discharge_date == null) ? null : $encounterInfo->discharge_date,
                'renderingProviderID'   => ($encounterInfo->provider_id == 0) ? null : $encounterInfo->provider_id,
                'referringProviderID'   => ($encounterInfo->referring_physician_id == 0) ? null : $encounterInfo->referring_physician_id,
                'orderingProviderID'    => ($encounterInfo->ordering_physician_id == 0) ? null : $encounterInfo->ordering_physician_id,
                'supervisingProviderID' => ($encounterInfo->supervising_physician_id == 0) ? null : $encounterInfo->supervising_physician_id,
                'consult'               => $encounterInfo->billing_note,
                'authorizationNumberID' => ($encounterInfo->authorization_id == 0) ? null : $encounterInfo->authorization_id,
                'updated_at'            => $encounterInfo->updated_at,
            ];

            $extraFields = DB::connection('OriginalDatabase')
                ->select(
                    'SELECT * FROM metadata_fields_values WHERE pid = :pid AND encounter = :enc ORDER BY id_tab, id_field',
                    ['pid' => $patientInfo->pid, 'enc' => $encounterInfo->encounter]
                );

            $extraData = [];
            for ($tab = 1; $tab <= 4; $tab++) {
                switch ($tab) {
                    case 1:
                    default:
                        $maxfield = 9;
                        break;
                    case 2:
                        $maxfield = 17;
                        break;
                    case 3:
                        $maxfield = 8;
                        break;
                }
                for ($field = 1; $field <= $maxfield; $field++) {
                    $extraData[$tab][$field] = null;
                    foreach ($extraFields as $fieldItems) {
                        if ($fieldItems->id_tab == $tab && $fieldItems->id_field == $field) {
                            $extraData[$tab][$field] = (empty($fieldItems->field_value)) ? null : $fieldItems->field_value;
                        }
                    }
                }
            }

            $problemsTab[] = [
                'encounter'                 => $encounterInfo->encounter,
                'conditionOriginatedDate'   => (empty($extraData[1][1])) ? null : date('Y-m-d', strtotime($extraData[1][1])),
                'firstConsultedDate'        => (empty($extraData[1][2])) ? null : date('Y-m-d', strtotime($extraData[1][2])),
                'lastSeenDate'              => (empty($extraData[1][3])) ? null : date('Y-m-d', strtotime($extraData[1][3])),
                'acuteManifestationDate'    => (empty($extraData[1][4])) ? null : date('Y-m-d', strtotime($extraData[1][4])),
                'lastXRayDate'              => (empty($extraData[1][5])) ? null : date('Y-m-d', strtotime($extraData[1][5])),
                'illnessAccidentPregnancy'  => $extraData[1][6],
                'autoAccidentState'         => $extraData[1][7],
                'accidentDate'              => (empty($extraData[1][8])) ? null : date('Y-m-d', strtotime($extraData[1][8])),
                'employmentRelated'         => (empty($extraData[1][9]) || $extraData[1][9] == 'off') ? false : true,
                'created_at'                => $encounterInfo->updated_at,
                'updated_at'                => $encounterInfo->updated_at,
            ];

            $miscellaneousTab[] = [
                'encounter'                     => $encounterInfo->encounter,
                'mammographyCertificateNumber'  => $extraData[2][1],
                'claimReason'                   => $extraData[2][2],
                'originalReferenceNumber'       => $extraData[2][3],
                'delayReason'                   => $extraData[2][4],
                'claimNote'                     => $extraData[2][5],
                'codeClaimNote'                 => $extraData[2][6],
                'lineNote'                      => $extraData[2][7],
                'codeLineNote'                  => $extraData[2][8],
                'reportType'                    => $extraData[2][9],
                'reportTransmission'            => $extraData[2][10],
                'attachmentControlNumber'       => $extraData[2][11],
                'medicaidServicesEP'            => (empty($extraData[2][13]) || $extraData[2][13] == 'off') ? false : true,
                'referralGiven'                 => (empty($extraData[2][14]) || $extraData[2][14] == 'off') ? false : true,
                'condition1'                    => $extraData[2][15],
                'condition2'                    => $extraData[2][16],
                'condition3'                    => $extraData[2][17],
                'created_at'                    => $encounterInfo->updated_at,
                'updated_at'                    => $encounterInfo->updated_at,
            ];

            $labTab[] = [
                'encounter'                 => $encounterInfo->encounter,
                'accessionNumberLabLevel'   => $extraData[3][1],
                'salesRepresentative'       => $extraData[3][2],
                'locationCode'              => $extraData[3][3],
                'locationName'              => $extraData[3][4],
                'labUserDefined'            => $extraData[3][5],
                'referenceLab'              => $extraData[3][6],
                'panelName'                 => $extraData[3][7],
                'labTestType'               => $extraData[3][8],
                'created_at'                => $encounterInfo->updated_at,
                'updated_at'                => $encounterInfo->updated_at,
            ];

            DB::update(
                'UPDATE patients SET latestServiceDate = ? WHERE pid = ?',
                [
                    $encounterInfo->date,
                    $encounterInfo->pid
                ]
            );
        }
        foreach (array_chunk($encounter, $chunkItems) as $chunk) {
            Encounter::insert($chunk);
        }
        foreach (array_chunk($problemsTab, $chunkItems) as $chunk) {
            Problem::insert($chunk);
        }
        foreach (array_chunk($miscellaneousTab, $chunkItems) as $chunk) {
            Miscellaneous::insert($chunk);
        }
        foreach (array_chunk($labTab, $chunkItems) as $chunk) {
            Lab::insert($chunk);
        }

        $this->command->line('         <bg=green;fg=white> DONE </> Copying encounter details.');
        $this->command->newLine();

        $this->command->line('         <bg=cyan;fg=white> PROC </> Copying charge details.');
        $this->command->newLine();

        $charges = $anesthesias = $ndcs = [];
        $chrgidx = 1;
        foreach ($encounterData as $encounterInfo) {
            // Connect to the original database and retrieve information.
            $chargesData = DB::connection('OriginalDatabase')->select(
                'SELECT * FROM billing WHERE pid = :pid AND encounter = :enc AND code_type NOT IN ("ICD9", "ICD10")',
                ['pid' => $encounterInfo->pid, 'enc' => $encounterInfo->encounter]
            );

            // INSERT the information on the correct table.
            foreach ($chargesData as $charge) {
                $charges[]  = [
                    'encounter'     => $charge->encounter,
                    'codeType'      => $charge->code_type,
                    'code'          => $charge->code,
                    'codeText'      => $charge->code_desc_837,
                    'fee'           => $charge->fee,
                    'copay'         => 0,
                    'units'         => $charge->units,
                    'modifier'      => $charge->modifier,
                    'ICDitems'      => $charge->justify,
                    'noteCodes'     => $charge->notecodes,
                    'custom1'       => $charge->custom1,
                    'custom2'       => $charge->custom2,
                    'custom3'       => $charge->custom3,
                    'custom4'       => $charge->custom4,
                    'custom5'       => $charge->custom5,
                    'created_at'    => $charge->date,
                    'updated_at'    => $charge->updated_at,
                    'deleted_at'    => ($charge->activity) ? null : $charge->updated_at,
                ];

                $anesthesias[] = [
                    'charge'                    => $chrgidx,
                    'anesthesiaStartTime'       => ($charge->anesthesia_start_time == '00:00:00') ? null : $charge->anesthesia_start_time,
                    'anesthesiaStopTime'        => ($charge->anesthesia_stop_time == '00:00:00') ? null : $charge->anesthesia_stop_time,
                    'anesthesiaLapseTime'       => ($charge->anesthesia_lapse_time == '00:00:00' || $charge->anesthesia_lapse_time == 0) ? null : $charge->anesthesia_lapse_time,
                    'anesthesiaTimeUnits'       => $charge->anesthesia_time_units,
                    'anesthesiaBaseUnits'       => $charge->anesthesia_base_units,
                    'anesthesiaUnitCharge'      => $charge->anesthesia_unit_charge,
                    'anesthesiaM1'              => $charge->anesthesia_m1select,
                    'anesthesiaM2'              => $charge->anesthesia_m2select,
                    'anesthesiaInfusion'        => $charge->anesthesia_infusion,
                    'anesthesiaBasicValue'      => $charge->anesthesia_basic_value,
                    'anesthesiaModifierUnits'   => $charge->anesthesia_mods_units,
                    'created_at'                => $charge->date,
                    'updated_at'                => $charge->updated_at,
                    'deleted_at'                => ($charge->activity) ? null : $charge->updated_at,
                ];

                $ndcs[] = [
                    'charge'        => $chrgidx,
                    'NDCvalue'      => $charge->ndc_info,
                    'NDCquantity'   => null, // Uses standard units field
                    'NDCtype'       => 'ML',
                    'created_at'    => $charge->date,
                    'updated_at'    => $charge->updated_at,
                    'deleted_at'    => ($charge->activity) ? null : $charge->updated_at,
                ];

                $chrgidx++;
            }
        }
        foreach (array_chunk($charges, $chunkItems) as $chunk) {
            Charge::insert($chunk);
        }
        foreach (array_chunk($anesthesias, $chunkItems) as $chunk) {
            Anesthesia::insert($chunk);
        }
        foreach (array_chunk($ndcs, $chunkItems) as $chunk) {
            SpecialCode::insert($chunk);
        }

        $this->command->line('         <bg=green;fg=white> DONE </> Copying charge details.');
        $this->command->newLine();
    }
}
