<?php

namespace App\Observers;

use App\Jobs\SaveAudit;
use App\Models\Category;
use Illuminate\Support\Str;

class CategoryObserver
{
    /**
     * Handle the Category "creating" event.
     */
    public function creating(Category $category): void
    {
        $category->url = Str::kebab($category->name);
    }

    public function created(Category $category): void
    {
        SaveAudit::dispatch([
            'event' => 'created',
            'user_id' => auth()->id(),
            'when' => now(),
            'ip' => request()->ip(),
            'auditable_id' => $category->id,
            'auditable_type' => Category::class
        ]);
    }

    /**
     * Handle the Category "updating" event.
     */
    public function updating(Category $category): void
    {
        $category->url = Str::kebab($category->name);
    }

    public function updated(Category $category): void
    {
        $old = [];

        foreach ($category->getDirty() as $dirtyKey => $dirtyValue) {
            $old[$dirtyKey] = $category->getOriginal($dirtyKey);
        }

        SaveAudit::dispatch([
            'event' => 'updated',
            'user_id' => auth()->id(),
            'when' => now(),
            'ip' => request()->ip(),
            'auditable_id' => $category->id,
            'auditable_type' => Category::class,
            'details' => [
                'old' => $old,
                'new' => $category->getDirty(),
            ]
        ]);
    }

    /**
     * Handle the Category "deleted" event.
     */
    public function deleted(Category $category): void
    {
        SaveAudit::dispatch([
            'event' => 'deleted',
            'user_id' => auth()->id(),
            'when' => now(),
            'ip' => request()->ip(),
            'auditable_id' => $category->id,
            'auditable_type' => Category::class,
            'details' => $category->toArray()
        ]);
    }

    /**
     * Handle the Category "restored" event.
     */
    public function restored(Category $category): void
    {
        //
    }

    /**
     * Handle the Category "force deleted" event.
     */
    public function forceDeleted(Category $category): void
    {
        //
    }
}
