@props(['route'])
<li class="inline-flex items-center">
    <a href="{{ $route }}" class="text-gray-600 hover:text-blue-500">
        {{$slot}}
    </a>
    <svg class="w-5 h-auto fill-current mx-2 text-gray-400" xmlns="http://www.w3.org/2000/svg"
        viewBox="0 0 24 24">
        <path d="M0 0h24v24H0V0z" fill="none" />
        <path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6-6-6z" />
    </svg>
</li>