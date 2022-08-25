<?php

namespace App\Models\Invoices\Extras;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Problem extends Model
{
    use HasFactory, SoftDeletes;


    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'encounterProb';


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'encounterProb',
        'conditionOriginatedDate',
        'firstConsultedDate',
        'lastSeenDate',
        'acuteManifestationDate',
        'lastXRayDate',
        'illnessAccidentPregnancy',
        'autoAccidentState',
        'accidentDate',
        'employmentRelated',
    ];


    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'encounterProb',
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
        'conditionOriginatedDate'   => 'datetime:M d, Y',
        'firstConsultedDate'        => 'datetime:M d, Y',
        'lastSeenDate'              => 'datetime:M d, Y',
        'acuteManifestationDate'    => 'datetime:M d, Y',
        'lastXRayDate'              => 'datetime:M d, Y',
        'illnessAccidentPregnancy'  => 'datetime:M d, Y',
        'accidentDate'              => 'datetime:M d, Y',
        'employmentRelated'         => 'boolean',
    ];
}
