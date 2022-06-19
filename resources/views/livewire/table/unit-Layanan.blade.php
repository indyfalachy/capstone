<x-data-table :model="$unitServices">
    <x-slot name="head">
        <tr>
            <th scope="col" wire:click.prevent="sortBy('id')" >
                # @include('components.sort-icon',['field'=>"id"])
            </th>
            <th scope="col" wire:click.prevent="sortBy('title')" >
                Nama Poli @include('components.sort-icon',['field'=>"title"])
            </th>
            <th>aksi</th>
        </tr>
    </x-slot>
    <x-slot name="body">
        @foreach ($unitServices as $index=>$unitService)
            <tr x-data="window.__controller.dataTableController({{ $unitService->id }})">
                <td scope="row">{{ ($page-1)*$perPage+$index+1 }}</td>
                <td>{{ $unitService->title }}</td>
                <td>Rp. {{ number_format($unitService->price) }}</td>
                <td>{{ $unitService->slug }}</td>
                <td>{{ $unitService->userOwnUnitServices->count() }}</td>
                <td>
                    <a role="button" href="{{ route('admin.unit-service.edit',[$unitService->room->slug,$unitService->id]) }}" class="mr-3">
                        <i class="fa fa-16px fa-pen">Ubah</i></a>
                    <a role="button" href="{{ route('admin.unit-service.show',[$unitService->room->slug,$unitService->slug]) }}" class="mr-3">
                        <i class="fa fa-16px fa-eye">Lihat</i></a>
                    {{--                    <a role="button" href="{{ route('admin.course.index',$course->slug) }}" class="mr-3">--}}
                    {{--                        <i class="fa fa-16px fa-book">Bimbel</i></a>--}}
                </td>
            </tr>
        @endforeach
    </x-slot>
</x-data-table>
