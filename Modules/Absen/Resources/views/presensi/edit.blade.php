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
                            <h2 class="content-header-title float-start mb-0">Edit Data Presensi</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/absen">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="/absen/presensi">Data Presensi</a>
                                    </li>
                                    <li class="breadcrumb-item active">Edit Data Presensi
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
                                <form action="{{ url('absen/presensi', $presensi->id) }}" class="form" method="post">
                                    @csrf
                                    @method('put')

                                    <div class="row">

                                        <div class="col-12">
                                            <div class="mb-2">
                                                <label class="form-label" for="pegawai_id">Nama pegawai</label>
                                                <select class="form-select" aria-label="Default select example" name="pegawai_id" id="pegawai_id" value="{{ $presensi->pegawai_id }}">
                                                    
                                                @foreach ( $pegawais as $pegawai )
                                                    @if (old('pegawai_id' , $presensi->pegawai_id) == $pegawai->nama_pegawai)
                                                        <option value="{{ $pegawai->id }}" selected>{{ $pegawai->nama_pegawai }}</option>
                                                    @else
                                                    <option value="{{ $pegawai->id }}">{{ $pegawai->nama_pegawai }}</option>
                                                    @endif
                                                @endforeach

                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-12 position-relative">
                                                        <label class="form-label" for="tgl_absen">Tanggal absen</label>
                                                        <input type="date" class="form-control" placeholder="YYYY-MM-DD" 
                                                            id="tgl_absen" name="tgl_absen" value="{{ $presensi->tgl_absen }}"/>
                                                        <div class="valid-tooltip">Looks good!</div>
                                                    </div>

                                        <div class="col-12">
                                            <div class="mb-2">
                                                <label class="form-label" for="divisi_id">Nama divisi</label>
                                                <select class="form-select" aria-label="Default select example" name="divisi_id" id="divisi_id" value="{{ $presensi->divisi_id }}">
                                                    
                                                @foreach ( $divisis as $divisi )
                                                    @if (old('divisi_id' , $presensi->divisi_id) == $divisi->nama_divisi)
                                                        <option value="{{ $divisi->id }}" selected>{{ $divisi->nama_divisi }}</option>
                                                    @else
                                                    <option value="{{ $divisi->id }}">{{ $divisi->nama_divisi }}</option>
                                                    @endif
                                                @endforeach

                                                </select>
                                            </div>
                                        </div>

                                    <div class="col-12">
                                            <div class="mb-2">
                                                <label class="form-label" for="jabatan_id">Jabatan</label>
                                                <select class="form-select" aria-label="Default select example" name="jabatan_id" id="jabatan_id" value="{{ $presensi->jabatan_id }}">
                                                    
                                                @foreach ( $jabatans as $jabatan )
                                                    @if (old('jabatan_id' , $presensi->jabatan_id) == $jabatan->nama_jabatan)
                                                        <option value="{{ $jabatan->id }}" selected>{{ $jabatan->nama_jabatan }}</option>
                                                    @else
                                                    <option value="{{ $jabatan->id }}">{{ $jabatan->nama_jabatan }}</option>
                                                    @endif
                                                @endforeach

                                                </select>
                                            </div>
                                        </div>


                                        <div class="col-12">
                                            <div class="mb-2">
                                                <label class="form-label" for="keterangan">Keterangan</label>
                                                <select class="form-select" aria-label="Default select example" name="keterangan" id="keterangan" value="{{ $presensi->keterangan }}">
                                                
                                                    <option value="{{$presensi->keterangan}}" selected>{{ $presensi->keterangan }}</option>
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
                                                <input type="time" class="form-control" id="jam_masuk"  
                                                    placeholder="edit Jam masuk" name="jam_masuk" value="{{ $presensi->jam_masuk }}"/>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="mb-2">
                                                <label class="form-label" for="jam_pulang">Jam pulang</label>
                                                <input type="time" class="form-control" id="jam_pulang"  
                                                    placeholder="edit Jam pulang" name="jam_pulang" value="{{ $presensi->jam_pulang }}"/>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="d-grid col-12">
                                                <button type="submit" class="btn btn-primary">Edit Uang saku</button>
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