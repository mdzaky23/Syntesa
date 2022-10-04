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
           <!-- Menu Atas -->      
<div class="col-12 order-0 order-md-1">
      <!-- User Pills -->
      <ul class="nav nav-pills mb-2">
        <li class="nav-item">
          <a class="nav-link active" href="/absen/pegawai">
            <i data-feather="users" class="font-medium-3 me-50"></i><span class="fw-bold">Pegawai</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/user">
            <i data-feather="user" class="font-medium-3 me-50"></i><span class="fw-bold">User</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/absen/jabatan">
            <i data-feather="star" class="font-medium-3 me-50"></i><span class="fw-bold">Jabatan</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/absen/divisi">
            <i data-feather="trello" class="font-medium-3 me-50"></i><span class="fw-bold">Divisi</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/absen/golongan">
            <i data-feather="codepen" class="font-medium-3 me-50"></i><span class="fw-bold">Golongan</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/absen/pendidikan">
            <i data-feather="award" class="font-medium-3 me-50"></i><span class="fw-bold">Pendidikan</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/absen/uangsaku">
            <i data-feather="credit-card" class="font-medium-3 me-50"></i><span class="fw-bold">Uang Saku</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/absen/jenispegawai">
            <i data-feather="user-check" class="font-medium-3 me-50"></i><span class="fw-bold">Jenis</span>
          </a>
        </li>
      </ul>
<!-- menu bawah -->     
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

                                                    @foreach ( $pendidikans as $pendidikan )
                                                    <option value="{{ $pendidikan->id }}">{{ $pendidikan->nama_pendidikan }}</option>
                                                    @endforeach  

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
                                                                            name="jK"
                                                                            id="jK"
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

                                                    @foreach ( $jenispegawais as $jenispegawai )
                                                    <option value="{{ $jenispegawai->id }}">{{ $jenispegawai->nama_jenispegawai }}</option>
                                                    @endforeach

                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-12 position-relative">
                                            <div class="mb-2">
                                                <label class="form-label" for="jabatan_id">Jabatan Pegawai</label>
                                                <select class="form-select" aria-label="Default select example" name="jabatan_id" id="jabatan_id">
                                                    <option selected>--Pilih Jabatan Pegawai--</option>

                                                    @foreach ( $jabatans as $jabatan )
                                                    <option value="{{ $jabatan->id }}">{{ $jabatan->nama_jabatan }}</option>
                                                    @endforeach

                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-12 position-relative">
                                            <div class="mb-2">
                                                <label class="form-label" for="divisi_id">Divisi Pegawai</label>
                                                <select class="form-select" aria-label="Default select example" name="divisi_id" id="divisi_id">
                                                <option value="">--Pilih Divisi--</option>
                                                
                                                @foreach ( $divisis as $divisi )
                                                    <option value="{{ $divisi->id }}">{{ $divisi->nama_divisi }}</option>
                                                @endforeach

                                                </select>
                                            </div>
                                        </div>
                                        
                                        <div class="col-12 position-relative">
                                            <div class="mb-2">
                                                <label class="form-label" for="golongan_id">Golongan Pegawai</label>
                                                <select class="form-select" aria-label="Default select example" name="golongan_id" id="golongan_id">
                                                    <option selected>--Pilih golongan pegawai--</option>

                                                    @foreach ( $golongans as $golongan )
                                                    <option value="{{ $golongan->id }}">{{ $golongan->nama_golongan }}</option>
                                                    @endforeach

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