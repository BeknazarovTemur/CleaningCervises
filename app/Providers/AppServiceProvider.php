<?php

namespace App\Providers;


use App\Events\PostCreated;
use App\Listeners\SendEmailToUser;
use App\Listeners\SendNotificationToAdmin;
use App\Models\Post;
use App\Policies\PostPolicy;
use Illuminate\Support\Facades\Event;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;
use illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }
    public function boot(): void
    {
        Paginator::useBootstrapFour();

        Gate::policy(Post::class, PostPolicy::class);

        Event::listen(
            PostCreated::class,
            SendEmailToUser::class,
            SendNotificationToAdmin::class,
        );
    }
}
