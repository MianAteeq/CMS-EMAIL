<?php

namespace Modules\Vender\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\Admin\Entities\VehicleSpecialist;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TradingUnitVehicleSpecialist extends Model
{
    use HasFactory;

    protected $guarded = [];


    /**
     * Get the user that owns the TradingUnitWarrentyJob
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function vehicle_specialist(): BelongsTo
    {
        return $this->belongsTo(VehicleSpecialist::class, 'vehicle_specialist_id', 'id');
    }
}
