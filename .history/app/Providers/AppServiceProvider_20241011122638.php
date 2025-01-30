<?php

namespace App\Providers;

use App\Models\User;
use Laravel\Cashier\Cashier;
use Modules\Admin\Entities\Setting;
use Modules\Admin\Entities\Services;

use Symfony\Component\Routing\Route;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Spatie\Permission\Models\Permission;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Cashier::stripe(['api_key' => 'sk_test_OPZIufRlS22dhu4r5Phf5rD9']);
       Cashier::useCustomerModel(User::class);



        Blade::if('routeis', function ($expression) {
            return fnmatch($expression, Route::currentRouteName());
        });
        view()->composer('*', function($view){
            $view->with('setting', Setting::pluck('value', 'key')->toArray());
            $view->with('services', Services::orderBy('id', 'desc')->paginate(5));
            $view->with('types', Services::where('parent_id', 0)->get());
        });
    }
}
