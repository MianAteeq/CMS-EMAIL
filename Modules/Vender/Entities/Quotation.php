<?php

namespace Modules\Vender\Entities;

use App\Http\Middleware\Vender;
use App\Models\Log;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Modules\Admin\Entities\Services;
use Modules\ClientHub\Entities\Client;

class Quotation extends Model
{
    use HasFactory;

    protected $guarded = [];


    /**
     * Get the user that owns the Quotation
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */

    /**************** vehicle ************************/

    public function vender(): BelongsTo
    {
        return $this->belongsTo(User::class, 'vender_id', 'id');
    }

    /**************** vehicle ************************/

    public function vehicle(): BelongsTo
    {
        return $this->belongsTo(Vehicle::class, 'vehicle_id', 'id');
    }

    /**************** Contact Detail ************************/

    public function contact_detail(): BelongsTo
    {
        return $this->belongsTo(ContactDetail::class, 'contact_detail_id', 'id');
    }
    public function hub_contact(): BelongsTo
    {
        return $this->belongsTo(Client::class, 'contact_detail_id', 'id');
    }
    /**************** Service ************************/

    public function service(): BelongsTo
    {
        return $this->belongsTo(Services::class, 'service_id', 'id');
    }


    /**************** Job Request ************************/

    /**
     * Get all of the comments for the Quotation
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function job_requests(): HasMany
    {
        return $this->hasMany(JobRequest::class, 'quotation_id', 'id');
    }

    /**************** Quotation Item ************************/

    /**
     * Get all of the comments for the Quotation
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function quotation_item(): HasMany
    {
        return $this->hasMany(QuotationItem::class, 'quotation_id', 'id');
    }
    public function job_logs(): HasMany
    {
        return $this->hasMany(Log::class, 'type_id', 'id')->where('type','Quote');
    }



}
