<?php

namespace App\Observers;

use App\Jobs\SaveAudit;
use App\Models\Table;

class TableObserver
{
    /**
     * Handle the Table "created" event.
     */
    public function created(Table $table): void
    {

        SaveAudit::dispatch([
            'event' => __METHOD__,
            'user_id' => auth()->id(),
            'when' => now(),
            'ip' => request()->ip(),
            'auditable_id' => $table->id,
            'auditable_type' => Table::class
        ]);
    }

    /**
     * Handle the Table "updated" event.
     */
    public function updated(Table $table): void
    {
        //
    }

    /**
     * Handle the Table "deleted" event.
     */
    public function deleted(Table $table): void
    {
        //
    }

    /**
     * Handle the Table "restored" event.
     */
    public function restored(Table $table): void
    {
        //
    }

    /**
     * Handle the Table "force deleted" event.
     */
    public function forceDeleted(Table $table): void
    {
        //
    }
}
