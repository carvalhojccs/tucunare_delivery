{{ $route =  Str::before(Route::currentRouteName(), ".") }}
<x-app-layout>    
    <x-container>
        <x-breadcrumb>
            <x-breadcrumb-item :route="route('categories.index')">{{ __('Categorias') }}</x-breadcrumb-item>
        <x-breadcrumb-active>{{ __('Nova categoria') }}</x-breadcrumb-active>
        </x-breadcrumb>
        <x-card>
            <x-form action="{{ route($route.'.store') }}" method="POST">
                @include('admin.pages.'.$route.'.partials.form')
            </x-form>
        </x-card>
    </x-container>
</x-app-layout>