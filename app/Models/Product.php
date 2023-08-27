<?php

namespace App\Models;

use App\Tenant\Traits\TenantTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Product extends Model
{
    use HasFactory;
    use TenantTrait;

    protected $fillable = ['title', 'slug', 'price', 'description', 'image'];

    public function categories(): BelongsToMany
    {
        return $this->belongsToMany(Category::class);
    }
}
