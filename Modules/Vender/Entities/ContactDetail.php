<?php

namespace Modules\Vender\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Modules\ClientHub\Entities\Client;

class ContactDetail extends Model
{
    use HasFactory;

    protected $guarded = [];


    /**************** Vehicles ************************/

   /**
    * Get all of the comments for the ContactDetail
    *
    * @return \Illuminate\Database\Eloquent\Relations\HasMany
    */
   public function vehicles(): HasMany
   {
       return $this->hasMany(Vehicle::class, 'contact_id', 'id');
   }
   public function quotes(): HasMany
   {
       return $this->hasMany(Quotation::class, 'contact_detail_id', 'id');
   }
   public function bookings(): HasMany
   {
       return $this->hasMany(Booking::class, 'contact_detail_id', 'id');
   }

   public function jobs()
   {
       return $this->hasMany(Booking::class, 'contact_detail_id', 'id')->where('job_no','!=',null);
   }

   /**
    * Get the user that owns the ContactDetail
    *
    * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    */
   public function hub(): BelongsTo
   {
       return $this->belongsTo(Client::class, 'hub_id', 'id');
   }




}
