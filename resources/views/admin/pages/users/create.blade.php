<x-app-layout>
    <x-container>
        <x-breadcrumb>
            <x-breadcrumb-item :route="route('users.index')">{{ __('Usuários') }}</x-breadcrumb-item>
        <x-breadcrumb-active>{{ __('Novo usuário') }}</x-breadcrumb-active>
        </x-breadcrumb>
        <x-card>
            <x-form action="{{ route('users.store') }}" method="POST">
                @include('admin.pages.users.partials.form')
            </x-form>
        </x-card>
    </x-container>
</x-app-layout>