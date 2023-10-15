<?php

namespace App\Models;

use App\Tenant\Traits\TenantTrait;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Role extends Model
{
    use HasFactory;    

    protected $guarded = ['id'];

    public function permissions(): BelongsToMany
    {
        return $this->belongsToMany(Permission::class);
    }

    
    public function users(): BelongsToMany
	{
		return $this->belongsToMany(User::class);
	}

    public function scopeSearch(Builder $query, ?string $filter)
    {
        return $query->where('name', 'ilike', "%{$filter}%")->latest()->paginate();
    }

    public function scopePermissionsAvailable(Builder $q,  int $role_id)
    {
        return Permission::whereNotIn('permissions.id', function ($query) use ($role_id) {
            $query->select('permission_role.permission_id');
            $query->from('permission_role');
            $query->where('permission_role.role_id', $role_id);
        })
        ->paginate();
    }

}
