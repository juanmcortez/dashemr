<?php

namespace App\Models\Settings;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Practice extends Model
{
    use HasFactory, SoftDeletes;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'isLabPractice',
        'labPracticeType',
    ];


    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'id',
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
        'isLabPractice' => 'boolean',
    ];


    /**
     * This is the set of options for the "Type" select
     *
     * @return array
     */
    public function typeOptions()
    {
        return [
            ['value' => '', 'description' => 'No lab options'],
            ['value' => 'type1', 'description' => 'Lab options with claim level Accession #'],
            ['value' => 'type2', 'description' => 'Lab options with patient level Accession #'],
        ];
    }


    /**
     * This is the set of options for the "Scheduler" select
     *
     * @return array
     */
    public function schedulerOptions()
    {
        return [
            ['value' => false, 'description' => 'Disabled'],
            ['value' => true, 'description' => 'Enabled'],
        ];
    }


    /**
     * This is the set of options for the "Eligibility" select
     *
     * @return array
     */
    public function eligibilityOptions()
    {
        return [
            ['value' => false, 'description' => 'Disabled'],
            ['value' => true, 'description' => 'Enabled'],
        ];
    }
}
