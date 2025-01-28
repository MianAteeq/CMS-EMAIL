<?php

namespace Modules\Vender\Entities;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Modules\Admin\Entities\CarMaker;
use Modules\Admin\Entities\CarModel;
use Modules\Admin\Entities\EngineSize;
use Modules\Admin\Entities\FuelType;
use Modules\Admin\Entities\TransmissionType;
use Modules\Admin\Entities\VehicleColor;

class Vehicle extends Model
{
    use HasFactory;

    protected $guarded = [];


    /**
     * Get the user that owns the Vehicle
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */

    /**************** Car Make ************************/

    public function vehicle_make(): BelongsTo
    {
        return $this->belongsTo(CarMaker::class, 'vehicle_make_id', 'id');
    }

    /**************** Car Make ************************/

    public function vehicle_model(): BelongsTo
    {
        return $this->belongsTo(CarModel::class, 'vehicle_model_id', 'id');
    }

    /**************** Engine Size ************************/

    public function engine_size(): BelongsTo
    {
        return $this->belongsTo(EngineSize::class, 'engine_size_id', 'id');
    }

    /**************** Transmission_type ************************/

    public function transmission_type(): BelongsTo
    {
        return $this->belongsTo(TransmissionType::class, 'transmission_type_id', 'id');
    }
    /**************** Fuel Type ************************/

    public function fuel_type(): BelongsTo
    {
        return $this->belongsTo(FuelType::class, 'fuel_type_id', 'id');
    }
    /**************** Color ************************/

    public function color(): BelongsTo
    {
        return $this->belongsTo(VehicleColor::class, 'color_id', 'id');
    }

    /**************** Contact ************************/

    public function contact(): BelongsTo
    {
        return $this->belongsTo(ContactDetail::class, 'contact_id', 'id');
    }

    public function quotes(): HasMany
   {
       return $this->hasMany(Quotation::class, 'vehicle_id', 'id');
   }
   public function bookings(): HasMany
   {
       return $this->hasMany(Booking::class, 'vehicle_id', 'id');
   }

   public function jobs()
   {
       return $this->hasMany(Booking::class, 'vehicle_id', 'id')->where('job_no','!=',null);
   }



   public function getVrmAttribute($value)
{
    return strtoupper(str_replace(' ', '', $value));
}
}
