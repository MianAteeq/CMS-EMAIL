<?php

namespace Modules\Vender\Entities;

use App\Models\User;
use Modules\Admin\Entities\Packages;
use Illuminate\Database\Eloquent\Model;
use Modules\Vender\Entities\VenderInvoice;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PackageSubscription extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected static function newFactory()
    {
        return \Modules\Vender\Database\factories\PackageSubscriptionFactory::new();
    }

    /**
     * Get the user that owns the PackageSubscription
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function plan(): BelongsTo
    {
        return $this->belongsTo(Packages::class, 'plan_id', 'id');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'vender_id', 'id');
    }


    /**
     * Get all of the comments for the PackageSubscription
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function invoices(): HasMany
    {
        return $this->hasMany(VenderInvoice::class, 'subscription_id', 'id');
    }
}
