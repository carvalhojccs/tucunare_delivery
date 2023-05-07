<x-app-layout>

    <div
    class="block mt-2 rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700 ">
    <div
      class="border-b-2 border-neutral-100 px-6 py-3 dark:border-neutral-600 dark:text-neutral-50 flex justify-between">
      <h3>Planos</h3>
        <x-link href="{{ route('plans.create') }}" class="bg-indigo-600">Novo</x-link>
      
    </div>
    <div class="p-6">
      <h5
        class="mb-2 text-xl font-medium leading-tight text-neutral-800 dark:text-neutral-50">
        Listagem dos planos
      </h5>
      

      <div class="flex flex-col">
        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
          <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">

            <x-form action="{{ route('plans.search') }}" method="POST">
              <div class="bg-white items-center justify-between w-full flex rounded-full shadow-lg p-2 mb-5 sticky" style="top: 5px">
                <div>    
                  <div class="p-2 mr-1 rounded-full hover:bg-gray-100 cursor-pointer">    
                    <svg class="h-6 w-6 text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                      <path fill-rule="evenodd" d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z" clip-rule="evenodd" />
                    </svg>    
                  </div>    
                </div>
    
                <input 
                  class="font-bold uppercase rounded-full w-full py-4 pl-4 text-gray-700 bg-gray-100 leading-tight focus:outline-none focus:shadow-outline lg:text-sm text-xs" 
                  type="text" 
                  name="filter"
                  placeholder="Pesquisar..."
                  value="{{ $filters['filter'] ?? '' }}"
                >
    
                
                  <button class="bg-gray-600 p-2 hover:bg-blue-400 cursor-pointer mx-2 rounded-full">    
                    <svg class="w-6 h-6 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                      <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                    </svg>    
                  </button>    
                
                
              </div>
            </x-form>


            <div class="overflow-hidden">
              <table class="w-full text-left text-sm font-light">
                <thead class="border-b font-medium dark:border-neutral-500">
                  <tr>
                    <th scope="col" class="px-6 py-4">Nome</th>
                    <th scope="col" class="px-6 py-4">Preço</th>
                    <th scope="col" class="px-6 py-4">Ações</th>                    
                  </tr>
                </thead>
                <tbody>
                @foreach ($plans as $plan)
                    <tr class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                        <td class="whitespace-nowrap px-6 py-4">{{ $plan->name }}</td>
                        <td class="whitespace-nowrap px-6 py-4">{{ $plan->price }}</td>
                        <td class="whitespace-nowrap px-6 py-4">
                            <a href="{{ route('plans.show', $plan->url) }}">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                          </a>

                        </td>                    
                    </tr>      
                @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>      
    </div>
    <div
      class="border-t-2 border-neutral-100 px-6 py-3 dark:border-neutral-600 dark:text-neutral-50">
      @if (isset($filters))
        {!! $plans->appends($filters)->links() !!}  
      @else
        {!! $plans->links() !!}
      @endif
      
    </div>
  </div>

</x-app-layout>