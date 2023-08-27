<x-app-layout>    
    <x-container>
        <x-breadcrumb>
            <x-breadcrumb-item :route="route(Str::before(Route::currentRouteName(), '.').'.index')">{{ __('Categorias') }}</x-breadcrumb-item>
        <x-breadcrumb-active>{{ __('Nova categoria') }}</x-breadcrumb-active>
        </x-breadcrumb>
        <x-card>
            <x-form action="{{ route(Str::before(Route::currentRouteName(), '.').'.store') }}" method="POST">
                @include('admin.pages.'.Str::before(Route::currentRouteName(), '.').'.partials.form')
            </x-form>
        </x-card>
    </x-container>
</x-app-layout>