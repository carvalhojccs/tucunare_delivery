<x-label>{{ __('Identificação') }}</x-label>
<x-input type="text" class="w-full" name="identify" value="{{ $table->identify ?? old('identify') }}" />
<x-input-error for="identify"></x-input-error>

<x-label>{{ __('Descrição') }}</x-label>
<x-input type="text" class="w-full" name="description" value="{{ $table->description ?? old('description') }}" step="0.001"/>
<x-input-error for="description"></x-input-error>
<x-button class="mt-2">Salvar</x-button>