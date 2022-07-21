<x-data-table :model="$pasiens">
    <x-slot name="head">
        <tr>
            <th scope="col" wire:click.prevent="sortBy('id')" >
                # @include('components.sort-icon',['field'=>"id"])
            </th>
            <th scope="col" wire:click.prevent="sortBy('name')" >
                Name @include('components.sort-icon',['field'=>"name"])
            </th>
            <th scope="col" wire:click.prevent="sortBy('address')" >
                Alamat @include('components.sort-icon',['field'=>"address"])
            </th>
            <th scope="col" wire:click.prevent="sortBy('gender')" >
                Gender @include('components.sort-icon',['field'=>"gender"])
            </th>
            <th scope="col" wire:click.prevent="sortBy('birth_place')" >
                Tempat Lahir @include('components.sort-icon',['field'=>"birth_place"])
            </th>
            <th scope="col" wire:click.prevent="sortBy('birth_date')" >
                Tanggal Lahir @include('components.sort-icon',['field'=>"birth_date"])
            </th>
            <th>Tanggal diperbarui</th>
            <th>aksi</th>
        </tr>
    </x-slot>
    <x-slot name="body">
        @foreach ($pasiens as $index=>$pasien)
            <tr x-data="window.__controller.dataTableController({{ $pasien->id }})">
                <td scope="row">{{ ($page-1)*$perPage+$index+1 }}</td>
                <td>{{ $pasien->name }}</td>
                <td>{{ $pasien->address }}</td>
                <td>{{ $pasien->gender }}</td>
                <td>{{ $pasien->birth_place}}</td>
                <td>{{ $pasien->birth_place }}</td>
                <td>{{ $pasien->created_at }}</td>
                <td>
                    <a role="button" href="{{ route('admin.medical-record.show',$pasien->id) }}" class="mr-3">
                        <i class="fa fa-16px fa-eye">check rekam medik</i></a>
{{--                    <a role="button" href="{{ route('admin.pasien.show',[$pasien->room->slug,$pasien->slug]) }}" class="mr-3">--}}
{{--                        <i class="fa fa-16px fa-eye">Lihat</i></a>--}}
                    {{--                    <a role="button" href="{{ route('admin.course.index',$course->slug) }}" class="mr-3">--}}
                    {{--                        <i class="fa fa-16px fa-book">Bimbel</i></a>--}}
                </td>
            </tr>
        @endforeach
    </x-slot>
</x-data-table>
