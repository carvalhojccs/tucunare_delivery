<x-label>{{ __('Nome') }}</x-label>
<x-input type="text" class="w-full" name="name" value="{{ $user->name ?? old('name') }}" />
<x-input-error for="name"></x-input-error>

<x-label>{{ __('Email') }}</x-label>
<x-input type="text" class="w-full" name="email" value="{{ $user->email ?? old('email') }}" />
<x-input-error for="email"></x-input-error>

<x-label>{{ __('Senha') }}</x-label>
<x-input type="password" class="w-full" name="password" value="{{ $user->password ?? old('password') }}" />
<x-input-error for="password"></x-input-error>

<x-button class="mt-2">Salvar</x-button>
