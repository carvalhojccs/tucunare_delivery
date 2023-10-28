<x-app-layout>
    <x-container>
        <x-breadcrumb>
            <x-breadcrumb-active>{{ __('Mesas') }}</x-breadcrumb-active>
        </x-breadcrumb>
        @can("module_table_create")
            <x-links.new :route="route(Str::before(Route::currentRouteName(), '.').'.create')" />    
        @endcan
        <x-forms.search filter="{{ $filters['filter'] ?? '' }}" />
        <x-session-message type="error" />
        <x-session-message type="message" />
        <x-card>
        <x-tables.table>
            <x-slot name="thead">
                <th scope="col" class="px-6 py-4">{{ __('Identificação') }}</th>
                <th scope="col" class="px-6 py-4">{{ __('Descrição') }}</th>
                @can('module_tables_show')
                <th scope="col" class="px-6 py-4">{{ __('Ações') }}</th>
                @endcan
            </x-slot>
            <x-slot name="tbody">
                @forelse ($tables as $table)
                    <tr class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                        <td class="whitespace-nowrap px-6 py-4">{{ $table->identify }}</td>
                        <td class="whitespace-nowrap px-6 py-4">{{ $table->description }}</td>
                        @can('module_tables_show')
                            <td class="whitespace-nowrap px-6 py-4 flex space-x-5">                            
                                <a href="{{ route(Str::before(Route::currentRouteName(), '.').'.show', $table->id) }}">
                                    <x-icons.eye />
                                </a>                            
                            </td>
                        @endcan
                    </tr>
                    @empty
                    <tr
                    class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                    <td class="whitespace-nowrap px-6 py-4 text-center" colspan="3">{{ __('Nenhum registro encontrado') }}</td>
                    </tr>
                    @endforelse
            </x-slot>
        </x-tables.table>
        </x-card>
    </x-container>
</x-app-layout>
