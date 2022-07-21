<x-admin>
    <x-slot name="title">

    </x-slot>
    <div>
        <div class="card">
            <div class="card-header" style="padding-top: 20px;padding-bottom: 15px">
                <h3 style="text-align: center">Rekam Medik Pasien</h3>
                <br>
                <div class="row">
                    <div class="col-md-4">
                        Nama : {{ $patient->name }} <br>
                        No KK: {{ $patient->kk }} <br>
                        NIK: {{ $patient->nik }} <br>

                        Jenis Kelamin : {{ $patient->gender }} <br>
                        Pekerjaan : {{ $patient->job }}
                    </div>
                    <div class="col-md-4">
                        Tanggal Lahir : {{ \Carbon\Carbon::parse($patient->birth_date)->format('d/m/Y') }}<br>
                        Agama : {{ $patient->religion }} <br>
                        Alamat : {{ $patient->address }}
                    </div>
                    <div class="col-md-4">
                        Biaya : {{ $patient->bpjs_status==1?'Non BPJS':'BPJS' }} <br>
                        No. BPJS : {{ $patient->no_bpjs }}<br>
                        No HP : {{ $patient->phone }}
                    </div>
                </div>
                <br>
                @if(auth()->user()->role==2)
                    <a href="{{ route('admin.medical-record.create',$patient->id) }}" class="btn btn-primary">
                        Buat RM
                    </a>
                    <a href="{{ route('admin.queue.update',[$patient->id,auth()->user()->unit_service_id,2]) }}"
                       class="btn btn-success">
                        Selesai
                    </a>
                    <a href="{{ route('admin.queue.update',[$patient->id,auth()->user()->unit_service_id,3]) }}"
                       class="btn btn-danger">
                        Batal
                    </a>
                @endif
            </div>
            <div class="card-body">
                <br>
                <div class="row">
                    <table class="table">
                        <thead>
                        <tr>
                            <td style="width: 250px">Keterangan</td>
                            <td>SOAP</td>
                            <td>Tindakan</td>
                            @if(auth()->user()->unit_service_id==2)
                                <td>Aksi</td>
                            @endif
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($patient->medicalRecords as $mr)
                            <tr>
                                <td>
                                    <b>{{ $mr->created_at }}</b> <br>
                                    <b>{{ $mr->unitService->title }}</b> <br>
                                    <b>Dirujuk ke</b> : {{ $mr->refered?$mr->refered->title:'-' }} <br>
                                    <b>Dokter melayani</b> : {{ $mr->user->name }} <br>
                                    <b>Jenis Kasus</b> : {{ $mr->type }} <br>
                                </td>
                                <td>
                                    {!! $mr->soap !!}
                                </td>
                                <td>
                                    {!! $mr->action !!}
                                </td>
                                @if(auth()->user()->unit_service_id==2)
                                    <td>
                                        @if($mr->odontogram==null)
                                            <a href="{{ route('admin.medical-record.add-Odontogram',$mr->id) }}"
                                               class="btn btn-sm btn-primary">
                                                tambah odontogram
                                            </a>
                                        @else
                                            <a href="{{ route('admin.medical-record.show-Odontogram',$mr->id) }}"
                                               class="btn btn-sm btn-primary">
                                                lihat odontogram
                                            </a>
                                        @endif
                                    </td>
                                @endif
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-admin>
