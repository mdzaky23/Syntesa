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
                                    <li class="breadcrumb-item"><a href="/absen/bpjs">Data BPJS</a>
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
                                <form action="/absen/bpjs" class="form" method="post">
                                    @csrf
                                    <div class="row">

                                        <div class="col-12">
                                            <div class="mb-2">
                                                <label class="form-label" for="pegawai_id">Nama Pegawai :</label>
                                                <select class="form-select" aria-label="Default select example" name="pegawai_id" id="pegawai_id">
                                                    
                                                    <option selected>Masukan Nama</option>

                                                    @foreach ( $pegawais as $pegawai )
                                                    <option value="{{ $pegawai->id }}">{{ $pegawai->nama_pegawai }}</option>
                                                    @endforeach  

                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="mb-2">
                                                <label class="form-label" for="jenis_bpjs">Jenis BPJS</label>
                                                <input type="text" id="jenis_bpjs" name="jenis_bpjs"class="form-control"
                                                    placeholder="Input jenis bpjs" />
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="mb-2">
                                                <label class="form-label" for="no_bpjs">No BPJS</label>
                                                <input type="text" id="no_bpjs" name="no_bpjs"class="form-control"
                                                    placeholder="Input no bpjs" />
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="mb-2">
                                                <label class="form-label" for="iuran_bulanan">Iuran Bulanan</label>
                                                <input type="number" id="iuran_bulanan" name="iuran_bulanan"class="form-control"
                                                    placeholder="Input iuran bulanan" />
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