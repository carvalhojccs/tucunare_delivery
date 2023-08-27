<x-app-layout>
    <x-container>
        <x-breadcrumb>
            <x-breadcrumb-active>{{ __('Usuários') }}</x-breadcrumb-active>            
        </x-breadcrumb>
        <x-links.new :route="route('users.create')" />
        <x-card>            
            <x-session-message type='error' />
            <x-session-message type='message' />

            <x-tables.table>
                <x-slot name="thead">
                    <th scope="col" class="px-6 py-4">{{ __('Nome') }}</th>
                    <th scope="col" class="px-6 py-4">{{ __('Email') }}</th>
                    <th scope="col" class="px-6 py-4">{{ __('Ações') }}</th>
                </x-slote>
                <x-slot>
                    @forelse ($users as $user)
                    <tr
                    class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                    <td class="whitespace-nowrap px-6 py-4">{{ $user->name }}</td>
                    <td class="whitespace-nowrap px-6 py-4">{{ $user->email }}</td>
                    <td class="whitespace-nowrap px-6 py-4 flex space-x-5">
                        <a href="{{ route('users.show', $user->id) }}">
                            <x-icons.eye />
                        </a>
                    </td>
                </tr>
                    @empty
                        
                    @endforelse
                </x-slot>
            </x-tables.table>
        </x-card>
    </x-container>
</x-app-layout>