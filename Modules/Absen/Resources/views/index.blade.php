@extends('absen::layouts.main')

@section('content')
    
    <!-- BEGIN: Content-->
    <div class="app-content content ">
      <div class="content-overlay"></div>
      <div class="header-navbar-shadow"></div>
      <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
        </div>
        <div class="content-body"><!-- Dashboard Ecommerce Starts -->
<section id="dashboard-ecommerce">

  <!-- Stats Vertical Card -->
  <div class="row">
    <div class="col-xl-2 col-md-4 col-sm-6">
      <div class="card text-center">
        <a href="/absen/hadir" class="link-dark">
        <div class="card-body">
          <h2 class="fw-bolder mb-2">Hadir</h2>
          <h3 class="fw-bolder mb-75 text-success">80%</h3>
          <p class="card-text">12345 Pegawai</p>
        </div>
        </a>
      </div>
    </div>
    <div class="col-xl-2 col-md-4 col-sm-6">
      <div class="card text-center">
      <a href="/absen/telat" class="link-dark">
        <div class="card-body">
          <h2 class="fw-bolder mb-2">Telat</h2>
          <h3 class="fw-bolder mb-75 text-warning">80%</h3>
          <p class="card-text">12345 Pegawai</p>
        </div>
        </a>
      </div>
    </div>
    <div class="col-xl-2 col-md-4 col-sm-6">
      <div class="card text-center">
      <a href="/absen/izin" class="link-dark">
        <div class="card-body">
          <h2 class="fw-bolder mb-2">Izin</h2>
          <h2 class="fw-bolder mb-75 text-primary">80%</h2>
          <p class="card-text">12345 Pegawai</p>
        </div>
        </a>
      </div>
    </div>
    <div class="col-xl-2 col-md-4 col-sm-6">
      <div class="card text-center">
      <a href="/absen/sakit" class="link-dark">
        <div class="card-body">
          <h2 class="fw-bolder mb-2">Sakit</h2>
          <h2 class="fw-bolder mb-75 text-info">80%</h2>
          <p class="card-text">12345 Pegawai</p>
        </div>
        </a>
      </div>
    </div>
    <div class="col-xl-2 col-md-4 col-sm-6">
      <div class="card text-center">
      <a href="/absen/cuti" class="link-dark">
        <div class="card-body">
          <h2 class="fw-bolder mb-2">Cuti</h2>
          <h2 class="fw-bolder mb-75 text-secondary">80%</h2>
          <p class="card-text">12345 Pegawai</p>
        </div>
        </a>
      </div>
    </div>
    <div class="col-xl-2 col-md-4 col-sm-6">
      <div class="card text-center">
      <a href="/absen/absent" class="link-dark">
        <div class="card-body">
          <h2 class="fw-bolder mb-2">Absent</h2>
          <h2 class="fw-bolder mb-75 text-danger">80%</h2>
          <p class="card-text">12345 Pegawai</p>
        </div>
        </a>
      </div>
    </div>
  </div>
  <!--/ Stats Vertical Card -->

      <!-- Browser States Card -->
      <div class="row">
      <div class="col-lg-4 col-md-6 col-12">
      <div class="card card-browser-states">
        <div class="card-header">
          <div>
            <h4 class="card-title">Presensi Divisi</h4>
          </div>
        </div>
        <div class="card-body">
          <div class="browser-states">
            <div class="d-flex">
              <h6 class="align-self-center mb-0">Divisi Keuangan</h6>
            </div>
            <div class="d-flex align-items-center">
              <div class="fw-bold text-body-heading me-1">54.4%</div>
              <div id="browser-state-chart-primary"></div>
            </div>
          </div>
          <div class="browser-states">
            <div class="d-flex">
              <h6 class="align-self-center mb-0">Divisi SDM</h6>
            </div>
            <div class="d-flex align-items-center">
              <div class="fw-bold text-body-heading me-1">6.1%</div>
              <div id="browser-state-chart-warning"></div>
            </div>
          </div>
          <div class="browser-states">
            <div class="d-flex">
              <h6 class="align-self-center mb-0">Divisi UMU</h6>
            </div>
            <div class="d-flex align-items-center">
              <div class="fw-bold text-body-heading me-1">14.6%</div>
              <div id="browser-state-chart-secondary"></div>
            </div>
          </div>
          <div class="browser-states">
            <div class="d-flex">
              <h6 class="align-self-center mb-0">Divisi Operasional</h6>
            </div>
            <div class="d-flex align-items-center">
              <div class="fw-bold text-body-heading me-1">4.2%</div>
              <div id="browser-state-chart-info"></div>
            </div>
          </div>
        </div>
      </div>
      </div>
    <!--/ Browser States Card -->

    <!-- Revenue Report Card -->
    <div class="col-lg-8 col-md-6 col-12">
      <div class="card card-revenue-budget">
        <div class="row mx-0">
          <div class="col-md- col-12 revenue-report-wrapper">
            <div class="d-sm-flex justify-content-between align-items-center mb-3">
              <h4 class="card-title mb-50 mb-sm-0">Grafik Kehadiran</h4>
              <div class="d-flex align-items-center">
                <div class="d-flex align-items-center me-2">
                  <span class="bullet bullet-primary font-small-3 me-50 cursor-pointer"></span>
                  <span>Hadir</span>
                </div>
                <div class="d-flex align-items-center ms-75">
                  <span class="bullet bullet-warning font-small-3 me-50 cursor-pointer"></span>
                  <span>Absent</span>
                </div>
              </div>
            </div>
            <div id="revenue-report-chart"></div>
          </div>
        </div>
      </div>
    </div>
    <!--/ Revenue Report Card -->
  </div>
</section>
<!-- Dashboard Ecommerce ends -->

        </div>
      </div>
    </div>
    <!-- END: Content-->

@endsection
