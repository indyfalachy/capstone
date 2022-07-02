<x-admin>
    <x-slot name="title">
        Data Rekam Medis Awal
    </x-slot>
    <div>
        <div class="container-fluid">
            <a href="{{route('admin.queue.create')}}" class="btn btn-primary mb-3">Tambah Pendaftaran
                Masuk</a>
            <div class="card">
                <div class="card-body">
                    <livewire:table.main name="queue" :model="$queue"/>
                </div>
            </div>
        </div>
    </div>
</x-admin>
