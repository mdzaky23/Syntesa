@extends('absen::layouts.main')

@section('content')

<!-- BEGIN: Content-->
<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <section class="app-user-view-account">
                <div class="row">
                    <!-- User Sidebar -->
                    <div class="col-xl-4 col-lg-5 col-md-5 order-1 order-md-0">
                        <!-- User Card -->
                        <div class="card">
                            <div class="card-body">
                                <h4 class="fw-bolder border-bottom pb-50 mb-1"><center>{{ $pegawai->nama_pegawai }}</center></h4>
                                <div class="info-container">
                                    <ul class="list-unstyled">
                                        <li class="mb-75">
                                            <span class="fw-bolder me-25">NIP :</span>
                                            <span>{{ $pegawai->nip }}</span>
                                        </li>
                                        <li class="mb-75">
                                            <span class="fw-bolder me-25">Tanggal Masuk :</span>
                                            <span >{{ $pegawai->tgl_masuk }}</span>
                                        </li>
                                        <li class="mb-75">
                                            <span class="fw-bolder me-25">Tanggal Pengangkatan :</span>
                                            <span>{{ $pegawai->tgl_pengangkatan }}</span>
                                        </li>
                                        <li class="mb-75">
                                            <span class="fw-bolder me-25">Jabatan :</span>
                                            <span>{{ $pegawai->jabatan->nama_jabatan }}</span>
                                        </li>
                                        <li class="mb-75">
                                            <span class="fw-bolder me-25">Pendidikan :</span>
                                            <span>{{ $pegawai->pendidikan->nama_pendidikan }}</span>
                                        </li>
                                        <li class="mb-75">
                                            <span class="fw-bolder me-25">Golongan :</span>
                                            <span class="badge bg-light-primary">{{ $pegawai->golongan->nama_golongan }}</span>
                                        </li>
                                        <li class="mb-75">
                                            <span class="fw-bolder me-25">Masa kerja :</span>
                                            <span>{{ $pegawai->gajipokok->masa_kerja }}</span>
                                        </li>
                                        </ul>
                                        <div class="d-flex justify-content-center pt-2">
                                        </div>
                                </div>
                            </div>
                        </div>
                        <!-- /User Card -->
                    </div>
                    <!--/ User Sidebar -->

                    <!-- User Content -->
                    <div class="col-xl-8 col-lg-7 col-md-7 order-0 order-md-1">
                        <!-- Tabs with Icon starts -->
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Slip Gaji</h4>
                            </div>
                            <div class="card-body">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="gaji" role="tabpanel">
                                        <div class="card-body">
                                            <hr>
                                            <h6 class="card-title text-center mb-4">Pendapatan</h6>
                                            <div class="row">
                                                <div class="col-xl-12 col-12">
                                                    <dl class="row mb-0">
                                                        @foreach ($gajipokoks as $gajipokok)
                                                        @if ($gajipokok->gaji)
                                                        <dt class="col-sm-4 fw-bolder mb-1">Gaji Pokok</dt>
                                                        <dd class="col-sm-8 mb-1">: {{ $gajipokok->gaji }}</dd>
                                                        @else
                                                        <dt class="col-sm-4 fw-bolder mb-1">Gaji Pokok</dt>
                                                        <dd class="col-sm-8 mb-1">: </dd>
                                                        @endif
                                                        @endforeach

                                                        @if ($pegawai->uangtunjangan->uang_jabatan)
                                                        <dt class="col-sm-4 fw-bolder mb-1">Tunjangan uang tunjangan</dt>
                                                        <dd class="col-sm-8 mb-1">: {{ $pegawai->uangtunjangan->uang_jabatan }}</dd>
                                                        @else
                                                        <dt class="col-sm-4 fw-bolder mb-1">Tunjangan jabatan</dt>
                                                        <dd class="col-sm-8 mb-1">: </dd>
                                                        @endif

                                                        <dt class="col-sm-4 fw-bolder mb-1">Tunjangan Transport</dt>
                                                        <dd class="col-sm-8 mb-1">: {{ $pegawai->uangtunjangan->uang_transport }}</dd>

                                                        <dt class="col-sm-4 fw-bolder mb-1"> </dt>
                                                        <dd class="col-sm-8 mb-1"> </dd>

                                                        <dt class="col-sm-8 fw-bolder mb-1"></dt>
                                                        <dd class="col-sm-4 fw-bolder mb-1">Total : {{ $gajipokok->gaji + $pegawai->uangtunjangan->uang_jabatan+$pegawai->uangtunjangan->uang_transport }}</dd>
                                                    </dl>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="rekeningbpjs" role="tabpanel">
                                    </div>
                                </div>
                            </div>
                        </div>
                        
<!-- END: Content-->

@endsection
