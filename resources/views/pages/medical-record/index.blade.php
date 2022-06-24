<x-admin>
    <x-slot name="title">
        Data Rekam Medis
    </x-slot>
    <div>
        <div class="container-fluid">
            <a href="{{route('admin.medical-record.create')}}" class="btn btn-primary mb-3">Data Rekam Medis</a>
            <div class="card">
                <div class="card-body">
                    <livewire:table.main name="medical-record" :model="$medicalRecord"/>
                </div>
            </div>
        </div>
    </div>
</x-admin>
