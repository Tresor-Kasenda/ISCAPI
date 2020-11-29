<?php

namespace App\Providers;

use App\Models\Result;
use App\Modules\Events\ResultEvent;
use App\Modules\Events\StudentSubscriptionEvent;
use App\Modules\Listeners\ResultListener;
use App\Modules\Listeners\StudentSubscriptionListener;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        StudentSubscriptionEvent::class => [
            StudentSubscriptionListener::class,
        ],
        ResultEvent::class => [
            ResultListener::class,
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
