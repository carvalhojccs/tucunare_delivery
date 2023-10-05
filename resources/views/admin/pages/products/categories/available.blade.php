<x-app-layout>
    <x-container>
        <x-breadcrumb>
            <x-breadcrumb-item :route="route('products.index')">{{ __('Produtos') }}</x-breadcrumb-item>
            <x-breadcrumb-item :route="route('categories.index')">{{ __('Categorias') }}</x-breadcrumb-item>
            <x-breadcrumb-active>{{ __('Disponíveis') }}</x-breadcrumb-active>
        </x-breadcrumb>
        <x-card>
            <x-session-error type='error' />
            <x-session-message type='message' />
            <x-session-info type='info' />
            <h3>{{ __('Categorias disponíveis para o produto: ') }} {{ $product->description }}</h3>
            <x-tables.table>
                <x-slot:thead>
                    <th scope="col" class="px-6 py-4">#</th>
                    <th scope="col" class="px-6 py-4">{{ __('Nome') }}</th>
                    <th scope="col" class="px-6 py-4">{{ __('Descrição') }}</th>
                </x-slot>
                <x-slot:tbody>
                    <form action="{{ route('products.categories.attach', $product->id) }}" method="POST">
                        @csrf
                        @foreach ($categories as $category)
                            <tr
                            class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                                <td class="whitespace-nowrap px-6 py-4">
                                    <input type="checkbox"
                                        class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"
                                        name="categories[]" value="{{ $category->id }}">
                                </td>
                                <td class="whitespace-nowrap px-6 py-4">{{ $category->name }}</td>
                                <td class="whitespace-nowrap px-6 py-4">{{ $category->description }}</td>
                            </tr>
                        @endforeach
                            <tr>
                                <td colspan="10">
                                    <x-button>
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.19 8.688a4.5 4.5 0 011.242 7.244l-4.5 4.5a4.5 4.5 0 01-6.364-6.364l1.757-1.757m13.35-.622l1.757-1.757a4.5 4.5 0 00-6.364-6.364l-4.5 4.5a4.5 4.5 0 001.242 7.244" />
                                        </svg>
                                         
                                        Vincular
                                    </x-button>
                                </td>
                            </tr>
                    </form>
                </x-slot>
            </x-tables.table>
        </x-card>
    </x-container>
</x-app-layout>
