<x-app-layout>  
  <div
    class="block mt-2 rounded-lg bg-white p-6 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700"
  >
    <!-- begin breadcrumb -->
    <div class="border-b-2 border-neutral-100 px-6 py-3 dark:border-neutral-600 dark:text-neutral-50 flex justify-between">
      <div class="bg-white flex items-center flex-wrap">
          <ul class="flex items-center">
              <li class="inline-flex items-center">
                  <a href="#" class="text-gray-600 hover:text-blue-500">
                      <svg class="w-5 h-auto fill-current mx-2 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                          viewBox="0 0 24 24" fill="#000000">
                          <path d="M0 0h24v24H0V0z" fill="none" />
                          <path
                              d="M10 19v-5h4v5c0 .55.45 1 1 1h3c.55 0 1-.45 1-1v-7h1.7c.46 0 .68-.57.33-.87L12.67 3.6c-.38-.34-.96-.34-1.34 0l-8.36 7.53c-.34.3-.13.87.33.87H5v7c0 .55.45 1 1 1h3c.55 0 1-.45 1-1z" />
                      </svg>
                  </a>

                  <svg class="w-5 h-auto fill-current mx-2 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 24 24">
                      <path d="M0 0h24v24H0V0z" fill="none" />
                      <path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6-6-6z" />
                  </svg>
              </li>

              <li class="inline-flex items-center">
                  <a href="{{ route('plans.index') }}" class="text-gray-600 hover:text-blue-500">
                      Planos
                  </a>
                  <svg class="w-5 h-auto fill-current mx-2 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 24 24">
                      <path d="M0 0h24v24H0V0z" fill="none" />
                      <path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6-6-6z" />
                  </svg>
              </li>

              <li class="inline-flex items-center">
                  <a href="#" class="text-gray-600 hover:text-blue-500">
                      Informações
                  </a>              
              </li>          
          </ul>
      </div>  
    </div>
    <!-- end breadcrumb -->

    <div class="p-6">
      <div class="flex flex-col">
        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
          <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
        <form>
          <x-label>Nome</x-label>
          <x-input type="text" class="w-full" name="name" value="{{ $plan->name }}" disabled />

          <x-label>Preço</x-label>
          <x-input type="text" name="price" value="{{ $plan->price }}" disabled />

          <x-label>Descrição</x-label>
          <x-input type="text" class="w-full" name="description" value="{{ $plan->description }}" disabled />

          <div class="flex justify-between">
          
          <div>
            <x-label>Criado em</x-label>
          <x-input type="text" name="created_at" value="{{ $plan->created_at->format('d/m/Y - H:m:s') }}" disabled />
          </div>
          
          <div>
            @if ($plan->created_at != $plan->updated_at)
            <x-label>Última atualização</x-label>
            <x-input type="text" name="updated_at" value="{{ $plan->updated_at->format('d/m/Y - H:m:s') }}" disabled />
          @endif
          </div>
          
          </div>
        </form>
      </div>
        </div>
      </div>
    </div>

  </div>
<div
  class="block mt-2 rounded-lg bg-white p-6 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700"
>

  <div class="flex justify-between">
    <div>
      <x-link href="{{ route('plans.index') }}" class="bg-indigo-600">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
          <path stroke-linecap="round" stroke-linejoin="round" d="M9 15L3 9m0 0l6-6M3 9h12a6 6 0 010 12h-3" />
        </svg>
        Voltar    
      </x-link> 
    
      <x-link href="{{ route('plans.edit', $plan->url) }}" class="bg-green-500">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
          <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
        </svg>
        Editar  
      </x-link>

      <x-link href="{{ route('plans.details.index', $plan->id) }}" class="bg-green-500">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
          <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
        </svg>
        Detalhes
      </x-link>
    </div>
    
    <x-form action="{{ route( 'plans.destroy', $plan->url ) }}" method="DELETE">      
      <x-button class="bg-red-500">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
          <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
        </svg>
        Deletar
      </x-button>
    </x-form>
  </div>
</div>
</x-app-layout>