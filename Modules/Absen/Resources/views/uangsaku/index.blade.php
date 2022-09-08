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
        <h2 class="fw-bolder mb-4">Data Besaran Uang Saku</h2>
        <hr class="invoice-spacing">
           
        <!-- Basic table -->
<section id="basic-datatable">

  <div class="row">
    <div class="col-12">
      <div class="card">      
        <table class="datatables-basic table">
        <a href="/absen/uangsaku/tambah"><button class="btn btn-primary" type="button">+ Tambah Data</button></a>
          <thead>
            <tr>
              <th></th>
              <th></th>
              <th>No</th>
              <th>Jabatan</th>
              <th>Uang Saku</th>
              <th>Uang Representatif</th>
              <th>Action</th>
              
              
            </tr>
          </thead>

          <tbody>
          @if(!empty($uangsakus))
          @foreach($uangsakus as $uangsaku)

            <tr>
              <td></td>
              <td></td>

              <td>
                  <h5>{{ $loop->iteration }}</h5>
              </td>

              <td>
                <div class="d-flex align-items-center">
                  <div>
                    <div class="fw-bolder">{{ $uangsaku->jabatan->nama_jabatan }}</div>
                  </div>
                </div>
              </td>

              <td>
                <div class="d-flex align-items-center">
                  <div>
                    <div class="fw-bolder">{{ $uangsaku->uang_saku }}</div>
                  </div>
                </div>
              </td>

              <td>
                <div class="d-flex align-items-center">
                  <div>
                    <div class="fw-bolder">{{ $uangsaku->uang_representatif }}</div>
                  </div>
                </div>
              </td>

              <td>
                <div class="d-flex align-items-center">
                  <div>
                      <button class="badge bg-warning border-0"><span data-feather="edit"><a href="#">Edit</a></span></button>
                  </div>
                </div>
              </td>

              
            </tr>
          @endforeach
          @endif
          </tbody>
        </table>
      </div>
    </div>
  </div>
</section>
<!--/ Basic table -->

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
