<?php

namespace Modules\Vender\Entities;

use Modules\Admin\Entities\Packages;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class VenderInvoice extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function inv_plan(): BelongsTo
    {
        return $this->belongsTo(Packages::class, 'plan', 'id');
    }
    public function subscription(): BelongsTo
    {
        return $this->belongsTo(PackageSubscription::class, 'subscription_id', 'id');
    }
}
