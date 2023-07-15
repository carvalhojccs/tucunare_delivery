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

    public function search($filter = null)
    {
        return $this->where('name', 'ILIKE', "%{$filter}%")
                    ->orWhere('description', 'ILIKE', "%{$filter}%")
                    ->paginate();
    }

    public function permissionsAvailable($profile_id)
    {
        $permissions = Permission::whereNotIn('id', function ($query) use ($profile_id){
            $query->select('permission_id');
            $query->from('permission_profile');
            $query->where('profile_id', $profile_id);
        })
        ->paginate();       

        return $permissions;
    }
}
