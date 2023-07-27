@props(['stroke' => 'currentColor'])
<svg 
  xmlns="http://www.w3.org/2000/svg" 
  fill="none" 
  viewBox="0 0 24 24" 
  stroke-width="1.5"
  {{ $attributes->merge(['stroke' => $stroke]) }}
class="w-6 h-6">
    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
  </svg>
  