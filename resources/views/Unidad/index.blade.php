<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <x-bladewind::table
                        searchable="true"
                        include_columns="unidad_id,unidad_identificacion,unidad_tipo.nombre_tipo_unidad"
                        :data="$unidad"
                        divider="thin"
                        search_placeholder="Buscar"  
                        exclude_columns="unidad_id, marital_status" />

                </div>
            </div>
        </div>
    </div>
</x-app-layout>