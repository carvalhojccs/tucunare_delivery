<x-label>Nome</x-label>
<x-input type="text" class="w-full" name="name" value="{{ $plan->name ?? old('name') }}" />
<x-input-error for="name"></x-input-error>

<x-label>Preço</x-label>
<x-input type="text" name="price" value="{{ $plan->price ?? old('price') }}" />
<x-input-error for="price"></x-input-error>

<x-label>Descrição</x-label>
<x-input type="text" class="w-full" name="description" value="{{ $plan->description ?? old('description') }}" />
<x-input-error for="description"></x-input-error>

<x-button class="mt-2">Salvar</x-button>