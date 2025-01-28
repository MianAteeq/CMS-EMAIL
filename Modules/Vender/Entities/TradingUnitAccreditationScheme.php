<?php

namespace Modules\Vender\Entities;

use Illuminate\Database\Eloquent\Model;
use Modules\Admin\Entities\AccreditationScheme;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TradingUnitAccreditationScheme extends Model
{
    use HasFactory;

    protected $guarded = [];


     /**
     * Get the user that owns the TradingUnitWarrentyJob
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function accreditation(): BelongsTo
    {
        return $this->belongsTo(AccreditationScheme::class, 'accreditation_scheme_id', 'id');
    }


}
