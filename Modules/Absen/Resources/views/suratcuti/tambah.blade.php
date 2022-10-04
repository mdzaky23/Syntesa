@extends('absen::layouts.main')

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
                                    <li class="breadcrumb-item"><a href="/suratcuti">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active">Buat Surat Cuti
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
                                <h4 class="card-title">Formulir Permohonan Surat Cuti</h4>
                            </div>
                            <div class="card-body">
                                <form action="/absen/printsuratcuti" method="POST" class="form"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">

                                        <div class="col-12 position-relative">
                                            <div class="mb-2">
                                                <label class="form-label" for="nip">NIP :</label>
                                                <input type="text" id="nip" name="nip" class="form-control" onkeyup="isi_otomatis()"
                                                    placeholder="Masukan lama cuti">
                                                </input>
                                            </div>
                                        </div>

                                        <div class="col-12 position-relative">
                                            <div class="mb-2">
                                                <label class="form-label" for="nama_pegawai">Nama</label>
                                                <input type="text" id="nama_pegawai" name="nama_pegawai" class="form-control" 
                                                    placeholder="Masukan lama cuti">
                                                </input>
                                            </div>
                                        </div>
                                    

                                        <div class="col-12">
                                            <div class="mb-2">
                                                <label class="form-label" for="jabatan">Jabatan :</label>
                                                <input type="text" id="jabatan" name="jabatan" class="form-control" 
                                                    placeholder="Masukan lama cuti">
                                                </input>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="mb-2">
                                                <label class="form-label" for="divisi">Divisi :</label>
                                                <input type="text" id="divisi" name="divisi" class="form-control" 
                                                    placeholder="Masukan lama cuti">
                                                </input>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="mb-2">
                                                <label class="form-label" for="lama_cuti">mengajukan cuti selama :</label>
                                                <input type="text" id="lama_cuti" name="lama_cuti" class="form-control"
                                                    placeholder="Masukan lama cuti">
                                                </input>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="mb-2">
                                                <label class="form-label" for="tgl_cuti">Tanggal cuti :</label>
                                                <input type="date" id="tgl_cuti" name="tgl_cuti" class="form-control"
                                                placeholder="YYYY-MM-DD">
                                                </input>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="mb-2">
                                                <label class="form-label" for="akhir_tgl_cuti">Tanggal cuti :</label>
                                                <input type="date" id="akhir_tgl_cuti" name="akhir_tgl_cuti" class="form-control"
                                                placeholder="YYYY-MM-DD">
                                                </input>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="mb-2">
                                                <label class="form-label" for="tujuan">Tujuan cuti :</label>
                                                <input type="text" id="tujuan" name="tujuan" class="form-control"
                                                    placeholder="Tujuan cuti anda">
                                                </input>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="mb-2">
                                                <label class="form-label" for="serah_tugas">Penyerahan tugas sementara kepada :</label>
                                                <select class="form-select" aria-label="Default select example" name="serah_tugas" id="serah_tugas">
                                                    
                                                    <option selected>Masukan Nama</option>

                                                    @foreach ( $pegawais as $pegawai )
                                                    <option value="{{ $pegawai->nama_pegawai }}">{{ $pegawai->nama_pegawai }}</option>
                                                    @endforeach  

                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="mb-2">
                                                <label class="form-label" for="no_hp">Nomor yang dapat dihubungi :</label>
                                                <input type="number" id="no_hp" name="no_hp" class="form-control"
                                                    placeholder="Masukan nomor yang dapat dihubungi">
                                                </input>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="mb-2">
                                                <label class="form-label" for="nama_atas">Nama Atasan :</label>
                                                <select class="form-select" aria-label="Default select example" name="nama_atas" id="nama_atas">
                                                    
                                                    <option selected>Masukan Nama</option>

                                                    @foreach ( $pegawais as $pegawai )
                                                    <option value="{{ $pegawai->nama_pegawai }}">{{ $pegawai->nama_pegawai }} || {{ $pegawai->nip }}</option>
                                                    @endforeach  

                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="mb-2">
                                                <label class="form-label" for="nip_atas">NIP atasan :</label>
                                                <select class="form-select" aria-label="Default select example" name="nip_atas" id="nip_atas">
                                                    
                                                    <option selected>Masukan Nama</option>

                                                    @foreach ( $pegawais as $pegawai )
                                                    <option value="{{ $pegawai->nip }}">{{ $pegawai->nip }} || {{ $pegawai->nama_pegawai }} </option>
                                                    @endforeach  

                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="mb-2">
                                                <label class="form-label" for="no_hp">Jabatan atasan :</label>
                                                <select class="form-select" aria-label="Default select example" name="jabatan_atas" id="jabatan_atas">
                                                    
                                                    <option selected>Masukan Jabatan</option>

                                                    @foreach ( $jabatans as $jabatan )
                                                    <option value="{{ $jabatan->nama_jabatan }}">{{ $jabatan->nama_jabatan }}</option>
                                                    @endforeach  

                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="mb-2">
                                                <label class="form-label" for="no_hp">Divisi atasan :</label>
                                                <select class="form-select" aria-label="Default select example" name="divisi_atas" id="divisi_atas">
                                                    
                                                    <option selected>Masukan divisi</option>

                                                    @foreach ( $divisis as $divisi )
                                                    <option value="{{ $divisi->nama_divisi }}">{{ $divisi->nama_divisi }}</option>
                                                    @endforeach  

                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="mb-2">
                                                <label class="form-label" for="jumlah_cuti">Jumlah cuti 2022 :</label>
                                                <input type="text" id="jumlah_cuti" name="jumlah_cuti" class="form-control"
                                                    placeholder="Masukan Jumlah Cuti">
                                                </input>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="mb-2">
                                                <label class="form-label" for="ambil_cuti">Cuti yang diambil :</label>
                                                <input type="text" id="ambil_cuti" name="ambil_cuti" class="form-control"
                                                    placeholder="Masukan cuti yang diambil">
                                                </input>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="mb-2">
                                                <label class="form-label" for="sisa_cuti">Sisa cuti 2022 :</label>
                                                <input type="text" id="sisa_cuti" name="sisa_cuti" class="form-control"
                                                    placeholder="masukan sisa cuti">
                                                </input>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="mb-2">
                                                <label class="form-label" for="catatan">Catatan atasan langsung :</label>
                                                <input type="text" id="catatan" name="catatan" class="form-control"
                                                    placeholder="tambahkan catatan">
                                                </input>
                                            </div>
                                        </div>

                                        <div class="d-grid col-12">
                                            <button type="submit" class="btn btn-success">Buat Surat</button>
                                        </div>
                                    </div>
                            </div>
                            </section>
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

    <script>
        tinymce.init({
            selector: '#isi'
        })
    </script>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript">
            function isi_otomatis(){
                var nip = $("#nip").val();
                $.ajax({
                    url: 'ajax.php',
                    data:"nip="+nip ,
                }).success(function (data) {
                    var json = data,
                    obj = JSON.parse(json);
                    $('#nama_pegawai').val(obj.nama_pegawai);
                    $('#jabatan').val(obj.jabatan);
                    $('#divisi').val(obj.jurusan);
                });
            }
        </script>



@endsection
