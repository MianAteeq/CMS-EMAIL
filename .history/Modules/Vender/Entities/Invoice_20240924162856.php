<?php

namespace Modules\Vender\Entities;

use App\Models\Log;
use Illuminate\Database\Eloquent\Model;
use Modules\Vender\Entities\TradingName;
use Modules\Vender\Entities\TradingUnit;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Invoice extends Model
{
    use HasFactory;

    protected $guarded = [];


    /**
     * Get the booking that owns the Invoice
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function booking(): BelongsTo
    {
        return $this->belongsTo(Booking::class, 'booking_id', 'id');
    }

    /**
     * Get the user associated with the Invoice
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function payment(): HasOne
    {
        return $this->hasOne(BookingTransaction::class, 'invoice_id', 'id');
    }
    public function payments(): HasMany
    {
        return $this->hasMany(BookingTransaction::class, 'invoice_id', 'id');
    }

    public function job_logs(): HasMany
    {
        return $this->hasMany(Log::class, 'type_id', 'id')->whereIn('type',['Invoice']);
    }

    public function trading_name(): BelongsTo
    {
        return $this->belongsTo(TradingUnit::class, 'trading_id', 'id');
    }
}
