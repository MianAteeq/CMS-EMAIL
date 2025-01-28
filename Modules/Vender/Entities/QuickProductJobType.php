<?php

namespace Modules\Vender\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Modules\Admin\Entities\JobType;

class QuickProductJobType extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function jobtype(): BelongsTo
    {
        return $this->belongsTo(JobType::class, 'job_type_id', 'id');
    }
}
