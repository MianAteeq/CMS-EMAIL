<?php

namespace Modules\Vender\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Modules\Admin\Entities\JobType;
use Modules\Admin\Entities\PriceType;

class QuickProduct extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**************** job_type ************************/

    public function job_type(): BelongsTo
    {
        return $this->belongsTo(JobType::class, 'job_type_id', 'id');
    }


    /**************** job coverage ************************/

    public function job_coverage(): BelongsTo
    {
        return $this->belongsTo(PriceType::class, 'job_coverage_id', 'id');
    }


    public function job_types(): HasMany
    {
        return $this->hasMany(QuickProductJobType::class, 'quick_product_id', 'id');
    }
}
