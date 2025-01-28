<?php

namespace Modules\Vender\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\Admin\Entities\PaymentMethod;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TradingUnitPaymentMethod extends Model
{
    use HasFactory;

    protected $guarded = [];


    /**
     * Get the user that owns the TradingUnitWarrentyJob
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function payment_method(): BelongsTo
    {
        return $this->belongsTo(PaymentMethod::class, 'payment_method_id', 'id');
    }
}
