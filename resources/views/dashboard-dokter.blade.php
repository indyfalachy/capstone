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
                                                <p class="m-0 font-primary">Check Rekam Medik</p>
                                            </td>
                                            <td class="text-end">
                                                <div class="button btn btn-primary">Tambah Rekam medik</div>
                                                <div class="button btn btn-warning">Pending</div>
                                                <div class="button btn btn-success">Selesai</div>
                                            </td>

                                        </tr>
                                    @endfor
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12 alert-sec">
                    <div class="card bg-img">
                        <div class="card-header">
                            <div class="header-top">
                                <h5 class="m-0">Alert </h5>
                                <div class="dot-right-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                         fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                         stroke-linejoin="round" class="feather feather-more-horizontal">
                                        <circle cx="12" cy="12" r="1"></circle>
                                        <circle cx="19" cy="12" r="1"></circle>
                                        <circle cx="5" cy="12" r="1"></circle>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="body-bottom">
                                <h6> 10% off For drama lights Couslations...</h6><span class="font-roboto">Lorem Ipsum is simply dummy...It is a long established fact that a reader will be distracted by  </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>



</x-admin>
