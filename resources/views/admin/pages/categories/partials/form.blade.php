<x-label>{{ __('Nome') }}</x-label>
<x-input type="text" class="w-full" name="name" value="{{ $user->name ?? old('name') }}" />
<x-input-error for="name"></x-input-error>

<x-label>{{ __('Descrição') }}</x-label>
<x-input type="text" class="w-full" name="description" value="{{ $user->description ?? old('description') }}" />
<x-input-error for="email"></x-input-error>

<x-button class="mt-2">Salvar</x-button>