<x-app-layout>
    <x-container>
        <x-breadcrumb>
            <x-breadcrumb-item :route="route('profiles.index')">Perfis</x-breadcrumb-item>
            <x-breadcrumb-item :route="route('plans.index')">Planos</x-breadcrumb-item>
            <x-breadcrumb-active>Planos vinculados</x-breadcrumb-active>
        </x-breadcrumb>
        <x-card>
            <h3>Planos vinculados ao perfil: <strong>{{ $profile->name }}</strong></h3>
            <x-tables.table>
                <x-slot:thead>
                    <th scope="col" class="px-6 py-4">Nome</th>
                    <th scope="col" class="px-6 py-4">Descrição</th>
                </x-slot>
                <x-slot:tbody>
                    @foreach ($profile->plans as $plan)
                    <tr
                    class="border-b transition duration-300 ease-in-out hover:bg-neutral-100 dark:border-neutral-500 dark:hover:bg-neutral-600">
                    <td class="whitespace-nowrap px-6 py-4">{{ $profile->name }}</td>
                    <td class="whitespace-nowrap px-6 py-4">{{ $profile->description }}</td>                    
                </tr>
                    @endforeach
                </x-slot>
            </x-tables.table>
        </x-card>
    </x-container>
</x-app-layout>