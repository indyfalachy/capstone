<x-admin>
    <x-slot name="title">
        Edit Data User
    </x-slot>
    <div>
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <livewire:form.user action="update" :dataId="$id"/>
                </div>
            </div>
        </div>
    </div>
</x-admin>
