<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Language;
use App\Models\Framework;

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
        View::composer('*', function ($view) {
            $languages = Language::all(); // すべての言語を取得
            $frameworks = Framework::all(); // すべてのフレームワークを取得
            $view->with([
                'languages' => $languages,
                'frameworks' => $frameworks,
            ]);
        });
    }
}
