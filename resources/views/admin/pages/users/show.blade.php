<x-app-layout>
    <x-container>
        <x-breadcrumb>
            <x-breadcrumb-item :route="route('users.index')">{{ __('Usuários') }}</x-breadcrumb-item>
            <x-breadcrumb-active>{{ __('Detalhes') }}</x-breadcrumb-active>
        </x-breadcrumb>
        <x-card>
            <form>
                <x-label>{{ __('Nome') }}</x-label>
                <x-input type="text" class="w-full" value="{{ $user->name }}" disabled />
                
                <x-label>{{ __('Email') }}</x-label>
                <x-input type="text" class="w-full" value="{{ $user->email }}" disabled />

                <x-label>{{ __('Empresa') }}</x-label>
                <x-input type="text" class="w-full" value="{{ $user->tenant->business_name }}" disabled />

                <div class="flex justify-between py-2">
                    <div>
                        <x-label>{{ __('Criado em: ') }} {{ $user->created_at->format('d/m/Y - H:m:s') }}</x-label>                        
                    </div>
                    <div>
                            <x-label>{{ __('Última atualização: ') }} 
                                @if ($user->created_at != $user->updated_at)
                                    {{ $user->updated_at->format('d/m/Y - H:m:s') }}
                                @endif
                            </x-label>
                    </div>
                </div>
            </form>
            <table class="w-full text-left text-sm font-light">
                <caption class="caption-top bg-gray-200 p-2 rounded-full">
                    {{ __('CARGOS') }}
                </caption>
                <tbody>
                    @forelse ($user->roles as $role)
                    <tr
                    class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                    <td class="whitespace-nowrap px-6 py-4">{{ $role->name }}</td>
                    <td class="whitespace-nowrap px-6 py-4 flex justify-end">
                        <a href="{{ route('users.roles.detach', [$user->id, $role->id]) }}">
                            <div class="flex space-x-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path d="M17.293 19.663l-1.727.245.523 3.696 1.73-.245-.526-3.696zm2.649-4.132l-.246 1.729 3.698.524.246-1.726-3.698-.527zm.596 6.189l1.232-1.233-2.645-2.642-1.231 1.234 2.644 2.641zm.459-20.916c2.87 1.659 3.854 5.328 2.198 8.196l-2.752 4.767-1.737-1 2.754-4.766c1.104-1.911.447-4.362-1.466-5.464-1.911-1.103-4.362-.447-5.465 1.464l-2.752 4.765-1.735-1 2.752-4.765c1.658-2.87 5.33-3.853 8.203-2.197zm-7.276 19.671l-4.715 2.72c-2.869 1.658-6.543.674-8.203-2.196-1.653-2.87-.673-6.541 2.198-8.196l4.715-2.721 1 1.732-4.713 2.722c-1.911 1.104-2.567 3.554-1.466 5.463 1.107 1.911 3.556 2.567 5.47 1.465l4.712-2.72 1.002 1.731z"/>
                                </svg>
                                <span>Desvincular</span>
                            </div>
                        </a>                        
                    </td>
                    </tr>
                    @empty
                    <tr>
                        <td class="whitespace-nowrap px-6 py-4">{{ __('Nenhum cargo vinculado') }}</td>
                    </tr>   
                    @endforelse
                </tbody>
            </table>

        </x-card>
        <x-card>       
        <div  class="block mt-2 rounded-lg bg-gray-200 p-4 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">  
            <div class="flex justify-between">
                <div>
                    <x-link href="{{ route(Str::before(Route::currentRouteName(),'.').'.index') }}" class="bg-indigo-600">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 15L3 9m0 0l6-6M3 9h12a6 6 0 010 12h-3" />
                        </svg>
                        Voltar    
                    </x-link> 
      
                    <x-link href="{{ route(Str::before(Route::currentRouteName(),'.').'.edit', $user->id) }}" class="bg-green-500">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                        </svg>
                        Editar  
                    </x-link>                    
                </div>
                <x-link href="{{ route('users.roles.availables', $user->id) }}" class="bg-green-900">
                    <span class="pr-3">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.19 8.688a4.5 4.5 0 011.242 7.244l-4.5 4.5a4.5 4.5 0 01-6.364-6.364l1.757-1.757m13.35-.622l1.757-1.757a4.5 4.5 0 00-6.364-6.364l-4.5 4.5a4.5 4.5 0 001.242 7.244" />
                      </svg>
                    </span>
                    {{ __('Vincular cargo') }}
                </x-link>
                <x-form action="{{ route(Str::before(Route::currentRouteName(),'.').'.destroy', $user->id ) }}" method="DELETE">      
                    <x-button class="bg-red-500">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                        </svg>
                        Deletar
                    </x-button>
                </x-form>                
            </div>
        </div>
    </x-card> 
    </x-container>
</x-app-layput>