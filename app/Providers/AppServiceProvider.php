<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Relations\Relation;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // Relation::enforceMorphMap([
        //     'Thread' => 'App\Models\Thread',
        //     'Needle' => 'App\Models\Needle',
        //     'SparePart' => 'App\Models\SparePart',
        //     'Interline' => 'App\Models\Interline',
        //     'DoubleTap' => 'App\Models\DoubleTap',
        //     'Spare' => 'App\Models\Spare',
        //     'Frame' => 'App\Models\Frame',
        // ]);
    }
}
