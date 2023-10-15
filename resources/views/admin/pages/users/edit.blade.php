<x-app-layout>    
    <x-container>
        <x-breadcrumb>
            <x-breadcrumb-item :route="route('users.index')">{{ __('Usuários') }}</x-breadcrumb-item>
            <x-breadcrumb-active>{{ __('Edição') }}</x-breadcrumb-active>
        </x-breadcrumb>        
        <x-card>
            <x-form action="{{ route('users.update', $user->id) }}" method="PUT">
                @include('admin.pages.users.partials.form')
            </x-form>
        </x-card>
    </x-container>    
</x-app-layout>