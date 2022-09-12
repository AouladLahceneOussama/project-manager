<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;

use App\Models\Project;
use App\Models\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        // only admins can crud the users
        Gate::define('crud-users', function (User $user) {
            return $user->is_admin == 1;
        });

        // Only admin can create update delete the projects
        Gate::define('crud-project', function (User $user) {
            return $user->is_admin == 1;
        });

        // 
        Gate::define('see-project-detail', function (User $user, $projects, $requestId) {
            if($user->is_admin != 1)
                return in_array($requestId, array_column($projects->toArray(), 'id'));

            return true;
        });

        // Add the remark to category
        Gate::define('add-remark-category', function(User $user){
            return $user->is_admin == 1;
        });
    }
}
