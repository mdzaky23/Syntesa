@extends('admin::layouts.main')

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
                            <h2 class="content-header-title float-start mb-0">Pengaturan Alur Pengajuan</h2>
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
                                <form action="javascript:void(0);" class="form">
                                    <div class="row">

                                        <section id="form-repeater">
                                            <div class="row">
                                                <div class="mb-1 col-md-12">
                                                    <div class="repeater-default">
                                                        <div data-repeater-list="slik">


                                                            <div class="row d-flex align-items-end">
                                                                <div class="col-10 mb-1">
                                                                    <label class="form-label" for="basicSelect">Jabatan
                                                                        Pengajuan</label>
                                                                    <select class="form-select" id="basicSelect">
                                                                        <option>Marcella</option>
                                                                        <option>Stevany</option>
                                                                    </select>
                                                                </div>
                                                                <div data-repeater-item>
                                                                    <div class="col-10 mb-1">
                                                                        <label class="form-label" for="basicSelect">Penerima
                                                                            Pengajuan</label>
                                                                        <select class="form-select" id="basicSelect">
                                                                            <option>Marcella</option>
                                                                            <option>Stevany</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="col-xl-1 col-md-6 col-12">
                                                                        <div class="mb-1">
                                                                            <a data-repeater-create
                                                                                class="btn btn-icon btn-primary"
                                                                                type="button">
                                                                                <i data-feather="plus" class="me-25"></i>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xl-1 col-md-6 col-12">
                                                                        <div class="mb-1">
                                                                            <button
                                                                                class="btn btn-outline-danger text-nowrap px-1"
                                                                                data-repeater-delete type="button">
                                                                                <i data-feather="x" class="me-25"></i>
                                                                                {{-- <span>Delete</span> --}}
                                                                            </button>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                        </section>
                                        <!-- full Editor start -->

                                        <!-- pendapatan -->
                                        <div class="card-footer">
                                            <button type="submit" name="submit" class="btn btn-success">Simpan &
                                                Ajukan</button>
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

    <div class="content-body">

        <!-- Company Table Card -->
        <div class="col-lg-12 col-12">
            <div class="card card-company-table">
                <div class="card-body p-0">
                    <div class="card-body">
                        <h2 class="fw-bolder mb-75">Data Project</h2>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end mb-1">
                            <button type="button" class="btn btn-outline-primary">Export</button>
                        </div>

                        <!-- Todo search starts -->
                        <div class="app-fixed-search d-flex align-items-center mx-0">
                            <div class="sidebar-toggle d-block d-lg-none ms-1">
                                <i data-feather="menu" class="font-medium-5"></i>
                            </div>

                            <div class="col-lg-1 d-flex align-items-center m-1">
                                <label>Show</label>
                                <select class="form-select" name="" id="">
                                    <option value="10">10</option>
                                    <option value="10">10</option>
                                </select>
                            </div>

                            <div class="d-flex align-content-center justify-content-end">
                                <div class="input-group input-group-merge">
                                    <span class="input-group-text"><i data-feather="search" class="text-muted"></i></span>
                                    <input type="text" class="form-control" id="todo-search" placeholder="Search task"
                                        aria-label="Search..." aria-describedby="todo-search" />
                                </div>
                            </div>
                        </div>
                        <!-- Todo search ends -->
                    </div>


                    <div class="table-responsive">




                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>No. Project</th>
                                    <th>Pemegang Project</th>
                                    <th>Keterangan</th>
                                    <th>Tanggal Project</th>
                                    <th>Biaya</th>
                                    <th>Pendapatan</th>
                                    <th>Laba</th>
                                    <th>Presentase</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <h5>1</h5>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div>
                                                <div class="fw-bolder">Nama 1</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="avatar bg-light-primary me-1">
                                                <div class="avatar-content">
                                                    <i data-feather="monitor" class="font-medium-3"></i>
                                                </div>
                                            </div>
                                            <span>Technology</span>
                                        </div>
                                    </td>
                                    <td class="text-nowrap">
                                        <div class="d-flex flex-column">
                                            <span class="fw-bolder mb-25">23.4k</span>
                                            <span class="font-small-2 text-muted">in 24 hours</span>
                                        </div>
                                    </td>
                                    <td>$891.2</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <span class="fw-bolder me-1">68%</span>
                                            <i data-feather="trending-down" class="text-danger font-medium-1"></i>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h5>2</h5>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div>
                                                <div class="fw-bolder">Nama 2</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="avatar bg-light-success me-1">
                                                <div class="avatar-content">
                                                    <i data-feather="coffee" class="font-medium-3"></i>
                                                </div>
                                            </div>
                                            <span>Grocery</span>
                                        </div>
                                    </td>
                                    <td class="text-nowrap">
                                        <div class="d-flex flex-column">
                                            <span class="fw-bolder mb-25">78k</span>
                                            <span class="font-small-2 text-muted">in 2 days</span>
                                        </div>
                                    </td>
                                    <td>$668.51</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <span class="fw-bolder me-1">97%</span>
                                            <i data-feather="trending-up" class="text-success font-medium-1"></i>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h5>3</h5>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div>
                                                <div class="fw-bolder">Nama 3</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="avatar bg-light-warning me-1">
                                                <div class="avatar-content">
                                                    <i data-feather="watch" class="font-medium-3"></i>
                                                </div>
                                            </div>
                                            <span>Fashion</span>
                                        </div>
                                    </td>
                                    <td class="text-nowrap">
                                        <div class="d-flex flex-column">
                                            <span class="fw-bolder mb-25">162</span>
                                            <span class="font-small-2 text-muted">in 5 days</span>
                                        </div>
                                    </td>
                                    <td>$522.29</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <span class="fw-bolder me-1">62%</span>
                                            <i data-feather="trending-up" class="text-success font-medium-1"></i>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h5>4</h5>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div>
                                                <div class="fw-bolder">Nama 4</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="avatar bg-light-primary me-1">
                                                <div class="avatar-content">
                                                    <i data-feather="monitor" class="font-medium-3"></i>
                                                </div>
                                            </div>
                                            <span>Technology</span>
                                        </div>
                                    </td>
                                    <td class="text-nowrap">
                                        <div class="d-flex flex-column">
                                            <span class="fw-bolder mb-25">214</span>
                                            <span class="font-small-2 text-muted">in 24 hours</span>
                                        </div>
                                    </td>
                                    <td>$291.01</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <span class="fw-bolder me-1">88%</span>
                                            <i data-feather="trending-up" class="text-success font-medium-1"></i>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h5>5</h5>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div>
                                                <div class="fw-bolder">Nama 5</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="avatar bg-light-success me-1">
                                                <div class="avatar-content">
                                                    <i data-feather="coffee" class="font-medium-3"></i>
                                                </div>
                                            </div>
                                            <span>Grocery</span>
                                        </div>
                                    </td>
                                    <td class="text-nowrap">
                                        <div class="d-flex flex-column">
                                            <span class="fw-bolder mb-25">208</span>
                                            <span class="font-small-2 text-muted">in 1 week</span>
                                        </div>
                                    </td>
                                    <td>$783.93</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <span class="fw-bolder me-1">16%</span>
                                            <i data-feather="trending-down" class="text-danger font-medium-1"></i>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h5>6</h5>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div>
                                                <div class="fw-bolder">Nama 6</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="avatar bg-light-warning me-1">
                                                <div class="avatar-content">
                                                    <i data-feather="watch" class="font-medium-3"></i>
                                                </div>
                                            </div>
                                            <span>Fashion</span>
                                        </div>
                                    </td>
                                    <td class="text-nowrap">
                                        <div class="d-flex flex-column">
                                            <span class="fw-bolder mb-25">990</span>
                                            <span class="font-small-2 text-muted">in 1 month</span>
                                        </div>
                                    </td>
                                    <td>$780.05</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <span class="fw-bolder me-1">78%</span>
                                            <i data-feather="trending-up" class="text-success font-medium-1"></i>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h5>7</h5>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div>
                                                <div class="fw-bolder">Nama 7</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="avatar bg-light-warning me-1">
                                                <div class="avatar-content">
                                                    <i data-feather="watch" class="font-medium-3"></i>
                                                </div>
                                            </div>
                                            <span>Fashion</span>
                                        </div>
                                    </td>
                                    <td class="text-nowrap">
                                        <div class="d-flex flex-column">
                                            <span class="fw-bolder mb-25">12.9k</span>
                                            <span class="font-small-2 text-muted">in 12 hours</span>
                                        </div>
                                    </td>
                                    <td>$531.49</td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <span class="fw-bolder me-1">42%</span>
                                            <i data-feather="trending-up" class="text-success font-medium-1"></i>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end mx-1 ">
                            <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ Company Table Card -->


        <!-- list and filter end -->
        </section>
        <!-- users list ends -->

    </div>
    <!-- END: Content-->
@endsection
