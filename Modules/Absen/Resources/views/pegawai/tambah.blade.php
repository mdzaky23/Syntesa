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
                            <h2 class="content-header-title float-start mb-0">Tambah Pegawai</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/absen">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="/absen/pegawai">Data Pegawai</a>
                                    </li>
                                    <li class="breadcrumb-item active">Tambah Pegawai
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
                                <form action="/absen/pegawai" class="form" method="post">
                                    @csrf
                                    <div class="row">

                                        <div class="col-12">
                                            <div class="mb-2">
                                                <label class="form-label" for="nip">NIP</label>
                                                <input type="number" id="nip" name="nip"class="form-control"
                                                    placeholder="Input NIP Pegawai" />
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="mb-2">
                                                <label class="form-label" for="nama_pegawai">Nama</label>
                                                <input type="text" id="nama_pegawai" name="nama_pegawai"class="form-control"
                                                    placeholder="Input Nama Pegawai" />
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="mb-2">
                                                <label class="form-label" for="alamat">Alamat</label>
                                                <textarea
                                                    class="form-control"
                                                    id="alamat"
                                                    name="alamat"
                                                    rows="3"
                                                    placeholder="Input Alamat Pegawai"
                                                ></textarea>
                                            </div>
                                        </div>

                                        <!-- Tooltip validations start -->
                                        <section class="tooltip-validations" id="tooltip-validation">
                                            <div class="col-12">
                                                <div class="card">
                                                    <div class="row g-1">
                                                        <div class="col-md-6 col-12 position-relative">
                                                            <label class="form-label" for="tp_lahir">Tempat Lahir</label>
                                                            <input type="text" id="tp_lahir" name="tp_lahir" class="form-control" placeholder="Input Tempat lahir Pegawai" />
                                                        <div class="valid-tooltip">Looks good!</div>
                                                    </div>

                                                    <div class="col-md-6 col-12 position-relative">
                                                        <label class="form-label" for="tgl_lahir">Tanggal Lahir</label>
                                                        <input type="date" class="form-control" placeholder="YYYY-MM-DD" id="tgl_lahir" name="tgl_lahir" />
                                                        <div class="valid-tooltip">Looks good!</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <!-- Tooltip validations end -->

                                        <div class="col-12 position-relative">
                                            <div class="mb-2">
                                                <label class="form-label" for="pendidikan_id">Pendidikan</label>
                                                <select class="form-select" aria-label="Default select example" name="pendidikan_id" id="pendidikan_id">
                                                    <option selected>--Pilih Pendidikan pegawai--</option>
                                                    <option value="1">SLTA</option>
                                                    <option value="2">D3</option>
                                                    <option value="3">S1</option> 
                                                    <option value="4">S2</option>  
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="mb-2">
                                                <label class="form-label" for="jk">Jenis Kelamin</label>
                                                    <section id="basic-radio">
                                                        <div class="col-12">
                                                            <div class="card">
                                                                <div class="demo-inline-spacing">

                                                                    <div class="form-check form-check-inline">
                                                                        <input
                                                                            class="form-check-input"
                                                                            type="radio"
                                                                            name="jk"
                                                                            id="jk"
                                                                            value="Perempuan"
                                                                        />
                                                                        <label class="form-check-label" for="jk">Perempuan</label>
                                                                    </div>

                                                                    <div class="form-check form-check-inline">
                                                                        <input
                                                                            class="form-check-input"
                                                                            type="radio"
                                                                            name="JK"
                                                                            id="JK"
                                                                            value="Laki-laki"
                                                                        />
                                                                        <label class="form-check-label" for="jk">Laki-laki</label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </section>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="mb-2">
                                                <label class="form-label" for="tgl_masuk">Tanggal Masuk</label>
                                                <input type="date" class="form-control" placeholder="YYYY-MM-DD" id="tgl_masuk" name="tgl_masuk" />
                                            </div>
                                        </div>

                                        <div class="col-12 position-relative">
                                            <div class="mb-2">
                                                <label class="form-label" for="jenispegawai_id">Jenis Pegawai</label>
                                                <select class="form-select" aria-label="Default select example" name="jenispegawai_id" id="jenispegawai_id">
                                                    <option selected>--Pilih jenis pegawai--</option>
                                                    <option value="1">Tetap</option>
                                                    <option value="2">Kontrak</option>  
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-12 position-relative">
                                            <div class="mb-2">
                                                <label class="form-label" for="jabatan_id">Jabatan Pegawai</label>
                                                <select class="form-select" aria-label="Default select example" name="jabatan_id" id="jabatan_id">
                                                    <option selected>--Pilih Jabatan Pegawai--</option>
                                                    <option value="1">Direktur Utama</option>
                                                    <option value="2">Direktur</option>
                                                    <option value="4">Manager</option>
                                                    <option value="5">Kepala Divisi</option>
                                                    <option value="6">Junior Manager</option>
                                                    <option value="7">Staff</option>
                                                    <option value="8">Sekretariat Perusahaan</option>
                                                    <option value="9">Staff Pengembangan Bisnis</option> 
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-12 position-relative">
                                            <div class="mb-2">
                                                <label class="form-label" for="divisi_id">Divisi Pegawai</label>
                                                <select class="form-select" aria-label="Default select example" name="divisi_id" id="divisi_id">
                                                    <option selected>--Pilih divisi pegawai--</option>
                                                    <option value="1">Keuangan</option>
                                                    <option value="2">SDM dan Umum</option>
                                                    <option value="3">Operasional</option>
                                                    <option value="4">Umum dan Keuangan</option>
                                                    <option value="5">Keuangan dan Akuntansi</option>
                                                    <option value="6">Staff IT dan Umum</option>
                                                    <option value="7">Umum (Security)</option>
                                                    <option value="8">Umum (Driver)</option>
                                                    <option value="9">Kerumahtanggaan</option>
                                                </select>
                                            </div>
                                        </div>
                                        
                                        <div class="col-12 position-relative">
                                            <div class="mb-2">
                                                <label class="form-label" for="golongan_id">Golongan Pegawai</label>
                                                <select class="form-select" aria-label="Default select example" name="golongan_id" id="golongan_id">
                                                    <option selected>--Pilih divisi pegawai--</option>
                                                    <option value="1">A1</option>
                                                    <option value="2">A2</option>
                                                    <option value="3">A3</option>
                                                    <option value="4">A4</option>
                                                    <option value="5">B1</option>
                                                    <option value="6">B2</option>
                                                    <option value="7">B3</option>
                                                    <option value="8">B4</option>
                                                    <option value="9">C1</option>
                                                    <option value="10">C2</option>
                                                    <option value="11">C3</option>
                                                    <option value="12">C4</option>
                                                    <option value="13">D1</option>
                                                    <option value="14">D2</option>
                                                    <option value="15">D3</option>
                                                    <option value="16">D4</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="mb-2">
                                                <label class="form-label" for="no_hp">No Telp</label>
                                                <input type="number" id="no_hp" name="no_hp"class="form-control"
                                                    placeholder="Input No Telp Pegawai" />
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="mb-2">
                                                <label class="form-label" for="no_rek">No Rekening</label>
                                                <input type="number" id="no_rek" name="no_rek"class="form-control"
                                                    placeholder="Input No rekening Pegawai" />
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="mb-2">
                                                <label class="form-label" for="uangsaku_id">Uang Saku</label>
                                                <input type="number" id="uangsaku_id" name="uangsaku_id"class="form-control"
                                                    placeholder="Input uang saku Pegawai" />
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="d-grid col-12">
                                                <button type="submit" class="btn btn-primary">Tambah Pegawai</button>
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