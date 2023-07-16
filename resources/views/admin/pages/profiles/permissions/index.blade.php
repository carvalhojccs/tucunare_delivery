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
                    <a href="#" class="text-gray-600 hover:text-blue-500">
                        Profiles
                    </a>
                    <svg class="w-5 h-auto fill-current mx-2 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path d="M0 0h24v24H0V0z" fill="none" />
                        <path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6-6-6z" />
                    </svg>              
                </li> 
                
                <li class="inline-flex items-center">
                    <a href="#" class="text-gray-600 hover:text-blue-500">
                        {{ $profile->name }}
                    </a>            
                </li> 
            </ul>
        </div>  
      </div>
      <!-- end breadcrumb -->
    <div class="flex justify-end">
      <x-link href="{{ route('permissions.profiles.availables', $profile->id) }}" class="bg-indigo-600">Vincular permissão</x-link>
    </div>
<div class="p-6">
    <div class="flex flex-col">
        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">

                <div class="overflow-hidden">
                    <x-session-message type='error' />
                    <x-session-message type='message' />
                    <h3>Permissões do perfil: <strong>{{ $profile->name }}</strong></h3>
                    <table class="w-full text-left text-sm font-light">
                        <thead class="border-b font-medium dark:border-neutral-500">
                            <tr>
                                <th scope="col" class="px-6 py-4">Nome</th>
                                <th scope="col" class="px-6 py-4">Descrição</th>
                                <th scope="col" class="px-6 py-4">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($profile->permissions as $permission)
                                <tr
                                    class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                                    <td class="whitespace-nowrap px-6 py-4">{{ $permission->name }}</td>
                                    <td class="whitespace-nowrap px-6 py-4">{{ $permission->description }}</td>
                                    <td class="whitespace-nowrap px-6 py-4">
                                        <a href="{{ route('profiles.permissions.detach', [$profile->id, $permission->id]) }}">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="red" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 10.5V6.75a4.5 4.5 0 119 0v3.75M3.75 21.75h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H3.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
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
<div class="border-t-2 border-neutral-100 px-6 py-3 dark:border-neutral-600 dark:text-neutral-50">
    @if (isset($filters))
        {{-- {!! $profiles->appends($filters)->links() !!} --}}
    @else
        {{-- {!! $profiles->links() !!} --}}
    @endif

</div>
    </div>
</x-app-layout>