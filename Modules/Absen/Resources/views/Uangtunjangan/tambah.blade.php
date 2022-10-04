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
                                    <li class="breadcrumb-item"><a href="/absen/uangtunjangan">Data Besaran Uang tunjangan</a>
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
<!-- Menu Atas -->      
<div class="col-12 order-0 order-md-1">
      <!-- User Pills -->
      <ul class="nav nav-pills mb-2">
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
          <a class="nav-link active" href="/absen/uangtunjangan">
            <i data-feather="credit-card" class="font-medium-3 me-50"></i><span class="fw-bold">Uang tunjangan</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/absen/jenispegawai">
            <i data-feather="user-check" class="font-medium-3 me-50"></i><span class="fw-bold">Jenis</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/absen/gajipokok">
            <i data-feather="dollar-sign" class="font-medium-3 me-50"></i><span class="fw-bold">Gaji Pokok</span></a>
        </li>
      </ul>
<!-- menu bawah -->
                <!-- Card Advance -->

                <div class="row match-height">
                    <!-- Payment Card -->
                    <div class="col-lg-12 col-md-12 col-12">
                        <div class="card card-payment">
                            <div class="card-body">
                                <form action="/absen/uangtunjangan" class="form" method="post">
                                    @csrf
                                    <div class="row">

                                    <div class="col-12 position-relative">
                                            <div class="mb-2">
                                                <label class="form-label" for="jabatan_id">Jabatan</label>
                                                <select class="form-select" aria-label="Default select example" name="jabatan_id" id="jabatan_id">
                                                    <option selected>--Pilih Jabatan--</option>

                                                    @foreach ( $jabatans as $jabatan )
                                                    <option value="{{ $jabatan->id }}">{{ $jabatan->nama_jabatan }}</option>
                                                    @endforeach 

                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="mb-2">
                                                <label class="form-label" for="uang_jabatan">Uang jabatan</label>
                                                <input type="number" id="uang_jabatan" name="uang_jabatan"class="form-control"
                                                    placeholder="Input Besaran Uang jabatan" />
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="mb-2">
                                                <label class="form-label" for="uang_transport">Uang transport</label>
                                                <input type="text" id="uang_transport" name="uang_transport"class="form-control"
                                                    placeholder="Masukan Besaran Uang transport" />
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