@if (session($type))
    <div class="space-y-2">
        <div {{ $attributes->merge(['class' => 'px-4 py-4 text-red-800 bg-red-300  rounded shadow-lg shadow-red-500/50', 'role' => 'alert']) }}>        
            {{ session($type) }}
        </div>
    </div>
@endif