<x-admin>
    <x-slot name="title">
        Data User
    </x-slot>
    <div>
        <div class="container-fluid">
            <a href="{{route('admin.user.create')}}" class="btn btn-primary mb-3">Buat Data User</a>
            <div class="card">
                <d     <livewire:table.main name="user" :model="$user"/>
                iv class="card-body">
                 </div>
            </div>
        </div>
    </div>
</x-admin>
