<?php

namespace App\Observers;

use App\Models\Tenant;
use Illuminate\Support\Str;

class TenantObserver
{
    /**
     * Handle the Tenant "creating" event.
     */
    public function creating(Tenant $tenant): void
    {
        $tenant->uuid = Str::uuid();
        $tenant->url = Str::kebab($tenant->name);
    }

    /**
     * Handle the Tenant "updating" event.
     */
    public function updating(Tenant $tenant): void
    {
        $tenant->url = Str::kebab($tenant->name);
    }    
}
