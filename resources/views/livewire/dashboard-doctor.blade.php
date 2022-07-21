<div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6 col-xl-3 col-lg-6">
                <x-simple-card icon="list"
                               value="{{ \App\Models\PatientQueue::getLastQueue(auth()->user()->unit_service_id) }}"
                               title="Terakhir dipanggil"/>
            </div>

            <div class="col-sm-6 col-xl-3 col-lg-6">
                <x-simple-card icon="book-open"
                               value="{{ \App\Models\PatientQueue::getQueue(auth()->user()->unit_service_id)-\App\Models\PatientQueue::getLastQueue(auth()->user()->unit_service_id)-1 }} "
                               title="List Pasien Belum " color="bg-danger"/>
            </div>

            <div class="col-sm-6 col-xl-3 col-lg-6">
                <x-simple-card icon="check"
                               value="{{ \App\Models\PatientQueue::getQueueDone(auth()->user()->unit_service_id) }}"
                               title="Sudah diselsaikan" color="bg-success"/>
            </div>

            <div class="col-sm-6 col-xl-3 col-lg-6">
                <a href="https://google.com" class="card o-hidden">
                    <div class="bg-info b-r-4 card-body">
                        <div class="media static-top-widget">
                            <div class="media-body"><span class="m-0">Panggil antrian</span>
                                <h4 class="mb-0 counter">Selanjutnya</h4>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>


        <div class="row">
            <div class="col-xl-12 appointment">
                <div class="card">
                    <div class="card-header card-no-border">
                        <div class="header-top">
                            <h5 class="m-0">Antrian pasien</h5>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <div class="appointment-table table-responsive">
                            <table class="table table-border none">
                                <tbody>
                                @foreach(\App\Models\PatientQueue::getQueues(auth()->user()->unit_service_id) as $pq)
                                    <tr>
                                        <td style="width: 70px">

                                            <img class="img-fluid img-40 rounded-circle mb-3"
                                                 src="../assets/images/appointment/app-ent.jpg"
                                                 alt="Image description">
                                            <div class="status-circle bg-primary"></div>
                                        </td>
                                        <td class="img-content-box"><span
                                                class="d-block">{{ $pq->patient->name }}</span><span
                                                class="font-roboto">Laki-laki</span>
                                        </td>
                                        <td class="col-5">
                                            <div class="button">
                                                <a href="{{ route('admin.medical-record.show',$pq->patient_id) }}" class="button btn btn-primary">
                                                    Check Rekam Medik
                                                </a>
                                                <a wire:click="cancel({{$pq->id}})" class="button btn btn-danger">Tidak Menjawab</a>
                                                {{--                                                    <div class="button btn btn-success">Selesai</div>--}}
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header card-no-border">
                        <div class="header-top">
                            <h5 class="m-0">Pasien selesai diperiksa</h5>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <div class="appointment-table table-responsive">
                            <table class="table table-bordernone">
                                <tbody>
                                @foreach(\App\Models\PatientQueue::getDoneQueues(auth()->user()->unit_service_id) as $pq)
                                    <tr>
                                        <td style="width: 70px">
                                            <img class="img-fluid img-40 rounded-circle mb-3"
                                                 src="../assets/images/appointment/app-ent.jpg"
                                                 alt="Image description">
                                            <div class="status-circle bg-primary"></div>
                                        </td>
                                        <td class="img-content-box">
                                            <span class="d-block">{{ $pq->patient->name }}</span><span
                                                class="font-roboto">Laki-laki</span>
                                        </td>
                                        <td class="col-2">
                                            <a href="{{ route('admin.medical-record.show',$pq->patient_id) }}">
                                                <p class="button btn btn-primary">Check Rekam Medik</p>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header card-no-border">
                        <div class="header-top">
                            <h5 class="m-0">Pasien batal diperiksa</h5>
                        </div>
                    </div>
                    <div class="card-body pt-0">
                        <div class="appointment-table table-responsive">
                            <table class="table table-bordernone">
                                <tbody>
                                @foreach(\App\Models\PatientQueue::getCancelQueues(auth()->user()->unit_service_id) as $pq)
                                    <tr>
                                        <td style="width: 70px">
                                            <img class="img-fluid img-40 rounded-circle mb-3"
                                                 src="../assets/images/appointment/app-ent.jpg"
                                                 alt="Image description">
                                            <div class="status-circle bg-primary"></div>
                                        </td>
                                        <td class="img-content-box">
                                            <span class="d-block">{{ $pq->patient->name }}</span><span
                                                class="font-roboto">Laki-laki</span>
                                        </td>
                                        <td class="col-2">
                                            <a href="{{ route('admin.medical-record.show',$pq->patient_id) }}">
                                                <p class="button btn btn-primary">Check Rekam Medik</p>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
