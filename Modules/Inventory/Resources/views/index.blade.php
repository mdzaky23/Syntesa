@extends('inventory::layouts.main')

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="">

  @section('content')

  @php
  $barang = Modules\Inventory\Entities\TambahBarang::select()->get();

  $aktif = 0;
  foreach ($barangs as $barang) {

  $histori = Modules\Inventory\Entities\HistoryInventory::select()
  ->where('tambahbarang_id', $barang->id)
  ->orderby('created_at','desc')
  ->get()
  ->first();

  $tambah_barang = Modules\Inventory\Entities\Tambahbarang::select()
  ->where('id', $histori->tambahbarang_id)
  ->get()
  ->first();

  if($histori->status==1 ) { $aktif ++;}
  }

  $nonaktif = 0;
  foreach ($barangs as $barang) {

  $histori = Modules\Inventory\Entities\HistoryInventory::select()
  ->where('tambahbarang_id', $barang->id)
  ->orderby('created_at','desc')
  ->get()
  ->first();

  $tambah_barang = Modules\Inventory\Entities\Tambahbarang::select()
  ->where('id', $histori->tambahbarang_id)
  ->get()
  ->first();

  if($histori->status==2 ) { $nonaktif ++;}
  }

  @endphp
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

            <div class="col-lg-4 col-sm-6 col-12">
              <div class="card">
                <div class="card-header flex-column align-items-start pb-0">
                  <div class="avatar bg-light-success p-50 m-0">
                    <div class="avatar-content">
                      <i data-feather="box" class="font-medium-5"></i>
                    </div>
                  </div>
                  <h2 class="fw-bolder mt-1">{{$jumlah_brg}}</h2>
                  <p class="card-text">Jumlah Data Keseluruhan </p>
                </div>
                <div id="line-area-chart-2"></div>
              </div>
            </div>

            <!-- Greetings Card ends -->
            <!-- Orders Chart Card starts -->
            <div class="col-lg-4 col-sm-6 col-12">
              <div class="card">
                <div class="card-header flex-column align-items-start pb-0">
                  <div class="avatar bg-light-warning p-50 m-0">
                    <div class="avatar-content">
                      <i data-feather="package" class="font-medium-5"></i>
                    </div>
                  </div>
                  <h2 class="fw-bolder mt-1"> {{$aktif}}</h2>
                  <p class="card-text">Jumlah Data Barang Aktif</p>
                </div>
                <div id="order-chart"></div>
              </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-12">
              <div class="card">
                <div class="card-header flex-column align-items-start pb-0">
                  <div class="avatar bg-light-primary p-50 m-0">
                    <div class="avatar-content">
                      <i data-feather="box" class="font-medium-5"></i>
                    </div>
                  </div>
                  <h2 class="fw-bolder mt-1">{{$nonaktif}}</h2>
                  <p class="card-text">Jumlah Data Barang Non-Aktif</p>

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
                          $histori = Modules\Inventory\Entities\HistoryInventory::select()
                          ->where('tambahbarang_id', $barang->id)
                          ->orderby('created_at','desc')
                          ->get()
                          ->first();

                          $tambah_barang = Modules\Inventory\Entities\Tambahbarang::select()
                          ->where('id', $histori->tambahbarang_id)
                          ->get()
                          ->first();

                          $hari = Carbon\Carbon::parse($tambah_barang->tgl_beli)->format('d');
                          $bulan = Carbon\Carbon::parse($tambah_barang->tgl_beli)->format('m');
                          $tahun = Carbon\Carbon::parse($tambah_barang->tgl_beli)->format('y');
                          $tanggal = Carbon\Carbon::parse($tambah_barang->tgl_beli)->format('d-m-Y');
                          $array_bln = [
                          '01' => '1',
                          '02' => '2',
                          '03' => '3',
                          '04' => '4',
                          '05' => '5',
                          '06' => '6',
                          '07' => '7',
                          '08' => '8',
                          '09' => '9',
                          '10' => '10',
                          '11' => '11',
                          '12' => '12',

                          ];
                          $bln =$array_bln[$bulan];
                          $umurekonomi = Carbon\Carbon::parse($tambah_barang->tgl_beli)->submonths($tambah_barang->umur_ekonomi);
                          $tanggalsekarang = Carbon\Carbon::now();
                          $hitungumurekonomi = $umurekonomi -> diffAsCarboninterval($tanggalsekarang);
                          @endphp

                          @if ($histori->status==1 )


                          <tr>
                            @if ($tanggalsekarang > $umurekonomi) @if ($tambah_barang->kategori_id == 1)
                            <td> {{$tambah_barang->nomer_inventaris}}.1.{{$hari}}.{{ $bln}}.{{$tahun}} </td>
                            @elseif ($tambah_barang->kategori_id == 2)
                            <td> {{$tambah_barang->nomer_inventaris}}.2.{{$hari}}.{{ $bln}}.{{$tahun}} </td>
                            @elseif ($tambah_barang->kategori_id == 3)
                            <td> {{$tambah_barang->nomer_inventaris}}.3.{{$hari}}.{{ $bln}}.{{$tahun}} </td>
                            @else
                            <td> {{$tambah_barang->nomer_inventaris}}.4.{{$hari}}.{{ $bln}}.{{$tahun}} </td>
                            @endif


                            <td>{{$tambah_barang->nama_brg}}</td>

                            @if ($tambah_barang->kategori_id == 1)
                            <td>Alat Kerja</td>
                            @elseif ($tambah_barang->kategori_id == 2)
                            <td>Amenities</td>
                            @elseif ($tambah_barang->kategori_id == 3)
                            <td>Elektronik</td>
                            @else
                            <td>Furniture</td>
                            @endif

                            <td>{{$tanggal}}</td>
                            <td>{{$tambah_barang->umur_ekonomi}} Bulan</td>
                            <td>
                              <p> Tersisa {{$hitungumurekonomi}}</p>
                            </td>
                            <td>
                              <div class="dropdown">
                                <button type="button" class="btn btn-sm dropdown-toggle hide-arrow py-0" data-bs-toggle="dropdown">
                                  <i data-feather="more-vertical"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end">
                                  <a class="dropdown-item" href="/inventory/tambahbarang/{{$tambah_barang->id}}">
                                    <i data-feather="eye" class="me-50"></i>
                                    <span>Lihat</span>
                                  </a>
                                  <a class="dropdown-item" href="/inventory/tambahbarang/{{$tambah_barang->id}}/edit">
                                    <i data-feather="edit-2" class="me-50"></i>
                                    <span>Edit</span>
                                  </a>
                                  <form action="/inventory/tambahbarang/{{$tambah_barang->id}}" method="POST">
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
                            @endif
                            @endif
                            @endforeach
                            @endif
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </section>

              @endsection