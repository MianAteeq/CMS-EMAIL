<?php

namespace App\Models;

use Laravel\Cashier\Billable;
use Laravel\Sanctum\HasApiTokens;
use Modules\Admin\Entities\Packages;
use Modules\Admin\Entities\Services;
use Modules\Vender\Entities\UserApp;
use Spatie\Permission\Traits\HasRoles;
use Modules\Admin\Entities\WarrantyJob;
use Illuminate\Notifications\Notifiable;
use Modules\Vender\Entities\TradingName;
use Modules\Vender\Entities\TradingUnit;
use Modules\Admin\Entities\PaymentMethod;
use Modules\Vender\Entities\QuickProduct;
use Modules\Vender\Entities\VenderAddress;
use Modules\Vender\Entities\VenderService;
use Modules\Vender\Entities\VendorProfile;
use Modules\Vender\Entities\UserTradingUnit;
use Modules\Admin\Entities\VehicleSpecialist;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Modules\Admin\Entities\AccreditationScheme;
use Modules\Vender\Entities\PackageSubscription;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, Billable;
    use HasRoles;
    protected $guard = 'user';
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $guarded = [];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Get the user associated with the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */

     /**
      * Get the user that owns the User
      *
      * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
      */

    public function profile(): HasOne
    {
        if(auth()->user()->vender_id==0 ){

            return $this->hasOne(VendorProfile::class, 'vender_id', 'id');
        }else{
            return $this->hasOne(VendorProfile::class, 'vender_id', 'vender_id');

        }
    }
    public function site_address(): HasOne
    {
        return $this->hasOne(VenderAddress::class, 'vender_id', 'id');
    }

    /**
     * Get all of the comments for the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function sites(): HasMany
    {
        return $this->hasMany(VenderAddress::class, 'vender_id', 'id');
    }

      /**
     * Get all of the comments for the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function trading_names(): HasMany
    {
        return $this->hasMany(TradingName::class, 'vender_id', 'id');
    }

    /**
     * Get all of the comments for the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function services(): HasMany
    {
        return $this->hasMany(VenderService::class, 'vender_id', 'id');
    }

    public function payment_methods()
    {
        return $this->belongsToMany(PaymentMethod::class, 'vender_payment_methods','vender_id','payment_method_id');
    }

    public function vehicle_specialists()
    {
        return $this->belongsToMany(VehicleSpecialist::class, 'vender_vehicle_specialists','vender_id', 'vehicle_specialist_id');
    }

    public function warranty_jobs()
    {
        return $this->belongsToMany(WarrantyJob::class, 'vender_warranty_jobs','vender_id', 'warranty_job_id');
    }

    public function accreditation_schemes()
    {
        return $this->belongsToMany(AccreditationScheme::class, 'vender_accreditation_schemes','vender_id', 'accreditation_id');
    }
    public function vender_services()
    {
        return $this->belongsToMany(Services::class, 'vender_services','vender_id', 'service_id');
    }

    /**
     * Get all of the comments for the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function quick_products(): HasMany
    {
        return $this->hasMany(QuickProduct::class, 'vender_id', 'id');
    }
    /**
     * Get all of the comments for the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function subscription(): HasOne
    {
        return $this->hasOne(PackageSubscription::class, 'vender_id', 'id')->where('is_active',1);
    }


    /**
     * Get all of the comments for the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function accounts(): HasMany
    {
        return $this->hasMany(User::class, 'vender_id', 'id');
    }
    /**
     * Get all of the comments for the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function trading_units(): HasMany
    {


        return $this->hasMany(UserTradingUnit::class, 'user_id', 'id');



    }

    /**
     * Get all of the comments for the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function apps(): HasMany
    {
        return $this->hasMany(UserApp::class, 'vender_id', 'id');
    }
    public function business_app(): HasOne
    {
        return $this->hasOne(UserApp::class, 'vender_id', 'id')->where('app_name','Business Manager');
    }

    /**
     * Get the user associated with the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function provider_app(): HasOne
    {
        return $this->hasOne(UserApp::class, 'vender_id', 'id')->where('app_name','!=','Business Manager');
    }


    /**
     * Get the user that owns the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function trading_unit(): BelongsTo
    {
        return $this->belongsTo(TradingUnit::class, 'default_trading_unit', 'id');
    }


}
