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


            <div class="card gradient-primary o-hidden">
                <div class="card-body">
                    <div class="setting-dot">
                        <div class="setting-bg-primary date-picker-setting pull-right">
                            <div class="icon-box"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg></div>
                        </div>
                    </div>
                    <div class="default-datepicker">
                        <div class="datepicker-here" data-language="en"><div class="datepicker-inline"><div class="datepicker"><i class="datepicker--pointer"></i><nav class="datepicker--nav"><div class="datepicker--nav-action" data-action="prev"><svg><path d="M 17,12 l -5,5 l 5,5"></path></svg></div><div class="datepicker--nav-title">June,  <i> 2022  </i></div><div class="datepicker--nav-action" data-action="next"><svg><path d="M 14,12 l 5,5 l -5,5"></path></svg></div></nav><div class="datepicker--content"><div class="datepicker--days datepicker--body active"><div class="datepicker--days-names"><div class="datepicker--day-name -weekend-">S</div><div class="datepicker--day-name">M</div><div class="datepicker--day-name">T</div><div class="datepicker--day-name">W</div><div class="datepicker--day-name">T</div><div class="datepicker--day-name">F</div><div class="datepicker--day-name -weekend-">S</div></div><div class="datepicker--cells datepicker--cells-days"><div class="datepicker--cell datepicker--cell-day -weekend- -other-month-" data-date="29" data-month="4" data-year="2022">29</div><div class="datepicker--cell datepicker--cell-day -other-month-" data-date="30" data-month="4" data-year="2022">30</div><div class="datepicker--cell datepicker--cell-day -other-month-" data-date="31" data-month="4" data-year="2022">31</div><div class="datepicker--cell datepicker--cell-day" data-date="1" data-month="5" data-year="2022">1</div><div class="datepicker--cell datepicker--cell-day" data-date="2" data-month="5" data-year="2022">2</div><div class="datepicker--cell datepicker--cell-day" data-date="3" data-month="5" data-year="2022">3</div><div class="datepicker--cell datepicker--cell-day -weekend-" data-date="4" data-month="5" data-year="2022">4</div><div class="datepicker--cell datepicker--cell-day -weekend-" data-date="5" data-month="5" data-year="2022">5</div><div class="datepicker--cell datepicker--cell-day" data-date="6" data-month="5" data-year="2022">6</div><div class="datepicker--cell datepicker--cell-day" data-date="7" data-month="5" data-year="2022">7</div><div class="datepicker--cell datepicker--cell-day" data-date="8" data-month="5" data-year="2022">8</div><div class="datepicker--cell datepicker--cell-day" data-date="9" data-month="5" data-year="2022">9</div><div class="datepicker--cell datepicker--cell-day" data-date="10" data-month="5" data-year="2022">10</div><div class="datepicker--cell datepicker--cell-day -weekend-" data-date="11" data-month="5" data-year="2022">11</div><div class="datepicker--cell datepicker--cell-day -weekend-" data-date="12" data-month="5" data-year="2022">12</div><div class="datepicker--cell datepicker--cell-day" data-date="13" data-month="5" data-year="2022">13</div><div class="datepicker--cell datepicker--cell-day" data-date="14" data-month="5" data-year="2022">14</div><div class="datepicker--cell datepicker--cell-day" data-date="15" data-month="5" data-year="2022">15</div><div class="datepicker--cell datepicker--cell-day" data-date="16" data-month="5" data-year="2022">16</div><div class="datepicker--cell datepicker--cell-day" data-date="17" data-month="5" data-year="2022">17</div><div class="datepicker--cell datepicker--cell-day -weekend-" data-date="18" data-month="5" data-year="2022">18</div><div class="datepicker--cell datepicker--cell-day -weekend-" data-date="19" data-month="5" data-year="2022">19</div><div class="datepicker--cell datepicker--cell-day" data-date="20" data-month="5" data-year="2022">20</div><div class="datepicker--cell datepicker--cell-day" data-date="21" data-month="5" data-year="2022">21</div><div class="datepicker--cell datepicker--cell-day -current-" data-date="22" data-month="5" data-year="2022">22</div><div class="datepicker--cell datepicker--cell-day" data-date="23" data-month="5" data-year="2022">23</div><div class="datepicker--cell datepicker--cell-day" data-date="24" data-month="5" data-year="2022">24</div><div class="datepicker--cell datepicker--cell-day -weekend-" data-date="25" data-month="5" data-year="2022">25</div><div class="datepicker--cell datepicker--cell-day -weekend-" data-date="26" data-month="5" data-year="2022">26</div><div class="datepicker--cell datepicker--cell-day" data-date="27" data-month="5" data-year="2022">27</div><div class="datepicker--cell datepicker--cell-day" data-date="28" data-month="5" data-year="2022">28</div><div class="datepicker--cell datepicker--cell-day" data-date="29" data-month="5" data-year="2022">29</div><div class="datepicker--cell datepicker--cell-day" data-date="30" data-month="5" data-year="2022">30</div><div class="datepicker--cell datepicker--cell-day -other-month-" data-date="1" data-month="6" data-year="2022">1</div><div class="datepicker--cell datepicker--cell-day -weekend- -other-month-" data-date="2" data-month="6" data-year="2022">2</div></div></div></div></div></div></div>
                    </div><span class="default-dots-stay overview-dots full-width-dots"><span class="dots-group"><span class="dots dots1"></span><span class="dots dots2 dot-small"></span><span class="dots dots3 dot-small"></span><span class="dots dots4 dot-medium"></span><span class="dots dots5 dot-small"></span><span class="dots dots6 dot-small"></span><span class="dots dots7 dot-small-semi"></span><span class="dots dots8 dot-small-semi"></span><span class="dots dots9 dot-small">                </span></span></span>
                </div>
            </div>

        </div>
    </div>



</x-admin>
