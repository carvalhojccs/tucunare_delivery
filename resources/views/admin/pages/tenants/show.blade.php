<x-app-layout>
    <x-container>
        <x-breadcrumb>
            <x-breadcrumb-item :route="route(Str::before(Route::currentRouteName(),'.').'.index')">{{ __('Tenants') }}</x-breadcrumb-item>
            <x-breadcrumb-active>{{ __('Detalhes') }}</x-breadcrumb-active>
        </x-breadcrumb>
        <x-session-message type="message" />
        <x-card>
            <form class="grid grid-cols-4 gap-4">
                <div>
                    <x-label>{{ __('CNPJ') }}</x-label> 
                    <x-input type="text" class="w-full" value="{{ $tenant->cnpj }}" disabled />
                </div>
                <div class="col-span-3">
                    <x-label>{{ __('Nome') }}</x-label> 
                    <x-input type="text" class="w-full" value="{{ $tenant->business_name }}" disabled />
                </div>
                <div>
                    <x-label>{{ __('Nome fantasia') }}</x-label> 
                    <x-input type="text" class="w-full" value="{{ $tenant->fantasy_name }}" disabled />                
                </div>
                <div>
                    <x-label>{{ __('Email') }}</x-label> 
                    <x-input type="text" class="w-full" value="{{ $tenant->email }}" disabled />
                </div>
                <div>
                    <x-label>{{ __('Assinatura') }}</x-label> 
                    <x-input type="text" class="w-full" value="{{ $tenant->subscription }}" disabled />
                </div>
                <div>
                    <x-label>{{ __('Validade') }}</x-label> 
                    <x-input type="text" class="w-full" value="{{ $tenant->expires_at }}" disabled />
                </div>
                
                
                
                
        </x-card>
    </x-container>
</x-app-layout>