<x-app-layout>
    <x-container>
        <x-breadcrumb>
            <x-breadcrumb-item :route="route('plans.index')">Planos</x-breadcrumb-item>
            <x-breadcrumb-item :route="route('profiles.index')">Perfis</x-breadcrumb-item>
            <x-breadcrumb-active>Associados</x-breadcrumb-active>
        </x-breadcrumb>

        <div class="flex justify-start px-6 py-2">
            <x-link href="{{ route('plans.profiles.availables', $plan->id) }}" class="bg-indigo-600">Vincular perfil
            </x-link>
        </div>

        <x-card>
            <div class="overflow-hidden">
                <x-session-message type='message' />
                <h3>Perfis vinculados ao plano: <strong>{{ $plan->name }}</strong></h3>
            </div>
            <x-tables.table>
                <x-slot:thead>
                    <th scope="col" class="px-6 py-4 ">Nome</th>
                    <th scope="col" class="px-6 py-4 ">Descrição</th>
                    <th scope="col" class="px-6 py-4 justify-end flex">Ações</th>
                    </x-slot>
                    <x-slot:tbody>
                        @foreach ($plan->profiles as $profile)
                            <tr
                                class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                                <td class="whitespace-nowrap px-6 py-4">{{ $profile->name }}</td>
                                <td class="whitespace-nowrap px-6 py-4">{{ $profile->description }}</td>
                                <td class="whitespace-nowrap px-6 py-4 justify-end flex">
                                    <a href="{{ route('plans.profiles.detach', [$plan->id, $profile->id]) }}" data-tooltip-target="info">
                                        <x-icons.lock-open stroke="red" />
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        </x-slot>
            </x-tables.table>
        </x-card>
    </x-container>

</x-app-layout>
