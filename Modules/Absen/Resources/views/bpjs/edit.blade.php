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
                            <h2 class="content-header-title float-start mb-0">Edit Data BPJS</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/absen">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="/absen/bpjs">Data BPJS</a>
                                    </li>
                                    <li class="breadcrumb-item active">Edit Data BPJS
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
                                <form action="{{ url('absen/bpjs', $bpjs->id) }}" class="form" method="post">
                                    @csrf
                                    @method('put')

                                    <div class="row">

                                    <div class="col-12">
                                            <div class="mb-2">
                                                <label class="form-label" for="pegawai_id">Nama Pegawai</label>
                                                <select class="form-select" aria-label="Default select example" name="pegawai_id" id="pegawai_id" value="{{ $bpjs->pegawai_id }}">
                                                    
                                                @foreach ( $pegawais as $pegawai )
                                                    @if (old('pegawai_id' , $bpjs->pegawai_id) == $pegawai->nama_pegawai)
                                                        <option value="{{ $pegawai->id }}" selected>{{ $pegawai->nama_pegawai }}</option>
                                                    @else
                                                    <option value="{{ $pegawai->id }}">{{ $pegawai->nip }} {{ $pegawai->nama_pegawai }}</option>
                                                    @endif
                                                @endforeach

                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="mb-2">
                                                <label class="form-label" for="jenis_bpjs">Jenis BPJS</label>
                                                <input type="text" class="form-control" id="jenis_bpjs"  
                                                    placeholder="Input jenis bpjs" name="jenis_bpjs" value="{{ $bpjs->jenis_bpjs }}"/>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="mb-2">
                                                <label class="form-label" for="no_bpjs">No BPJS</label>
                                                <input type="text" class="form-control" id="no_bpjs"  
                                                    placeholder="Input no bpjs" name="no_bpjs" value="{{ $bpjs->no_bpjs }}"/>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="mb-2">
                                                <label class="form-label" for="iuran_bulanan">Iuran Bulanan</label>
                                                <input type="text" class="form-control" id="iuran_bulanan"  
                                                    placeholder="Input iuran bulanan" name="iuran_bulanan" value="{{ $bpjs->iuran_bulanan }}"/>
                                            </div>
                                        </div>


                                        <div class="col-12">
                                            <div class="d-grid col-12">
                                                <button type="submit" class="btn btn-primary">Edit bpjs</button>
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