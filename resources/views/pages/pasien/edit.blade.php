<x-admin>
    <x-slot name="title">
        Edit Data Pasien
    </x-slot>
    <div>
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <livewire:form.pasien action="update" :dataId="$id"/>
                </div>
            </div>
        </div>
    </div>
</x-admin>
