<?php

namespace Modules\Vender\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class VenderPaymentMethod extends Model
{
    use HasFactory;

    protected $guarded = [];
    
    protected static function newFactory()
    {
        return \Modules\Vender\Database\factories\VenderPaymentMethodFactory::new();
    }
}
