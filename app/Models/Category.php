<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Tenant\Traits\TenantTrait;

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
}
