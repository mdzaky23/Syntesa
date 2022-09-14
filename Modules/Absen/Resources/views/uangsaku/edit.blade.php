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
                            <h2 class="content-header-title float-start mb-0">Edit Data uang saku</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/absen">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="/absen/uangsaku">Data uang saku</a>
                                    </li>
                                    <li class="breadcrumb-item active">Edit Data uang saku
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
                                <form action="{{ url('absen/uangsaku', $uangsaku->id) }}" class="form" method="post">
                                    @csrf
                                    @method('put')

                                    <div class="row">

                                        <div class="col-12">
                                            <div class="mb-2">
                                                <label class="form-label" for="jabatan_id">Nama Jabatan</label>
                                                <select class="form-select" aria-label="Default select example" name="jabatan_id" id="jabatan_id" value="{{ $uangsaku->jabatan_id }}">
                                                    <option selected>{{ $uangsaku->jabatan_id }}</option>
                                                    <option value="1">Direktur Utama</option>
                                                    <option value="2">Direktur</option>
                                                    <option value="4">Manager</option>
                                                    <option value="5">Kepala Divisi</option>
                                                    <option value="6">Junior Manager</option>
                                                    <option value="7">Staff</option>
                                                    <option value="8">Sekretariat Perusahaan</option>
                                                    <option value="9">Staff Pengembangan Bisnis</option> 
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="mb-2">
                                                <label class="form-label" for="uang_saku">uang saku</label>
                                                <input type="number" class="form-control" id="uang_saku"  
                                                    placeholder="Input besaran uang saku" name="uang_saku" value="{{ $uangsaku->uang_saku }}"/>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="mb-2">
                                                <label class="form-label" for="uang_representatif">uang representatif</label>
                                                <input type="number" class="form-control" id="uang_representatif"  
                                                    placeholder="Input besaran uang representatif" name="uang_representatif" value="{{ $uangsaku->uang_representatif }}"/>
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