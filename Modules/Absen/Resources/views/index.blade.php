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
        <div class="card-body">
          <div class="avatar bg-light-info p-50 mb-1">
            <div class="avatar-content">
              <a href="/absen/pegawai"  class="link-info">
              <i data-feather="users" class="font-medium-5"></i>
            </a>
            </div>
          </div>
          <h2 class="fw-bolder">{{ $jumlahpegawai }}</h2>
          <p class="card-text">Pegawai</p>
        </div>
      </div>
    </div>
    <div class="col-xl-2 col-md-4 col-sm-6">
      <div class="card text-center">
        <div class="card-body">
          <div class="avatar bg-light-warning p-50 mb-1">
            <div class="avatar-content">
            <a href="/absen/divisi"  class="link-warning">
              <i data-feather="trello" class="font-medium-5"></i>
            </a>
            </div>
          </div>
          <h2 class="fw-bolder">{{ $jumlahdivisi }}</h2>
          <p class="card-text">Divisi</p>
        </div>
      </div>
    </div>
    <div class="col-xl-2 col-md-4 col-sm-6">
      <div class="card text-center">
        <div class="card-body">
          <div class="avatar bg-light-danger p-50 mb-1">
            <div class="avatar-content">
            <a href="/absen/jabatan" class="link-danger">
              <i data-feather="star" class="font-medium-5"></i>
              </a>
            </div>
          </div>
          <h2 class="fw-bolder">{{ $jumlahjabatan }}</h2>
          <p class="card-text">Jabatan</p>
        </div>
      </div>
    </div>
    <div class="col-xl-2 col-md-4 col-sm-6">
      <div class="card text-center">
        <div class="card-body">
          <div class="avatar bg-light-primary p-50 mb-1">
            <div class="avatar-content">
            <a href="/absen/golongan" class="link-primary">
              <i data-feather="codepen" class="font-medium-5"></i>
              </a>
            </div>
          </div>
          <h2 class="fw-bolder">{{ $jumlahgolongan }}</h2>
          <p class="card-text">Golongan</p>
        </div>
      </div>
    </div>
    <div class="col-xl-2 col-md-4 col-sm-6">
      <div class="card text-center">
        <div class="card-body">
          <div class="avatar bg-light-success p-50 mb-1">
            <div class="avatar-content">
            <a href="/absen/pendidikan" class="link-success">
              <i data-feather="award" class="font-medium-5"></i>
              </a>
            </div>
          </div>
          <h2 class="fw-bolder">{{ $jumlahpendidikan }}</h2>
          <p class="card-text">Pendidikan</p>
        </div>
      </div>
    </div>
    <div class="col-xl-2 col-md-4 col-sm-6">
      <div class="card text-center">
        <div class="card-body">
          <div class="avatar bg-light-danger p-50 mb-1">
            <div class="avatar-content">
            <a href="/absen/jenispegawai" class="link-danger">
              <i data-feather="user-check" class="font-medium-5"></i>
              </a>
            </div>
          </div>
          <h2 class="fw-bolder">{{ $jumlahjenispegawai }}</h2>
          <p class="card-text">Jenis Pegawai</p>
        </div>
      </div>
    </div>
  </div>
  <!--/ Stats Vertical Card -->

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

        </div>
      </div>
    </div>
    <!-- END: Content-->

@endsection
