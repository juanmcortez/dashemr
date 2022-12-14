<?php

namespace App\Models\Patients;

use App\Models\Doctors\Rendering;
use App\Models\Invoices\Encounter;
use App\Models\Patients\Demographic;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Patient extends Model
{
    use HasFactory, SoftDeletes;


    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'pid';


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'externalPid',
        'latestServiceDate',
        'accountLevelAccession',
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
        'created_at'            => 'datetime:M d, Y',
        'latestServiceDate'     => 'datetime:M d, Y',
    ];


    /**
     * Accesor: latestServiceDate.
     *
     * @param  date  $value
     * @return string
     */
    public function getlatestServiceDateAttribute($value)
    {
        return (is_null($value)) ? '--' : $value;
    }


    /**
     * Get demographic information associated to patient
     *
     * @return void
     */
    public function demographic()
    {
        return $this->hasOne(Demographic::class, 'pid', 'pid')->withDefault();
    }


    /**
     * Get encounters information associated to patient
     *
     * @return void
     */
    public function encounters()
    {
        return $this->hasMany(Encounter::class, 'pid', 'pid')
            ->orderBy('serviceDate', 'desc')
            ->orderBy('encounter', 'desc');
    }


    /**
     * This function retrieves the information associated between encounters and charges
     *
     * @return void
     */
    public function encountersCharges()
    {
        return [$this->encounters->load('renderingDoctor'), $this->encounters->load('chargesList')];
    }
}
