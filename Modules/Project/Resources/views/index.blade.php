@extends('project::layouts.main')

@section('content')

    <body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click"
        data-menu="vertical-menu-modern" data-col="">
        <div class="app-content content ">
            <div class="content-overlay"></div>
            <div class="header-navbar-shadow"></div>
            <div class="content-wrapper container-xxl p-0">
                <div class="content-header row">
                </div>
                <div class="content-body">
                </div>
                <div class="row match-height">
                    <div class="col-lg-2 col-sm-6 col-12">
                        <div class="card">
                            <div class="card-header flex-column align-items-start pb-0">
                                <div class="avatar bg-light-warning p-50 m-0">
                                    <div class="avatar-content">
                                        <i data-feather="activity" class="font-medium-5"></i>
                                    </div>
                                </div>
                                <h2 class="fw-bolder mt-1">34</h2>
                                <a class="card-text mb-2" href="/project/proses">Project Di Proses</a>
                            </div>
                        </div>
                    </div>
                    <!-- Pengajuan diproses ends -->

                    <!-- kekurangan start -->
                    <div class="col-lg-2 col-sm-6 col-12">
                        <div class="card ">
                            <div class="card-header flex-column align-items-start pb-0 ">
                                <div class="avatar bg-light-danger p-50 m-0">
                                    <div class="avatar-content">
                                        <i data-feather="x-circle" class="font-medium-5"></i>
                                    </div>
                                </div>
                                <h2 class="fw-bolder mt-1">12</h2>
                                <a class="card-text mb-2" href="/project/tolak">Project Di Tolak</a>
                            </div>
                        </div>
                    </div>
                    <!-- kekuranganends -->

                    <!-- Pengajuan ditolak starts -->
                    <div class="col-lg-2 col-sm-6 col-12">
                        <div class="card">
                            <div class="card-header flex-column align-items-start pb-0">
                                <div class="avatar bg-light-danger p-50 m-0">
                                    <div class="avatar-content">

                                        <i data-feather="check-circle" class="font-medium-5"></i>
                                    </div>
                                </div>
                                <h2 class="fw-bolder mt-1">22</h2>
                                <a class="card-text mb-2" href=/project/selesai>Project Selesai</a>
                            </div>
                        </div>
                    </div>
                    <!-- Pengajuan ditolak ends -->

                    <!-- Pengajuan Selesai starts -->
                    <div class="col-lg-2 col-sm-6 col-12">
                        <div class="card">
                            <div class="card-header flex-column align-items-start pb-0">
                                <div class="avatar bg-light-success p-50 m-0">
                                    <div class="avatar-content">
                                        <i data-feather="alert-triangle" class="font-medium-5"></i>
                                    </div>
                                </div>
                                <h2 class="fw-bolder mt-1">78</h2>
                                <a class="card-text mb-2" href="project/uncomplete">Project Uncomplete</a>
                            </div>
                        </div>
                    </div>
                    <!-- Pengajuan Selesai ends -->

                    <!-- Total Pengajuan starts -->
                    <div class="col-lg-4 col-sm-6 col-12">
                        <div class="card">
                            <div class="card-header flex-column align-items-start pb-0">
                                <div class="avatar bg-light-primary p-50 m-0">
                                    <div class="avatar-content">
                                        <i data-feather="circle" class="font-medium-5"></i>
                                    </div>
                                </div>
                                <h2 class="fw-bolder mt-1">250</h2>
                                <a class="card-text mb-2" href="/project/total" style="text-align-center">Total Project</a>
                            </div>
                        </div>
                    </div>
                    <!-- Total Pengajuan ends -->
                    <div class="col-12">
                        <div class="card">
                            <div
                                class="
                          card-header
                          d-flex
                          flex-sm-row flex-column
                          justify-content-md-between
                          align-items-start
                          justify-content-start
                        ">
                                <div>
                                    <h4 class="card-title">Statistik</h4>
                                    
                                </div>
                                <div class="d-flex align-items-center">
                                    <i class="font-medium-2" data-feather="calendar"></i>
                                    <input type="text"
                                        class="form-control flat-picker bg-transparent border-0 shadow-none"
                                        placeholder="YYYY-MM-DD" />
                                </div>
                            </div>
                            <div class="card-body">
                                <div id="line-area-chart"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END: Content-->
    </body>
@endsection
