@if (session($type))
    <div class="space-y-2">
        <div {{ $attributes->merge(['class' => 'px-4 py-4 text-amber-800 bg-amber-300  rounded shadow-lg shadow-amber-500/50', 'role' => 'alert']) }}>        
            {{ session($type) }}
        </div>
    </div>
@endif