<?php

namespace Modules\Admin\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Symfony\Component\HttpFoundation\ServerBag;

class Services extends Model
{
    use HasFactory;

    protected $table = 'services';
    protected $guarded = [];

    /**
     * Get the user that owns the Services
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function service(): BelongsTo
    {
        return $this->belongsTo(Services::class, 'parent_id', 'id');
    }
    /**
     * Get all of the child_services for the Services
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function child_services(): HasMany
    {
        return $this->hasMany(Services::class, 'parent_id', 'id');
    }
}
