<?php

namespace App\Listeners;

use Illuminate\Auth\Events\Login;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;
use Illuminate\Queue\InteractsWithQueue;

class LoginListener
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
    public function handle(Login $event): void
    {
        /** @var User $user */

        $user = $event->user;

        $user->logins()->create([
            'ip' => $this->request->ip(),
            'session_name' => $this->request->session()->getId(),
            'browser' => browser(),
            'agent' => $this->request->userAgent(),
            'login_at' => now(),
            'login_successfully' => true,
            'location' => geoip()->getLocation($this->request->ip())->toArray()
        ]);
    }
}
