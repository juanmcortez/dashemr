<?php

namespace App\Models\Settings;

use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Model;
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
        $optionsList = Arr::prepend($optionsList, ['value' => null, 'description' => '', "default" => 0]);
        $optionsList = Arr::prepend($optionsList, ['value' => '', 'description' => 'Select ...', "default" => 1]);

        // Return values
        return $optionsList;
    }
}
