<?php

namespace App\Models\Invoices;

use Illuminate\Database\Eloquent\Model;
use App\Models\Invoices\Extras\Anesthesia;
use App\Models\Invoices\Extras\SpecialCode;
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
    protected $casts = [
        'fee'   => 'decimal:2',
        'copay' => 'decimal:2',
    ];


    /**
     * Accesor: Dynamic attribute.
     *
     * @var array
     */
    protected $appends = ['icd_items_list'];


    /**
     * Accesor: ICD Items List.
     *
     * @return string
     */
    public function getIcdItemsListAttribute()
    {
        $ICDList = explode(':', $this->ICDitems);
        $returnList = '';
        foreach ($ICDList as $idx => $ICD) {
            if (!empty($ICD)) {
                $items = explode('|', $ICD);
                $returnList .= $items[1] . " - ";
            }
        }
        return substr($returnList, 0, -3);
    }


    /**
     * Get anesthesia information associated to charge
     *
     * @return void
     */
    public function anesthesiaInfo()
    {
        return $this->hasOne(Anesthesia::class, 'charge', 'charge');
    }


    /**
     * Get specialCode information associated to charge
     *
     * @return void
     */
    public function specialCodeInfo()
    {
        return $this->hasOne(SpecialCode::class, 'charge', 'charge');
    }
}
