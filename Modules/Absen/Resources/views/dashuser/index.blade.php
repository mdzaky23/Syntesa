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
  <div class="row match-height">


    <!-- Statistics Card -->
    <div class="col-xl-12 col-md-6 col-12">
      <div class="card card-statistics">
        <div class="card-header mb-0">
          <h4 class="card-title mb-0">Selamat Datang 🎉 <br> user 1</h4>
        </div>
        
        <div class="card-body statistics-body">
          <div class="row">
            <div class="col-xl-4 col-sm-6 col-12 mb-2 mb-xl-0">
              <div class="d-flex flex-row">
              <div class="avatar bg-light-info me-2">
                  <div class="avatar-content">
                    <i data-feather="user" class="avatar-icon"></i>
                  </div>
                </div>
                <div class="my-auto">
                  <h4 class="fw-bolder mb-0">Profil</h4>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-sm-6 col-12 mb-2 mb-xl-0">
              <div class="d-flex flex-row">
                <div class="avatar bg-light-primary me-2">
                  <div class="avatar-content">
                    <i data-feather="trending-up" class="avatar-icon"></i>
                  </div>
                </div>
                <div class="my-auto">
                  <h4 class="fw-bolder mb-0">Riwayat</h4>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-sm-6 col-12 mb-2 mb-sm-0">
              <div class="d-flex flex-row">
                <div class="avatar bg-light-danger me-2">
                  <div class="avatar-content">
                    <i data-feather="box" class="avatar-icon"></i>
                  </div>
                </div>
                <div class="my-auto">
                  <h4 class="fw-bolder mb-0">Laporan</h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--/ Statistics Card -->
  </div>

  <!-- Company Table Card -->

<div class="col-lg-12 col-12">
  <div class="card card-company-table">
    <div class="card-body p-0">
      <div class="card-body">
        <h4 class="mb-1">1 Minggu Terakhir</h4>

          <!-- Todo search ends -->

      <div class="table-responsive">  
        <table class="table">
          <thead>
            <tr>
              <th>Tanggal</th>
              <th>Jam Masuk</th>
              <th>Jam Pulang</th>
              <th>Keterangan</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <div class="d-flex align-items-center">
                  <span>01/08/2022</span>
                </div>
              </td>
              <td>
                <div class="d-flex align-items-center">
                  <span class="fw-bolder me-1">08:00:00</span>
                </div>
              </td>
              <td>
                <div class="d-flex align-items-center">
                  <span class="fw-bolder me-1">17:00:00</span>
                </div>
              </td>
              <td>
                <div class="d-flex align-items-center">
                  <span class="fw-bolder me-1">Hadir</span>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<!--/ Company Table Card -->

@endsection