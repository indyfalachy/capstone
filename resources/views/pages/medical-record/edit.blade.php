<x-admin>
    <x-slot name="title">
        Edit Data Rekam Medis
    </x-slot>
    <div>
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <livewire:form.medical-record action="update" :dataId="$id"/>
                </div>
            </div>
        </div>
    </div>
</x-admin>
