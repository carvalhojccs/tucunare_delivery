<x-app-layout>
    <x-container>
        <!-- begin breadcrumb -->
        <x-breadcrumb>
            <x-breadcrumb-active>Perfis</x-breadcrumb-active>
        </x-breadcrumb>
        <!-- end breadcrumb -->
            <x-links.new :route="route('profiles.create')"/>
        <x-card>
            <!-- search form -->
            <x-form action="{{ route('profiles.search') }}" method="POST">
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

            <x-session-message type='error' />
            <x-session-message type='message' />

            <x-tables.table>
                <x-slot:thead>
                    <th scope="col" class="px-6 py-4">Nome</th>
                    <th scope="col" class="px-6 py-4">Descrição</th>
                    <th scope="col" class="px-6 py-4">Ações</th>
                </x-slot>
                <x-slot:tbody>
                    @foreach ($profiles as $profile)
                    <tr
                        class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                        <td class="whitespace-nowrap px-6 py-4">{{ $profile->name }}</td>
                        <td class="whitespace-nowrap px-6 py-4">{{ $profile->description }}</td>
                        <td class="whitespace-nowrap px-6 py-4 flex space-x-5">
                            <a href="{{ route('profiles.show', $profile->id) }}">
                                <x-icons.eye />
                            </a>
                            <a href="{{ route('profiles.permissions.index', $profile->id) }}">
                                <x-icons.lock-closed />
                            </a>
                            <a href="{{ route('profiles.plans.index', $profile->id) }}">
                                <x-icons.clipboard-check />
                            </a>

                        </td>
                    </tr>
                @endforeach
                </x-slot>
            </x-tables.table>

        </x-card>        
        
        <div class="border-t-2 border-neutral-100 px-6 py-3 dark:border-neutral-600 dark:text-neutral-50">
            @if (isset($filters))
                {!! $profiles->appends($filters)->links() !!}
            @else
                {!! $profiles->links() !!}
            @endif

        </div>
    </x-container>
</x-app-layout>
