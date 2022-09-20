@extends('surat::layouts.main')

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
                            <h2 class="content-header-title float-start mb-0">Edit Surat</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/surat">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active">Edit Surat Perintah Dinas
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
                                <h4 class="card-title">Surat Perintah Dinas</h4>
                            </div>
                            <div class="card-body">
                                <form action="{{ url('surat/printperdin', $suratperdin->id) }}" method="POST"
                                    class="form" enctype="multipart/form-data">
                                    @csrf
                                    @method ('put')
                                    <div class="row">
                                        <div class="col-12 position-relative">
                                            <div class="mb-2">
                                                <label class="form-label" for="tgl_suratperdin">Tanggal Buat</label>
                                                <input type="text" id="tgl_suratperdin" name="tgl_suratperdin"
                                                    class="form-control flatpickr-basic" placeholder="18 June, 2020"
                                                    value="{{ $suratperdin->tgl_suratperdin }}" />
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="mb-2">
                                                <label class="form-label" for="no_suratperdin">Nomor Surat</label>
                                                <input type="text" id="no_suratperdin" name="no_suratperdin"
                                                    class="form-control" placeholder="SPD No.028/A/SWB-SPD/VII/20222"
                                                    value="{{ $suratperdin->no_suratperdin }}" />
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="mb-2">
                                                <label class="form-label" for="dasar">Dasar</label>
                                                <input type="text" id="dasar" name="dasar" class="form-control"
                                                    placeholder="Penting" value="{{ $suratperdin->dasar }}">
                                                </input>
                                            </div>
                                        </div>
                                        <label for="pengikut">Diperintahkan
                                            Kepada :</label>
                                        <div class="row">
                                            <div class="col-sm-3 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="nama1">Nama 1</label>
                                                    <select class="form-select" id="nama1" name="nama1">
                                                        <option>-Pilih-</option>
                                                        @foreach ($datapegawais as $datapegawai)
                                                            <option
                                                                value="{{ $datapegawai->nama }} / {{ $datapegawai->nip }}">
                                                                {{ $datapegawai->nama }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-3 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="jabatan1">Jabatan 1</label>
                                                    <select class="form-select" id="jabatan1" name="jabatan1">
                                                        <option>-Pilih-</option>
                                                        <option value="Direktur Utama">Direktur Utama</option>
                                                        <option value="Direktur Umum dan Keuangan">Direktur Umum
                                                            dan
                                                            Keuangan
                                                        </option>
                                                        <option value="Direktur Operasional">Direktur
                                                            Operasional</option>
                                                        <option value="Manager">Manager</option>
                                                        <option value="Kepala Divisi">Kepala Divisi</option>
                                                        <option value="Junior Manager">Junior Manager</option>
                                                        <option value="Staff">Staff</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-3 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="nama2">Nama 2</label>
                                                    <select class="form-select" id="nama2" name="nama2">
                                                        <option>-Pilih-</option>
                                                        @foreach ($datapegawais as $datapegawai)
                                                            <option
                                                                value="{{ $datapegawai->nama }} / {{ $datapegawai->nip }}">
                                                                {{ $datapegawai->nama }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-3 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="jabatan2">Jabatan 2</label>
                                                    <select class="form-select" id="jabatan2" name="jabatan2">
                                                        <option>-Pilih-</option>
                                                        {{-- <option value="Direktur Utama">Direktur Utama</option> --}}
                                                        <option value="Direktur Umum dan Keuangan">Direktur Umum
                                                            dan
                                                            Keuangan
                                                        </option>
                                                        <option value="Direktur Operasional">Direktur
                                                            Operasional</option>
                                                        <option value="Manager">Manager</option>
                                                        <option value="Kepala Divisi">Kepala Divisi</option>
                                                        <option value="Junior Manager">Junior Manager</option>
                                                        <option value="Staff">Staff</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-3 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="nama3">Nama 3</label>
                                                    <select class="form-select" id="nama3" name="nama3">
                                                        <option>-Pilih-</option>
                                                        @foreach ($datapegawais as $datapegawai)
                                                            <option
                                                                value="{{ $datapegawai->nama }} / {{ $datapegawai->nip }}">
                                                                {{ $datapegawai->nama }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-3 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="jabatan3">Jabatan 3</label>
                                                    <select class="form-select" id="jabatan3" name="jabatan3">
                                                        <option>-Pilih-</option>
                                                        {{-- <option value="Direktur Utama">Direktur Utama</option>
                                                        <option value="Direktur Umum dan Keuangan">Direktur Umum dan
                                                            Keuangan
                                                        </option> --}}
                                                        <option value="Direktur Operasional">Direktur
                                                            Operasional</option>
                                                        <option value="Manager">Manager</option>
                                                        <option value="Kepala Divisi">Kepala Divisi</option>
                                                        <option value="Junior Manager">Junior Manager</option>
                                                        <option value="Staff">Staff</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-3 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="nama4">Nama 4</label>
                                                    <select class="form-select" id="nama4" name="nama4">
                                                        <option>-Pilih-</option>
                                                        @foreach ($datapegawais as $datapegawai)
                                                            <option
                                                                value="{{ $datapegawai->nama }} / {{ $datapegawai->nip }}">
                                                                {{ $datapegawai->nama }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-3 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="jabatan4">Jabatan 4</label>
                                                    <select class="form-select" id="jabatan4" name="jabatan4">
                                                        <option>-Pilih-</option>
                                                        {{-- <option value="Direktur Utama">Direktur Utama</option>
                                                        <option value="Direktur Umum dan Keuangan">Direktur Umum dan
                                                            Keuangan
                                                        </option>
                                                        <option value="Direktur Operasional">Direktur Operasional</option> --}}
                                                        <option value="Manager">Manager</option>
                                                        <option value="Kepala Divisi">Kepala Divisi</option>
                                                        <option value="Junior Manager">Junior Manager</option>
                                                        <option value="Staff">Staff</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-3 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="nama5">Nama 5</label>
                                                    <select class="form-select" id="nama5" name="nama5">
                                                        <option>-Pilih-</option>
                                                        @foreach ($datapegawais as $datapegawai)
                                                            <option
                                                                value="{{ $datapegawai->nama }} / {{ $datapegawai->nip }}">
                                                                {{ $datapegawai->nama }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-3 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="jabatan5">Jabatan 5</label>
                                                    <select class="form-select" id="jabatan5" name="jabatan5">
                                                        <option>-Pilih-</option>
                                                        {{-- <option value="Direktur Utama">Direktur Utama</option>
                                                        <option value="Direktur Umum dan Keuangan">Direktur Umum dan
                                                            Keuangan
                                                        </option>
                                                        <option value="Direktur Operasional">Direktur Operasional</option> --}}
                                                        {{-- <option value="Manager">Manager</option> --}}
                                                        <option value="Kepala Divisi">Kepala Divisi</option>
                                                        <option value="Junior Manager">Junior Manager</option>
                                                        <option value="Staff">Staff</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-3 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="nama6">Nama 6</label>
                                                    <select class="form-select" id="nama6" name="nama6">
                                                        <option>-Pilih-</option>
                                                        @foreach ($datapegawais as $datapegawai)
                                                            <option
                                                                value="{{ $datapegawai->nama }} / {{ $datapegawai->nip }}">
                                                                {{ $datapegawai->nama }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-3 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="jabatan6">Jabatan 6</label>
                                                    <select class="form-select" id="jabatan6" name="jabatan6">
                                                        <option>-Pilih-</option>
                                                        {{-- <option value="Direktur Utama">Direktur Utama</option>
                                                        <option value="Direktur Umum dan Keuangan">Direktur Umum dan
                                                            Keuangan
                                                        </option>
                                                        <option value="Direktur Operasional">Direktur Operasional</option>
                                                        <option value="Manager">Manager</option>
                                                        <option value="Kepala Divisi">Kepala Divisi</option> --}}
                                                        <option value="Junior Manager">Junior Manager</option>
                                                        <option value="Staff">Staff</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-3 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="nama7">Nama 7</label>
                                                    <select class="form-select" id="nama7" name="nama7">
                                                        <option>-Pilih-</option>
                                                        @foreach ($datapegawais as $datapegawai)
                                                            <option
                                                                value="{{ $datapegawai->nama }} / {{ $datapegawai->nip }}">
                                                                {{ $datapegawai->nama }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-3 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="jabatan7">Jabatan
                                                        87</label>
                                                    <select class="form-select" id="jabatan7" name="jabatan7">
                                                        <option>-Pilih-</option>
                                                        {{-- <option value="Direktur Utama">Direktur Utama</option>
                                                        <option value="Direktur Umum dan Keuangan">Direktur Umum dan
                                                            Keuangan
                                                        </option>
                                                        <option value="Direktur Operasional">Direktur Operasional</option>
                                                        <option value="Manager">Manager</option>
                                                        <option value="Kepala Divisi">Kepala Divisi</option>
                                                        <option value="Junior Manager">Junior Manager</option> --}}
                                                        <option value="Staff">Staff</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-3 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="nama8">Nama 8</label>
                                                    <select class="form-select" id="nama8" name="nama8">
                                                        <option>-Pilih-</option>
                                                        @foreach ($datapegawais as $datapegawai)
                                                            <option
                                                                value="{{ $datapegawai->nama }} / {{ $datapegawai->nip }}">
                                                                {{ $datapegawai->nama }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-3 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="jabatan8">Jabatan 8</label>
                                                    <select class="form-select" id="jabatan8" name="jabatan8">
                                                        <option>-Pilih-</option>
                                                        {{-- <option value="Direktur Utama">Direktur Utama</option>
                                                        <option value="Direktur Umum dan Keuangan">Direktur Umum dan
                                                            Keuangan
                                                        </option>
                                                        <option value="Direktur Operasional">Direktur Operasional</option>
                                                        <option value="Manager">Manager</option>
                                                        <option value="Kepala Divisi">Kepala Divisi</option>
                                                        <option value="Junior Manager">Junior Manager</option> --}}
                                                        <option value="Staff">Staff</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-3 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="nama9">Nama 9</label>
                                                    <select class="form-select" id="nama9" name="nama9">
                                                        <option>-Pilih-</option>
                                                        @foreach ($datapegawais as $datapegawai)
                                                            <option
                                                                value="{{ $datapegawai->nama }} / {{ $datapegawai->nip }}">
                                                                {{ $datapegawai->nama }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-3 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="jabatan9">Jabatan 9</label>
                                                    <select class="form-select" id="jabatan9" name="jabatan9">
                                                        <option>-Pilih-</option>
                                                        {{-- <option value="Direktur Utama">Direktur Utama</option>
                                                        <option value="Direktur Umum dan Keuangan">Direktur Umum dan
                                                            Keuangan
                                                        </option>
                                                        <option value="Direktur Operasional">Direktur Operasional</option>
                                                        <option value="Manager">Manager</option>
                                                        <option value="Kepala Divisi">Kepala Divisi</option>
                                                        <option value="Junior Manager">Junior Manager</option> --}}
                                                        <option value="Staff">Staff</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-3 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="nama10">Nama 10</label>
                                                    <select class="form-select" id="nama10" name="nama10">
                                                        <option>-Pilih-</option>
                                                        @foreach ($datapegawais as $datapegawai)
                                                            <option
                                                                value="{{ $datapegawai->nama }} / {{ $datapegawai->nip }}">
                                                                {{ $datapegawai->nama }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-3 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="jabatan10">Jabatan
                                                        10</label>
                                                    <select class="form-select" id="jabatan10" name="jabatan10">
                                                        <option>-Pilih-</option>
                                                        {{-- <option value="Direktur Utama">Direktur Utama</option>
                                                        <option value="Direktur Umum dan Keuangan">Direktur Umum dan
                                                            Keuangan
                                                        </option>
                                                        <option value="Direktur Operasional">Direktur Operasional</option>
                                                        <option value="Manager">Manager</option>
                                                        <option value="Kepala Divisi">Kepala Divisi</option>
                                                        <option value="Junior Manager">Junior Manager</option> --}}
                                                        <option value="Staff">Staff</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-3 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="nama11">Nama 11</label>
                                                    <select class="form-select" id="nama11" name="nama11">
                                                        <option>-Pilih-</option>
                                                        @foreach ($datapegawais as $datapegawai)
                                                            <option
                                                                value="{{ $datapegawai->nama }} / {{ $datapegawai->nip }}">
                                                                {{ $datapegawai->nama }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-3 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="jabatan11">Jabatan
                                                        11</label>
                                                    <select class="form-select" id="jabatan11" name="jabatan11">
                                                        <option>-Pilih-</option>
                                                        {{-- <option value="Direktur Utama">Direktur Utama</option>
                                                        <option value="Direktur Umum dan Keuangan">Direktur Umum dan
                                                            Keuangan
                                                        </option>
                                                        <option value="Direktur Operasional">Direktur Operasional</option>
                                                        <option value="Manager">Manager</option>
                                                        <option value="Kepala Divisi">Kepala Divisi</option>
                                                        <option value="Junior Manager">Junior Manager</option> --}}
                                                        <option value="Staff">Staff</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-3 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="nama12">Nama 12</label>
                                                    <select class="form-select" id="nama12" name="nama12">
                                                        <option>-Pilih-</option>
                                                        @foreach ($datapegawais as $datapegawai)
                                                            <option
                                                                value="{{ $datapegawai->nama }} / {{ $datapegawai->nip }}">
                                                                {{ $datapegawai->nama }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-3 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="jabatan12">Jabatan
                                                        12</label>
                                                    <select class="form-select" id="jabatan12" name="jabatan12">
                                                        <option>-Pilih-</option>
                                                        {{-- <option value="Direktur Utama">Direktur Utama</option>
                                                        <option value="Direktur Umum dan Keuangan">Direktur Umum dan
                                                            Keuangan
                                                        </option>
                                                        <option value="Direktur Operasional">Direktur Operasional</option>
                                                        <option value="Manager">Manager</option>
                                                        <option value="Kepala Divisi">Kepala Divisi</option>
                                                        <option value="Junior Manager">Junior Manager</option> --}}
                                                        <option value="Staff">Staff</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-3 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="nama13">Nama 13</label>
                                                    <select class="form-select" id="nama13" name="nama13">
                                                        <option>-Pilih-</option>
                                                        @foreach ($datapegawais as $datapegawai)
                                                            <option
                                                                value="{{ $datapegawai->nama }} / {{ $datapegawai->nip }}">
                                                                {{ $datapegawai->nama }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-3 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="jabatan13">Jabatan
                                                        13</label>
                                                    <select class="form-select" id="jabatan13" name="jabatan13">
                                                        <option>-Pilih-</option>
                                                        {{-- <option value="Direktur Utama">Direktur Utama</option>
                                                        <option value="Direktur Umum dan Keuangan">Direktur Umum dan
                                                            Keuangan
                                                        </option>
                                                        <option value="Direktur Operasional">Direktur Operasional</option>
                                                        <option value="Manager">Manager</option>
                                                        <option value="Kepala Divisi">Kepala Divisi</option>
                                                        <option value="Junior Manager">Junior Manager</option> --}}
                                                        <option value="Staff">Staff</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-3 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="nama14">Nama 14</label>
                                                    <select class="form-select" id="nama14" name="nama14">
                                                        <option>-Pilih-</option>
                                                        @foreach ($datapegawais as $datapegawai)
                                                            <option
                                                                value="{{ $datapegawai->nama }} / {{ $datapegawai->nip }}">
                                                                {{ $datapegawai->nama }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-3 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="jabatan14">Jabatan
                                                        14</label>
                                                    <select class="form-select" id="jabatan14" name="jabatan14">
                                                        <option>-Pilih-</option>
                                                        {{-- <option value="Direktur Utama">Direktur Utama</option>
                                                        <option value="Direktur Umum dan Keuangan">Direktur Umum dan
                                                            Keuangan
                                                        </option>
                                                        <option value="Direktur Operasional">Direktur Operasional</option>
                                                        <option value="Manager">Manager</option>
                                                        <option value="Kepala Divisi">Kepala Divisi</option>
                                                        <option value="Junior Manager">Junior Manager</option> --}}
                                                        <option value="Staff">Staff</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-3 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="nama15">Nama 15</label>
                                                    <select class="form-select" id="nama15" name="nama15">
                                                        <option>-Pilih-</option>
                                                        @foreach ($datapegawais as $datapegawai)
                                                            <option
                                                                value="{{ $datapegawai->nama }} / {{ $datapegawai->nip }}">
                                                                {{ $datapegawai->nama }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-3 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="jabatan15">Jabatan
                                                        15</label>
                                                    <select class="form-select" id="jabatan15" name="jabatan15">
                                                        <option>-Pilih-</option>
                                                        {{-- <option value="Direktur Utama">Direktur Utama</option>
                                                        <option value="Direktur Umum dan Keuangan">Direktur Umum dan
                                                            Keuangan
                                                        </option>
                                                        <option value="Direktur Operasional">Direktur Operasional</option>
                                                        <option value="Manager">Manager</option>
                                                        <option value="Kepala Divisi">Kepala Divisi</option>
                                                        <option value="Junior Manager">Junior Manager</option> --}}
                                                        <option value="Staff">Staff</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-3 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="nama16">Nama 16</label>
                                                    <select class="form-select" id="nama16" name="nama16">
                                                        <option>-Pilih-</option>
                                                        @foreach ($datapegawais as $datapegawai)
                                                            <option
                                                                value="{{ $datapegawai->nama }} / {{ $datapegawai->nip }}">
                                                                {{ $datapegawai->nama }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-3 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="jabatan16">Jabatan
                                                        16</label>
                                                    <select class="form-select" id="jabatan16" name="jabatan16">
                                                        <option>-Pilih-</option>
                                                        {{-- <option value="Direktur Utama">Direktur Utama</option>
                                                        <option value="Direktur Umum dan Keuangan">Direktur Umum dan
                                                            Keuangan
                                                        </option>
                                                        <option value="Direktur Operasional">Direktur Operasional</option>
                                                        <option value="Manager">Manager</option>
                                                        <option value="Kepala Divisi">Kepala Divisi</option>
                                                        <option value="Junior Manager">Junior Manager</option> --}}
                                                        <option value="Staff">Staff</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-3 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="nama17">Nama 17</label>
                                                    <select class="form-select" id="nama17" name="nama17">
                                                        <option>-Pilih-</option>
                                                        @foreach ($datapegawais as $datapegawai)
                                                            <option
                                                                value="{{ $datapegawai->nama }} / {{ $datapegawai->nip }}">
                                                                {{ $datapegawai->nama }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-3 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="jabatan17">Jabatan
                                                        17</label>
                                                    <select class="form-select" id="jabatan17" name="jabatan17">
                                                        <option>-Pilih-</option>
                                                        {{-- <option value="Direktur Utama">Direktur Utama</option>
                                                        <option value="Direktur Umum dan Keuangan">Direktur Umum dan
                                                            Keuangan
                                                        </option>
                                                        <option value="Direktur Operasional">Direktur Operasional</option>
                                                        <option value="Manager">Manager</option>
                                                        <option value="Kepala Divisi">Kepala Divisi</option>
                                                        <option value="Junior Manager">Junior Manager</option> --}}
                                                        <option value="Staff">Staff</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-3 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="nama18">Nama 18</label>
                                                    <select class="form-select" id="nama18" name="nama18">
                                                        <option>-Pilih-</option>
                                                        @foreach ($datapegawais as $datapegawai)
                                                            <option
                                                                value="{{ $datapegawai->nama }} / {{ $datapegawai->nip }}">
                                                                {{ $datapegawai->nama }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-3 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="jabatan18">Jabatan
                                                        18</label>
                                                    <select class="form-select" id="jabatan18" name="jabatan18">
                                                        <option>-Pilih-</option>
                                                        {{-- <option value="Direktur Utama">Direktur Utama</option>
                                                        <option value="Direktur Umum dan Keuangan">Direktur Umum dan
                                                            Keuangan
                                                        </option>
                                                        <option value="Direktur Operasional">Direktur Operasional</option>
                                                        <option value="Manager">Manager</option>
                                                        <option value="Kepala Divisi">Kepala Divisi</option>
                                                        <option value="Junior Manager">Junior Manager</option> --}}
                                                        <option value="Staff">Staff</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-3 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="nama19">Nama 19</label>
                                                    <select class="form-select" id="nama19" name="nama19">
                                                        <option>-Pilih-</option>
                                                        @foreach ($datapegawais as $datapegawai)
                                                            <option
                                                                value="{{ $datapegawai->nama }} / {{ $datapegawai->nip }}">
                                                                {{ $datapegawai->nama }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-3 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="jabatan19">Jabatan
                                                        19</label>
                                                    <select class="form-select" id="jabatan19" name="jabatan19">
                                                        <option>-Pilih-</option>
                                                        {{-- <option value="Direktur Utama">Direktur Utama</option>
                                                        <option value="Direktur Umum dan Keuangan">Direktur Umum dan
                                                            Keuangan
                                                        </option>
                                                        <option value="Direktur Operasional">Direktur Operasional</option>
                                                        <option value="Manager">Manager</option>
                                                        <option value="Kepala Divisi">Kepala Divisi</option>
                                                        <option value="Junior Manager">Junior Manager</option> --}}
                                                        <option value="Staff">Staff</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm-3 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="nama20">Nama 20</label>
                                                    <select class="form-select" id="nama20" name="nama20">
                                                        <option>-Pilih-</option>
                                                        @foreach ($datapegawais as $datapegawai)
                                                            <option
                                                                value="{{ $datapegawai->nama }} / {{ $datapegawai->nip }}">
                                                                {{ $datapegawai->nama }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-3 col-12">
                                                <div class="mb-1">
                                                    <label class="form-label" for="jabatan20">Jabatan
                                                        20</label>
                                                    <select class="form-select" id="jabatan20" name="jabatan20">
                                                        <option>-Pilih-</option>
                                                        {{-- <option value="Direktur Utama">Direktur Utama</option>
                                                        <option value="Direktur Umum dan Keuangan">Direktur Umum dan
                                                            Keuangan
                                                        </option>
                                                        <option value="Direktur Operasional">Direktur Operasional</option>
                                                        <option value="Manager">Manager</option>
                                                        <option value="Kepala Divisi">Kepala Divisi</option>
                                                        <option value="Junior Manager">Junior Manager</option> --}}
                                                        <option value="Staff">Staff</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="mb-2">
                                                <label class="form-label" for="untuk">Untuk</label>
                                                <input type="text" id="untuk" name="untuk" class="form-control"
                                                    placeholder="Untuk..." value="{{ $suratperdin->untuk }}">
                                                </input>
                                            </div>
                                        </div>
                                        <div class="col-3">
                                            <div class="mb-2">
                                                <label class="form-label" for="waktu_mulai">Waktu
                                                    Mulai</label>
                                                <input type="text" id="waktu_mulai" name="waktu_mulai"
                                                    class="form-control flatpickr-basic" placeholder="Dari... Sampai..." /
                                                    value="{{ $suratperdin->waktu_mulai }}">
                                                <label class="form-label" for="waktu">Waktu
                                                    Selesai</label>
                                                <input type="text" id="waktu_selesai" name="waktu_selesai"
                                                    class="form-control flatpickr-basic" placeholder="Dari... Sampai..."
                                                    value="{{ $suratperdin->waktu_selesai }}">
                                                <label class="form-label" for="jml_hari">Jumlah Hari</label>
                                                <input type="text" id="jml_hari" name="jml_hari"
                                                    class="form-control" placeholder="Jumlah Hari"
                                                    value="{{ $suratperdin->jml_hari }}">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="mb-2">
                                                <label class="form-label" for="payment-input-name">Catatan</label>
                                                <p>1. Melaksanakan Perintah ini dengan seksama dan penuh
                                                    rasa tanggung
                                                    jawab.</p>
                                                <p>2. Sebelum dan sesudah melaksanakan Perintah ini,
                                                    agar
                                                    melapor kepada
                                                    Direktur Umum & Keuangan. </p>
                                                <p>3. Pembebanan biaya ini sesuai dengan surat keputusan
                                                    direksi </p>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="mb-2">
                                                <label class="form-label" for="tertanda">Yang
                                                    Bertandatangan:</label>
                                                <select class="form-select" id="tertanda" name="tertanda">
                                                    <option value="Direktur Utama">Direktur Utama
                                                    </option>
                                                    <option value="Direktur Umum dan Keuangan">Direktur
                                                        Umum dan
                                                        Keuangan
                                                    </option>
                                                    <option value="Direktur Operasional">Direktur
                                                        Operasional</option>
                                                    <option value="Manager">Manager</option>
                                                    <option value="Manager">Kepala Divisi</option>
                                                </select>
                                                <label class="form-label" for="tertanda">Nama:</label>
                                                <select class="form-select" id="tertanda2" name="tertanda2">
                                                    <option value="Supriadi Jufri, SE., MM.">Supriadi
                                                        Jufri, SE., MM.
                                                    </option>
                                                    <option value="Aminudin, S.Tp., M.Si.">Aminudin,
                                                        S.Tp., M.Si.
                                                    </option>
                                                    <option value="Ir. Ivan Fadilla">Ir. Ivan Fadilla
                                                    </option>
                                                    <option value="Sudrajat">Sudrajat</option>
                                                    <option value="Agung Djatiwalujo">Agung Djatiwalujo
                                                    </option>
                                                </select>
                                                <label class="form-label" for="tertanda">NIP:</label>
                                                <select class="form-select" id="tertanda3" name="tertanda3">
                                                    <option value="15007201">15007201
                                                    </option>
                                                    <option value="15007902">15007902
                                                    </option>
                                                    <option value="15006603">15006603</option>
                                                </select>
                                                <hr>
                                                <!-- Basic Checkbox start -->
                                                <label for="ttd">Tanda Tangan</label>
                                                <div class="demo-inline-spacing">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="ttd"
                                                            name="ttd" value="1" />
                                                        <label class="form-check-label" for="ttd">Direktur
                                                            Utama</label>
                                                    </div>
                                                </div>
                                                <div class="demo-inline-spacing">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="ttd"
                                                            name="ttd" value="2" />
                                                        <label class="form-check-label" for="ttd">Direktur Umum &
                                                            Keuangan</label>
                                                    </div>
                                                </div>
                                                <div class="demo-inline-spacing mb-2">
                                                    <div class="form-check form-check-inline">
                                                        <input class="form-check-input" type="checkbox" id="ttd"
                                                            name="ttd" value="3" />
                                                        <label class="form-check-label" for="ttd">Direktur
                                                            Operasional</label>
                                                    </div>
                                                </div>
                                                <!-- Basic Checkbox end -->
                                            </div>
                                        </div>
                                        <div class="d-grid col-12">
                                            <button type="submit" class="btn btn-success">Simpan Perubahan</button>
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
@endsection
