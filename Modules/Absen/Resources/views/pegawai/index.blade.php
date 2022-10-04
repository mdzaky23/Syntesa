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
        <h3 class="fw-bolder mb-2">Data Pegawai</h3>
        <hr class="invoice-spacing mb-3">

           
        <!-- Basic table -->
<section id="basic-datatable">

  <div class="row">
    <div class="col-12">
      <div class="card">      
        <table class="datatables-basic table">
        <a href="/absen/pegawai/tambah"><button class="btn btn-primary" type="button">+ Tambah Data</button></a>
          <thead>
            <tr>
              <th></th>
              <th></th>
              <th>NIP</th>
              <th>Nama Pegawai</th>
              <th>Alamat</th>
              <th>Tempat Tanggal Lahir</th>
              <th>Pendidikan</th>
              <th>Jenis Kelamin</th>
              <th>Tanggal Masuk</th>
              <th>Tanggal pengangkatan</th>
              <th>Jabatan</th>
              <th>No Hp</th>
              <th>No Rekening</th>
              <th>Action</th>
              
              
            </tr>
          </thead>

          <tbody>
          @if(!empty($pegawais))
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
                    <div class="fw-bolder">{{ $pegawai->alamat }}</div>
                  </div>
                </div>
              </td>

              <td>
                <div class="d-flex align-items-center">
                  <div>
                    <div class="fw-bolder">{{ $pegawai->tp_lahir }} , {{ $pegawai->tgl_lahir }}</div>
                  </div>
                </div>
              </td>

              <td>
                <div class="d-flex align-items-center">
                  <div>
                    <div class="fw-bolder">{{ $pegawai->pendidikan->nama_pendidikan }}</div>
                  </div>
                </div>
              </td>

              <td>
                <div class="d-flex align-items-center">
                  <div>
                    <div class="fw-bolder">{{ $pegawai->jk }}</div>
                  </div>
                </div>
              </td>

              <td>
                <div class="d-flex align-items-center">
                  <div>
                    <div class="fw-bolder">{{ $pegawai->tgl_masuk }}</div>
                  </div>
                </div>
              </td>

              <td>
                <div class="d-flex align-items-center">
                  <div>
                    <div class="fw-bolder">{{ $pegawai->jenispegawai->nama_jenispegawai }}, {{ $pegawai->tgl_pengangkatan }}</div>
                  </div>
                </div>
              </td>

              <td>
                <div class="d-flex align-items-center">
                  <div>
                    <div class="fw-bolder">{{ $pegawai->jabatan->nama_jabatan }}, {{ $pegawai->divisi->nama_divisi }}</div>
                  </div>
                </div>
              </td>

              <td>
                <div class="d-flex align-items-center">
                  <div>
                    <div class="fw-bolder">{{ $pegawai->no_hp }}</div>
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
                      <a href="/absen/pegawai/{{ $pegawai->id }}/edit" type="button" class="btn btn-icon btn-warning">
                        <span data-feather="edit"></span>
                      </a>

                      <form action="{{ url('absen/pegawai', $pegawai->id) }}" method="POST" class="d-inline">
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
