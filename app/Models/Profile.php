<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description'
    ];

    public function permissions(): BelongsToMany
    {
        return $this->belongsToMany(Permission::class);
    }

    public function plans(): BelongsToMany
    {
        return $this->belongsToMany(Plan::class);
    }

    public function search($filter = null)
    {
        return $this->where('name', 'ILIKE', "%{$filter}%")
                    ->orWhere('description', 'ILIKE', "%{$filter}%")
                    ->paginate();
    }

    public function permissionsAvailable($profile_id, $filter = null)
    {
        $permissions = Permission::whereNotIn('permissions.id', function ($query) use ($profile_id){
            $query->select('permission_profile.permission_id');
            $query->from('permission_profile');
            $query->where('permission_profile.profile_id', $profile_id);
        })
        ->where(function ($queryFilter) use ($filter) {
            if ($filter)
            $queryFilter->where('permissions.name', 'ILIKE',"%{$filter}%");
        })
        ->paginate();       

        return $permissions;
    }
}
