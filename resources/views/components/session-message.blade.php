@props(['type'])

@if (session($type))
    <div class="space-y-2">
        <div class="px-4 py-4 text-green-800 bg-green-300 rounded shadow-lg shadow-green-500/50" role="alert">
            {{ session($type) }}
        </div>
    </div>
@endif
