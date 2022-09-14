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
        <div class="card-body">
          <h2 class="fw-bolder mb-75">Laporan</h2>
          <div class="d-grid gap-2 d-md-flex justify-content-md-end mb-3">
          </div>
       <!-- filter tanggal -->
       <h4 class="mb-3">Filter Laporan</h4>
        <div class="col-10">
          <div class="mb-2">
            <label class="form-label" for="payment-input-name">NIP</label>
            <input type="text" id="payment-input-name" class="form-control" placeholder="Masukan Nomor Induk Pegawai" />
          </div>
        </div>
        <div class="col-10">
          <div class="mb-2">
            <label class="form-label" for="payment-input-name">Nama Pegawai</label>
            <input type="text" id="payment-input-name" class="form-control" placeholder="Masukan Nama Pegawai" />
          </div>
        </div>
        <div class="col-10">
          <div class="mb-2">
            <label class="form-label" for="payment-input-name">Divisi</label>
            <input type="text" id="payment-input-name" class="form-control" placeholder="Masukan Divisi" />
          </div>
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

      <div class="table-responsive">




        <table class="table">
          <thead>
            <tr>
              <th>NIP</th>
              <th>Nama Pegawai</th>
              <th>Hadir</th>
              <th>Telat</th>
              <th>Izin</th>
              <th>Sakit</th>
              <th>Cuti</th>
              <th>Absent</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                  <h5>119300825</h5>
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
                  <span>5</span>
                </div>
              </td>
              <td class="text-nowrap">
                <div class="d-flex flex-column">
                  <span class="fw-bolder mb-25">4</span>
                </div>
              </td>
              <td>3</td>
              <td>
                <div class="d-flex align-items-center">
                  <span class="fw-bolder me-1">2</span>
                </div>
              </td>
              <td>
                <div class="d-flex align-items-center">
                  <span class="fw-bolder me-1">1</span>
                </div>
              </td>
              <td>
                <div class="d-flex align-items-center">
                  <span class="fw-bolder me-1">0</span>
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
                  <span>5</span>
                </div>
              </td>
              <td class="text-nowrap">
                <div class="d-flex flex-column">
                  <span class="fw-bolder mb-25">4</span>
                </div>
              </td>
              <td>3</td>
              <td>
                <div class="d-flex align-items-center">
                  <span class="fw-bolder me-1">2</span>
                </div>
              </td>
              <td>
                <div class="d-flex align-items-center">
                  <span class="fw-bolder me-1">1</span>
                </div>
              </td>
              <td>
                <div class="d-flex align-items-center">
                  <span class="fw-bolder me-1">0</span>
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
                  <span>5</span>
                </div>
              </td>
              <td class="text-nowrap">
                <div class="d-flex flex-column">
                  <span class="fw-bolder mb-25">4</span>
                </div>
              </td>
              <td>3</td>
              <td>
                <div class="d-flex align-items-center">
                  <span class="fw-bolder me-1">2</span>
                </div>
              </td>
              <td>
                <div class="d-flex align-items-center">
                  <span class="fw-bolder me-1">1</span>
                </div>
              </td>
              <td>
                <div class="d-flex align-items-center">
                  <span class="fw-bolder me-1">0</span>
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
                  <span>5</span>
                </div>
              </td>
              <td class="text-nowrap">
                <div class="d-flex flex-column">
                  <span class="fw-bolder mb-25">4</span>
                </div>
              </td>
              <td>3</td>
              <td>
                <div class="d-flex align-items-center">
                  <span class="fw-bolder me-1">2</span>
                </div>
              </td>
              <td>
                <div class="d-flex align-items-center">
                  <span class="fw-bolder me-1">1</span>
                </div>
              </td>
              <td>
                <div class="d-flex align-items-center">
                  <span class="fw-bolder me-1">0</span>
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
      </div>
    </div>
    <!-- END: Content-->


@endsection
