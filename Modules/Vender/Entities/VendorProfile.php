<?php

namespace Modules\Vender\Entities;

use Modules\Admin\Entities\Packages;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class VendorProfile extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function package(): BelongsTo
    {
        return $this->belongsTo(Packages::class, 'package_id', 'id');
    }
}
