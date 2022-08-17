<?php

namespace App\Models\Invoices;

use App\Models\Invoices\Charge;
use App\Models\Patients\Patient;
use App\Models\Doctors\Referring;
use App\Models\Invoices\Extras\Lab;
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
     * Get the patient that the encounter belongs to.
     */
    public function patient()
    {
        return $this->belongsTo(Patient::class, 'pid', 'pid')->with('demographic');
    }


    /**
     * Get the Referring Doctor that the encounter belongs to.
     */
    public function referringDoctor()
    {
        return $this->hasOne(Referring::class, 'id', 'referringProviderID');
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


    /**
     * Get lab information associated to encounter
     *
     * @return void
     */
    public function labTab()
    {
        return $this->hasOne(Lab::class, 'encounter', 'encounter');
    }


    /**
     * Get charge information associated to encounter
     *
     * @return void
     */
    public function chargesList()
    {
        return $this->hasMany(Charge::class, 'encounter', 'encounter')->with('anesthesiaInfo', 'specialCodeInfo');
    }
}
