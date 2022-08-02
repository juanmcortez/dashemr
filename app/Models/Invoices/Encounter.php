<?php

namespace App\Models\Invoices;

use App\Models\Patients\Patient;
use App\Models\Patients\Demographic;
use App\Models\Invoices\Extras\Problem;
use Illuminate\Database\Eloquent\Model;
use App\Models\Invoices\Extras\Miscellaneous;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Encounter extends Model
{
    use HasFactory, SoftDeletes;


    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;


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
        'pid',
        'entryDate',
        'serviceDate',
        'serviceDateTo',
        'facilityID',
        'billingFacilityID',
        'placeOfServiceID',
        'sensitivity',
        'admisionDate',
        'dischargeDate',
        'renderingProviderID',
        'referringProviderID',
        'orderingProviderID',
        'supervisingProviderID',
        'consult',
        'authorizationNumberID',
    ];


    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'updated_at',
        'deleted_at',
    ];


    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'entryDate'                 => 'datetime:M d, Y',
        'serviceDate'               => 'datetime:M d, Y',
        'serviceDateTo'             => 'datetime:M d, Y',
        'admisionDate'              => 'datetime:M d, Y',
        'dischargeDate'             => 'datetime:M d, Y',
    ];


    /**
     * Get patient information associated to invoice
     *
     * @return void
     */
    public function patientInfo()
    {
        return $this->belongsTo(Patient::class, 'pid', 'pid');
    }


    /**
     * Get demographic information associated to invoice
     *
     * @return void
     */
    public function demographicInfo()
    {
        return $this->belongsTo(Demographic::class, 'pid', 'pid');
    }


    /**
     * Get problems information associated to encounter
     *
     * @return void
     */
    public function problemTab()
    {
        return $this->hasOne(Problem::class, 'encounter', 'encounter');
    }


    /**
     * Get miscellaneous information associated to encounter
     *
     * @return void
     */
    public function miscellaneousTab()
    {
        return $this->hasOne(Miscellaneous::class, 'encounter', 'encounter');
    }
}
