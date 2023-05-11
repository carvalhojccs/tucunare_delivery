<x-app-layout>  
  <div
    class="block mt-2 rounded-lg bg-white p-6 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700"
  >
    <div
      class="border-b-2 border-neutral-100 px-6 py-3 dark:border-neutral-600 dark:text-neutral-50 flex justify-between"
    >
      <h3>Detalhes do plano</h3>
    </div>
    <form>
      <x-label>Nome</x-label>
      <x-input type="text" class="w-full" name="name" value="{{ $detail->name }}" disabled />      

      <div class="flex justify-between">
      
      <div>
        <x-label>Criado em</x-label>
      <x-input type="text" name="created_at" value="{{ $detail->created_at->format('d/m/Y - H:m:s') }}" disabled />
      </div>
      
      <div>
        @if ($detail->created_at != $detail->updated_at)
        <x-label>Última atualização</x-label>
        <x-input type="text" name="updated_at" value="{{ $detail->updated_at->format('d/m/Y - H:m:s') }}" disabled />
      @endif
      </div>
      
      </div>
    </form>
</div>
<div
  class="block mt-2 rounded-lg bg-white p-6 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700"
>

  <div class="flex justify-between">
    <div>
      <x-link href="{{ route('plans.details.index', $plan->id) }}" class="bg-indigo-600">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
          <path stroke-linecap="round" stroke-linejoin="round" d="M9 15L3 9m0 0l6-6M3 9h12a6 6 0 010 12h-3" />
        </svg>
        Voltar    
      </x-link> 
    
      <x-link href="{{ route('plans.details.edit', [$plan->id, $detail->id]) }}" class="bg-green-500">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
          <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
        </svg>
        Editar  
      </x-link>      
    </div>
    
    <x-form action="{{ route( 'plans.details.destroy', [$plan->id, $detail->id] ) }}" method="DELETE">      
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