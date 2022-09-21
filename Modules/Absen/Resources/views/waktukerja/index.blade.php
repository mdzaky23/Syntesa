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
        <h2 class="fw-bolder mb-4">Setting Waktu Kerja</h2>
        <hr class="invoice-spacing">
           
        <!-- Basic table -->
<section id="basic-datatable">

  <div class="row">
    <div class="col-12">
      <div class="card">      
        <table class="datatables-basic table">
        <a href="/absen/waktukerja/tambah"><button class="btn btn-primary" type="button">+ Tambah Data</button></a>
          <thead>
            <tr>
              <th></th>
              <th></th>
              <th>No</th>
              <th>Jam Masuk</th>
              <th>Jam Pulang</th>
              <th>Batas Waktu</th>
              <th>Action</th>
              
              
            </tr>
          </thead>

          <tbody>
          @if(!empty($waktukerjas))
          @foreach($waktukerjas as $waktukerja)

            <tr>
              <td></td>
              <td></td>

              <td>
                  <h5>{{ $loop->iteration }}</h5>
              </td>

              <td>
                <div class="d-flex align-items-center">
                  <div>
                    <div class="fw-bolder">{{ $waktukerja->jam_masuk }}</div>
                  </div>
                </div>
              </td>

              <td>
                <div class="d-flex align-items-center">
                  <div>
                    <div class="fw-bolder">{{ $waktukerja->jam_pulang }}</div>
                  </div>
                </div>
              </td>

              <td>
                <div class="d-flex align-items-center">
                  <div>
                    <div class="fw-bolder">{{ $waktukerja->batas_masuk }}</div>
                  </div>
                </div>
              </td>

              <td>
                <div class="d-flex align-items-center">
                  <div>
                  <a href="/absen/waktukerja/{{ $waktukerja->id }}/edit" type="button" class="btn btn-icon btn-warning">
                      <span data-feather="edit"></span>
                    </a>

                      <form action="{{ url('absen/waktukerja', $waktukerja->id) }}" method="POST" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="btn btn-icon btn-danger" id="type-hapus" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')">
                          <span data-feather="trash"></span>
                        </button>
                      </form>
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
