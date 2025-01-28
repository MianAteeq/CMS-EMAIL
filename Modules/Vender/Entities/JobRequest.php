<?php

namespace Modules\Vender\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Modules\Admin\Entities\JobType;
use Modules\Admin\Entities\PriceType;

class JobRequest extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function getImageAttribute($value)
    {
        if ($value == null) {
            return $value;
        }
        return url('/') . '/' . $value;
    }


    /**
     * Get the user that owns the JobRequest
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */

    /**************** quotation ************************/

    public function quotation(): BelongsTo
    {
        return $this->belongsTo(Quotation::class, 'quotation_id', 'id');
    }

    /**************** job_type ************************/

    public function job_type(): BelongsTo
    {
        return $this->belongsTo(JobType::class, 'job_type_id', 'id');
    }
    /**************** job_type ************************/

    public function price_type(): BelongsTo
    {
        return $this->belongsTo(PriceType::class, 'price_type_id', 'id');
    }
    public function product(): BelongsTo
    {
        return $this->belongsTo(QuickProduct::class, 'product_id', 'id');
    }
    /**
     * Get all of the comments for the JobRequest
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function job_types(): HasMany
    {
        return $this->hasMany(QuotationJobRequestJobType::class, 'job_request_id', 'id');
    }

    

}
