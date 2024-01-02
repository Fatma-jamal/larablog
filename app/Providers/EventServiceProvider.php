<?php

namespace App\Providers;

// use App\Models\
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event to listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [];

    /**
     * Register any events for your application.
     */
    public function boot(): void
    {
        //
        parent::boot();
        //
        $this->listen[Registered::class] = [SendEmailVerificationNotification::class,];
        //

        //@TODO uncomment the following lines
        // // Load the event-listener mappings from the database
        // $eventListeners = EventListener::all();

        // // Register the event-listener mappings
        // foreach ($eventListeners as $eventListener) {
        //     $this->listen[$eventListener->event][] = $eventListener->listener;
        // }
    }

    /**
     * Determine if events and listeners should be automatically discovered.
     */
    public function shouldDiscoverEvents(): bool
    {
        return false;
    }
}
