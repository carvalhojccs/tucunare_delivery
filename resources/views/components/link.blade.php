@props([
    'href'
])

<a href="{{ $href }}" 
    {{ $attributes->merge([
        'class' => 'rounded-md 
        active:bg-indigo-600        
        px-3 
        py-2 
        text-base
        text-sm 
        font-semibold 
        text-white 
        shadow-sm 
        hover:bg-indigo-500 
        focus-visible:outline 
        focus-visible:outline-2 
        focus-visible:outline-offset-2 
        focus-visible:outline-indigo-600
        inline-flex
        items-center
        justify-center'
    ]) }}
    >
    {{ $slot }}
</a>