<x-data-table :model="$patientQueues">
    <x-slot name="head">
        <tr>
            <th scope="col" wire:click.prevent="sortBy('id')" >
                # @include('components.sort-icon',['field'=>"id"])
            </th>
            <th scope="col" wire:click.prevent="sortBy('queue')" >
                Nomor Antrian @include('components.sort-icon',['field'=>"queue"])
            </th>
            <th scope="col" wire:click.prevent="sortBy('price')" >
                Nama Pasien @include('components.sort-icon',['field'=>"title"])
            </th>
            <th scope="col" wire:click.prevent="sortBy('price')" >
                Unit Layanan dituju @include('components.sort-icon',['field'=>"title"])
            </th>
            <th scope="col" wire:click.prevent="sortBy('price')" >
                Status @include('components.sort-icon',['field'=>"title"])
            </th>
            <th>Tanggal diperbarui</th>
            <th>aksi</th>
        </tr>
    </x-slot>
    <x-slot name="body">
        @foreach ($patientQueues as $index=>$patientQueue)
            <tr x-data="window.__controller.dataTableController({{ $patientQueue->id }})">
                <td scope="row">{{ ($page-1)*$perPage+$index+1 }}</td>
                <td>{{ $patientQueue->title }}</td>
                <td>{{ $patientQueue->title }}</td>
                <td>{{ $patientQueue->title }}</td>
                <td>{{ $patientQueue->slug }}</td>
                <td>{{ $patientQueue->userOwnPatientQueue->count() }}</td>
                <td>
                    <a role="button" href="{{ route('admin.patient-queue.edit',[$patientQueue->room->slug,$patientQueue->id]) }}" class="mr-3">
                        <i class="fa fa-16px fa-pen">Ubah</i></a>
                    <a role="button" href="{{ route('admin.patient-queue.show',[$patientQueue->room->slug,$patientQueue->slug]) }}" class="mr-3">
                        <i class="fa fa-16px fa-eye">Lihat</i></a>
                    {{--                    <a role="button" href="{{ route('admin.course.index',$course->slug) }}" class="mr-3">--}}
                    {{--                        <i class="fa fa-16px fa-book">Bimbel</i></a>--}}
                </td>
            </tr>
        @endforeach
    </x-slot>
</x-data-table>
