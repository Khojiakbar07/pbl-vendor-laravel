<?php

namespace App\Listeners;

use App\Events\UserLoginEvent;
use App\Models\UserLoginHistory;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class UserLoginListener
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(UserLoginEvent $event): void
    {
        UserLoginHistory::query()->create(
            ['user_id' => $event, 'login_at' => now()],
        );
    }
}
