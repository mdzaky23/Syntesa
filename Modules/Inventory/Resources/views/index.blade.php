@extends('inventory::layouts.main')

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="">

  @section('content')
  <!-- BEGIN: Body-->

  <!-- BEGIN: Content-->
  <div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper container-xxl p-0">
      <div class="content-header row"></div>
      <div class="content-body">
        <!-- Dashboard Analytics Start -->
        <section id="dashboard-analytics">
          <div class="row match-height">
            <!-- Greetings Card starts -->
            <div class="col-lg-6 col-md-12 col-sm-12">
              <div class="card card-congratulations">
                <div class="card-body text-center">
                  <img src="../../../app-assets/images/elements/decore-left.png" class="congratulations-img-left" alt="card-img-left" />
                  <img src="../../../app-assets/images/elements/decore-right.png" class="congratulations-img-right" alt="card-img-right" />
                  <div class="avatar avatar-xl bg-primary shadow">
                    <div class="avatar-content">
                      <i data-feather="award" class="font-large-1"></i>
                    </div>
                  </div>
                  <div class="text-center">
                    <h1 class="mb-1 text-white">Laptop Asus,</h1>
                    <p class="card-text m-auto w-75">
                      Sudah Memasuki Tanggal Peremajaan <strong>22-02-2020</strong> Silahkan Untuk Mengecek Barang.
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <!-- Greetings Card ends -->
            <!-- Orders Chart Card starts -->
            <div class="col-lg-3 col-sm-6 col-12">
              <div class="card">
                <div class="card-header flex-column align-items-start pb-0">
                  <div class="avatar bg-light-warning p-50 m-0">
                    <div class="avatar-content">
                      <i data-feather="package" class="font-medium-5"></i>
                    </div>
                  </div>
                  <h2 class="fw-bolder mt-1">{{$jumlah_brg}}</h2>
                  <p class="card-text">Jumlah Data Barang</p>
                </div>
                <div id="order-chart"></div>
              </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12">
              <div class="card">
                <div class="card-header flex-column align-items-start pb-0">
                  <div class="avatar bg-light-primary p-50 m-0">
                    <div class="avatar-content">
                      <i data-feather="box" class="font-medium-5"></i>
                    </div>
                  </div>
                  <h2 class="fw-bolder mt-1">12</h2>
                  <p class="card-text">Barang Yang Mendekati Tanggal Peremajaan</p>
                </div>
                <div id="gained-chart"></div>
              </div>
            </div>
            <div class="content-body">
              <div class="row">
                <div class="col-12">
                </div>
              </div>
              <!-- Basic table -->
              <section id="basic-datatable">
                <div class="row">
                  <div class="col-12">
                    <div class="card">
                      <table class="datatables-basic table">
                        <thead>

                          <tr>
                            <th>No Inventaris</th>
                            <th>Nama Barang</th>

                            <th>kategori Barang</th>
                            <th>Tanggal beli</th>
                            <th>Umur Ekonomi</th>
                            <th>Tanggal Peremajaan</th>
                            <th>Action</th>
                            <th></th>
                          </tr>
                        </thead>
                        <tbody>
                          @if(!empty($barangs))
                          @foreach ($barangs as $barang )
                          @php
                          $barang = Modules\Inventory\Entities\Tambahbarang::select()
                          ->where('id', $barang->id)
                          ->get()
                          ->first();
                          $bulan = Carbon\Carbon::parse($barang->tanggal_beli)->format('m');
                          $tahun = Carbon\Carbon::parse($barang->tanggal_beli)->format('Y');
                          $tanggal = Carbon\Carbon::parse($barang->tanggal_beli)->format('d-m-Y');
                          $array_bln = [
                          '01' => 'I',
                          '02' => 'II',
                          '03' => 'III',
                          '04' => 'IV',
                          '05' => 'V',
                          '06' => 'VI',
                          '07' => 'VII',
                          '08' => 'VIII',
                          '09' => 'IX',
                          '10' => 'X',
                          '11' => 'XI',
                          '12' => 'XII',
                          ];
                          $bln =$array_bln[$bulan];
                          @endphp
                          <tr>

                            <td> {{$barang->nomer_inventaris}}/IN/SWB/{{ $bln}}/{{$tahun}} </td>
                            <td>{{$barang->nama_brg}}</td>

                            <td>{{$barang->kategori_brg}}</td>
                            <td>{{$barang->tgl_beli}}</td>

                            <td>{{$barang->umur_ekonomi}}</td>
                            <td>{{$barang->tgl_peremajaan}}</td>
                            <td>
                              <div class="dropdown">
                                <button type="button" class="btn btn-sm dropdown-toggle hide-arrow py-0" data-bs-toggle="dropdown">
                                  <i data-feather="more-vertical"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end">
                                  <a class="dropdown-item" href="/inventory/tambahbarang/{{$barang->id}}">
                                    <i data-feather="eye" class="me-50"></i>
                                    <span>Lihat</span>
                                  </a>
                                  <a class="dropdown-item" href="/inventory/tambahbarang/{{$barang->id}}/edit">
                                    <i data-feather="edit-2" class="me-50"></i>
                                    <span>Edit</span>
                                  </a>
                                  <form action="/inventory/tambahbarang/{{$barang->id}}" method="POST">
                                    @method ('delete')
                                    @csrf
                                    <button class="dropdown-item" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus?')">
                                      <i data-feather="trash" class="me-50"></i>
                                      <span>Delete</span>
                                    </button>
                                  </form>
                                </div>
                              </div>
                            </td>
                            @endforeach
                            @endif
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </section>

              @endsection