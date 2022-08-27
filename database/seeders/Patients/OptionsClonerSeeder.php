<?php

namespace Database\Seeders\Patients;

use Illuminate\Database\Seeder;
use App\Models\Settings\Options;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class OptionsClonerSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Run the database seeds.
     *
     * @param string $dbname
     * @param integer $chunkItems
     *
     * @return void
     */
    public function run($chunkItems)
    {

        $this->command->line('         <bg=cyan;fg=white> PROC </> Creating options items.');
        $this->command->newLine();


        // Creating option list
        $optionsData = [
            ['title' => 'Illness', 'option_id' => 'illness', 'is_default' => false],
            ['title' => 'Accident', 'option_id' => 'accident', 'is_default' => false],
            ['title' => 'Pregnancy', 'option_id' => 'pregnancy', 'is_default' => false],
        ];
        $this->processTheOption($optionsData, 'Illness Accident Pregnancy', 'illnessaccidentpregnancy', $chunkItems);
        // Creating option list


        // Creating option list
        $optionsData = [
            ['title' => 'Original Claim', 'option_id' => 1, 'is_default' => false],
            ['title' => 'Adjustment / Replacement of a Previous Claim', 'option_id' => 7, 'is_default' => false],
            ['title' => 'Void / Cancel of a Previous Claim', 'option_id' => 8, 'is_default' => false],
        ];
        $this->processTheOption($optionsData, 'Claim Reason', 'claimreason', $chunkItems);
        // Creating option list


        // Creating option list
        $optionsData = [
            ['title' => 'Authorization delays', 'option_id' => 'autdel', 'is_default' => false],
            ['title' => 'Delay in Certifying Provider', 'option_id' => 'decepr', 'is_default' => false],
            ['title' => 'Delay in Custom-made Appliances', 'option_id' => 'decuap', 'is_default' => false],
            ['title' => 'Delay in Eligibility Determination', 'option_id' => 'deelde', 'is_default' => false],
            ['title' => 'Delay in Prior Approval', 'option_id' => 'deprap', 'is_default' => false],
            ['title' => 'Delay in Supplying Billing Forms', 'option_id' => 'desubi', 'is_default' => false],
            ['title' => 'Litigation', 'option_id' => 'litiga', 'is_default' => false],
            ['title' => 'Original Denied-not Billing Limit', 'option_id' => 'ordebi', 'is_default' => false],
            ['title' => 'Other', 'option_id' => 'other', 'is_default' => false],
            ['title' => 'Proof of Eligibility Unavailable', 'option_id' => 'prelun', 'is_default' => false],
        ];
        $this->processTheOption($optionsData, 'Delay Reason', 'delayreason', $chunkItems);
        // Creating option list


        // Creating option list
        $optionsData = [
            ['title' => 'Additional Information', 'option_id' => 'addinf', 'is_default' => false],
            ['title' => 'Block 19 (Paper Claim)', 'option_id' => 'bloc19', 'is_default' => false],
            ['title' => 'Certification Narrative', 'option_id' => 'cernar', 'is_default' => false],
            ['title' => 'Diagnosis Description', 'option_id' => 'diades', 'is_default' => false],
            ['title' => 'Goal Plans, etc.', 'option_id' => 'goapla', 'is_default' => false],
            ['title' => 'Payment', 'option_id' => 'payment', 'is_default' => false],
            ['title' => 'Third Party Organization', 'option_id' => 'thpaor', 'is_default' => false],
        ];
        $this->processTheOption($optionsData, 'Claim note', 'claimnote', $chunkItems);
        // Creating option list


        // Creating option list
        $optionsData = [
            ['title' => 'Additional Information', 'option_id' => 'addinf', 'is_default' => false],
            ['title' => 'Goal Plans, etc.', 'option_id' => 'goapla', 'is_default' => false],
            ['title' => 'Payment', 'option_id' => 'payment', 'is_default' => false],
            ['title' => 'Third Party Organization Not', 'option_id' => 'thpaor', 'is_default' => false],
        ];
        $this->processTheOption($optionsData, 'Line Note', 'linenote', $chunkItems);
        // Creating option list


        // Creating option list
        $optionsData = [
            ['title' => 'Admission Summary', 'option_id' => 'admsun', 'is_default' => false],
            ['title' => 'Certification', 'option_id' => 'certif', 'is_default' => false],
            ['title' => 'Dental Models', 'option_id' => 'denmod', 'is_default' => false],
            ['title' => 'Diagnostic Report', 'option_id' => 'diarep', 'is_default' => false],
            ['title' => 'Discharge Summary', 'option_id' => 'dissum', 'is_default' => false],
        ];
        $this->processTheOption($optionsData, 'Report Type', 'reporttype', $chunkItems);
        // Creating option list


        // Creating option list
        $optionsData = [
            ['title' => 'Available at Provider Site', 'option_id' => 'avprsi', 'is_default' => false],
            ['title' => 'By Fax', 'option_id' => 'byfax', 'is_default' => false],
            ['title' => 'By Mail', 'option_id' => 'bymail', 'is_default' => false],
            ['title' => 'Electronic Only', 'option_id' => 'eleonl', 'is_default' => false],
            ['title' => 'Email', 'option_id' => 'byemai', 'is_default' => false],
        ];
        $this->processTheOption($optionsData, 'Report Transmission', 'reporttransmission', $chunkItems);
        // Creating option list


        // Creating option list
        $optionsData = [
            ['title' => 'New Services Requested', 'option_id' => 'nesere', 'is_default' => false],
            ['title' => 'Not Used', 'option_id' => 'notused', 'is_default' => false],
            ['title' => 'Patient Refused Referral', 'option_id' => 'parere', 'is_default' => false],
            ['title' => 'Under Treatment', 'option_id' => 'undtre', 'is_default' => false],
        ];
        $this->processTheOption($optionsData, 'Conditions', 'misccondition', $chunkItems);
        // Creating option list


        // Creating option list
        $optionsData = DB::connection('OriginalDatabase')
            ->select('SELECT * FROM list_options WHERE list_id = "Location_Codes" ORDER BY "seq"');
        $this->processTheOption($optionsData, 'Location Codes', 'locationcodes', $chunkItems);
        // Creating option list


        // Creating option list
        $optionsData = DB::connection('OriginalDatabase')
            ->select('SELECT * FROM list_options WHERE list_id = "state" ORDER BY "option_id"');
        $this->processTheOption($optionsData, 'Country State', 'usstates', $chunkItems);
        // Creating option list


        $this->command->line('         <bg=green;fg=white> DONE </> Creating options items.');
        $this->command->newLine();
    }



    /**
     * This function is used to store the information on the DB
     *
     * @param object $listData
     * @param string $parentDescription
     * @param string $parentListName
     * @param integer $chunkItems
     *
     * @return void
     */
    public function processTheOption($listData, $parentDescription = '', $parentListName = '', $chunkItems = 500)
    {
        // Create the parent
        Options::factory()->create([
            'listType'      => 'selectlist',
            'listName'      => $parentDescription,
            'listID'        => $parentListName,
            'itemOrder'     => 0,
            'created_at'    => now(),
            'updated_at'    => now(),
        ]);

        // Create the childs
        $childlist = [];
        $idx = 1;
        foreach ($listData as $option) {
            if (is_array($option)) {
                // If data is an array
                $childlist[] = [
                    'listType'      => 'selectoption',
                    'listIDPar'     => $parentListName,
                    'itemDescr'     => $option['title'],
                    'itemValue'     => $option['option_id'],
                    'itemOrder'     => $idx,
                    'isDefault'     => boolval($option['is_default']),
                    'created_at'    => now(),
                    'updated_at'    => now(),
                ];
            } else {
                // If data is a collection
                $childlist[] = [
                    'listType'      => 'selectoption',
                    'listIDPar'     => $parentListName,
                    'itemDescr'     => $option->title,
                    'itemValue'     => $option->option_id,
                    'itemOrder'     => $idx,
                    'isDefault'     => boolval($option->is_default),
                    'created_at'    => now(),
                    'updated_at'    => now(),
                ];
            }
            $idx++;
        }
        foreach (array_chunk($childlist, $chunkItems) as $chunk) {
            Options::insert($chunk);
        }
    }
}
