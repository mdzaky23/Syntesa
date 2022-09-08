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
                            <h2 class="content-header-title float-start mb-0">Tambah Surat Absent</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/absen">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Tambah Surat</a>
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
                            <div class="card-body">
                                <form action="/absen/lpsrtabsen" class="form" method="post" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">

                                        <div class="col-12">
                                            <div class="mb-2">
                                                <label class="form-label" for="nip">NIP</label>
                                                <input type="number" id="nip" name="nip"class="form-control"
                                                    placeholder="Input NIP" />
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="mb-2">
                                                <label class="form-label" for="nama_pegawai">Nama</label>
                                                <input type="text" id="nama_pegawai" name="nama_pegawai"class="form-control"
                                                    placeholder="Input Nama" />
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="mb-2">
                                                <label class="form-label" for="kategori">Kategori Surat Absent</label>
                                                
                                                <section id="basic-radio">
                                                    <div class="demo-inline-spacing">
                                                        <div class="form-check form-check-inline">
                                                            <input
                                                                class="form-check-input"
                                                                type="radio"
                                                                name="kategori"
                                                                id="kategori"
                                                                value="izin"
                                                            />
                                                            <label class="form-check-label" for="inlineRadio2">Izin</label>
                                                        </div>

                                                        <div class="form-check form-check-inline">
                                                            <input
                                                                class="form-check-input"
                                                                type="radio"
                                                                name="kategori"
                                                                id="kategori"
                                                                value="cuti"
                                                            />
                                                            <label class="form-check-label" for="inlineRadio2">Cuti</label>
                                                        </div>

                                                        <div class="form-check form-check-inline">
                                                            <input
                                                                class="form-check-input"
                                                                type="radio"
                                                                name="kategori"
                                                                id="kategori"
                                                                value="sakit"
                                                            />
                                                            <label class="form-check-label" for="inlineRadio2">Sakit</label>
                                                        </div>
                                                    </div>
                                                </section>

                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="mb-2">
                                                <label class="form-label" for="lampiran">Lampiran</label>
                                                <input class="form-control" type="file" id="lampiran" name="lampiran" required />
                                            </div>
                                        </div>


                                        <div class="col-12">
                                          <div class="d-grid col-12">
                                                <button type="submit" class="btn btn-primary">Tambah Surat Absent</button>
                                            </div>
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

@endsection