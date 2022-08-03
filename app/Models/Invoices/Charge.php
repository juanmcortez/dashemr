<?php

namespace App\Models\Invoices;

use Illuminate\Database\Eloquent\Model;
use App\Models\Invoices\Extras\Anesthesia;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Charge extends Model
{
    use HasFactory, SoftDeletes;


    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'charge';


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'encounter',
        'codeType',
        'code',
        'codeText',
        'fee',
        'copay',
        'units',
        'modifier',
        'ICDitems',
        'noteCodes',
        'custom1',
        'custom2',
        'custom3',
        'custom4',
        'custom5',
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
    protected $casts = [];


    /**
     * Get anesthesia information associated to charge
     *
     * @return void
     */
    public function anesthesiaInfo()
    {
        return $this->hasOne(Anesthesia::class, 'charge', 'charge');
    }
}
