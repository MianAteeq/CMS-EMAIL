<?php

namespace Modules\Vender\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\Admin\Entities\WarrantyJob;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TradingUnitWarrentyJob extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * Get the user that owns the TradingUnitWarrentyJob
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function warranty_job(): BelongsTo
    {
        return $this->belongsTo(WarrantyJob::class, 'warranty_id', 'id');
    }
}
