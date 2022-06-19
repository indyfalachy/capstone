<x-admin>
    <x-slot name="title">
        Dashboard Resepsionis
    </x-slot>
    <div>
        <div class="container-fluid">
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
                    <a href="https://google.com" class="card o-hidden">
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
                    <a href="https://google.com" class="card o-hidden">
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
        </div>
    </div>

</x-admin>
