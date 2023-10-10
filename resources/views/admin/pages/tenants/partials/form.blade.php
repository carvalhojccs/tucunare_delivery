<x-label>{{ __('CNPJ') }}</x-label>
<x-input type="text" class="w-full" name="cnpj" value="{{ $tenant->cnpj ?? old('cnpj') }}" />
<x-input-error for="cnpj"></x-input-error>

<x-label>{{ __('Nome fantasia') }}</x-label>
<x-input type="text" class="w-full" name="business_name" value="{{ $tenant->business_name ?? old('business_name') }}"/>
<x-input-error for="business_name"></x-input-error>

<x-label>{{ __('Nome empresarial') }}</x-label>
<x-input type="text" class="w-full" name="fantasy_name" value="{{ $tenant->fantasy_name ?? old('fantasy_name') }}"/>
<x-input-error for="fantasy_name"></x-input-error>

<x-label>{{ __('Email') }}</x-label>
<x-input type="email" class="w-full" name="email" value="{{ $tenant->email ?? old('email') }}"/>
<x-input-error for="email"></x-input-error>

<x-label>{{ __('Plano') }}</x-label>
<select id="countries" class="border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
  <option selected>Selecione um plano...</option>
  @foreach ($plans as $key => $value)
  <option value="{{ $key }}">{{ $value }}</option>    
  @endforeach  
</select>

<x-label>{{ __('Logo') }}</x-label>
<x-input type="file" class="w-full" name="logo"/>
<x-input-error for="logo"></x-input-error>



<x-button class="mt-2">Salvar</x-button>