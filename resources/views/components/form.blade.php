<form action="{{ $action }}" method="{{ $method == 'GET' ? 'GET' : 'POST' }}">
    @csrf

    @if($method != 'POST')
        @method($method)
    @endif

    {{ $slot }}
</form>