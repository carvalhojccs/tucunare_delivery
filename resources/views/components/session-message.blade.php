@props(['type'])

@if (session($type))
    @switch($type)        
        @case('info')
            {{ $color = 'amber' }}
            @break
        @case('error')
        {{ $color = 'red' }}
        @break    
        @default
        {{ $color = 'green' }}            
    @endswitch
    <div class="space-y-2">
        <div {{ $attributes->merge(['class' => 'px-4 py-4 text-'.$color.'-800 bg-'.$color.'-300  rounded shadow-lg shadow-'.$color.'-500/50', 'role' => 'alert']) }}>
        
            {{ session($type) }}
        </div>
    </div>
@endif
