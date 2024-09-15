<x-app-layout>
    <x-slot name="header">
        <x-bladewind::avatar
            image=https://bladewindui.com/assets/images/rowe.jpeg
            class="ring-blue-200 ring-offset-2"
            show_ring="true"
            size="huge" />
        <x-bladewind::avatar
            image=https://bladewindui.com/assets/images/rowe.jpeg
            class="ring-blue-200 ring-offset-2"
            show_ring="true"
            size="huge" />
        <x-bladewind::avatar
            image=https://bladewindui.com/assets/images/rowe.jpeg
            class="ring-blue-200 ring-offset-2"
            show_ring="true"
            size="huge" />
        <x-bladewind::avatar
            image=https://bladewindui.com/assets/images/rowe.jpeg
            class="ring-blue-200 ring-offset-2"
            show_ring="true"
            size="huge" />
        <x-bladewind::avatar
            image=https://bladewindui.com/assets/images/rowe.jpeg
            class="ring-blue-200 ring-offset-2"
            show_ring="true"
            size="huge" />
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <x-bladewind::table
                        searchable="true"
                        include_columns="espacio_nombre, unidad_id"
                        :action_icons="$action_icons"
                        :data="$espacio"
                        divider="thin"
                        search_placeholder="Buscar"  
                        action_title="Acción"
                        exclude_columns="espacio_id" />


                </div>
            </div>
        </div>
    </div>
</x-app-layout>

<x-bladewind::modal
    name="send-message">
    Please agree to the terms and conditions of
    the agreement before proceeding.
</x-bladewind::modal>

<script type="text/javascript">

    sendMessage = (first_name, last_name) => {
    showModal('send-message');
    domEl('.bw-send-message .modal-title').innerText = `Send Message to ${first_name} ${last_name}`;
    domEl('.bw-send-message .modal-text').innerText = `Sojostar `;
    }

    deleteUser = (id, first_name, last_name) => {
    showModal('delete-user');
    domEl('.bw-delete-user .title').innerText = `${first_name} ${last_name}`;
    }

    redirect = (url) => {
    window.open(url);
    }
</script>