<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Tenant\Traits\TenantTrait;
use Illuminate\Database\Eloquent\Builder;

class Category extends Model
{
    use HasFactory;
    use TenantTrait;

    protected $fillable = [
        'tenant_id',
        'name',
        'url',
        'description'
    ];
    
    public function scopeSearch(Builder $query, ?string $filter)
    {
        return $query->where('name', 'ILIKE', "%{$filter}%")->latest()->paginate();
    }
}
