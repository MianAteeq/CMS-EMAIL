<?php

namespace Modules\Vender\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Modules\Admin\Entities\JobType;

class BookingJobItemJobType extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * Get the user that owns the QuotationJobRequestJobType
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function job_type(): BelongsTo
    {
        return $this->belongsTo(JobType::class, 'job_type_id', 'id');
    }
}
