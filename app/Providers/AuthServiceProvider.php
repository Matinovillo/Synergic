<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
       
        Gate::define('administrar',function($usuario){
            return $usuario->hasRole('admin');
        });

        /* Si hay mas de 2 roles
        Gate::define('administrar',function($usuario){
            return $usuario->hasAnyRole(['admin','otrorol']);
        });
        */
        
        Gate::define('editar-usuario',function($usuario){
            return $usuario->hasRole('admin');
        });

        Gate::define('borrar-usuario',function($usuario){
            return $usuario->hasRole('admin');
        });
        
    }
}
