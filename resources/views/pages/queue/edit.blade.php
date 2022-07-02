<x-admin>
    <x-slot name="title">
        Edit Antrian
    </x-slot>
    <div>
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <livewire:form.queue action="update" :dataId="$id"/>
                </div>
            </div>
        </div>
    </div>
</x-admin>
