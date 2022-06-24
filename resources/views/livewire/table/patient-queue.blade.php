<x-data-table :model="$patientQueues">
    <x-slot name="head">
        <tr>
            <th scope="col" wire:click.prevent="sortBy('id')" >
                # @include('components.sort-icon',['field'=>"id"])
            </th>
            <th scope="col" wire:click.prevent="sortBy('queue')" >
                Nomor Antrian @include('components.sort-icon',['field'=>"queue"])
            </th>
            <th scope="col" wire:click.prevent="sortBy('pasien_id')" >
                Nama Pasien @include('components.sort-icon',['field'=>"pasien_id"])
            </th>
            <th scope="col" wire:click.prevent="sortBy('unit_service_id')" >
                Unit Layanan dituju @include('components.sort-icon',['field'=>"unit_service_id"])
            </th>
            <th scope="col" wire:click.prevent="sortBy('status')" >
                Status @include('components.sort-icon',['field'=>"status"])
            </th>
            <th>Tanggal diperbarui</th>
            <th>aksi</th>
        </tr>
    </x-slot>
    <x-slot name="body">
        @foreach ($patientQueues as $index=>$patientQueue)
            <tr x-data="window.__controller.dataTableController({{ $patientQueue->id }})">
                <td scope="row">{{ ($page-1)*$perPage+$index+1 }}</td>
                <td>{{ $patientQueue->queue }}</td>
                <td>{{ $patientQueue->pasien->name }}</td>
                <td>{{ $patientQueue->unitService->id }}</td>
                <td>{{ $patientQueue->status }}</td>
                <td>{{ $patientQueue->created_at }}</td>
                <td>
{{--                    <a role="button" href="{{ route('admin.patient-queue.edit',[$patientQueue->room->slug,$patientQueue->id]) }}" class="mr-3">--}}
{{--                        <i class="fa fa-16px fa-pen">Ubah</i></a>--}}
{{--                    <a role="button" href="{{ route('admin.patient-queue.show',[$patientQueue->room->slug,$patientQueue->slug]) }}" class="mr-3">--}}
{{--                        <i class="fa fa-16px fa-eye">Lihat</i></a>--}}
                    {{--                    <a role="button" href="{{ route('admin.course.index',$course->slug) }}" class="mr-3">--}}
                    {{--                        <i class="fa fa-16px fa-book">Bimbel</i></a>--}}
                </td>
            </tr>
        @endforeach
    </x-slot>
</x-data-table>
