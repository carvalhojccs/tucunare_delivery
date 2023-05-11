<x-app-layout>
    <div
      class="block mt-2 rounded-lg bg-white p-6 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
    <div
        class="border-b-2 border-neutral-100 px-6 py-3 dark:border-neutral-600 dark:text-neutral-50 flex justify-between">
        <h3>Editar Detalhe do Plano</h3>
      </div>
    <x-form action="{{ route('plans.details.update', [$plan->id, $detail->id]) }}" method="PUT">
      @include('admin.pages.plans.details.partials.form')
    </x-form>
  </div>
  </x-app-layout>