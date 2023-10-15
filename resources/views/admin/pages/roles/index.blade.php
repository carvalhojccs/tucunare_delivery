<x-app-layout>
    <x-container>
        <x-breadcrumb>
            <x-breadcrumb-active>{{ __('Cargos') }}</x-breadcrumb-active>
        </x-breadcrumb>
        <x-links.new :route="route(Str::before(Route::currentRouteName(), '.').'.create')" />
        <x-forms.search filter="{{ $filters['filter'] ?? '' }}" />
        <x-session-message type="error" />
        <x-session-message type="message" />
        <x-tables.table>
            <x-slot name="thead">
                <th scope="col" class="px-6 py-4">{{ __('Nome') }}</th>                
                <th scope="col" class="px-6 py-4">{{ __('Descrição') }}</th>                
                <th scope="col" class="px-6 py-4">{{ __('Ações') }}</th>
            </x-slot>
            <x-slot name="tbody">
                @forelse ($data as $item)
                    <tr class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                    <td class="whitespace-nowrap px-6 py-4">{{ $item->name }}</td>                    
                    <td class="whitespace-nowrap px-6 py-4">{{ $item->description }}</td>                    
                    <td class="whitespace-nowrap px-6 py-4 flex space-x-5">                    
                        <a href="{{ route(Str::before(Route::currentRouteName(), '.').'.show', $item->id) }}">
                            <x-icons.eye />
                        </a>
                    </td>
                </tr>
                    @empty
                    <tr
                    class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                    <td class="whitespace-nowrap px-6 py-4 text-center" colspan="3">{{ __('Nenhum registro encontrado') }}</td>
                    </tr>
                    @endforelse
            </x-slot>
        </x-tables.table>        
    </x-container>
</x-app-layout>