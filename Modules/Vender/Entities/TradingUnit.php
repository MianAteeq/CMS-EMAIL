<?php

namespace Modules\Vender\Entities;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Modules\Vender\Entities\TradingName;
use Modules\Vender\Entities\QuickProduct;
use Modules\Vender\Entities\VenderAddress;
use Modules\Vender\Entities\TradingUnitJobType;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Modules\Vender\Entities\TradingUnitAppSetting;
use Modules\Vender\Entities\TradingUnitHubProfile;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Modules\Vender\Entities\TradingUnitWarrentyJob;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Modules\Vender\Entities\TradingUnitPaymentMethod;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Vender\Entities\TradingUnitVehicleSpecialist;

class TradingUnit extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * Get the user that owns the TradingUnit
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function vender(): BelongsTo
    {
        return $this->belongsTo(User::class, 'vender_id', 'id');
    }

    /**
     * Get the user that owns the TradingUnit
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function trading_name(): BelongsTo
    {
        return $this->belongsTo(TradingName::class, 'trading_name_id', 'id');
    }

    /**
     * Get the user that owns the TradingUnit
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function site(): BelongsTo
    {
        return $this->belongsTo(VenderAddress::class, 'site_id', 'id');
    }

    /**
     * Get the user associated with the TradingUnit
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function app_setting(): HasOne
    {
        return $this->hasOne(TradingUnitAppSetting::class, 'trading_id', 'id');
    }
    public function hub_setting(): HasOne
    {
        return $this->hasOne(TradingUnitHubProfile::class, 'trading_id', 'id');
    }


    /**
     * Get all of the job_types for the TradingUnit
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function job_types(): HasMany
    {
        return $this->hasMany(TradingUnitJobType::class, 'trading_id', 'id');
    }

    /**
     * Get all of the job_types for the TradingUnit
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function warranty_jobs(): HasMany
    {
        return $this->hasMany(TradingUnitWarrentyJob::class, 'trading_id', 'id');
    }

    /**
     * Get all of the job_types for the TradingUnit
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function vehicle_specialists(): HasMany
    {
        return $this->hasMany(TradingUnitVehicleSpecialist::class, 'trading_id', 'id');
    }

    /**
     * Get all of the job_types for the TradingUnit
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function accreditations(): HasMany
    {
        return $this->hasMany(TradingUnitAccreditationScheme::class, 'trading_id', 'id');
    }

    /**
     * Get all of the job_types for the TradingUnit
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function payment_methods(): HasMany
    {
        return $this->hasMany(TradingUnitPaymentMethod::class, 'trading_id', 'id');
    }
    public function product_offers(): HasMany
    {
        return $this->hasMany(QuickProduct::class, 'trading_id', 'id');
    }
}
