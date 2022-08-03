<?php

namespace App\Models\Invoices\Extras;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Anesthesia extends Model
{
    use HasFactory, SoftDeletes;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'charge',
        'anesthesiaStartTime',
        'anesthesiaStopTime',
        'anesthesiaLapseTime',
        'anesthesiaTimeUnits',
        'anesthesiaBaseUnits',
        'anesthesiaUnitCharge',
        'anesthesiaM1',
        'anesthesiaM2',
        'anesthesiaInfusion',
        'anesthesiaBasicValue',
        'anesthesiaModifierUnits',
    ];


    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'charge',
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
        'anesthesiaStartTime'   => 'datetime: H:i',
        'anesthesiaStopTime'    => 'datetime: H:i',
        'anesthesiaLapseTime'   => 'datetime: H:i',
    ];
}
