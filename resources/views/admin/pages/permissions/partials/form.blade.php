<x-label>Nome</x-label>
<x-input type="text" class="w-full" name="name" value="{{ $permission->name ?? old('name') }}" />
<x-input-error for="name"></x-input-error>

<x-label>Descrição</x-label>
<x-input type="text" class="w-full" name="description" value="{{ $permission->description ?? old('description') }}" />
<x-input-error for="description"></x-input-error>

<x-button class="mt-2">Salvar</x-button>