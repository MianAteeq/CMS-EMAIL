<?php

namespace Modules\Vender\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Modules\Admin\Entities\PriceType;

class BookingJobItem extends Model
{
    use HasFactory;

    protected $guarded = [];



    public function booking(): BelongsTo
    {
        return $this->belongsTo(Booking::class, 'booking_id', 'id');
    }

   
    /**************** job_type ************************/

    public function job_type(): BelongsTo
    {
        return $this->belongsTo(BookingJobRequest::class, 'job_type_id', 'id');
    }
    /**************** job_type ************************/

    public function price_type(): BelongsTo
    {
        return $this->belongsTo(PriceType::class, 'price_type_id', 'id');
    }
    public function job_types(): HasMany
    {
        return $this->hasMany(BookingJobItemJobType::class, 'job_item_id', 'id');
    }
}
