<x-app-layout>
    <x-container>
        <!-- begin breadcrumb -->
        <x-breadcrumb>
            <x-breadcrumb-item :route="route('permissions.index')">Permissão</x-breadcrumb-item>
        <x-breadcrumb-active>Cadastro</x-breadcrumb-active>
        </x-breadcrumb>        
        <!-- end breadcrumb -->
        <x-card>
            <x-form action="{{ route('permissions.store') }}" method="POST">
                @include('admin.pages.permissions.partials.form')
            </x-form>
        </x-card>
    </x-container>
</x-app-layout>
