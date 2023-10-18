<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Permission extends Model
{
    use HasFactory; 

    protected $fillable = [
        'name',
        'description'
    ];

    public function profiles(): BelongsToMany
    {
        return $this->belongsToMany(Profile::class);
    }

    public function roles(): BelongsToMany
    {
        return $this->belongsToMany(Role::class);
    }

    public function search($filter = null)
    {
        return $this->where('name', 'ILIKE', "%{$filter}%")
                    ->orWhere('description', 'ILIKE', "%{$filter}%")
                    ->paginate();
    }
}
