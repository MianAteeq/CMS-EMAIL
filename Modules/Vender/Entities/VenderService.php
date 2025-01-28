<?php

namespace Modules\Vender\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Modules\Admin\Entities\Services;

class VenderService extends Model
{
    use HasFactory;

    protected $guarded = [];


    /**
     * Get the service that owns the VenderService
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function service(): BelongsTo
    {
        return $this->belongsTo(Services::class, 'service_id', 'id');
    }
}
