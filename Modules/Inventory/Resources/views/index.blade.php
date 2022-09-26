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
                    <h1 class="mb-1 text-white">Laptop Asus</h1>
                    <p class="card-text m-auto w-75">
                      Sudah Memasuki Tanggal Peremajaan <strong>22-02-2020</strong> Silahkan Untuk Mengecek Barang.
                    </p>
                    <a class="btn btn-success mt-1" hidden href="">Perbaharui</a>
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
                  <h2 class="fw-bolder mt-1"> {{$jumlah_brg}}</h2>
                  <p class="card-text">Jumlah Data Barang Aktif</p>
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
                  <!-- @php
                  $tanggalsekarang = Carbon\Carbon::now();
                  if($tanggalsekarang )
                  @endphp -->
                  <h2 class="fw-bolder mt-1">12</h2>
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
                          $barang = Modules\Inventory\Entities\Tambahbarang::select()
                          ->where('id', $barang->id)
                          ->get()
                          ->first();

                          $hari = Carbon\Carbon::parse($barang->tgl_beli)->format('d');
                          $bulan = Carbon\Carbon::parse($barang->tgl_beli)->format('m');
                          $tahun = Carbon\Carbon::parse($barang->tgl_beli)->format('y');
                          $tanggal = Carbon\Carbon::parse($barang->tgl_beli)->format('d-m-Y');
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
                          ];
                          $bln =$array_bln[$bulan];
                          $umurekonomi = Carbon\Carbon::parse($barang->tgl_beli)->submonths($barang->umur_ekonomi);
                          $tanggalsekarang = Carbon\Carbon::now();
                          $hitungumurekonomi = $umurekonomi -> diffAsCarboninterval($tanggalsekarang);
                          @endphp
                          <tr>
                            @if ($tanggalsekarang > $umurekonomi) @if ($barang->kategori_id == 1)
                            <td> {{$barang->nomer_inventaris}}.1.{{$hari}}.{{ $bln}}.{{$tahun}} </td>
                            @elseif ($barang->kategori_id == 2)
                            <td> {{$barang->nomer_inventaris}}.2.{{$hari}}.{{ $bln}}.{{$tahun}} </td>
                            @elseif ($barang->kategori_id == 3)
                            <td> {{$barang->nomer_inventaris}}.3.{{$hari}}.{{ $bln}}.{{$tahun}} </td>
                            @else
                            <td> {{$barang->nomer_inventaris}}.4.{{$hari}}.{{ $bln}}.{{$tahun}} </td>
                            @endif
                            <td>{{$barang->nama_brg}}</td>
                            @if ($barang->kategori_id == 1)
                            <td>Alat Kerja</td>
                            @elseif ($barang->kategori_id == 2)
                            <td>Kebutuhan Oprasional</td>
                            @elseif ($barang->kategori_id == 3)
                            <td>Elektronik</td>
                            @else
                            <td>Furniture</td>
                            @endif
                            <td>{{$tanggal}}</td>
                            <td>{{$barang->umur_ekonomi}} Bulan</td>
                            <td>
                              <p> Tersisa {{$hitungumurekonomi}}</p>
                            </td>
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
                            @endif
                            @endforeach
                            @endif
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </section>

              <script>
                var tgl_peremajaan = "{{$barang->tgl_peremajaan}}"
                // Set the date we're counting down to
                var countDownDate = new Date(tgl_peremajaan).getTime();

                // Update the count down every 1 second
                var x = setInterval(function() {

                  // Get today's date and time
                  var now = new Date().getTime();

                  // Find the distance between now and the count down date
                  var distance = countDownDate - now;

                  // Time calculations for days, hours, minutes and seconds
                  var years = Math.floor(distance / (1000 * 60 * 60 * 24) / 365);
                  var days = Math.floor(distance / (1000 * 60 * 60 * 24)) % 365;
                  var months = Math.floor(distance / (1000 * 365) / 30);
                  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));


                  // Output the result in an element with id="demo"
                  document.getElementById("$barang").innerHTML = "Tersisa " + years + " Tahun " + days + " Hari ";

                  // If the count down is over, write some text 
                  if (distance < 0) {
                    clearInterval(x);
                    document.getElementById("$barang").innerHTML = "EXPIRED";
                  }
                }, 1000);
              </script>
              @endsection