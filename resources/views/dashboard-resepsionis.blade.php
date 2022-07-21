<x-admin>
    <x-slot name="title">
        Dashboard Resepsionis
    </x-slot>
    <x-slot name="styles">
        <style>
            .ui-widget-header {
                background: #efefef;
                padding: 3px;

            }

            .ui-menu-item {
                background: #dedede;
                padding: 3px
            }
        </style>
    </x-slot>
    <div>
        <div class="container-fluid">
            <div class="row">
                {{--                <div class="col-sm-4 col-xl-4 col-lg-4">--}}
                {{--                    <x-simple-card icon="list" value="{{ \App\Models\PatientQueue::getLastCall() }}" title="Dipanggil terakhir"/>--}}
                {{--                </div>--}}
                <div class="col-sm-4 col-xl-4 col-lg-4">
                    <x-simple-card icon="users" value="{{ \App\Models\PatientQueue::getVisitor() }}"
                                   title="Pasien Belum di Panggil" color="bg-primary"/>
                </div>
                <div class="col-sm-4 col-xl-4 col-lg-4">
                    <x-simple-card icon="check" value="{{ \App\Models\PatientQueue::getVisitorDone() }}"
                                   title="Pasien Sudah di Panggil" color="bg-success"/>
                </div>
                <div class="col-sm-4 col-xl-4 col-lg-4">
                    <x-simple-card icon="check" value="{{ \App\Models\PatientQueue::getVisitorCancel() }}"
                                   title="Pasien Batal" color="bg-secondary"/>
                </div>
                <div class="col-sm-6">
                    <a href="{{ route('admin.queue.create') }}" class="card o-hidden">
                        <div class="bg-info b-r-4 card-body">
                            <div class="media static-top-widget">
                                <div class="align-self-center text-center"><i data-feather="plus"></i></div>
                                <div class="media-body"><span class="m-0"></span>
                                    <h4 class="mb-0 counter">Tambah antrian</h4>
                                    <i class="icon-bg" data-feather="plus"></i>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6">
                    <a href="{{ route('admin.pasien.create') }}" class="card o-hidden">
                        <div class="bg-warning b-r-4 card-body">
                            <div class="media static-top-widget">
                                <div class="align-self-center text-center"><i data-feather="plus"></i></div>
                                <div class="media-body"><span class="m-0"></span>
                                    <h4 class="mb-0 counter">Tambah pasien baru</h4>
                                    <i class="icon-bg" data-feather="plus"></i>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>


            <!-- Container-fluid starts-->
            @foreach(\App\Models\UnitService::get() as $us)
                <div class="card mb-0">
                    <div class="card-header card-no-border">
                        <div class="header-top">
                            <h5 class="m-0">Antrian Pasien - {{ $us->title }}</h5>
                            <h5 class="m-0">Terakhir dipanggil antrian
                                ke: {{ \App\Models\PatientQueue::getLastQueue($us->id) }}</h5>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <div class="appointment-table table-responsive">
                            <table class="table table-bordernone">
                                <tbody>
                                @foreach(\App\Models\PatientQueue::getQueues($us->id) as $pq)
                                    <tr>
                                        <td>
                                            <img class="img-fluid img-40 rounded-circle mb-3"
                                                 src="../assets/images/appointment/app-ent.jpg"
                                                 alt="Image description">
                                            <div class="status-circle bg-primary"></div>
                                        </td>
                                        <td class="img-content-box">
                                            <span class="d-block">{{ $pq->patient->name }}</span>
                                            <span class="font-roboto">Laki-laki</span>
                                        </td>
                                        <td>
                                            <a href="{{ route('admin.medical-record.show',$pq->patient_id) }}" class="button btn btn-primary">Check Rekam Medik</a>
                                        </td>
                                        <td class="text-end">
                                            <h4 class="font-roboto">No. {{ $pq->queue }}</h4>

                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <br>
            @endforeach
            <br>

            @php($category=['Juni','Juli','Agustus','September','Oktober'])
            @php($income=[
    \App\Models\PatientQueue::getVisitorMonth(6),
    \App\Models\PatientQueue::getVisitorMonth(7),
    \App\Models\PatientQueue::getVisitorMonth(8),
    \App\Models\PatientQueue::getVisitorMonth(9),
    \App\Models\PatientQueue::getVisitorMonth(10),
    ])
            <x-grafik-pasien
                id="some"
                title1="Total kunjungan bulan ini"
                value1="{{ $data['monthlyVisitor'] }}"
                title2="Total minggu ini"
                value2="{{ $data['weeklyVisitor'] }}"
                btn1="PDF"
                btnColor1="btn-danger"
                btn2="CSV"
                btnColor2="btn-success"
                link1="#"
                link2="#"
                :data2="$income"
                dataTitle2="Kunjungan"
                :categories="$category"
            />
        </div>
    </div>

</x-admin>
