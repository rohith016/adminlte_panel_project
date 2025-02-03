<?php

namespace App\Providers;

use App\Enums\Admin\ConfigStatusEnum;
use App\Models\Menu;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class MenuServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        View::composer('admin.partials.sidebar', function ($view) {
            if (config('adminlte.menu_source') == ConfigStatusEnum::MENU_FILE_SOURCE->value) {
                $view->with('menuItems', config('adminlte.menu'));
            } else if (config('adminlte.menu_source') == ConfigStatusEnum::MENU_DB_SOURCE->value) {
                $view->with('menuItems', Menu::with('submenu')
                                        ->where('parent_id', null)
                                        ->orderBy('order', 'asc')
                                        ->get()
                                        ->toArray()
                                    );
            }
        });
    }
}
