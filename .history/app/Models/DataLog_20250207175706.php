<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataLog extends Model
{
    use HasFactory;
    protected $guarded = [];

    public static function saveLog($data) {

        DataLog::create([
            'date'=>$data->date,
            'type'=>$data->type,
            'totalRecord'=>$data->totalRecord,

        ]);

        return true;
    }
}
