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
                            <h2 class="content-header-title float-start mb-0">Tambah Data</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/absen">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="/absen/presensi">Data presensi</a>
                                    </li>
                                    <li class="breadcrumb-item active">Tambah Data
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
                                <form action="/absen/presensi" class="form" method="post">
                                    @csrf
                                    <div class="row">

                                        <div class="col-12 position-relative">
                                            <div class="mb-2">
                                                <label class="form-label" for="pegawai_id">Nama Pegawai</label>
                                                <select class="form-select" aria-label="Default select example" name="pegawai_id" id="pegawai_id">
                                                    <option selected>--Pilih pegawai--</option>

                                                    @foreach ( $pegawais as $pegawai )
                                                    <option value="{{ $pegawai->id }}">{{ $pegawai->nama_pegawai }}</option>
                                                    @endforeach 

                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="mb-2">
                                                <label class="form-label" for="tgl_absen">Tanggal Absen</label>
                                                <input type="date" id="tgl_absen" name="tgl_absen"class="form-control"
                                                    placeholder="Input tanggal" />
                                            </div>
                                        </div>


                                        <div class="col-12 position-relative">
                                            <div class="mb-2">
                                                <label class="form-label" for="divisi_id">Divisi</label>
                                                <select class="form-select" aria-label="Default select example" name="divisi_id" id="divisi_id">
                                                    <option selected>--Pilih divisi--</option>

                                                    @foreach ( $divisis as $divisi )
                                                    <option value="{{ $divisi->id }}">{{ $divisi->nama_divisi }}</option>
                                                    @endforeach 

                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-12 position-relative">
                                            <div class="mb-2">
                                                <label class="form-label" for="jabatan_id">Jabatan</label>
                                                <select class="form-select" aria-label="Default select example" name="jabatan_id" id="jabatan_id">
                                                    <option selected>--Pilih jabatan--</option>

                                                    @foreach ( $jabatans as $jabatan )
                                                    <option value="{{ $jabatan->id }}">{{ $jabatan->nama_jabatan }}</option>
                                                    @endforeach 

                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-12 position-relative">
                                            <div class="mb-2">
                                                <label class="form-label" for="keterangan">Keterangan</label>
                                                <select class="form-select" aria-label="Default select example" name="keterangan" id="keterangan">
                                                    <option selected>--Pilih jabatan--</option>
                                                    <option value="Hadir">Hadir</option>
                                                    <option value="Sakit">Sakit</option>
                                                    <option value="Izin">Izin</option>
                                                    <option value="Cuti">Cuti</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="mb-2">
                                                <label class="form-label" for="jam_masuk">Jam masuk</label>
                                                <input type="time" id="jam_masuk" name="jam_masuk"class="form-control"
                                                    placeholder="input jam masuk" />
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="mb-2">
                                                <label class="form-label" for="jam_pulang">Jam Pulang</label>
                                                <input type="time" id="jam_pulang" name="jam_pulang"class="form-control"
                                                    placeholder="input jam pulang" />
                                            </div>
                                        </div>
                                        

                                        <div class="col-12">
                                            <div class="d-grid col-12">
                                                <button type="submit" class="btn btn-primary">Tambah Data</button>
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