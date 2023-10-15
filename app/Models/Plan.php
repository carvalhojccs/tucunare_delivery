<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Plan extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'url', 'price', 'description'];

    public function details(): HasMany
    {
        return $this->hasMany(PlanDetail::class);
    }

    public function profiles(): BelongsToMany
    {
        return $this->belongsToMany(Profile::class);
    }

    public function tenants(): HasMany
    {
        return $this->hasMany(Tenant::class);
    }

    public function profilesAvailabe($plan_id, $filter = null)
    {
        $profiles = Profile::whereNotIn('profiles.id', function($query) use($plan_id){
            $query->select('plan_profile.profile_id');
            $query->from('plan_profile');
            $query->where('plan_profile.plan_id',$plan_id);
        })
        ->where(function($querySelect) use ($filter) {
            if ($filter)
            $querySelect->where('profile.name','ILIKE', "%{$filter}%");
        })
        ->paginate();
        
        return $profiles;    
    }

    public function search($filter = null)
    {
        $results = $this->where('name', 'ilike', "%{$filter}%")
                        ->orWhere('description', 'ilike', "%{$filter}%")
                        ->paginate();
        return $results;

    }
}
