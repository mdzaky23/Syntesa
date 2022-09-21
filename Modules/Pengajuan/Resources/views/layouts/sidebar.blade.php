@if ($role == 100)
    <!-- Admin-->

    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item me-auto"><a class="navbar-brand"
                        href="../../../html/ltr/vertical-menu-template/index.html"><span class="brand-logo">
                        </span>
                        <h2 class="brand-text">E-Pengajuan</h2>
                    </a></li>
                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pe-0" data-bs-toggle="collapse"><i
                            class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i><i
                            class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary"
                            data-feather="disc" data-ticon="disc"></i></a></li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class=" nav-item"><a class="d-flex align-items-center" href="/pengajuan"><i
                            data-feather="home"></i><span class="menu-title text-truncate"
                            data-i18n="Dashboards">Dashboards</span></a>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="/pengajuan"><i
                            data-feather="file-text"></i><span class="menu-title text-truncate"
                            data-i18n="approval">Approval Pengajuan</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="/pengajuan/diproses"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="proses">Pengajuan Di Proses</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="/pengajuan/selesai"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="selesai">Pengajuan Selesai</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="/pengajuan/ditolak"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="tolak">Pengajuan Di Tolak</span></a>
                        </li>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="/pengajuan/revisi"><i
                            data-feather="circle"></i><span class="menu-title text-truncate" data-i18n="revisi">Revisi
                            Pengajuan</span></a>
                </li>
            </ul>
            </li>


            <li class=" navigation-header"><span data-i18n="Apps &amp; Pages"> Menu Utama </span><i
                    data-feather="more-horizontal"></i>
            </li>
            <li class=" nav-item"><a class="d-flex align-items-center" href="app-chat.html"><i
                        data-feather="mail"></i><span class="menu-title text-truncate" data-i18n="surat">Surat
                        Menyurat</span></a>
                <ul class="menu-content">
                    <li><a class="d-flex align-items-center" href="#"><i data-feather="circle"></i><span
                                class="menu-item text-truncate" data-i18n="masuk">Surat Masuk</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="#"><i data-feather="circle"></i><span
                                class="menu-item text-truncate" data-i18n="keluar">Surat Keluar</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="#"><i data-feather="circle"></i><span
                                class="menu-item text-truncate" data-i18n="edaran">Surat Edaran</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="#"><i data-feather="circle"></i><span
                                class="menu-item text-truncate" data-i18n="perjalanan">Surat Perjalanan
                                Dinas</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="#"><i data-feather="circle"></i><span
                                class="menu-item text-truncate" data-i18n="tugaskeluar">Surat Tugas
                                Keluar</span></a>
                    </li>
                </ul>
            <li class=" nav-item"><a class="d-flex align-items-center" href="/pengajuan/ppegawai"><i
                        data-feather="grid"></i><span class="menu-title text-truncate" data-i18n="user">User</span></a>
            </li>
            <li class=" navigation-header"><span data-i18n="Apps &amp; Pages"> User </span><i
                    data-feather="more-horizontal"></i>
            </li>
            </li>
            <li class=" nav-item"><a class="d-flex align-items-center" href="/pengajuan/pprofil"><i
                        data-feather="user"></i><span class="menu-title text-truncate"
                        data-i18n="user">Profile</span></a>
            </li>
            </ul>
        </div>
    </div>
    <!-- END: Main Menu-->
@elseif ($role == 1)
    <!-- staff travel-->
    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item me-auto"><a class="navbar-brand">
                    <img src="https://sayagawisatabogor.com/wp-content/uploads/2021/09/LOGO-SWB.png" width="20%"
                    alt="Logo Sayaga">
                        

                            <h2 class="brand-text" style="color :darkgreen">E-Pengajuan</h2>
                    </a></li>
                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pe-0"
                        data-bs-toggle="collapse"><i class="d-block d-xl-none text-primary toggle-icon font-medium-4"
                            data-feather="x"></i><i
                            class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary"
                            data-feather="disc" data-ticon="disc"></i></a></li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class=" nav-item"><a class="d-flex align-items-center" href="/pengajuan"><i
                            data-feather="home"></i><span class="menu-title text-truncate"
                            data-i18n="Dashboards">Dashboards</span></a>
                </li>
                <li class=" navigation-header"><span data-i18n="Apps &amp; Pages"> Menu Utama </span><i
                        data-feather="more-horizontal"></i>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href=""><i
                            data-feather="circle"></i><span class="menu-title text-truncate"
                            data-i18n="buatpengajuan"> Pengajuan Biasa</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="/pengajuan/pengajuanBiasa"><i
                            data-feather="circle"></i><span class="menu-item text-truncate"
                            data-i18n="buatpengajuan">Buat Pengajuan</span></a>
                        </li>
                        {{-- <li><a class="d-flex align-items-center" href="/pengajuan/pengajuanBiasa/create"><i
                            data-feather="circle"></i><span class="menu-item text-truncate"
                            data-i18n="pengajuanbiasa">Lihat Pengajuan</span></a>
                        </li> --}}
                        <li><a class="d-flex align-items-center" href="/pengajuan/pengajuanBiasa/show"><i
                            data-feather="circle"></i><span class="menu-item text-truncate"
                            data-i18n="lampiranpengajuanbiasa">Lampiran</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="/pengajuan/pengajuanBiasa/create"><i
                            data-feather="circle"></i><span class="menu-item text-truncate"
                            data-i18n="pengajuanproses">Pengajuan Di Proses</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="/pengajuan/pengajuanBiasa/show"><i
                            data-feather="circle"></i><span class="menu-item text-truncate"
                            data-i18n="pengajuanselesai">Pengajuan Selesai</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="/pengajuan/pengajuanBiasa/show"><i
                            data-feather="circle"></i><span class="menu-item text-truncate"
                            data-i18n="pengajuantolak">Pengajuan Di Tolak</span></a>
                        </li>
                       
                      
                    </ul>
                <li class=" nav-item"><a class="d-flex align-items-center" href="/pengajuan/lihatpengajuanstaf"><i
                            data-feather="circle"></i><span class="menu-title text-truncate" data-i18n="surat">Pengajuan
                            Projek</span></a>
                    <ul class="menu-content">
                      
                        {{-- <li><a class="d-flex align-items-center" href="/pengajuan/pengajuanProjek"><i
                            data-feather="circle"></i><span class="menu-item text-truncate"
                            data-i18n="pengajuanprojek">Buat Pengajuan</span></a>
                        </li> --}}
                       
                        <li><a class="d-flex align-items-center" href="/pengajuan/pengajuanProjek/create"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="pengajuanprojek">Lihat Pengajuan</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="/pengajuan/pengajuanBiasa/show"><i
                            data-feather="circle"></i><span class="menu-item text-truncate"
                            data-i18n="pengajuanproses">Pengajuan Di Proses</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="/pengajuan/pengajuanBiasa/show"><i
                            data-feather="circle"></i><span class="menu-item text-truncate"
                            data-i18n="pengajuanselesai">Pengajuan Selesai</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="/pengajuan/pengajuanBiasa/show"><i
                            data-feather="circle"></i><span class="menu-item text-truncate"
                            data-i18n="pengajuantolak">Pengajuan Di Tolak</span></a>
                        </li>
                    </ul>

        </div>
    </div>
    <!-- END: Main Menu-->
@elseif ($role == 2)
    <!-- staff sdm-->
    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item me-auto"><a class="navbar-brand"
                        href="../../../html/ltr/vertical-menu-template/index.html"><span class="brand-logo">
                            <svg viewbox="0 0 139 95" version="1.1" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" height="24">
                                <defs>
                                    <lineargradient id="linearGradient-1" x1="100%" y1="10.5120544%"
                                        x2="50%" y2="89.4879456%">
                                        <stop stop-color="#000000" offset="0%"></stop>
                                        <stop stop-color="#FFFFFF" offset="100%"></stop>
                                    </lineargradient>
                                    <lineargradient id="linearGradient-2" x1="64.0437835%" y1="46.3276743%"
                                        x2="37.373316%" y2="100%">
                                        <stop stop-color="#EEEEEE" stop-opacity="0" offset="0%"></stop>
                                        <stop stop-color="#FFFFFF" offset="100%"></stop>
                                    </lineargradient>
                                </defs>
                                <g id="Page-1" stroke="none" stroke-width="1" fill="none"
                                    fill-rule="evenodd">
                                    <g id="Artboard" transform="translate(-400.000000, -178.000000)">
                                        <g id="Group" transform="translate(400.000000, 178.000000)">
                                            <path class="text-primary" id="Path"
                                                d="M-5.68434189e-14,2.84217094e-14 L39.1816085,2.84217094e-14 L69.3453773,32.2519224 L101.428699,2.84217094e-14 L138.784583,2.84217094e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L6.71554594,44.4188507 C2.46876683,39.9813776 0.345377275,35.1089553 0.345377275,29.8015838 C0.345377275,24.4942122 0.230251516,14.560351 -5.68434189e-14,2.84217094e-14 Z"
                                                style="fill:currentColor"></path>
                                            <path id="Path1"
                                                d="M69.3453773,32.2519224 L101.428699,1.42108547e-14 L138.784583,1.42108547e-14 L138.784199,29.8015838 C137.958931,37.3510206 135.784352,42.5567762 132.260463,45.4188507 C128.736573,48.2809251 112.33867,64.5239941 83.0667527,94.1480575 L56.2750821,94.1480575 L32.8435758,70.5039241 L69.3453773,32.2519224 Z"
                                                fill="url(#linearGradient-1)" opacity="0.2"></path>
                                            <polygon id="Path-2" fill="#000000" opacity="0.049999997"
                                                points="69.3922914 32.4202615 32.8435758 70.5039241 54.0490008 16.1851325">
                                            </polygon>
                                            <polygon id="Path-21" fill="#000000" opacity="0.099999994"
                                                points="69.3922914 32.4202615 32.8435758 70.5039241 58.3683556 20.7402338">
                                            </polygon>
                                            <polygon id="Path-3" fill="url(#linearGradient-2)"
                                                opacity="0.099999994"
                                                points="101.428699 0 83.0667527 94.1480575 130.378721 47.0740288">
                                            </polygon>
                                        </g>
                                    </g>
                                </g>
                            </svg></span>
                        <h2 class="brand-text">E-Pengajuan</h2>
                    </a></li>
                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pe-0"
                        data-bs-toggle="collapse"><i class="d-block d-xl-none text-primary toggle-icon font-medium-4"
                            data-feather="x"></i><i
                            class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary"
                            data-feather="disc" data-ticon="disc"></i></a></li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class=" nav-item"><a class="d-flex align-items-center" href="/pengajuan"><i
                            data-feather="home"></i><span class="menu-title text-truncate"
                            data-i18n="Dashboards">Dashboards</span></a>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="/pengajuan/tambah"><i
                            data-feather="mail"></i><span class="menu-title text-truncate" data-i18n="surat">Buat
                            Pengajuan</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="/pengajuan/kurang1"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="k1jt">Kurang 1 Juta</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="/pengajuan/lebih1"><i
                                    data-feather="circle"></i><span class="menu-item text-truncate"
                                    data-i18n="l1jt">Lebih 1 Juta</span></a>
                        </li>
                    </ul>
                <li class=" nav-item"><a class="d-flex align-items-center" href="app-chat.html"><i
                            data-feather="grid"></i><span class="menu-title text-truncate" data-i18n="surat">Lihat
                            Pengajuan</span></a>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="app-chat.html"><i
                            data-feather="plus-square"></i><span class="menu-title text-truncate"
                            data-i18n="lampiran">Tambah Lampiran</span></a>
                </li>
            </ul>

            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class=" navigation-header"><span data-i18n="Apps &amp; Pages"> Menu Umum </span><i
                        data-feather="more-horizontal"></i>
                </li>
                <li class=" nav-item"><a class="d-flex align-items-center" href="app-chat.html"><i
                            data-feather="mail"></i><span class="menu-title text-truncate" data-i18n="surat">Surat
                            Menyurat</span></a>
                    <ul class="menu-content">
                        <li><a class="d-flex align-items-center" href="#"><i data-feather="circle"></i><span
                                    class="menu-item text-truncate" data-i18n="masuk">Surat Masuk</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="#"><i data-feather="circle"></i><span
                                    class="menu-item text-truncate" data-i18n="keluar">Surat Keluar</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="#"><i data-feather="circle"></i><span
                                    class="menu-item text-truncate" data-i18n="keluar">Surat Edaran</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="#"><i data-feather="circle"></i><span
                                    class="menu-item text-truncate" data-i18n="tugaskeluar">Surat Tugas Keluar
                                    Kantor</span></a>
                        </li>
                        <li><a class="d-flex align-items-center" href="#"><i data-feather="circle"></i><span
                                    class="menu-item text-truncate" data-i18n="tugaskeluar">Surat Perintah
                                    Lembur</span></a>
                        </li>
                </li>
            </ul>

            <li class=" nav-item"><a class="d-flex align-items-center" href="app-chat.html"><i
                        data-feather="archive"></i><span class="menu-title text-truncate"
                        data-i18n="surat">Inventory</span></a>
                <ul class="menu-content">
                    <li><a class="d-flex align-items-center" href="#"><i data-feather="circle"></i><span
                                class="menu-item text-truncate" data-i18n="masuk">Aset Aktif</span></a>
                    </li>
                    <li><a class="d-flex align-items-center" href="#"><i data-feather="circle"></i><span
                                class="menu-item text-truncate" data-i18n="keluar">Aset Tidak Aktif</span></a>
                    </li>
            </li>
            </ul>
            <li class=" navigation-header"><span data-i18n="Apps &amp; Pages"> User </span><i
                    data-feather="more-horizontal"></i>
            </li>
            </li>
            <li class=" nav-item"><a class="d-flex align-items-center" href="/pengajuan/profil"><i
                        data-feather="user"></i><span class="menu-title text-truncate"
                        data-i18n="user">Profile</span></a>
            </li>
            </ul>
            </ul>
        </div>
    </div>



    <!-- END: Main Menu-->
@elseif ($role == 3)
    <!-- manager travel-->
    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item me-auto"><a class="navbar-brand">
                    <img src="https://sayagawisatabogor.com/wp-content/uploads/2021/09/LOGO-SWB.png" width="20%"
                    alt="Logo Sayaga">
                        

                            <h2 class="brand-text" style="color :darkgreen">E-Pengajuan</h2>
                      
                    </a></li>
                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pe-0"
                        data-bs-toggle="collapse"><i class="d-block d-xl-none text-primary toggle-icon font-medium-4"
                            data-feather="x"></i><i
                            class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary"
                            data-feather="disc" data-ticon="disc"></i></a></li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class=" nav-item"><a class="d-flex align-items-center" href="/pengajuan"><i
                            data-feather="home"></i><span class="menu-title text-truncate"
                            data-i18n="Dashboards">Dashboards</span></a>

                </li>
                <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                    <li class=" navigation-header"><span data-i18n="Apps &amp; Pages"> Menu Utama
                        </span><i data-feather="more-horizontal"></i>
                    </li>


                    <li class=" nav-item"><a class="d-flex align-items-center"
                            href="/pengajuan/lihatpengajuanstaf"><i data-feather="circle"></i><span
                                class="menu-title text-truncate" data-i18n="surat">Pengajuan Biasa</span></a>
                        <ul class="menu-content">
                            <li class=" nav-item"><a class="d-flex align-items-center"
                                    href="/pengajuan/pengajuanBiasa/create"><i data-feather="circle"></i><span
                                        class="menu-item text-truncate" data-i18n="pmasuk">Pengajuan
                                        Masuk</span></a>
                            </li>
                            <li class=" nav-item"><a class="d-flex align-items-center" href="/pengajuan/diproses/show"><i
                                        data-feather="circle"></i><span class="menu-item text-truncate"
                                        data-i18n="pproses">Pengajuan Di
                                        Proses</span></a>
                            </li>
                            <li class=" nav-item"><a class="d-flex align-items-center" href="/pengajuan/HistoriBiasa/create"><i
                                        data-feather="circle"></i><span class="menu-item text-truncate"
                                        data-i18n="pselesai">Pengajuan
                                        Selesai</span></a>
                            </li>
                            <li class=" nav-item"><a class="d-flex align-items-center" href="/pengajuan/ditolak"><i
                                        data-feather="circle"></i><span class="menu-item text-truncate"
                                        data-i18n="ptolak">Pengajuan Di
                                        Tolak</span></a>
                            </li>
                           
                       
                        </ul>
                    </li>


                <li class=" nav-item"><a class="d-flex align-items-center"
                    href="/pengajuan/lihatpengajuanstaf"><i data-feather="circle"></i><span
                        class="menu-title text-truncate" data-i18n="surat">Pengajuan Projek</span></a>
                <ul class="menu-content">
                    <li class=" nav-item"><a class="d-flex align-items-center"
                            href="/pengajuan/pengajuan_masukM"><i data-feather="arrow-down"></i><span
                                class="menu-item text-truncate" data-i18n="pmasuk">Pengajuan
                                Masuk</span></a>
                    </li>
                    <li class=" nav-item"><a class="d-flex align-items-center" href="/pengajuan/diproses"><i
                                data-feather="activity"></i><span class="menu-item text-truncate"
                                data-i18n="pproses">Pengajuan Di
                                Proses</span></a>
                    </li>
                    <li class=" nav-item"><a class="d-flex align-items-center" href="/pengajuan/selesai"><i
                                data-feather="check"></i><span class="menu-item text-truncate"
                                data-i18n="pselesai">Pengajuan
                                Selesai</span></a>
                    </li>
                    <li class=" nav-item"><a class="d-flex align-items-center" href="/pengajuan/ditolak"><i
                                data-feather="x"></i><span class="menu-item text-truncate"
                                data-i18n="ptolak">Pengajuan Di
                                Tolak</span></a>
                    </li>
                   
               
                </ul>
            </li>
                </ul>
            </ul>

        </div>
    </div>



    <!-- END: Main Menu-->
@elseif($role == 4)

   <!-- manager travel-->
    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item me-auto"><a class="navbar-brand">
                    <img src="https://sayagawisatabogor.com/wp-content/uploads/2021/09/LOGO-SWB.png" width="20%"
                    alt="Logo Sayaga">
                        

                            <h2 class="brand-text" style="color :darkgreen">E-Pengajuan</h2>
                      
                    </a></li>
                <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pe-0"
                        data-bs-toggle="collapse"><i class="d-block d-xl-none text-primary toggle-icon font-medium-4"
                            data-feather="x"></i><i
                            class="d-none d-xl-block collapse-toggle-icon font-medium-4  text-primary"
                            data-feather="disc" data-ticon="disc"></i></a></li>
            </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                <li class=" nav-item"><a class="d-flex align-items-center" href="/pengajuan"><i
                            data-feather="home"></i><span class="menu-title text-truncate"
                            data-i18n="Dashboards">Dashboards</span></a>

                </li>
                <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                    <li class=" navigation-header"><span data-i18n="Apps &amp; Pages"> Menu Utama
                        </span><i data-feather="more-horizontal"></i>
                    </li>


                    <li class=" nav-item"><a class="d-flex align-items-center"
                            href="/pengajuan/lihatpengajuanstaf"><i data-feather="circle"></i><span
                                class="menu-title text-truncate" data-i18n="surat">Pengajuan Biasa</span></a>
                        <ul class="menu-content">
                            <li class=" nav-item"><a class="d-flex align-items-center"
                                    href="/pengajuan/pengajuanBiasa/create"><i data-feather="circle"></i><span
                                        class="menu-item text-truncate" data-i18n="pmasuk">Pengajuan
                                        Masuk</span></a>
                            </li>
                            <li class=" nav-item"><a class="d-flex align-items-center" href="/pengajuan/pengajuanBiasa/create"><i
                                        data-feather="circle"></i><span class="menu-item text-truncate"
                                        data-i18n="pproses">Pengajuan Di
                                        Proses</span></a>
                            </li>
                            <li class=" nav-item"><a class="d-flex align-items-center" href="/pengajuan/HistoriBiasa/create"><i
                                        data-feather="circle"></i><span class="menu-item text-truncate"
                                        data-i18n="pselesai">Pengajuan
                                        Selesai</span></a>
                            </li>
                            <li class=" nav-item"><a class="d-flex align-items-center" href="/pengajuan/ditolak"><i
                                        data-feather="circle"></i><span class="menu-item text-truncate"
                                        data-i18n="ptolak">Pengajuan Di
                                        Tolak</span></a>
                            </li>
                           
                       
                        </ul>
                    </li>


                <li class=" nav-item"><a class="d-flex align-items-center"
                    href="/pengajuan/lihatpengajuanstaf"><i data-feather="circle"></i><span
                        class="menu-title text-truncate" data-i18n="surat">Pengajuan Projek</span></a>
                <ul class="menu-content">
                    <li class=" nav-item"><a class="d-flex align-items-center"
                            href="/pengajuan/pengajuan_masukM"><i data-feather="arrow-down"></i><span
                                class="menu-item text-truncate" data-i18n="pmasuk">Pengajuan
                                Masuk</span></a>
                    </li>
                    <li class=" nav-item"><a class="d-flex align-items-center" href="/pengajuan/diproses"><i
                                data-feather="activity"></i><span class="menu-item text-truncate"
                                data-i18n="pproses">Pengajuan Di
                                Proses</span></a>
                    </li>
                    <li class=" nav-item"><a class="d-flex align-items-center" href="/pengajuan/selesai"><i
                                data-feather="check"></i><span class="menu-item text-truncate"
                                data-i18n="pselesai">Pengajuan
                                Selesai</span></a>
                    </li>
                    <li class=" nav-item"><a class="d-flex align-items-center" href="/pengajuan/ditolak"><i
                                data-feather="x"></i><span class="menu-item text-truncate"
                                data-i18n="ptolak">Pengajuan Di
                                Tolak</span></a>
                    </li>
                   
               
                </ul>
            </li>
                </ul>
            </ul>

        </div>
    </div>



<!-- END: Main Menu-->

@endif