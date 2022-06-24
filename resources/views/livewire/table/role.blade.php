<x-data-table :model="$roles">
    <x-slot name="head">
        <tr>
            <th scope="col" wire:click.prevent="sortBy('id')" >
                # @include('components.sort-icon',['field'=>"id"])
            </th>
            <th scope="col" wire:click.prevent="sortBy('title')" >
                Title @include('components.sort-icon',['field'=>"title"])
            </th>
            <th>aksi</th>
        </tr>
    </x-slot>
    <x-slot name="body">
        @foreach ($roles as $index=>$role)
            <tr x-data="window.__controller.dataTableController({{ $role->id }})">
                <td scope="row">{{ ($page-1)*$perPage+$index+1 }}</td>
                <td>{{ $role->title }}</td>
                <td>Rp. {{ number_format($role->price) }}</td>
                <td>{{ $role->slug }}</td>
                <td>
{{--                    <a role="button" href="{{ route('admin.role.edit',[$role->room->slug,$role->id]) }}" class="mr-3">--}}
{{--                        <i class="fa fa-16px fa-pen">Ubah</i></a>--}}
{{--                    <a role="button" href="{{ route('admin.role.show',[$role->room->slug,$role->slug]) }}" class="mr-3">--}}
{{--                        <i class="fa fa-16px fa-eye">Lihat</i></a>--}}
                    {{--                    <a role="button" href="{{ route('admin.course.index',$course->slug) }}" class="mr-3">--}}
                    {{--                        <i class="fa fa-16px fa-book">Bimbel</i></a>--}}
                </td>
            </tr>
        @endforeach
    </x-slot>
</x-data-table>
