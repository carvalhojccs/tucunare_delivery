<?php

namespace App\Tenant\Traits;

use App\Tenant\Observers\TenantObserver;

trait TenantTrait
{
    protected static function booted()
    {
        static::observe(TenantObserver::class);
    }
}
