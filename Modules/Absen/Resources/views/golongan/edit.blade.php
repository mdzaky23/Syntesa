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
                            <h2 class="content-header-title float-start mb-0">Edit Data golongan</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/absen">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="/absen/golongan">Data golongan</a>
                                    </li>
                                    <li class="breadcrumb-item active">Edit Data golongan
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
                                <form action="{{ url('absen/golongan', $golongan->id) }}" class="form" method="post">
                                    @csrf
                                    @method('put')

                                    <div class="row">

                                        <div class="col-12 position-relative">
                                            <div class="mb-2">
                                                <label class="form-label" for="pendidikan_id">Pendidikan</label>
                                                <select class="form-select" aria-label="Default select example" name="pendidikan_id" id="pendidikan_id" value="{{ $golongan->pendidikan_id }}">
                                                    <option selected>{{ $golongan->pendidikan_id }}</option>
                                                    <option value="1">SLTA</option>
                                                    <option value="2">D3</option>
                                                    <option value="3">S1</option> 
                                                    <option value="4">S2</option>  
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="mb-2">
                                                <label class="form-label" for="masa_kerja">Masa Kerja</label>
                                                <input type="number" class="form-control" id="masa_kerja"  
                                                    placeholder="Input masa kerja" name="masa_kerja" value="{{ $golongan->masa_kerja }}"/>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="mb-2">
                                                <label class="form-label" for="nama_golongan">Nama Golongan</label>
                                                <input type="text" class="form-control" id="nama_golongan"  
                                                    placeholder="Input nama golongan" name="nama_golongan" value="{{ $golongan->nama_golongan }}"/>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="mb-2">
                                                <label class="form-label" for="gaji">Gaji</label>
                                                <input type="text" class="form-control" id="gaji"  
                                                    placeholder="Input besaran gaji" name="gaji" value="{{ $golongan->gaji }}"/>
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