<x-data-table :model="$medicalRecords">
    <x-slot name="head">
        <tr>
            <th scope="col" wire:click.prevent="sortBy('id')" >
                # @include('components.sort-icon',['field'=>"id"])
            </th>
            <th scope="col" wire:click.prevent="sortBy('user_id')" >
                Pemeriksa @include('components.sort-icon',['field'=>"user_id"])
            </th>
            <th scope="col" wire:click.prevent="sortBy('pasien_id')" >
                Nama Pasien @include('components.sort-icon',['field'=>"pasien_id"])
            </th>
            <th scope="col" wire:click.prevent="sortBy('unit_service_id')" >
                Unit Layanan @include('components.sort-icon',['field'=>"unit_service_id"])
            </th>
            <th scope="col" wire:click.prevent="sortBy('action')" >
                Aksi @include('components.sort-icon',['field'=>"action"])
            </th>
            <th scope="col" wire:click.prevent="sortBy('type')" >
                Tipe @include('components.sort-icon',['field'=>"type"])
            </th>
            <th scope="col" wire:click.prevent="sortBy('refer')" >
                Rujuk @include('components.sort-icon',['field'=>"refer"])
            </th>
            <th>Tanggal diperbarui</th>
            <th>aksi</th>
        </tr>
    </x-slot>
    <x-slot name="body">
        @foreach ($medicalRecords as $index=>$medicalRecord)
            <tr x-data="window.__controller.dataTableController({{ $medicalRecord->id }})">
                <td scope="row">{{ ($page-1)*$perPage+$index+1 }}</td>
                <td>{{ $medicalRecord->user->name }}</td>
                <td>{{ $medicalRecord->pasien->name }}</td>
                <td>{{ $medicalRecord->unitService->title }}</td>
                <td>{{ $medicalRecord->action }}</td>
                <td>{{ $medicalRecord->type }}</td>
                <td>{{ $medicalRecord->refer }}</td>
                <td>{{ $medicalRecord->updated_at }}</td>
                <td>
{{--                    <a role="button" href="{{ route('admin.medical-record.edit',[$medicalRecord->room->slug,$medicalRecord->id]) }}" class="mr-3">--}}
{{--                        <i class="fa fa-16px fa-pen">Ubah</i></a>--}}
{{--                    <a role="button" href="{{ route('admin.medical-record.show',[$medicalRecord->room->slug,$medicalRecord->slug]) }}" class="mr-3">--}}
{{--                        <i class="fa fa-16px fa-eye">Lihat</i></a>--}}
                    {{--                    <a role="button" href="{{ route('admin.course.index',$course->slug) }}" class="mr-3">--}}
                    {{--                        <i class="fa fa-16px fa-book">Bimbel</i></a>--}}
                </td>
            </tr>
        @endforeach
    </x-slot>
</x-data-table>
