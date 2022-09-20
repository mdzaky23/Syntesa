@extends('surat::layouts.main')

@section('content')
    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-start mb-0">Buat Surat</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/surat">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active">Buat Surat Dinas Keluar Kantor
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- Card Advance -->

                <div class="row match-height">
                    <!-- Payment Card -->
                    <div class="col-lg-12 col-md-12 col-12">
                        <div class="card card-payment">
                            <div class="card-header">
                                <h4 class="card-title">Surat Dinas Keluar Kantor</h4>
                            </div>
                            <div class="card-body">
                                <form action="/surat/printtgskk" method="POST" class="form">
                                    @csrf
                                    <div class="row">
                                        <div class="col-12 position-relative">
                                            <div class="mb-2">
                                                <label class="form-label" for="tgl_surattgskk">Tanggal Surat</label>
                                                <input type="text" id="tgl_surattgskk" name="tgl_surattgskk"
                                                    class="form-control flatpickr-basic" placeholder="18 June, 2020" />
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="mb-2">
                                                <label class="form-label" for="no_surattgskk">Nomor Surat</label>
                                                <input type="text" id="no_surattgskk" name="no_surattgskk"
                                                    class="form-control" placeholder="085/B/SWB/V/2022"
                                                    value="{{ $no_surattgskk }}" />
                                            </div>
                                        </div>
                                        <!-- full Editor isi start -->
                                        <div class="col-12">
                                            <div class="card mb-2">
                                                <label class="form-label" for="kepada">Diperintahkan Kepada</label>
                                                <div class="col-12">
                                                    <div id="full-wrapper">
                                                        <div id="full-container">
                                                            <textarea id="kepada" class="form-control" placeholder="1. kepada 1" name="kepada"></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- full Editor isi end -->
                                        <div class="col-12">
                                            <div class="mb-2">
                                                <label class="form-label" for="untuk">Untuk : </label>
                                                <input type="text" id="untuk" name="untuk" class="form-control"
                                                    placeholder="Contoh: Pendampingan Survey" />
                                            </div>
                                        </div>
                                        <div class="col-12 position-relative">
                                            <div class="mb-2">
                                                <label class="form-label" for="waktu_pelaksanaan">Waktu Pelaksanaan</label>
                                                <input type="text" id="waktu_pelaksanaan" name="waktu_pelaksanaan"
                                                    class="form-control flatpickr-basic" placeholder="Waktu Pelaksanaan" />
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="mb-2">
                                                <label class="form-label" for="catatan">Catatan</label>
                                                <p>1. Melaksanakan Perintah ini dengan seksama dan penuh rasa tanggung
                                                    jawab.</p>
                                                <p>2. Sebelum dan sesudah melaksanakan Perintah ini, agar melapor kepada
                                                    Direktur Umum & Keuangan. </p>
                                                <p>3. Pembebanan biaya ini sesuai dengan surat keputusan direksi </p>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="mb-2">
                                                <label class="form-label" for="tertanda">Tertanda</label>
                                                <select class="form-select" id="tertanda" name="tertanda">
                                                    <option>-Pilih-</option>
                                                    <option value="Direktur Utama">Direktur Utama</option>
                                                    <option value="Direktur Umum dan Keuangan">Direktur Umum dan
                                                        Keuangan
                                                    </option>
                                                    <option value="Direktur Operasional">Direktur Operasional</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="mb-2">
                                                <label class="form-label" for="nama">Nama/NRP</label>
                                                <select class="form-select" id="nama" name="nama">
                                                    <option>-Pilih-</option>
                                                    <option
                                                        value="<p>Supriadi Jufri</p><p>15007201
                                                </p>">
                                                        Supriadi Jufri</option>
                                                    <option
                                                        value="<p>Aminudin</p><p>15007902
                                                </p>">
                                                        Aminudin</option>
                                                    <option
                                                        value="<p>Ivan Fadilla</p><p>15006603
                                                </p>">
                                                        Ivan Fadilla</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Basic Checkbox start -->
                                    <label for="ttd">Tanda Tangan</label>
                                    <div class="demo-inline-spacing">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="ttd"
                                                name="ttd" value="1" />
                                            <label class="form-check-label" for="ttd">Direktur
                                                Utama</label>
                                        </div>
                                    </div>
                                    <div class="demo-inline-spacing">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="ttd"
                                                name="ttd" value="2" />
                                            <label class="form-check-label" for="ttd">Direktur Umum &
                                                Keuangan</label>
                                        </div>
                                    </div>
                                    <div class="demo-inline-spacing mb-2">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="checkbox" id="ttd"
                                                name="ttd" value="3" />
                                            <label class="form-check-label" for="ttd">Direktur
                                                Operasional</label>
                                        </div>
                                    </div>
                                    <!-- Basic Checkbox end -->

                                    <div class="d-grid col-12">
                                        <button type="submit" class="btn btn-success">Buat Surat</button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                    <!--/ Payment Card -->
                </div>

                <!--/ Card Advance -->

            </div>
        </div>
    </div>
    <!-- END: Content-->


    <!-- BEGIN: Customizer-->
    <div class="customizer d-none d-md-block"><a
            class="customizer-toggle d-flex align-items-center justify-content-center" href="#"><i class="spinner"
                data-feather="settings"></i></a>
        <div class="customizer-content">
            <!-- Customizer header -->
            <div class="customizer-header px-2 pt-1 pb-0 position-relative">
                <h4 class="mb-0">Theme Customizer</h4>
                <p class="m-0">Customize & Preview in Real Time</p>

                <a class="customizer-close" href="#"><i data-feather="x"></i></a>
            </div>

            <hr />

            <!-- Styling & Text Direction -->
            <div class="customizer-styling-direction px-2">
                <p class="fw-bold">Skin</p>
                <div class="d-flex">
                    <div class="form-check me-1">
                        <input type="radio" id="skinlight" name="skinradio" class="form-check-input layout-name"
                            checked data-layout="" />
                        <label class="form-check-label" for="skinlight">Light</label>
                    </div>
                    <div class="form-check me-1">
                        <input type="radio" id="skinbordered" name="skinradio" class="form-check-input layout-name"
                            data-layout="bordered-layout" />
                        <label class="form-check-label" for="skinbordered">Bordered</label>
                    </div>
                    <div class="form-check me-1">
                        <input type="radio" id="skindark" name="skinradio" class="form-check-input layout-name"
                            data-layout="dark-layout" />
                        <label class="form-check-label" for="skindark">Dark</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" id="skinsemidark" name="skinradio" class="form-check-input layout-name"
                            data-layout="semi-dark-layout" />
                        <label class="form-check-label" for="skinsemidark">Semi Dark</label>
                    </div>
                </div>
            </div>

            <hr />

            <!-- Menu -->
            <div class="customizer-menu px-2">
                <div id="customizer-menu-collapsible" class="d-flex">
                    <p class="fw-bold me-auto m-0">Menu Collapsed</p>
                    <div class="form-check form-check-primary form-switch">
                        <input type="checkbox" class="form-check-input" id="collapse-sidebar-switch" />
                        <label class="form-check-label" for="collapse-sidebar-switch"></label>
                    </div>
                </div>
            </div>
            <hr />

            <!-- Layout Width -->
            <div class="customizer-footer px-2">
                <p class="fw-bold">Layout Width</p>
                <div class="d-flex">
                    <div class="form-check me-1">
                        <input type="radio" id="layout-width-full" name="layoutWidth" class="form-check-input"
                            checked />
                        <label class="form-check-label" for="layout-width-full">Full Width</label>
                    </div>
                    <div class="form-check me-1">
                        <input type="radio" id="layout-width-boxed" name="layoutWidth" class="form-check-input" />
                        <label class="form-check-label" for="layout-width-boxed">Boxed</label>
                    </div>
                </div>
            </div>
            <hr />

            <!-- Navbar -->
            <div class="customizer-navbar px-2">
                <div id="customizer-navbar-colors">
                    <p class="fw-bold">Navbar Color</p>
                    <ul class="list-inline unstyled-list">
                        <li class="color-box bg-white border selected" data-navbar-default=""></li>
                        <li class="color-box bg-primary" data-navbar-color="bg-primary"></li>
                        <li class="color-box bg-secondary" data-navbar-color="bg-secondary"></li>
                        <li class="color-box bg-success" data-navbar-color="bg-success"></li>
                        <li class="color-box bg-danger" data-navbar-color="bg-danger"></li>
                        <li class="color-box bg-info" data-navbar-color="bg-info"></li>
                        <li class="color-box bg-warning" data-navbar-color="bg-warning"></li>
                        <li class="color-box bg-dark" data-navbar-color="bg-dark"></li>
                    </ul>
                </div>

                <p class="navbar-type-text fw-bold">Navbar Type</p>
                <div class="d-flex">
                    <div class="form-check me-1">
                        <input type="radio" id="nav-type-floating" name="navType" class="form-check-input" checked />
                        <label class="form-check-label" for="nav-type-floating">Floating</label>
                    </div>
                    <div class="form-check me-1">
                        <input type="radio" id="nav-type-sticky" name="navType" class="form-check-input" />
                        <label class="form-check-label" for="nav-type-sticky">Sticky</label>
                    </div>
                    <div class="form-check me-1">
                        <input type="radio" id="nav-type-static" name="navType" class="form-check-input" />
                        <label class="form-check-label" for="nav-type-static">Static</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" id="nav-type-hidden" name="navType" class="form-check-input" />
                        <label class="form-check-label" for="nav-type-hidden">Hidden</label>
                    </div>
                </div>
            </div>
            <hr />

            <!-- Footer -->
            <div class="customizer-footer px-2">
                <p class="fw-bold">Footer Type</p>
                <div class="d-flex">
                    <div class="form-check me-1">
                        <input type="radio" id="footer-type-sticky" name="footerType" class="form-check-input" />
                        <label class="form-check-label" for="footer-type-sticky">Sticky</label>
                    </div>
                    <div class="form-check me-1">
                        <input type="radio" id="footer-type-static" name="footerType" class="form-check-input"
                            checked />
                        <label class="form-check-label" for="footer-type-static">Static</label>
                    </div>
                    <div class="form-check me-1">
                        <input type="radio" id="footer-type-hidden" name="footerType" class="form-check-input" />
                        <label class="form-check-label" for="footer-type-hidden">Hidden</label>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- End: Customizer-->
    <script src="https://cdn.ckeditor.com/ckeditor5/34.2.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#kepada'))
            .catch(error => {
                console.error(error);
            });
    </script>

    <style>
        .ck-editor__editable {
            min-height: 100px !important;
        }

        ;
    </style>
@endsection
