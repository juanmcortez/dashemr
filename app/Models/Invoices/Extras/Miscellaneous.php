<?php

namespace App\Models\Invoices\Extras;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Miscellaneous extends Model
{
    use HasFactory, SoftDeletes;


    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'encounter';


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'encounter',
        'mammographyCertificateNumber',
        'originalReferenceNumber',
        'delayReason',
        'claimNote',
        'codeClaimNote',
        'lineNote',
        'reportType',
        'reportTransmission',
        'attachmentControlNumber',
        'medicaidServicesEP',
        'referralGiven',
        'condition1',
        'condition2',
        'condition3',
    ];


    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'encounter',
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
        'medicaidServicesEP'    => 'boolean',
        'referralGiven'         => 'boolean',
    ];
}
