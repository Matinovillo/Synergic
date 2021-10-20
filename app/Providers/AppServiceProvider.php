<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Categoria;
use Illuminate\Support\Facades\View;
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
        View::share('categorias', Categoria::whereNull('id_categoria_padre')->with('hijas')->get());
    }
}
