<x-app-layout>
    <x-container>
        <!-- begin breadcrumb -->
        <x-breadcrumb>
            <x-breadcrumb-item :route="route('profiles.index')">Perfis</x-breadcrumb-item>
            <x-breadcrumb-item :route="route('permissions.index')">Permissões</x-breadcrumb-item>
            <x-breadcrumb-active>Dsponíveis</x-breadcrumb-active>
        </x-breadcrumb>
        <!-- end breadcrumb -->
        <x-card>
            <!-- search form -->
            <x-form action="{{ route('profiles.permissions.availables', $profile->id) }}" method="POST">
                <div class="bg-white items-center justify-between w-full flex rounded-full shadow-lg p-2 mb-5 sticky"
                    style="top: 5px">

                    <input
                        class="font-bold uppercase rounded-full w-full py-4 pl-4 text-gray-700 bg-gray-100 leading-tight focus:outline-none focus:shadow-outline lg:text-sm text-xs"
                        type="text" name="filter" placeholder="Pesquisar..." value="{{ $filters['filter'] ?? '' }}">

                    <button class="bg-gray-600 p-2 hover:bg-blue-400 cursor-pointer mx-2 rounded-full">
                        <x-icons.search />
                    </button>
                </div>
            </x-form>
            <!-- end search form -->
            <x-session-error type='error' />
            <x-session-message type='message' />
            <x-session-info type='info' />
            <h3>Permissões disponíveis para o perfil <strong>{{ $profile->name }}</strong></h3>

            <x-tables.table>
                <x-slot:thead>
                    <th scope="col" class="px-6 py-4">#</th>
                    <th scope="col" class="px-6 py-4">Nome</th>
                    <th scope="col" class="px-6 py-4">Descrição</th>
                    </x-slot>
                    <x-slot:tbody>
                        <form action="{{ route('profiles.permissions.attach', $profile->id) }}" method="POST">
                            @csrf
                            @foreach ($permissions as $permission)
                                <tr
                                    class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                                    <td class="whitespace-nowrap px-6 py-4">
                                        <input type="checkbox"
                                            class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"
                                            name="permissions[]" value="{{ $permission->id }}">
                                    </td>
                                    <td class="whitespace-nowrap px-6 py-4">{{ $permission->name }}</td>
                                    <td class="whitespace-nowrap px-6 py-4">{{ $permission->description }}
                                    </td>
                                </tr>
                            @endforeach
                            <tr>
                                <td colspan="10">
                                    <x-button>Vincular</x-button>
                                </td>
                            </tr>
                        </form>
                        </x-slot>
            </x-tables.table>
        </x-card>

        <div class="border-t-2 border-neutral-100 px-6 py-3 dark:border-neutral-600 dark:text-neutral-50">
            @if (isset($filters))
                {{-- {!! $profiles->appends($filters)->links() !!} --}}
            @else
                {{-- {!! $profiles->links() !!} --}}
            @endif
        </div>
    </x-container>
</x-app-layout>
