<x-data-table :model="$medicalInitials">
    <x-slot name="head">
        <tr>
            <th scope="col" wire:click.prevent="sortBy('id')" >
                # @include('components.sort-icon',['field'=>"id"])
            </th>
            <th>
                Pasien
            </th>
            <th scope="col">
                Keluhan Utama
            </th>
            <th>
                tanggal masuk
            </th>
            <th>aksi</th>
        </tr>
    </x-slot>
    <x-slot name="body">
        @foreach ($medicalInitials as $index=>$medicalInitial)
            <tr x-data="window.__controller.dataTableController({{ $medicalInitial->id }})">
                <td scope="row">{{ ($page-1)*$perPage+$index+1 }}</td>
                <td>{{ $medicalInitial->patientQueue->pasien->name }}</td>
                <td>{{ $medicalInitial->main_complaint }}</td>
                <td>
{{--                    <a role="button" href="{{ route('admin.medical-initial.edit',[$medicalInitial->room->slug,$medicalInitial->id]) }}" class="mr-3">--}}
{{--                        <i class="fa fa-16px fa-pen">Ubah</i></a>--}}
{{--                    <a role="button" href="{{ route('admin.medical-initial.show',[$medicalInitial->room->slug,$medicalInitial->slug]) }}" class="mr-3">--}}
{{--                        <i class="fa fa-16px fa-eye">Lihat</i></a>--}}
                    {{--                    <a role="button" href="{{ route('admin.course.index',$course->slug) }}" class="mr-3">--}}
                    {{--                        <i class="fa fa-16px fa-book">Bimbel</i></a>--}}
                </td>
            </tr>
        @endforeach
    </x-slot>
</x-data-table>
