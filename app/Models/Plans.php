<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plans extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'url', 'price', 'description'];

    public function search($filter = null)
    {
        $results = $this->where('name', 'ilike', "%{$filter}%")
                        ->orWhere('description', 'ilike', "%{$filter}%")
                        ->paginate();
        return $results;

    }
}
