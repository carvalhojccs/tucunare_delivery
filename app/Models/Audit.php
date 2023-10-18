<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Audit extends Model
{
    protected $connection = 'audit';

    protected $guarded = ['id'];

    protected $casts = [
        'when' => 'timestamp',
        'details' => 'json',
    ];

    public function user(): BelongsTo
    {
	    return $this->belongsTo(User::class);
    }
}
