<x-app-layout>    
    <x-container>
        <x-breadcrumb>
            <x-breadcrumb-item :route="route(Str::before(Route::currentRouteName(), '.').'.index')">{{ __('Produtos') }}</x-breadcrumb-item>
        <x-breadcrumb-active>{{ __('Editar') }}</x-breadcrumb-active>
        </x-breadcrumb>
        <x-card>
            <x-form action="{{ route(Str::before(Route::currentRouteName(), '.').'.update', $data->id) }}" method="PUT" enctype="multipart/form-data">
                @include('admin.pages.'.Str::before(Route::currentRouteName(), '.').'.partials.form')
            </x-form>
        </x-card>
    </x-container>
</x-app-layout>