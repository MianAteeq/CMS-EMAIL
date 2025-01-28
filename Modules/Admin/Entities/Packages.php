<?php

namespace Modules\Admin\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Packages extends Model
{
    use HasFactory;

    protected $table = 'packages';

   

    protected $guarded = [];
   

    public function features()
    {
        return $this->hasMany(PackagesFeature::class,'package_id');
    }
}
