<?php

namespace App\Models\Settings;

use Illuminate\Support\Arr;
use App\Models\Doctors\Referring;
use App\Models\Doctors\Rendering;
use App\Models\Locations\Facility;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use App\Models\Locations\PlaceOfService;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Options extends Model
{
    use HasFactory, SoftDeletes;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'listType',
        'listName',
        'listID',
        'listIDPar',
        'itemDescr',
        'itemValue',
        'itemOrder',
        'isDefault',
    ];


    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'id',
        'listType',
        'listName',
        'listID',
        'listIDPar',
        'itemOrder',
        'created_at',
        'updated_at',
        'deleted_at',
    ];


    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'isDefault' => 'boolean',
    ];


    /**
     * This function retrieves all the options for the select
     * that displays the Facilities
     *
     * @param string $listDoctors
     *
     * @return array
     */
    public function getFacilites($listFacilities = '')
    {
        switch ($listFacilities) {
            default:
            case 'service':
                $optionsList = Facility::select([
                    'id AS value',
                    DB::raw('groupName AS description'),
                ])
                    ->where('serviceLocation', true)
                    ->get()
                    ->toArray();
                break;
            case 'billing':
                $optionsList = Facility::select([
                    'id AS value',
                    DB::raw('groupName AS description'),
                ])
                    ->where('billingLocation', true)
                    ->get()
                    ->toArray();
                break;
            case 'placeOfService':
                $optionsList = PlaceOfService::select([
                    'code AS value',
                    DB::raw('CONCAT(code, ": ", title) AS description'),
                ])
                    ->get()
                    ->toArray();
                break;
        }

        // Initial values
        $optionsList = Arr::prepend($optionsList, ['value' => null, 'description' => 'Select ...', "default" => 1]);

        // Return values
        return $optionsList;
    }


    /**
     * This function retrieves all the options for the select
     * that displays the doctors
     *
     * @param string $listDoctors
     *
     * @return array
     */
    public function getSelectDoctors($listDoctors = '')
    {
        switch ($listDoctors) {
            case 'rendering':
                $optionsList = Rendering::select(
                    'id AS value',
                    DB::raw('CONCAT(lastName,", ",firstName) AS description'),
                )->get()->toArray();
                break;
            default:
            case 'referring':
            case 'ordering':
            case 'supervising':
                $optionsList = Referring::select(
                    'id AS value',
                    DB::raw('CONCAT(lastName,", ",firstName) AS description'),
                )->get()->toArray();
                break;
        }

        // Initial values
        $optionsList = Arr::prepend($optionsList, ['value' => null, 'description' => 'Select ...', "default" => 1]);

        // Return values
        return $optionsList;
    }


    /**
     * This function retrieves all the options for the select
     * that are stored in the database as an option list
     *
     * @param string $listName
     * @param string $selectView ""|description|value
     *
     * @return array
     */
    public function getSelectOptions($listName = '', $selectView = '')
    {
        // Database values
        switch ($selectView) {
            case '':
            default:
                $optionsList = $this->where('listType', 'selectoption')
                    ->where('listIDPar', $listName)
                    ->orderBy('itemOrder')
                    ->get(['itemValue AS value', 'itemDescr AS description', 'isDefault AS default'])
                    ->toArray();
                break;
            case 'description':
                $optionsList = $this->where('listType', 'selectoption')
                    ->where('listIDPar', $listName)
                    ->orderBy('itemOrder')
                    ->get(['itemDescr AS value', 'itemDescr AS description', 'isDefault AS default'])
                    ->toArray();
                break;
            case 'value':
                $optionsList = $this->where('listType', 'selectoption')
                    ->where('listIDPar', $listName)
                    ->orderBy('itemOrder')
                    ->get(['itemValue AS value', 'itemValue AS description', 'isDefault AS default'])
                    ->toArray();
                break;
        }

        // Initial values
        // $optionsList = Arr::prepend($optionsList, ['value' => null, 'description' => '', "default" => 0]);
        // $optionsList = Arr::prepend($optionsList, ['value' => '', 'description' => 'Select ...', "default" => 1]);
        $optionsList = Arr::prepend($optionsList, ['value' => null, 'description' => 'Select ...', "default" => 1]);

        // Return values
        return $optionsList;
    }
}
