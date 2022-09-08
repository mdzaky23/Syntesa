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

          <div class="d-grid gap-2 d-md-flex col-lg-12 col-12"></div>
          
        <div class="card-body m-1 text-center justify-content-end"  >
          <h2 class="fw-bolder mb-5">Persentasi Cuti</h2>
          <h1 class="fw-bolder mb-75 text-secondary">80%</h1>
          <p class="card-text">Jumlah Pegawai : 12345</p>
        </div>

          <div class="d-grid gap-2 d-md-flex justify-content-md-end mb-3">

            <div class="btn-group" role="group">
              <button id="btnGroupDrop1" type="button" class="btn btn-outline-primary dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                Export
              </button>
              <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                <li><a class="dropdown-item" href="#">PDF</a></li>
                <li><a class="dropdown-item" href="#">DOC</a></li>
              </ul>
            </div>
          </div>

      <!-- akhir awal kertas -->

        
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
                    <option value="10">10</option>
                </select>
                
              </div>

              <label class="m-1">Entrities</label>
              <div class="col-lg-7 d-flex align-items-center m-1" ></div>

              <div class="d-flex align-content-center justify-content-end">
                <div class="input-group input-group-merge">
                  <span class="input-group-text"><i data-feather="search" class="text-muted"></i></span>
                  <input
                    type="text"
                    class="form-control"
                    id="todo-search"
                    placeholder="Cari Pegawai"
                    aria-label="Search..."
                    aria-describedby="todo-search"
                  />
                </div>
              </div>
            </div>
          <!-- Todo search ends -->
      </div> 

      <div class="table-responsive">  
        <table class="table">
          <thead>
            <tr>
              <th>Hari Tanggal</th>
              <th>Nama Pegawai</th>
              <th>Jam masuk</th>
              <th>Keterangan</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                  <h5>Senin, 1/08/2022</h5>
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
                  <span>08:00:00</span>
                </div>
              </td>
              <td class="text-nowrap">
                <div class="d-flex flex-column">
                  <span class="fw-bolder mb-25">Hadir</span>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                  <h5>Senin, 1/08/2022</h5>
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
                  <span>08:00:00</span>
                </div>
              </td>
              <td class="text-nowrap">
                <div class="d-flex flex-column">
                  <span class="fw-bolder mb-25">Hadir</span>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <h5>Senin, 1/08/2022</h5>
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
                  <span>08:00:00</span>
                </div>
              </td>
              <td class="text-nowrap">
                <div class="d-flex flex-column">
                  <span class="fw-bolder mb-25">Hadir</span>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                  <h5>Senin, 1/08/2022</h5>
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
                  <span>08:00:00</span>
                </div>
              </td>
              <td class="text-nowrap">
                <div class="d-flex flex-column">
                  <span class="fw-bolder mb-25">Hadir</span>
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
