<?php

namespace App\Models\Traits;

use App\Models\Tenant;

trait UserACLTrait
{
    public function permissions(): array
    {
        $permissionsPlan = $this->permissionsPlan();
        $permissionsRole = $this->permissionsRole();

        $permissions = [];

        foreach ($permissionsRole as $permission) {
            if (in_array($permission, $permissionsPlan)) {
                array_push($permissions,$permission);
            }
        }

        return $permissions;
    }

    public function permissionsPlan(): array
    {
        $tenant = Tenant::with('plan.profiles.permissions')->where('id', $this->tenant_id)->first();

        $permissions = [];

        foreach ($tenant->plan->profiles as $profile) {
            foreach ($profile->pemissions as $permission) {
                array_push($permissions, $permission);
            }
        }

        return $permissions;
    }

    public function permissionsRole(): array
    {
        $roles = $this->roles->with('permissions')->get();

        $permissions = [];

        foreach ($roles->permissions as $permission) {
            array_push($permissions, $permission);
        }

        return $permissions;

    }

    public function hasPermission(string $permissionName): bool
    {
        return in_array($permissionName, $this->permissions());
    }

    public function isAdmin()
    {
        return in_array($this->email, config('acl.admins'));
    }
}