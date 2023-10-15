<x-app-layout>    
    <x-container>
        <x-breadcrumb>
            <x-breadcrumb-item :route="route(Str::before(Route::currentRouteName(), '.').'.index')">{{ __('Produtos') }}</x-breadcrumb-item>
        <x-breadcrumb-active>{{ __('Criar') }}</x-breadcrumb-active>
        </x-breadcrumb>
        <x-card>
            <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @include('admin.pages.'.Str::before(Route::currentRouteName(), '.').'.partials.form')
            </form>
        </x-card>
    </x-container>
</x-app-layout>