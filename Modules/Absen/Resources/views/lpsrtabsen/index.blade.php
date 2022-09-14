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


    <!-- Basic pills starts -->
    <div class="col-xl-12 col-lg-12">
      <div class="card">
        <div class="card-header">
          <h2 class="fw-bolder mb-75">Laporan Surat Absent</h2>
        </div>
        <div class="card-body">
          

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
          <div class="col-lg-5 d-flex align-items-center m-1" ></div>
          <div class="d-flex align-content-center justify-content-end m-1">
            <div class="input-group input-group-merge">
              <span class="input-group-text"><i data-feather="search" class="text-muted"></i></span>
                <input
                  type="text"
                  class="form-control"
                  id="todo-search"
                  placeholder="Cari NIP"
                  aria-label="Search..."
                  aria-describedby="todo-search"
                />
            </div>
          </div>
            <button id="btnGroupDrop1" type="button" class="btn btn-outline-primary dropdown-toggle m-6" data-bs-toggle="dropdown" aria-expanded="false">
                Export
            </button>
      </div>
      <!-- Todo search ends -->

          <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="home" aria-labelledby="home-tab" aria-expanded="true"> 
            
            <!-- TABEL IZIN -->
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th>NIP</th>
                      <th>Nama Pegawai</th>
                      <th>kategori</th>
                      <th>Lampiran</th>
                    </tr>
                  </thead>
                  <tbody>
                  @if(!empty($srtabsens))
                  @foreach($srtabsens as $srtabsen)
                    <tr>
                      <td>
                          <h5>{{ $srtabsen->nip }}</h5>
                      </td>
                      <td>
                        <div class="d-flex align-items-center">
                          <div>
                            <div class="fw-bolder">{{ $srtabsen->nama_pegawai }}</div>
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="d-flex align-items-center">
                          <span>{{ $srtabsen->kategori }}</span>
                        </div>
                      </td>
                      <td class="text-nowrap">
                      <a href="{{ asset('storage/' . $srtabsen->lampiran) }}"
                                                                    target="blank" class="btn btn-icon btn-success"><span
                                                                        data-feather="eye"></span></a>
                        
                      </td>
                      
                    </tr>
                    @endforeach
          @endif
                  </tbody>
                </table>
              </div>
            </div>
            <!-- AKHIR TABEL IZIN -->

            <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab" aria-expanded="false">
            <!-- TABEL CUTI -->
            <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th>NIP</th>
                      <th>Nama Pegawai</th>
                      <th>Divisi</th>
                      <th>Keterangan</th>
                      <th>Lampiran</th>
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
                          <span>SDM</span>
                        </div>
                      </td>
                      <td class="text-nowrap">
                        <div class="d-flex flex-column">
                          <span class="fw-bolder mb-25">Cuti</span>
                        </div>
                      </td>
                      <td>3</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <!-- AKHIR TABEL CUTI -->

            <div class="tab-pane" id="about" role="tabpanel" aria-labelledby="about-tab" aria-expanded="false">
            
            <!-- TABEL SAKIT -->
            <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th>NIP</th>
                      <th>Nama Pegawai</th>
                      <th>Divisi</th>
                      <th>Keterangan</th>
                      <th>Lampiran</th>
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
                          <span>SDM</span>
                        </div>
                      </td>
                      <td class="text-nowrap">
                        <div class="d-flex flex-column">
                          <span class="fw-bolder mb-25">Sakit</span>
                        </div>
                      </td>
                      <td>3</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <!-- AKHIR TABEL CUTI -->
            
          </div>
        </div>
      </div>
    </div>
    <!-- Basic pills ends -->

</section>
<!-- users list ends -->

        </div>
      </div>
    </div>
    <!-- END: Content-->


@endsection
