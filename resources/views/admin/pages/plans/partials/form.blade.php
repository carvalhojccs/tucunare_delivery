<x-label>Nome</x-label>
<x-input type="text" class="w-full" name="name" value="{{ $plan->name ?? '' }}" />

<x-label>Preço</x-label>
<x-input type="text" name="price" value="{{ $plan->price ?? '' }}" />

<x-label>Descrição</x-label>
<x-input type="text" class="w-full" name="description" value="{{ $plan->description ?? '' }}" />

<x-button class="mt-2">Salvar</x-button>