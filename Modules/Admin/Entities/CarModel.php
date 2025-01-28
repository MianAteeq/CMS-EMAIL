<?php

namespace Modules\Admin\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CarModel extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * Get the user that owns the CarModel
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function maker(): BelongsTo
    {
        return $this->belongsTo(CarMaker::class, 'parent_id', 'id');
    }
}
