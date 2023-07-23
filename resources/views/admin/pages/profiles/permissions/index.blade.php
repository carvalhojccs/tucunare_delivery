<x-app-layout>
    <x-container>
        <!-- begin breadcrumb -->
        <x-breadcrumb>
            <x-breadcrumb-item :route="route('profiles.index')">Perfis</x-breadcrumb-item>
            <x-breadcrumb-item :route="route('permissions.index')">Permissões</x-breadcrumb-item>
            <x-breadcrumb-active>Vinculadas</x-breadcrumb-active>
        </x-breadcrumb>        
        <!-- end breadcrumb -->
        
        <div class="flex justify-start px-6 py-2">
            <x-link href="{{ route('profiles.permissions.availables', $profile->id) }}" class="bg-indigo-600">Vincular permissão</x-link>
        </div>
        <x-card>
            <x-session-error type='error' />
            <x-session-message type='message' />
            <h3>Permissões vinculadas ao perfil: <strong>{{ $profile->name }}</strong></h3>

            <x-tables.table>
                <x-slot:thead>
                    <th scope="col" class="px-6 py-4">Nome</th>
                    <th scope="col" class="px-6 py-4">Descrição</th>
                    <th scope="col" class="px-6 py-4">Ações</th>
                </x-slot>
                <x-slot:tbody>
                    @foreach ($profile->permissions as $permission)
                    <tr
                        class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                        <td class="whitespace-nowrap px-6 py-4">{{ $permission->name }}</td>
                        <td class="whitespace-nowrap px-6 py-4">{{ $permission->description }}</td>
                        <td class="whitespace-nowrap px-6 py-4">
                            <a
                                href="{{ route('profiles.permissions.detach', [$profile->id, $permission->id]) }}">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="red"
                                    class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M13.5 10.5V6.75a4.5 4.5 0 119 0v3.75M3.75 21.75h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H3.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
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
                {{-- {!! $profiles->appends($filters)->links() !!} --}}
            @else
                {{-- {!! $profiles->links() !!} --}}
            @endif

        </div>
    </x-container>
</x-app-layout>
