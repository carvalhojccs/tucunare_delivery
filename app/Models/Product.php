<?php

namespace App\Models;

use App\Tenant\Traits\TenantTrait;
use Illuminate\Contracts\Database\Eloquent\Builder;
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

    public function scopeCategoriesAvailable(Builder $query, ?array $filter, int $product_id)
    {
        $categories = Category::whereNotIn('categories.id', function($query) use ($product_id) {
            $query->select('category_product.category_id');
            $query->from('category_product');
            $query->whereRaw("category_product.product_id = {$product_id}");
        })
        ->where(function($queryFilter) use ($filter) {
            if ($filter) {
                $queryFilter->where('categories.name', 'ILIKE', "%{$filter}%");
            }
        })
        ->paginate();

        return $categories;
    }
}
