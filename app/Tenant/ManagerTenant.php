<?php

namespace App\Tenant;

use App\Models\Tenant;
use Illuminate\Support\Arr;

class ManagerTenant
{
    public function getTenantIdentify():int
    {
        return auth()->user()->tenant_id;
    }

    public function getTenant(): Tenant
    {
        return auth()->user()->tenant;
    }

    public function isAdmin(): bool
    {
        return Arr::hasAny(config('tenant.admins'), auth()->user()->email);
    }
}
