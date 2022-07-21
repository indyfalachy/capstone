<x-admin>
    <x-slot name="title">
        Buat data Rekam Medis Odontogram
    </x-slot>
    <div>
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <livewire:form.odontogram action="create" :rmId="$id"/>
                </div>
            </div>
        </div>
    </div>
</x-admin>
