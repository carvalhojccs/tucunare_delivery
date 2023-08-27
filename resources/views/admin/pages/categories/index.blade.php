<x-app-layout>
    <x-container>
        <x-breadcrumb>
            <x-breadcrumb-active>{{ __('Categorias') }}</x-breadcrumb-active>
        </x-breadcrumb>
        <x-links.new :route="route('categories.create')" />
        <x-session-message type="error" />
        <x-session-message type="message" />
        <x-tables.table>
            <x-slot name="thead">
                <th scope="col" class="px-6 py-4">{{ __('Nome') }}</th>
                <th scope="col" class="px-6 py-4">{{ __('Descrição') }}</th>
                <th scope="col" class="px-6 py-4">{{ __('Ações') }}</th>
            </x-slot>
            <x-slot name="tbody">
                @forelse ($categories as $category)
                    <tr
                    class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                    <td class="whitespace-nowrap px-6 py-4">{{ $category->name }}</td>
                    <td class="whitespace-nowrap px-6 py-4">{{ $category->description }}</td>
                    <td class="whitespace-nowrap px-6 py-4 flex space-x-5">
                        <a href="{{ route('categories.show', $category->id) }}">
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
        </x-table>
    </x-container>
</x-app-layout>
