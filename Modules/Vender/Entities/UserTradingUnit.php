<?php

namespace Modules\Vender\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\Vender\Entities\TradingUnit;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UserTradingUnit extends Model
{
    use HasFactory;

    protected $guarded = [];

public function trading_unit(): BelongsTo
    {
        return $this->belongsTo(TradingUnit::class, 'trading_id', 'id');
    }
}
