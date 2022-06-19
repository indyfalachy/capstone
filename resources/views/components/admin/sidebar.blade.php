<!-- Page Sidebar Start-->
<div class="sidebar-wrapper">
    <div>
        <div class="logo-wrapper">
            <a href="#">
                <img class="img-fluid for-light" src="{{asset('assets/images/logo/logo.png')}}" alt="">
                <img class="img-fluid for-dark" src="{{asset('assets/images/logo/logo_dark.png')}}" alt="">
            </a>
            <div class="back-btn"><i class="fa fa-angle-left"></i></div>
            <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="grid"></i></div>
        </div>
        <div class="logo-icon-wrapper">
            <a href="#">
                <img class="img-fluid" src="{{asset('assets/images/logo/logo-icon.png')}}" alt="">
            </a>
        </div>
        <nav class="sidebar-main">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="sidebar-menu">
                <ul class="sidebar-links" id="simple-bar">
                    <li class="back-btn">
                        <a href="#">
                            <img class="img-fluid" src="{{asset('assets/images/logo/logo-icon.png')}}" alt="">
                        </a>
                        <div class="mobile-back text-end"><span>Back</span>
                            <i class="fa fa-angle-right ps-2" aria-hidden="true"></i>
                        </div>
                    </li>
                    <li class="sidebar-main-title">
                        <div>
                            <h6>General</h6>
                            <p>Dashboards,widgets & layout.</p>
                        </div>
                    </li>
                    <li class="sidebar-list">
                        <!--label class="badge badge-success">2</label-->
                        <a class="sidebar-link sidebar-title" href="#">
                            <i data-feather="home"></i><span>Dashboard</span>
                        </a>
                        <ul class="sidebar-submenu">
                            <li><a href="#">Staff And User</a></li>
                            <li><a href="#">Unit Layanan</a></li>
                            <li><a href="#">Ecommerce</a></li>
                        </ul>
                    </li>
                    <li class="sidebar-list">
                        <!--label class="badge badge-success">2</label-->
                        <a class="sidebar-link sidebar-title" href="#">
                            <i data-feather="clipboard"></i><span>Rekam Medis</span>
                        </a>
                        <ul class="sidebar-submenu">
                            <li><a href="#">Rekap Pasien</a></li>
                            <li><a href="#">Form Rekam Medis</a></li>
                            <li><a href="#">Riwayat Rekam Medis</a></li>
                        </ul>
                    </li>

                </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
        </nav>
    </div>
</div>
