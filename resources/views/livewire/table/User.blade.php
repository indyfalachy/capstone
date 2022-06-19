<x-data-table :model="$users">
    <x-slot name="head">
        <tr>
            <th scope="col" wire:click.prevent="sortBy('id')" >
                # @include('components.sort-icon',['field'=>"id"])
            </th>
            <th scope="col" wire:click.prevent="sortBy('title')" >
                Nama User @include('components.sort-icon',['field'=>"title"])
            </th>
            <th scope="col" wire:click.prevent="sortBy('price')" >
                Alamat @include('components.sort-icon',['field'=>"title"])
            </th>
            <th scope="col" wire:click.prevent="sortBy('price')" >
                Unit Layanan @include('components.sort-icon',['field'=>"title"])
            </th>
            <th scope="col" wire:click.prevent="sortBy('price')" >
                Tempat Lahir @include('components.sort-icon',['field'=>"title"])
            </th>
            <th scope="col" wire:click.prevent="sortBy('price')" >
                Tanggal Lahir @include('components.sort-icon',['field'=>"title"])
            </th>
            <th>Tanggal diperbarui</th>
            <th>aksi</th>
        </tr>
    </x-slot>
    <x-slot name="body">
        @foreach ($users as $index=>$user)
            <tr x-data="window.__controller.dataTableController({{ $user->id }})">
                <td scope="row">{{ ($page-1)*$perPage+$index+1 }}</td>
                <td>{{ $user->title }}</td>
                <td>Rp. {{ number_format($user->price) }}</td>
                <td>{{ $user->slug }}</td>
                <td>{{ $user->userOwnUsers->count() }}</td>
                <td>
                    <a role="button" href="{{ route('admin.user.edit',[$user->room->slug,$user->id]) }}" class="mr-3">
                        <i class="fa fa-16px fa-pen">Ubah</i></a>
                    <a role="button" href="{{ route('admin.user.show',[$user->room->slug,$user->slug]) }}" class="mr-3">
                        <i class="fa fa-16px fa-eye">Lihat</i></a>
                    {{--                    <a role="button" href="{{ route('admin.course.index',$course->slug) }}" class="mr-3">--}}
                    {{--                        <i class="fa fa-16px fa-book">Bimbel</i></a>--}}
                </td>
            </tr>
        @endforeach
    </x-slot>
</x-data-table>
