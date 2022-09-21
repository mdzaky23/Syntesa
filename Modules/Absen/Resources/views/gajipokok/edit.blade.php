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
                            <h2 class="content-header-title float-start mb-0">Edit Data gaji pokok</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/absen">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="/absen/gajipokok">Data gaji pokok</a>
                                    </li>
                                    <li class="breadcrumb-item active">Edit Data gaji pokok
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
          <a class="nav-link" href="/absen/uangsaku">
            <i data-feather="credit-card" class="font-medium-3 me-50"></i><span class="fw-bold">Uang Saku</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/absen/jenispegawai">
            <i data-feather="user-check" class="font-medium-3 me-50"></i><span class="fw-bold">Jenis</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="/absen/gajipokok">
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
                                <form action="{{ url('absen/gajipokok', $gajipokok->id) }}" class="form" method="post">
                                    @csrf
                                    @method('put')

                                    <div class="row">

                                    <div class="col-12 position-relative">
                                            <div class="mb-2">
                                                <label class="form-label" for="golongan_id">Golongan Pegawai</label>
                                                <select class="form-select" aria-label="Default select example" name="golongan_id" id="golongan_id" value="{{ $gajipokok->golongan_id }}">
                                                    

                                                    @foreach ( $golongans as $golongan )
                                                    @if (old('golongan_id' , $gajipokok->golongan_id) == $golongan->nama_golongan)
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
                                                <label class="form-label" for="masa_kerja">Masa Kerja</label>
                                                <input type="number" class="form-control" id="masa_kerja"  
                                                    placeholder="Input masa kerja" name="masa_kerja" value="{{ $gajipokok->masa_kerja }}"/>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="mb-2">
                                                <label class="form-label" for="gaji">Besaran Gaji</label>
                                                <input type="number" class="form-control" id="gaji"  
                                                    placeholder="Input besaran gaji" name="gaji" value="{{ $gajipokok->gaji }}"/>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="d-grid col-12">
                                                <button type="submit" class="btn btn-primary">Edit Golongan</button>
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