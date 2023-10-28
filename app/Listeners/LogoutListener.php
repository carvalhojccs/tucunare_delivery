<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Logout;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;
use Illuminate\Queue\InteractsWithQueue;

class LogoutListener
{
    /**
     * Create the event listener.
     */
    public function __construct(protected Request $request)
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(Logout $event): void
    {
        /** @var User $user */
        $user = $event->user;

        if (!$user) {
            return;
        }

        $log = $user->logins()
            ->latest('login_at')
            ->where('ip', $this->request->ip())
            ->where('login_successfully', true)
            ->whereNull('logout_at')
            ->first();

        if (!$log) {
            return;
        }

        $log->logout_at = now();
        $log->save();
    }
    
}
