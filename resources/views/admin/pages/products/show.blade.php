<x-app-layout>
    <x-container>
        <x-breadcrumb>
            <x-breadcrumb-item :route="route(Str::before(Route::currentRouteName(),'.').'.index')">{{ __('Produtos') }}</x-breadcrumb-item>
            <x-breadcrumb-active>{{ __('Detalhes') }}</x-breadcrumb-active>
        </x-breadcrumb>
        <x-card>
            <x-session-message type="message" />
            <form>
                <div class="flex justify-center">
                    <img src="{{ url("storage/{$data->image}") }}" class="w-32 rounded-full">
                </div>
                
                <x-label>{{ 'Titulo' }}</x-label> 
                <x-input type="text" class="w-full" value="{{ $data->title }}" disabled />
                    <x-label>{{ __('Descrição') }}</x-label>
                    <x-input type="text" class="w-full" value="{{ $data->description }}" disabled />
                    <div class="flex justify-between py-2">
                        <div>
                            <x-label>{{ __('Criado em: ') }} {{ $data->created_at->format('d/m/Y - H:m:s') }}</x-label>                        
                        </div>
                        @if ($data->created_at != $data->updated_at)
                            <div>                            
                                <x-label>{{ __('Última atualização: ') }} 
                                {{ $data->updated_at->format('d/m/Y - H:m:s') }}                            
                                </x-label>
                            </div>
                        @endif
                    </div>
            </form>
            <table class="w-full text-left text-sm font-light">
                <caption class="caption-top bg-gray-200 px-2 py-2 rounded-full">{{ __('CATEGORIAS') }}</caption>
                <tbody>
                    @foreach ($data->categories as $category)
                    <tr
                    class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                    <td class="whitespace-nowrap px-6 py-4">{{ $category->name }}</td>
                    <td class="whitespace-nowrap px-6 py-4 flex justify-end">
                        <a href="{{ route('products.category.detach', [$data->id, $category->id]) }}">
                            <div class="flex space-x-4">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 3.75v4.5m0-4.5h4.5m-4.5 0L9 9M3.75 20.25v-4.5m0 4.5h4.5m-4.5 0L9 15M20.25 3.75h-4.5m4.5 0v4.5m0-4.5L15 9m5.25 11.25h-4.5m4.5 0v-4.5m0 4.5L15 15" />
                                </svg>
                                <span>Desvincular</span>
                            </div>
                        </a>                        
                    </td>
                    </tr>
                    @endforeach    
                </tbody>

            </table>
        </x-card>        
        <div  class="block mt-2 rounded-lg bg-gray-400 p-6 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">  
            <div class="flex justify-between">
                <div>
                    <x-link href="{{ route(Str::before(Route::currentRouteName(),'.').'.index') }}" class="bg-indigo-600">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9 15L3 9m0 0l6-6M3 9h12a6 6 0 010 12h-3" />
                        </svg>
                        Voltar    
                    </x-link> 
      
                    <x-link href="{{ route(Str::before(Route::currentRouteName(),'.').'.edit', $data->id) }}" class="bg-green-500">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                        </svg>
                        Editar  
                    </x-link>
                    <x-link href="{{ route('products.categories.available', $data->id) }}" class="bg-green-900">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.19 8.688a4.5 4.5 0 011.242 7.244l-4.5 4.5a4.5 4.5 0 01-6.364-6.364l1.757-1.757m13.35-.622l1.757-1.757a4.5 4.5 0 00-6.364-6.364l-4.5 4.5a4.5 4.5 0 001.242 7.244" />
                          </svg>                          
                        Vincular Categoria
                    </x-link>
                </div>
      
                <x-form action="{{ route( 'products.destroy', $data->id ) }}" method="DELETE">      
                    <x-button class="bg-red-500">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                        </svg>
                        Deletar
                    </x-button>
                </x-form>
            </div>
        </div>
    </x-container>
</x-app-layout>