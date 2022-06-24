<x-admin>
    <x-slot name="title">
        Data Rekam Medis Awal
    </x-slot>
    <div>
        <div class="container-fluid">
            <a href="{{route('admin.medical-initial.create')}}" class="btn btn-primary mb-3">Buat data Formulir
                Masuk</a>
            <div class="card">
                <div class="card-body">
                    <livewire:table.main name="medical-initial" :model="$medicalInitial"/>
                </div>
            </div>
        </div>
    </div>
</x-admin>
