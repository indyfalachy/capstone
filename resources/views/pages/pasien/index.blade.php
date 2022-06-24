<x-admin>
    <x-slot name="title">
        Data pasien
    </x-slot>
    <div>
        <div class="container-fluid">
{{--            <a href="{{route('admin.pasien.create')}}" class="btn btn-primary mb-3">Buat data pasien</a>--}}
            <div class="card">
                <div class="card-body">
                    <livewire:table.main name="pasien" :model="$pasien"/>
                </div>
            </div>
        </div>
    </div>
</x-admin>
