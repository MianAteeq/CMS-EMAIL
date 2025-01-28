<?php

namespace Modules\Vender\Entities;

use Modules\Admin\Entities\JobType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TradingUnitJobType extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * Get the job_type that owns the TradingUnitJobType
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function job_type(): BelongsTo
    {
        return $this->belongsTo(JobType::class, 'job_type_id', 'id');
    }
}
