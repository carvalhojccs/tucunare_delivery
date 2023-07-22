<x-app-layout>
    <div
      class="block mt-2 rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700"
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
                    <a href="{{ route('profiles.index') }}" class="text-gray-600 hover:text-blue-500">
                        Perfis
                    </a>
                    <svg class="w-5 h-auto fill-current mx-2 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                        viewBox="0 0 24 24">
                        <path d="M0 0h24v24H0V0z" fill="none" />
                        <path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6-6-6z" />
                    </svg>
                </li>
  
                <li class="inline-flex items-center">
                    <a href="{{ route('permissions.index') }}" class="text-gray-600 hover:text-blue-500">
                        Permissões
                    </a>
                    <svg class="w-5 h-auto fill-current mx-2 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path d="M0 0h24v24H0V0z" fill="none" />
                        <path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6-6-6z" />
                    </svg>              
                </li> 
                
                <li class="inline-flex items-center">
                    <a href="#" class="text-gray-600 hover:text-blue-500">
                        {{ $permission->name }}
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

                <div class="overflow-hidden">
                    <x-session-message type='error' />
                    <x-session-message type='message' />
                    <h3>Perfis com a permissão: <strong>{{ $permission->name }}</strong></h3>
                    <table class="w-full text-left text-sm font-light">
                        <thead class="border-b font-medium dark:border-neutral-500">
                            <tr>
                                <th scope="col" class="px-6 py-4">Nome</th>
                                <th scope="col" class="px-6 py-4">Descrição</th>                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($permission->profiles as $profile)
                                <tr
                                    class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                                    <td class="whitespace-nowrap px-6 py-4">{{ $profile->name }}</td>
                                    <td class="whitespace-nowrap px-6 py-4">{{ $profile->description }}</td>                                    
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="border-t-2 border-neutral-100 px-6 py-3 dark:border-neutral-600 dark:text-neutral-50">
    @if (isset($filters))
        {{-- {!! $profiles->appends($filters)->links() !!} --}}
    @else
        {{-- {!! $profiles->links() !!} --}}
    @endif

</div>
    </div>
</x-app-layout>