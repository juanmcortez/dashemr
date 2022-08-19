<?php

namespace App\Models\Doctors;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Referring extends Model
{
    use HasFactory, SoftDeletes;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'firstName',
        'middleName',
        'lastName',
        'authorized',
        'npi',
        'upin',
        'claimAs',
        'taxonomy',
        'stateLicenseNumber',
        'federalTaxID',
        'federalDrugID',
        'specialty',
        'billName',
        'info',
        'notes',
        'assistant',
        'organization',
        'valedictory',
        'street',
        'streetExtended',
        'city',
        'state',
        'zip',
        'country',
        'street2',
        'streetExtended2',
        'city2',
        'state2',
        'zip2',
        'country2',
        'email',
        'website',
        'phone',
        'cellphone',
        'fax',
        'workPhone1',
        'workPhone2',
        'facilityID',
    ];


    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'id',
        'title',
        'authorized',
        'upin',
        'taxonomy',
        'stateLicenseNumber',
        'federalTaxID',
        'federalDrugID',
        'billName',
        'info',
        'notes',
        'assistant',
        'valedictory',
        'website',
        'facilityID',
        'updated_at',
        'deleted_at',
    ];


    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'created_at'    => 'datetime:M d, Y',
        'authorized'    => 'boolean',
    ];


    /**
     * Accesor: Dynamic attribute.
     *
     * @var array
     */
    protected $appends = ['full_name'];


    /**
     * Accesor: Full Name.
     * Dynamically created.
     *
     * @return integer
     */
    public function getFullNameAttribute()
    {
        if ($this->middleName) {
            return Str::ucfirst(Str::lower($this->lastName)) . ', ' . Str::ucfirst(Str::lower($this->firstName)) . ' ' . Str::ucfirst(Str::lower($this->middleName));
        } else {
            if ($this->lastName && $this->firstName) {
                return Str::ucfirst(Str::lower($this->lastName)) . ', ' . Str::ucfirst(Str::lower($this->firstName));
            } else {
                return '';
            }
        }
    }
}
