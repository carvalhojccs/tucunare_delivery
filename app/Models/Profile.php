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
}
