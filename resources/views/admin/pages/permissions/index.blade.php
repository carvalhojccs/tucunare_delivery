<x-app-layout>
    <x-container>
        <!-- begin breadcrumb -->
        <x-breadcrumb>
            <x-breadcrumb-active>Permissões</x-breadcrumb-active>
        </x-breadcrumb>
        <!-- end breadcrumb -->
        <div class="flex justify-start px-6 py-2">
            <x-link href="{{ route('permissions.create') }}" class="bg-indigo-600">
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                    </svg>
                      
                </div>                
                Novo
            </x-link>
        </div>
        <x-card>
            <!-- search form -->
            <x-form action="{{ route('permissions.search') }}" method="POST">
                <div class="bg-white items-center justify-between w-full flex rounded-full shadow-lg p-2 mb-5 sticky"
                    style="top: 5px">
                    <input
                        class="font-bold uppercase rounded-full w-full py-4 pl-4 text-gray-700 bg-gray-100 leading-tight focus:outline-none focus:shadow-outline lg:text-sm text-xs"
                        type="text" name="filter" placeholder="Pesquisar..."
                        value="{{ $filters['filter'] ?? '' }}">

                    <button class="bg-gray-600 p-2 hover:bg-blue-400 cursor-pointer mx-2 rounded-full">
                        <x-icons.search />
                    </button>
                </div>
            </x-form>
            <!-- end search form -->

            <x-session-message type='message' />
            <x-session-error type='error' />

            <x-tables.table>
                <x-slot:thead>
                    <th scope="col" class="px-6 py-4">Nome</th>
                    <th scope="col" class="px-6 py-4">Descrição</th>
                    <th scope="col" class="px-6 py-4">Ações</th>
                </x-slot>
                <x-slot:tbody>
                    @foreach ($permissions as $permission)
                    <tr
                        class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                        <td class="whitespace-nowrap px-6 py-4">{{ $permission->name }}</td>
                        <td class="whitespace-nowrap px-6 py-4">{{ $permission->description }}</td>
                        <td class="whitespace-nowrap px-6 py-4 flex space-x-3">
                            <a href="{{ route('permissions.show', $permission->id) }}">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                    class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                            </a>
                            <a href="{{ route('permissions.profiles.index', $permission->id) }}">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                    class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
                                </svg>
                            </a>
                        </td>
                    </tr>
                @endforeach
                </x-slot>
            </x-tables.table>
        </x-card>
        <div class="border-t-2 border-neutral-100 px-6 py-3 dark:border-neutral-600 dark:text-neutral-50">
            @if (isset($filters))
                {!! $permissions->appends($filters)->links() !!}
            @else
                {!! $permissions->links() !!}
            @endif

        </div>
    </x-container>
</x-app-layout>
