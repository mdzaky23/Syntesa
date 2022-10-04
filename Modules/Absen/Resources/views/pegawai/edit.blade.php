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
                            <h2 class="content-header-title float-start mb-0">Edit Data Pegawai</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/absen">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="/absen/pegawai">Data Pegawai</a>
                                    </li>
                                    <li class="breadcrumb-item active">Edit Data Pegawai
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
                                <form action="{{ url('absen/pegawai', $pegawai->id) }}" class="form" method="post">
                                    @csrf
                                    @method('put')

                                    <div class="row">

                                        <div class="col-12">
                                            <div class="mb-2">
                                                <label class="form-label" for="nip">NIP</label>
                                                <input type="number" class="form-control" id="nip"  
                                                    placeholder="Input NIP Pegawai" name="nip" value="{{ $pegawai->nip }}"/>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="mb-2">
                                                <label class="form-label" for="nama_pegawai">Nama</label>
                                                <input type="text" class="form-control" id="nama_pegawai" 
                                                placeholder="Input Nama Pegawai" name="nama_pegawai" value="{{ $pegawai->nama_pegawai }}"/>
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
                                                    value=""
                                                >{{ $pegawai->alamat }}</textarea>
                                            </div>
                                        </div>

                                        <!-- Tooltip validations start -->
                                        <section class="tooltip-validations" id="tooltip-validation">
                                            <div class="col-12">
                                                <div class="card">
                                                    <div class="row g-1">
                                                        <div class="col-md-6 col-12 position-relative">
                                                            <label class="form-label" for="tp_lahir">Tempat Lahir</label>
                                                            <input type="text" id="tp_lahir" name="tp_lahir" class="form-control" 
                                                            placeholder="Input Tempat lahir Pegawai" value="{{ $pegawai->tp_lahir }}" />
                                                        <div class="valid-tooltip">Looks good!</div>
                                                    </div>

                                                    <div class="col-md-6 col-12 position-relative">
                                                        <label class="form-label" for="tgl_lahir">Tanggal Lahir</label>
                                                        <input type="date" class="form-control" placeholder="YYYY-MM-DD" 
                                                            id="tgl_lahir" name="tgl_lahir" value="{{ $pegawai->tgl_lahir }}"/>
                                                        <div class="valid-tooltip">Looks good!</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <!-- Tooltip validations end -->

                                        <div class="col-12 position-relative">
                                            <div class="mb-2">
                                                <label class="form-label" for="pendidikan_id">Pendidikan</label>
                                                <select class="form-select" aria-label="Default select example" name="pendidikan_id" id="pendidikan_id" value="{{ $pegawai->pendidikan_id }}">
                                                    
                                                
                                                @foreach ( $pendidikans as $pendidikan )
                                                    @if (old('pendidikan_id' , $pegawai->pendidikan_id) == $pendidikan->nama_pendidikan)
                                                        <option value="{{ $pendidikan->id }}" selected>{{ $pendidikan->nama_pendidikan }}</option>
                                                    @else
                                                    <option value="{{ $pendidikan->id }}">{{ $pendidikan->nama_pendidikan }}</option>
                                                    @endif
                                                @endforeach

                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-12 position-relative">
                                            <div class="mb-2">
                                                <label class="form-label" for="jk">Jenis Kelamin</label>
                                                <select class="form-select" aria-label="Default select example" name="jk" id="jk" value="{{ $pegawai->jk }}">
                                                    <option selected>{{ $pegawai->jk }}</option>
                                                    <option value="Laki-laki">Laki-laki</option>
                                                    <option value="Perempuan">Perempuan</option> 
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="mb-2">
                                                <label class="form-label" for="tgl_masuk">Tanggal Masuk</label>
                                                <input type="date" class="form-control" placeholder="YYYY-MM-DD" id="tgl_masuk" name="tgl_masuk" value="{{ $pegawai->tgl_masuk }}" />
                                            </div>
                                        </div>

                                        <div class="col-12 position-relative">
                                            <div class="mb-2">
                                                <label class="form-label" for="jenispegawai_id">Jenis Pegawai</label>
                                                <select class="form-select" aria-label="Default select example" name="jenispegawai_id" id="jenispegawai_id" value="{{ $pegawai->jenispegawai_id}}">
                                                    
                                                
                                                @foreach ( $jenispegawais as $jenispegawai )
                                                    @if (old('jenispegawai_id' , $pegawai->jenispegawai_id) == $jenispegawai->nama_jenispegawai)
                                                        <option value="{{ $jenispegawai->id }}" selected>{{ $jenispegawai->nama_jenispegawai }}</option>
                                                    @else
                                                    <option value="{{ $jenispegawai->id }}">{{ $jenispegawai->nama_jenispegawai }}</option>
                                                    @endif
                                                @endforeach

                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-12 position-relative">
                                            <div class="mb-2">
                                                <label class="form-label" for="jabatan_id">Jabatan Pegawai</label>
                                                <select class="form-select" aria-label="Default select example" name="jabatan_id" id="jabatan_id" value="{{ $pegawai->jabatan_id }}">
                                                    
                                                
                                                @foreach ( $jabatans as $jabatan )
                                                    @if (old('jabatan_id' , $pegawai->jabatan_id) == $jabatan->nama_jabatan)
                                                        <option value="{{ $jabatan->id }}" selected>{{ $jabatan->nama_jabatan }}</option>
                                                    @else
                                                    <option value="{{ $jabatan->id }}">{{ $jabatan->nama_jabatan }}</option>
                                                    @endif
                                                @endforeach

                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-12 position-relative">
                                            <div class="mb-2">
                                                <label class="form-label" for="divisi_id">Divisi Pegawai</label>
                                                <select class="form-select" aria-label="Default select example" name="divisi_id" id="divisi_id" value="{{ $pegawai->divisi_id }}">
                                                    

                                                @foreach ( $divisis as $divisi )
                                                    @if (old('divisi_id' , $pegawai->divisi_id) == $divisi->nama_divisi)
                                                        <option value="{{ $divisi->id }}" selected>{{ $divisi->nama_divisi }}</option>
                                                    @else
                                                    <option value="{{ $divisi->id }}">{{ $divisi->nama_divisi }}</option>
                                                    @endif
                                                @endforeach

                                                </select>
                                            </div>
                                        </div>
                                        
                                        <div class="col-12 position-relative">
                                            <div class="mb-2">
                                                <label class="form-label" for="golongan_id">Golongan Pegawai</label>
                                                <select class="form-select" aria-label="Default select example" name="golongan_id" id="golongan_id" value="{{ $pegawai->golongan_id }}">
                                                    
                                                @foreach ( $golongans as $golongan )
                                                    @if (old('golongan_id' , $pegawai->golongan_id) == $golongan->nama_golongan)
                                                        <option value="{{ $golongan->id }}" selected>{{ $golongan->nama_golongan }}</option>
                                                    @else
                                                    <option value="{{ $golongan->id }}">{{ $golongan->nama_golongan }}</option>
                                                    @endif
                                                @endforeach

                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="mb-2">
                                                <label class="form-label" for="no_hp">No Telp</label>
                                                <input type="number" id="no_hp" name="no_hp"class="form-control"
                                                    placeholder="Input No Telp Pegawai" value="{{ $pegawai->no_hp }}" />
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="mb-2">
                                                <label class="form-label" for="no_rek">No Rekening</label>
                                                <input type="number" id="no_rek" name="no_rek"class="form-control"
                                                    placeholder="Input No rekening Pegawai" value="{{ $pegawai->no_rek }}" />
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="d-grid col-12">
                                                <button type="submit" class="btn btn-primary">Edit Pegawai</button>
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