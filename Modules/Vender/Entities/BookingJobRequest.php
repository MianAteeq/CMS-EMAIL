<?php

namespace Modules\Vender\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Modules\Admin\Entities\JobType;
use Modules\Admin\Entities\PriceType;

class BookingJobRequest extends Model
{
    use HasFactory;

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

    public function booking(): BelongsTo
    {
        return $this->belongsTo(Booking::class, 'booking_id', 'id');
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
    public function job_types(): HasMany
    {
        return $this->hasMany(BookingJobRequestJobType::class, 'job_request_id', 'id');
    }
    public function product(): BelongsTo
    {
        return $this->belongsTo(QuickProduct::class, 'product_id', 'id');
    }
}
