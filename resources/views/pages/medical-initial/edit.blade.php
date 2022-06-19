<x-admin>
    <x-slot name="title">
        Edit Data Formulir Masuk
    </x-slot>
    <div>
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <livewire:form.medical-initial action="update" :dataId="$id"/>
                </div>
            </div>
        </div>
    </div>
</x-admin>
