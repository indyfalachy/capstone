<x-admin>
    <x-slot name="title">
        Dashboard Dokter
    </x-slot>
    <div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6 col-xl-3 col-lg-6">
                    <x-simple-card icon="list" value="100" title="Nomor Antrian Sekarang"/>
                </div>

                <div class="col-sm-6 col-xl-3 col-lg-6">
                    <x-simple-card icon="book-open" value="100" title="List Pasien Belum " color="bg-danger"/>
                </div>

                <div class="col-sm-6 col-xl-3 col-lg-6">
                    <x-simple-card icon="check" value="100" title="List Pasien Selesai" color="bg-success"/>
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
                                <table class="table table-bordernone">
                                    <tbody>
                                    @for($i=0;$i<5;$i++)
                                        <tr>
                                            <td>
                                                <img class="img-fluid img-40 rounded-circle mb-3"
                                                     src="../assets/images/appointment/app-ent.jpg"
                                                     alt="Image description">
                                                <div class="status-circle bg-primary"></div>
                                            </td>
                                            <td class="img-content-box"><span class="d-block">Pasien {{$i}}</span><span
                                                    class="font-roboto">Laki-laki</span></td>
                                            <td>
                                                <a href="{{ route('admin.medical-record.index') }}">
                                                    <p class="button btn btn-primary">Check Rekam Medik</p>
                                            </td>
                                            <td class="col-4">
                                                <div class="button btn btn-primary"
                                                <a href="{{ route('admin.medical-initial.create') }}">Tambah Rekam medik
                            </div>
                            <div class="button btn btn-warning">Pending</div>
                            <div class="button btn btn-success">Selesai</div>
                            </td>

                            </tr>
                            @endfor
                            </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card  border border-bottom-danger ">
                                    <div class="card-body row">
                                        <div class="col-6">
                                            <h5 class="card-title">SOAP</h5>
                                            <p class="card-text">SOAP blabalablablabla.</p>
                                        </div>
                                        <div class="col-6">
                                            <h5 class="card-title">AKSI</h5>
                                            <p class="card-text">Aksi blablablabla.</p>
                                        </div>
                                        <div class="col-6">
                                            <h5 class="card-title">Diagnosa</h5>
                                            <p class="card-text">Diagnosa blablablabla.</p>
                                        </div>
                                        <div class="col-6">
                                            <h5 class="card-title">Obat</h5>
                                            <p class="card-text">Obat kuat blablabla.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>


</x-admin>
