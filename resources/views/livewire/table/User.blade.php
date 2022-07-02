<x-data-table :model="$users">
    <x-slot name="head">
        <tr>
            <th scope="col" wire:click.prevent="sortBy('id')" >
                # @include('components.sort-icon',['field'=>"id"])
            </th>
            <th scope="col" wire:click.prevent="sortBy('name')" >
                Nama User @include('components.sort-icon',['field'=>"name"])
            </th>
            <th scope="col" wire:click.prevent="sortBy('email')" >
                Email @include('components.sort-icon',['field'=>"email"])
            </th>
            <th scope="col" wire:click.prevent="sortBy('address')" >
                Alamat @include('components.sort-icon',['field'=>"address"])
            </th>
            <th scope="col" wire:click.prevent="sortBy('unit_service')" >
                Unit Layanan @include('components.sort-icon',['field'=>"unit_service"])
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
        @foreach ($users as $index=>$user)
            <tr x-data="window.__controller.dataTableController({{ $user->id }})">
                <td scope="row">{{ ($page-1)*$perPage+$index+1 }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->address }}</td>
                <td>{{ $user->unit_service }}</td>
                <td>{{ $user->birth_place }}</td>
                <td>{{ $user->birth_date }}</td>
                <td>{{ $user->created_at }}</td>

                <td>
{{--                    <a role="button" href="{{ route('admin.user.edit',[$user->room->slug,$user->id]) }}" class="mr-3">--}}
{{--                        <i class="fa fa-16px fa-pen">Ubah</i></a>--}}
{{--                    <a role="button" href="{{ route('admin.user.show',[$user->room->slug,$user->slug]) }}" class="mr-3">--}}
{{--                        <i class="fa fa-16px fa-eye">Lihat</i></a>--}}
{{--                                        <a role="button" href="{{ route('admin.course.index',$course->slug) }}" class="mr-3">--}}
{{--                                            <i class="fa fa-16px fa-book">Bimbel</i></a>--}}
                </td>
            </tr>
        @endforeach
    </x-slot>
</x-data-table>
