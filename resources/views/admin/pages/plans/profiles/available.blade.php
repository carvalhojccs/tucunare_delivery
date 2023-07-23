<x-app-layout>
    <div
      class="block mt-2 rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700"
    >
    <x-breadcrumb>
        <x-breadcrumb-item :route="route('plans.index')">Planos</x-breadcrumb-item>
        <x-breadcrumb-item :route="route('profiles.index')">Perfis</x-breadcrumb-item>
        <x-breadcrumb-active>Disponíveis</x-breadcrumb-active>
    </x-breadcrumb>

    <div class="p-6">
        <div class="flex flex-col">
            <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">

                    <x-form action="{{-- route('profiles.permissions.availables', $profile->id) --}}" method="POST">
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

                    <div class="overflow-hidden">
                        <x-session-message type='message' />
                        <x-session-info type='info' />
                        <h3>Perfis disponíveis para o plano <strong>{{ $plan->name }}</strong></h3>

                        <x-tables.table>
                            <x-slot:thead>
                                <th scope="col" class="px-6 py-4">#</th>
                                <th scope="col" class="px-6 py-4">Nome</th>
                                <th scope="col" class="px-6 py-4">Descrição</th>
                            </x-slot>
                            <x-slot:tbody>
                                <form action="{{ route('plans.profiles.attach', $plan->id) }}" method="POST">
                                    @csrf
                                    @foreach ($profiles as $profile)
                                        <tr
                                            class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                                            <td class="whitespace-nowrap px-6 py-4">
                                                <input type="checkbox"
                                                    class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"
                                                    name="profiles[]" value="{{ $profile->id }}">
                                            </td>
                                            <td class="whitespace-nowrap px-6 py-4">{{ $profile->name }}</td>
                                            <td class="whitespace-nowrap px-6 py-4">{{ $profile->description }}
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


                    </div>

                </div>
            </div>
        
        </div>
    </div>
</div>
</x-app-layout>