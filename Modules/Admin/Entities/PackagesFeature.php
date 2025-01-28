<?php

namespace Modules\Admin\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PackagesFeature extends Model
{
    use HasFactory;

    protected $table = 'packageFeature';
    protected $guarded = ['*'];
    
    
}
