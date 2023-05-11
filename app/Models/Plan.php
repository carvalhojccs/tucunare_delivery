<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Plan extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'url', 'price', 'description'];

    public function details(): HasMany
    {
        return $this->hasMany(PlanDetail::class);
    }

    public function search($filter = null)
    {
        $results = $this->where('name', 'ilike', "%{$filter}%")
                        ->orWhere('description', 'ilike', "%{$filter}%")
                        ->paginate();
        return $results;

    }
}
