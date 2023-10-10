<?php

namespace App\Models;

use App\Tenant\Traits\TenantTrait;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    use TenantTrait;

    protected $guarded = ['id'];

    public function scopeSearch(Builder $query, ?string $filter)
    {
        return $query->where('name', 'ilike', "%{$filter}%")->latest()->paginate();
    }
}
