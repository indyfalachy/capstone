<x-admin>
    <x-slot name="title">
        Dashboard Resepsionis
    </x-slot>
    <div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-4 col-xl-4 col-lg-4">
                    <x-simple-card icon="list" value="100" title="Nomor Antrian Sekarang"/>
                </div>
                <div class="col-sm-4 col-xl-4 col-lg-4">
                    <x-simple-card icon="users" value="100" title="Pasien Belum di Panggil" color="bg-secondary"/>
                </div>

                <div class="col-sm-4 col-xl-4 col-lg-4">
                    <x-simple-card icon="check" value="100" title="Pasien Sudah di Panggil" color="bg-success"/>
                </div>
                <div class="col-sm-6">
                    <a href="{{ route('admin.medical-initial.create') }}" class="card o-hidden">
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

            @php($category=['januari','februari','maret','april','mei'])
            @php($income=[10,30,40,60,10])
            <x-grafik-pasien
                id="some"
                title1="Total kunjungan bulan ini"
                value1="90"
                title2="Total minggu ini"
                title3="Capain bulan ini"
                value3="90%"
                title4="Capain bulan ini"
                value4="90%"
                btn1="PDF"
                btnColor1="btn-danger"
                btn2="CSV"
                btnColor2="btn-success"
                link1="#"
                link2="#"
                {{--                    data1="[]"--}}
                {{--                    dataTitle1="Pengeluaran"--}}
                :data2="$income"
                dataTitle2="Pemasukkan"
                :categories="$category"
            />


            <!-- Container-fluid starts-->
            <div class="card mb-0">
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
                                    <td class="img-content-box">
                                        <span class="d-block">Pasien {{$i}}</span>
                                        <span class="font-roboto">Laki-laki</span>
                                    </td>
                                    <td class="text-end">
                                        <div class="button btn btn-primary">Check Rekam Medik</div>
                                    </td>
                                </tr>
                            @endfor
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <br>
            <div class="card mb-0">
                <div class="card-header d-flex">
                    <h5>Dokter praktek</h5><span
                        class="f-14 pull-right mt-0"></span>
                </div>
                <div class="card-body p-0">
                    <div class="row list-persons" id="addcon">
                        <div class="col-xl-4 xl-50 col-md-5">
                            <div class="nav flex-column nav-pills" id="v-pills-tab"
                                 role="tablist" aria-orientation="vertical">
                                <a class="contact-tab-0 nav-link active show"
                                   id="v-pills-user-tab" data-bs-toggle="pill"
                                   onclick="activeDiv(0)" href="#v-pills-user"
                                   role="tab" aria-controls="v-pills-user"
                                   aria-selected="true" data-bs-original-title=""
                                   title="">
                                    <div class="media"><img
                                            class="img-50 img-fluid m-r-20 rounded-circle update_img_0"
                                            src="../assets/images/user/2.png"
                                            alt="">
                                        <div class="media-body">
                                            <h6><span
                                                    class="first_name_0">Bucky </span><span
                                                    class="last_name_0">Barnes</span>
                                            </h6>
                                            <h6 class="text-success">Hadir</h6>
                                        </div>
                                    </div>
                                </a>
                                <a class="contact-tab-1 nav-link"
                                   id="v-pills-profile-tab"
                                   data-bs-toggle="pill" onclick="activeDiv(1)"
                                   href="#v-pills-profile" role="tab"
                                   aria-controls="v-pills-profile"
                                   aria-selected="false"
                                   data-bs-original-title="" title="">
                                    <div class="media"><img
                                            class="img-50 img-fluid m-r-20 rounded-circle update_img_1"
                                            src="../assets/images/user/8.jpg"
                                            alt="">
                                        <div class="media-body">
                                            <h6><span
                                                    class="first_name_1">Comeren </span><span
                                                    class="last_name_1">Diaz</span>
                                            </h6>
                                            <h6 class="text-danger">Tidak
                                                praktek</h6>
                                        </div>

                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-8 xl-50 col-md-7">
                            <div class="tab-content" id="v-pills-tabContent">
                                <div
                                    class="tab-pane contact-tab-0 tab-content-child fade active show"
                                    id="v-pills-user" role="tabpanel"
                                    aria-labelledby="v-pills-user-tab">
                                    <div class="profile-mail">
                                        <div class="media"><img
                                                class="img-100 img-fluid m-r-20 rounded-circle update_img_0"
                                                src="../assets/images/user/2.png"
                                                alt="">
                                            <input class="updateimg" type="file"
                                                   name="img"
                                                   onchange="readURL(this,0)"
                                                   data-bs-original-title=""
                                                   title="">
                                            <div class="media-body mt-0">
                                                <h5><span
                                                        class="first_name_0">Bucky </span><span
                                                        class="last_name_0">Barnes</span>
                                                </h5>
                                                <p class="email_add_0">
                                                    barnes@gmail.com</p>
                                                <ul>
                                                    <li><a href="#"
                                                           onclick="editContact(0)"
                                                           data-bs-original-title=""
                                                           title="">Edit</a></li>
                                                    <li><a href="#"
                                                           onclick="deleteContact(0)"
                                                           data-bs-original-title=""
                                                           title="">Delete</a></li>
                                                    <li><a href="#"
                                                           onclick="history(0)"
                                                           data-bs-original-title=""
                                                           title="">History</a></li>
                                                    <li><a href="#"
                                                           onclick="printContact(0)"
                                                           data-bs-toggle="modal"
                                                           data-bs-target="#printModal"
                                                           data-bs-original-title=""
                                                           title="">Print</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="email-general">
                                            <h6 class="mb-3">General</h6>
                                            <ul>
                                                <li>Name <span
                                                        class="font-primary first_name_0">Bucky</span>
                                                </li>
                                                <li>Gender <span
                                                        class="font-primary">Male</span>
                                                </li>
                                                <li>Birthday<span
                                                        class="font-primary"> <span
                                                            class="birth_day_0">18</span><span
                                                            class="birth_month_0 ms-1">May</span><span
                                                            class="birth_year_0 ms-1">1994</span></span>
                                                </li>
                                                <li>Personality<span
                                                        class="font-primary personality_0">Cool</span>
                                                </li>
                                                <li>City<span
                                                        class="font-primary city_0">moline acres</span>
                                                </li>
                                                <li>Mobile No<span
                                                        class="font-primary mobile_num_0">+0 1800 76855</span>
                                                </li>
                                                <li>Email Address <span
                                                        class="font-primary email_add_0">barnes@gmail.com </span>
                                                </li>
                                                <li>Website<span
                                                        class="font-primary url_add_0">www.test.com</span>
                                                </li>
                                                <li>Interest<span
                                                        class="font-primary interest_0">photography</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="tab-pane contact-tab-1 tab-content-child fade"
                                    id="v-pills-profile" role="tabpanel"
                                    aria-labelledby="v-pills-profile-tab">
                                    <div class="profile-mail">
                                        <div class="media"><img
                                                class="img-100 img-fluid m-r-20 rounded-circle update_img_1"
                                                src="../assets/images/user/8.jpg"
                                                alt="">
                                            <input class="updateimg" type="file"
                                                   name="img"
                                                   onchange="readURL(this,1)"
                                                   data-bs-original-title=""
                                                   title="">
                                            <div class="media-body mt-0">
                                                <h5><span class="first_name_1">Comeren </span><span
                                                        class="last_name_1">Diaz</span>
                                                </h5>
                                                <p class="email_add_1">
                                                    comeren@gmail.com</p>
                                                <ul>
                                                    <li><a href="#"
                                                           onclick="editContact(1)"
                                                           data-bs-original-title=""
                                                           title="">Edit</a></li>
                                                    <li><a href="#"
                                                           onclick="deleteContact(1)"
                                                           data-bs-original-title=""
                                                           title="">Delete</a></li>
                                                    <li><a href="#"
                                                           onclick="history(1)"
                                                           data-bs-original-title=""
                                                           title="">History</a></li>
                                                    <li><a href="#"
                                                           onclick="printContact(1)"
                                                           data-bs-toggle="modal"
                                                           data-bs-target="#printModal"
                                                           data-bs-original-title=""
                                                           title="">Print</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="email-general">
                                            <h6 class="mb-3">General</h6>
                                            <ul>
                                                <li>Name <span
                                                        class="font-primary first_name_1">Comeren</span>
                                                </li>
                                                <li>Gender <span
                                                        class="font-primary">Female</span>
                                                </li>
                                                <li>Birthday<span
                                                        class="font-primary"> <span
                                                            class="birth_day_1">7</span><span
                                                            class="birth_month_1 ms-1">Feb</span><span
                                                            class="birth_year_1 ms-1">1995</span></span>
                                                </li>
                                                <li>Personality<span
                                                        class="font-primary personality_1">Cool</span>
                                                </li>
                                                <li>City<span
                                                        class="font-primary city_1">Delhi</span>
                                                </li>
                                                <li>Mobile No<span
                                                        class="font-primary mobile_num_1">+0 1800 55812</span>
                                                </li>
                                                <li>Email Address <span
                                                        class="font-primary email_add_1">comeren@gmail.com</span>
                                                </li>
                                                <li>Website<span
                                                        class="font-primary url_add_1">www.cometest@.com</span>
                                                </li>
                                                <li>Interest<span
                                                        class="font-primary interest_1">sports</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>


{{--            <div class="card gradient-primary o-hidden">--}}
{{--                <div class="card-body">--}}
{{--                    <div class="setting-dot">--}}
{{--                        <div class="setting-bg-primary date-picker-setting pull-right">--}}
{{--                            <div class="icon-box"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-horizontal"><circle cx="12" cy="12" r="1"></circle><circle cx="19" cy="12" r="1"></circle><circle cx="5" cy="12" r="1"></circle></svg></div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="default-datepicker">--}}
{{--                        <div class="datepicker-here" data-language="en"><div class="datepicker-inline"><div class="datepicker"><i class="datepicker--pointer"></i><nav class="datepicker--nav"><div class="datepicker--nav-action" data-action="prev"><svg><path d="M 17,12 l -5,5 l 5,5"></path></svg></div><div class="datepicker--nav-title">June,  <i> 2022  </i></div><div class="datepicker--nav-action" data-action="next"><svg><path d="M 14,12 l 5,5 l -5,5"></path></svg></div></nav><div class="datepicker--content"><div class="datepicker--days datepicker--body active"><div class="datepicker--days-names"><div class="datepicker--day-name -weekend-">S</div><div class="datepicker--day-name">M</div><div class="datepicker--day-name">T</div><div class="datepicker--day-name">W</div><div class="datepicker--day-name">T</div><div class="datepicker--day-name">F</div><div class="datepicker--day-name -weekend-">S</div></div><div class="datepicker--cells datepicker--cells-days"><div class="datepicker--cell datepicker--cell-day -weekend- -other-month-" data-date="29" data-month="4" data-year="2022">29</div><div class="datepicker--cell datepicker--cell-day -other-month-" data-date="30" data-month="4" data-year="2022">30</div><div class="datepicker--cell datepicker--cell-day -other-month-" data-date="31" data-month="4" data-year="2022">31</div><div class="datepicker--cell datepicker--cell-day" data-date="1" data-month="5" data-year="2022">1</div><div class="datepicker--cell datepicker--cell-day" data-date="2" data-month="5" data-year="2022">2</div><div class="datepicker--cell datepicker--cell-day" data-date="3" data-month="5" data-year="2022">3</div><div class="datepicker--cell datepicker--cell-day -weekend-" data-date="4" data-month="5" data-year="2022">4</div><div class="datepicker--cell datepicker--cell-day -weekend-" data-date="5" data-month="5" data-year="2022">5</div><div class="datepicker--cell datepicker--cell-day" data-date="6" data-month="5" data-year="2022">6</div><div class="datepicker--cell datepicker--cell-day" data-date="7" data-month="5" data-year="2022">7</div><div class="datepicker--cell datepicker--cell-day" data-date="8" data-month="5" data-year="2022">8</div><div class="datepicker--cell datepicker--cell-day" data-date="9" data-month="5" data-year="2022">9</div><div class="datepicker--cell datepicker--cell-day" data-date="10" data-month="5" data-year="2022">10</div><div class="datepicker--cell datepicker--cell-day -weekend-" data-date="11" data-month="5" data-year="2022">11</div><div class="datepicker--cell datepicker--cell-day -weekend-" data-date="12" data-month="5" data-year="2022">12</div><div class="datepicker--cell datepicker--cell-day" data-date="13" data-month="5" data-year="2022">13</div><div class="datepicker--cell datepicker--cell-day" data-date="14" data-month="5" data-year="2022">14</div><div class="datepicker--cell datepicker--cell-day" data-date="15" data-month="5" data-year="2022">15</div><div class="datepicker--cell datepicker--cell-day" data-date="16" data-month="5" data-year="2022">16</div><div class="datepicker--cell datepicker--cell-day" data-date="17" data-month="5" data-year="2022">17</div><div class="datepicker--cell datepicker--cell-day -weekend-" data-date="18" data-month="5" data-year="2022">18</div><div class="datepicker--cell datepicker--cell-day -weekend-" data-date="19" data-month="5" data-year="2022">19</div><div class="datepicker--cell datepicker--cell-day" data-date="20" data-month="5" data-year="2022">20</div><div class="datepicker--cell datepicker--cell-day" data-date="21" data-month="5" data-year="2022">21</div><div class="datepicker--cell datepicker--cell-day -current-" data-date="22" data-month="5" data-year="2022">22</div><div class="datepicker--cell datepicker--cell-day" data-date="23" data-month="5" data-year="2022">23</div><div class="datepicker--cell datepicker--cell-day" data-date="24" data-month="5" data-year="2022">24</div><div class="datepicker--cell datepicker--cell-day -weekend-" data-date="25" data-month="5" data-year="2022">25</div><div class="datepicker--cell datepicker--cell-day -weekend-" data-date="26" data-month="5" data-year="2022">26</div><div class="datepicker--cell datepicker--cell-day" data-date="27" data-month="5" data-year="2022">27</div><div class="datepicker--cell datepicker--cell-day" data-date="28" data-month="5" data-year="2022">28</div><div class="datepicker--cell datepicker--cell-day" data-date="29" data-month="5" data-year="2022">29</div><div class="datepicker--cell datepicker--cell-day" data-date="30" data-month="5" data-year="2022">30</div><div class="datepicker--cell datepicker--cell-day -other-month-" data-date="1" data-month="6" data-year="2022">1</div><div class="datepicker--cell datepicker--cell-day -weekend- -other-month-" data-date="2" data-month="6" data-year="2022">2</div></div></div></div></div></div></div>--}}
{{--                    </div><span class="default-dots-stay overview-dots full-width-dots"><span class="dots-group"><span class="dots dots1"></span><span class="dots dots2 dot-small"></span><span class="dots dots3 dot-small"></span><span class="dots dots4 dot-medium"></span><span class="dots dots5 dot-small"></span><span class="dots dots6 dot-small"></span><span class="dots dots7 dot-small-semi"></span><span class="dots dots8 dot-small-semi"></span><span class="dots dots9 dot-small">                </span></span></span>--}}
{{--                </div>--}}
{{--            </div>--}}

        </div>
    </div>

</x-admin>
