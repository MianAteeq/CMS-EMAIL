<?php

namespace Modules\Vender\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Modules\Admin\Entities\Packages;

class Transaction extends Model
{
    use HasFactory;
    
     protected $fillable = ['user_id','payment_method','payment_id','stream_id','amount','package_id'];


     /**
      * Get the user that owns the Transaction
      *
      * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
      */
     public function package(): BelongsTo
     {
         return $this->belongsTo(Packages::class, 'package_id', 'id');
     }
    
    protected static function newFactory()
    {
        return \Modules\Vender\Database\factories\TransactionFactory::new();
    }
}
