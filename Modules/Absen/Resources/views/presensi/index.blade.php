@extends('absen::layouts.main')

@section('content')

    <!-- BEGIN: Content-->
    <div class="app-content content ">
      <div class="content-overlay"></div>
      <div class="header-navbar-shadow"></div>
      <div class="content-wrapper container-xxl p-0">
        <div class="content-header row">
        </div>
        <div class="content-body">

<!-- Company Table Card -->

<div class="col-lg-12 col-12">
  <div class="card card-company-table">
    <div class="card-body p-0">

      <!-- awal kertas -->
      <div class="card-body">
          <h2 class="fw-bolder mb-75">Data Presensi</h2>
          <div class="d-grid gap-2 d-md-flex justify-content-md-end mb-3">
          </div>
      <!-- akhir awal kertas -->

      <!-- filter tanggal -->
        <h4>Filter data</h4>
      <div class="d-grid gap-2 d-md-flex justify-content-md-left mb-2">
        <label class="m-1 text-center">Dari tanggal</label>
        <input type="date" class="form-control date-mask col-sm-2" placeholder="YYYY-MM-DD" id="date" />
        <label class="m-1 text-center">Sampai tanggal</label>
        <input type="date" class="form-control date-mask col-sm-2" placeholder="YYYY-MM-DD" id="date" />
        <label class="m-1 text-center">Divisi</label>
        <select class="select2 form-select col-sm-2" id="select2-disabled-result">
                <option value="1">SDM</option>
                <option value="2" disabled>Keuangan</option>
                <option value="3">UMU</option>
                <option value="4" disabled>Operational</option>
              </select>
      </div>
      <button class="btn btn-primary mb-3" type="button">Cari Data</button>
      <!-- akhir filter tanggal -->
        
      <hr class="invoice-spacing">
          <!-- Todo search starts -->
          <div class="app-fixed-search d-flex align-items-center mx-0">
              <div class="sidebar-toggle d-block d-lg-none ms-1">
                <i data-feather="menu" class="font-medium-5"></i>
              </div>

              <div class="col-xs-4 d-flex align-items-center m-1" >
                <label>Show</label>

                <div class="ml-50 d-inline-block">&nbsp;</div>
                
                <select class="form-select col-lg-8" name="" id="">

                    <option value="10">10</option>
                    <option value="10">20</option>
                </select>
                
              </div>

              <label class="m-1">Entrities</label>
              <div class="col-lg-8 d-flex align-items-center m-1" ></div>

              <button id="btnGroupDrop1" type="button" class="btn btn-outline-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                Export
              </button>
            </div>
          <!-- Todo search ends -->
      </div> 

      <div class="table-responsive">  
        <table class="table">
          <thead>
            <tr>
              <th>NIP</th>
              <th>Nama Pegawai</th>
              <th>Tanggal Absen</th>
              <th>Divisi</th>
              <th>Jabatan</th>
              <th>Jam Awal</th>
              <th>Jam Akhir</th>
              <th>Keterangan</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                  <h5>19300825</h5>
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
                  <span>01/08/2022</span>
                </div>
              </td>
              <td class="text-nowrap">
                <div class="d-flex flex-column">
                  <span class="fw-bolder mb-25">SDM</span>
                </div>
              </td>
              <td>Staff SDM</td>
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
            </tr>
            <tr>
              <td>
                  <h5>19300826</h5>
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
                  <span>01/08/2022</span>
                </div>
              </td>
              <td class="text-nowrap">
                <div class="d-flex flex-column">
                  <span class="fw-bolder mb-25">Keuangan</span>
                </div>
              </td>
              <td>Staff Keuangan</td>
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
            </tr>
            <tr>
              <td>
                <h5>19300827</h5>
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
                  <span>01/08/2022</span>
                </div>
              </td>
              <td class="text-nowrap">
                <div class="d-flex flex-column">
                  <span class="fw-bolder mb-25">UMU</span>
                </div>
              </td>
              <td>Staff UMU</td>
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
            </tr>
            <tr>
              <td>
                  <h5>19300828</h5>
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
                  <span>01/08/2022</span>
                </div>
              </td>
              <td class="text-nowrap">
                <div class="d-flex flex-column">
                  <span class="fw-bolder mb-25">Operational</span>
                </div>
              </td>
              <td>Staff Operational</td>
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
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<!--/ Company Table Card -->


  <!-- list and filter end -->
</section>
<!-- users list ends -->

        </div>
      </div>
    </div>
    <!-- END: Content-->

@endsection
