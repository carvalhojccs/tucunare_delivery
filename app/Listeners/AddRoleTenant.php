<?php

namespace App\Listeners;

use App\Events\TenantCreated;
use App\Models\Role;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class AddRoleTenant
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
    public function handle(TenantCreated $event): void
    {
        $user = $event->user();
        
        if (!$role = Role::first()) {
            return;
        }

        $user->roles()->attach($role);
    }
}
