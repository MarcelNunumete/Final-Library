<?php

namespace App\Providers;
use App\Models\User;
use Illuminate\Support\Facades\Gate;

// use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        Gate::define('Admin', function(User $user) {
            return $user->role == 'Admin';
        });

        Gate::define('Member', function(User $user) {
            return $user->role == 'Member';
        });

        Gate::define('Pustakawan', function(User $user) {
            return $user->role == 'Pustakawan';
        });

        Gate::define('admin-pustakawan', function (User $user, ...$allowedRoles) {
            return in_array($user->role, $allowedRoles);
        });
        
    }
}
