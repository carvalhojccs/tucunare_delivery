<?php

namespace App\Observers;

use App\Models\Plan;
use Illuminate\Support\Str;

class PlanObserver
{
    /**
     * Handle the Plan "creating" event.
     */
    public function creating(Plan $plan): void
    {
        $plan->url = Str::kebab($plan->name);
    }

    /**
     * Handle the Plan "updating" event.
     */
    public function updating(Plan $plan): void
    {        
        $plan->url = Str::kebab($plan->name);
    }    
}
