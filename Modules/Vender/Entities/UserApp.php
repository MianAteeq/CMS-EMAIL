<?php

namespace Modules\Vender\Entities;

use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UserApp extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * Get the user that owns the UserApp
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function group(): BelongsTo
    {
        return $this->belongsTo(Role::class, 'role_id', 'id');
    }
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'vender_id', 'id');
    }
}
