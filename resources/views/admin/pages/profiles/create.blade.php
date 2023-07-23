<x-app-layout>
    <x-container>
        <!-- begin breadcrumb -->
        <x-breadcrumb>
            <x-breadcrumb-item :route="route('profiles.index')">Perfis</x-breadcrumb-item>
            <x-breadcrumb-active>Cadastro</x-breadcrumb-active>
        </x-breadcrumb>
        <!-- end breadcrumb -->
        <x-card>
            <x-form action="{{ route('profiles.store') }}" method="POST">
                @include('admin.pages.profiles.partials.form')
            </x-form>
        </x-card>
    </x-container>
</x-app-layout>
