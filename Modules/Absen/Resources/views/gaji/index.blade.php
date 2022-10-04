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
        
        <h3 class="fw-bolder mb-2">Data Gaji Pegawai</h3>
        <hr class="invoice-spacing mb-3">
           
        <!-- Basic table -->
<section id="basic-datatable">

  <div class="row">
    <div class="col-12">
      <div class="card">      
        <table class="datatables-basic table">
          <thead>
            <tr>
              <th></th>
              <th></th>
              <th>NIP</th>
              <th>Nama Pegawai</th>
              <th>Jabatan</th>
              <th>Gaji Pokok</th>
              <th>Uang Jabatan</th>
              <th>Uang Transport</th>
              <th>No rekening</th>
              <th>Action</th>             
            </tr>
          </thead>

          <tbody>

          @foreach($pegawais as $pegawai)

            <tr>
              <td></td>
              <td></td>

              <td>
                  <h5>{{ $pegawai->nip }}</h5>
              </td>

              <td>
                <div class="d-flex align-items-center">
                  <div>
                    <div class="fw-bolder">{{ $pegawai->nama_pegawai }}</div>
                  </div>
                </div>
              </td>

              <td>
                <div class="d-flex align-items-center">
                  <div>
                    <div class="fw-bolder">{{ $pegawai->jabatan->nama_jabatan }} {{ $pegawai->divisi->nama_divisi }}</div>
                  </div>
                </div>
              </td>

              <td>
                <div class="d-flex align-items-center">
                  <div>
                    <div class="fw-bolder">{{ $pegawai->gajipokok->gaji }}</div>
                  </div>
                </div>
              </td>

              <td>
                <div class="d-flex align-items-center">
                  <div>
                    <div class="fw-bolder">{{ $pegawai->uangtunjangan->uang_transport }}</div>
                  </div>
                </div>
              </td>

              <td>
                <div class="d-flex align-items-center">
                  <div>
                    <div class="fw-bolder">{{ $pegawai->uangtunjangan->uang_jabatan }}</div>
                  </div>
                </div>
              </td>

              <td>
                <div class="d-flex align-items-center">
                  <div>
                    <div class="fw-bolder">{{ $pegawai->no_rek }}</div>
                  </div>
                </div>
              </td>

              <td>
                <div class="d-flex align-items-center">
                  <div>
                      <a href="/absen/gaji/{{ $pegawai->id }}" type="button" class="btn btn-icon btn-success">
                        <span data-feather="edit"></span>
                      </a>
                  </div>
                </div>
              </td>
            </tr>

          @endforeach

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
