<x-label>{{ __('Nome') }}</x-label>
<x-input type="text" class="w-full" name="name" value="{{ $data->name ?? old('name') }}" />
<x-input-error for="name"></x-input-error>

<x-label>{{ __('Descrição') }}</x-label>
<x-input type="text" class="w-full" name="description" value="{{ $data->description ?? old('description') }}" step="0.001"/>
<x-input-error for="description"></x-input-error>
<x-button class="mt-2">Salvar</x-button>