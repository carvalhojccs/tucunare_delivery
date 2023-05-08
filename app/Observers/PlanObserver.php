<?php

namespace App\Observers;

use App\Models\Plans;
use Illuminate\Support\Str;

class PlanObserver
{
    /**
     * Handle the Plan "creating" event.
     */
    public function creating(Plans $plan): void
    {
        $plan->url = Str::kebab($plan->name);
    }

    /**
     * Handle the Plan "updating" event.
     */
    public function updating(Plans $plan): void
    {        
        $plan->url = Str::kebab($plan->name);
    }    
}
