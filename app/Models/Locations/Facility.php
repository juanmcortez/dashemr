<?php

namespace App\Models\Locations;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Facility extends Model
{
    use HasFactory, SoftDeletes;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fillingAs',
        'groupName',
        'firstName',
        'middleName',
        'lastName',
        'street',
        'streetExtended',
        'city',
        'state',
        'zip',
        'country',
        'payToStreet',
        'payToStreetExtended',
        'payToCity',
        'payToState',
        'payToZip',
        'payToCountry',
        'phone',
        'fax',
        'email',
        'website',
        'serviceLocation',
        'billingLocation',
        'primaryBusinessEntity',
        'referenceLab',
        'acceptsAssigment',
        'prefix',
        'attn',
        'creditCardsAccepted',
        'federalEIN',
        'X12SenderID',
        'domainIdentifier',
        'taxonomy',
        'facilityNPI',
        'taxIDType',
        'placeOfServiceID',
    ];


    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
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
        'serviceLocation'       => 'boolean',
        'billingLocation'       => 'boolean',
        'primaryBusinessEntity' => 'boolean',
        'referenceLab'          => 'boolean',
        'acceptsAssigment'      => 'boolean',
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
        if ($this->fillingAs == 'group') {
            return $this->groupName;
        } else {
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
}
