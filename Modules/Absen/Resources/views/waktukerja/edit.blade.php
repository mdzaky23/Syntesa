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
                            <h2 class="content-header-title float-start mb-0">Edit waktu kerja</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/absen">Home</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="/absen/waktukerja">waktu kerja</a>
                                    </li>
                                    <li class="breadcrumb-item active">Edit waktu kerja
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
                                <form action="{{ url('absen/waktukerja', $waktukerja->id) }}" class="form" method="post">
                                    @csrf
                                    @method('put')

                                    <div class="row">

                                        <div class="col-12">
                                            <div class="mb-2">
                                                <label class="form-label" for="jam_masuk">Jam masuk</label>
                                                <input type="time" class="form-control" id="jam_masuk"  
                                                    placeholder="edit Jam masuk" name="jam_masuk" value="{{ $waktukerja->jam_masuk }}"/>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="mb-2">
                                                <label class="form-label" for="jam_pulang">Jam pulang</label>
                                                <input type="time" class="form-control" id="jam_pulang"  
                                                    placeholder="edit Jam pulang" name="jam_pulang" value="{{ $waktukerja->jam_pulang }}"/>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="mb-2">
                                                <label class="form-label" for="batas_masuk">Batas masuk</label>
                                                <input type="time" class="form-control" id="batas_masuk"  
                                                    placeholder="edit batas masuk" name="batas_masuk" value="{{ $waktukerja->batas_masuk }}"/>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="d-grid col-12">
                                                <button type="submit" class="btn btn-primary">Edit waktu kerja</button>
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