<x-label>{{ __('Titulo') }}</x-label>
<x-input type="text" class="w-full" name="title" value="{{ $data->title ?? old('title') }}" />
<x-input-error for="title"></x-input-error>

<x-label>{{ __('Preço') }}</x-label>
<x-input type="number" class="w-full" name="price" value="{{ $data->price ?? old('price') }}" step="0.001"/>
<x-input-error for="price"></x-input-error>

<x-label>{{ __('Imagem') }}</x-label>
<x-input type="file" class="w-full" name="image"/>
<x-input-error for="image"></x-input-error>

<x-label>{{ __('Descrição') }}</x-label>
<x-input type="text" class="w-full" name="description" value="{{ $data->description ?? old('description') }}" />
<x-input-error for="email"></x-input-error>

<x-button class="mt-2">Salvar</x-button>