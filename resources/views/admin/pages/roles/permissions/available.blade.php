<x-app-layout>
    <x-container>
        <x-breadcrumb>
            <x-breadcrumb-item :route="route('roles.index')">{{ __('Cargos') }}</x-breadcrumb-item>
            <x-breadcrumb-item :route="route('permissions.index')">{{ __('Permissões') }}</x-breadcrumb-item>
            <x-breadcrumb-active>{{ __('Dsponíveis') }}</x-breadcrumb-active>
        </x-breadcrumb>
        <x-session-info type='info' />
        <x-card>
            <h3>Permissões disponíveis para o cargo <strong>{{ $role->name }}</strong></h3>
            <x-tables.table>
                <x-slot name="thead">
                    <th scope="col" class="px-6 py-4">#</th>
                    <th scope="col" class="px-6 py-4">{{ __('Nome') }}</th>
                    <th scope="col" class="px-6 py-4">{{ __('Descrição') }}</th>
                </x-slot>
                <x-slot name="tbody">
                    <form action="{{ route('roles.permissions.attach', $role->id) }}" method="POST">
                        @csrf
                        @forelse ($permissions as $permission)
                        <tr
                            class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                            <td class="whitespace-nowrap px-6 py-4">
                                <input type="checkbox"
                                    class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"
                                    name="permissions[]" value="{{ $permission->id }}">
                            </td>
                            <td class="whitespace-nowrap px-6 py-4">{{ $permission->name }}</td>
                            <td class="whitespace-nowrap px-6 py-4">{{ $permission->description }}</td>
                        </tr>
                        @empty
                        <tr
                        class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                            <td colspan="3" class="whitespace-nowrap px-6 py-4">{{ __('Nenhuma permissão disponível') }}</td>
                        </tr>
                        @endforelse
                        <tr>
                            <td colspan="10">
                                <x-button>
                                    <span class="px-2">
                                        <svg width="24" height="24" xmlns="http://www.w3.org/2000/svg" fill-rule="evenodd" clip-rule="evenodd" fill="white">
                                            <path d="M14.851 11.923c-.179-.641-.521-1.246-1.025-1.749-1.562-1.562-4.095-1.563-5.657 0l-4.998 4.998c-1.562 1.563-1.563 4.095 0 5.657 1.562 1.563 4.096 1.561 5.656 0l3.842-3.841.333.009c.404 0 .802-.04 1.189-.117l-4.657 4.656c-.975.976-2.255 1.464-3.535 1.464-1.28 0-2.56-.488-3.535-1.464-1.952-1.951-1.952-5.12 0-7.071l4.998-4.998c.975-.976 2.256-1.464 3.536-1.464 1.279 0 2.56.488 3.535 1.464.493.493.861 1.063 1.105 1.672l-.787.784zm-5.703.147c.178.643.521 1.25 1.026 1.756 1.562 1.563 4.096 1.561 5.656 0l4.999-4.998c1.563-1.562 1.563-4.095 0-5.657-1.562-1.562-4.095-1.563-5.657 0l-3.841 3.841-.333-.009c-.404 0-.802.04-1.189.117l4.656-4.656c.975-.976 2.256-1.464 3.536-1.464 1.279 0 2.56.488 3.535 1.464 1.951 1.951 1.951 5.119 0 7.071l-4.999 4.998c-.975.976-2.255 1.464-3.535 1.464-1.28 0-2.56-.488-3.535-1.464-.494-.495-.863-1.067-1.107-1.678l.788-.785z"/>
                                        </svg>
                                    </span>
                                    Vincular</x-button>
                            </td>
                        </tr>
                    </form>
                </x-slot>                
            </x-tables.table>
        </x-card>
    </x-container>
</x-app-layout>