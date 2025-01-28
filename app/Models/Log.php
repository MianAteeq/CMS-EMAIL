<?php

namespace App\Models;

use App\Http\Middleware\Vender;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Log extends Model
{
    use HasFactory;
    protected $guarded = [];


    public static function saveLog($data) {
        
        Log::create([

            'log_no'=>$data->log_no,
            'user_id'=>$data->user_id,
            'type'=>$data->type,
            'event'=>$data->event,
            'event_detail'=>$data->event_detail,
            'type_id'=>$data->type_id,
        ]);

        return true;
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}
