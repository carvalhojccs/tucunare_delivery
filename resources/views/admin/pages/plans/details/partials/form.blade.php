<x-label>Nome</x-label>
<x-input type="text" class="w-full" name="name" value="{{ $detail->name ?? old('name') }}" />
<x-input-error for="name"></x-input-error>

<x-button class="mt-2">Salvar</x-button>