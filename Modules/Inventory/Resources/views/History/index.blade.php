@extends('inventory::layouts.main')

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="">

    @section('content')

    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-start mb-0">History</h2>
                        </div>
                    </div>
                </div>
                <div class="content-header-right text-md-end col-md-3 col-12 d-md-block d-none">
                    <div class="mb-1 breadcrumb-right">
                    </div>
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
                                        <th></th>

                                        <th>No Inventaris</th>
                                        <th>Nama barang</th>
                                        <th>Tipe barang</th>
                                        <th>Tanggal Beli</th>
                                        <th>Umur Ekonomi</th>
                                        <th>Tanggal Peremajaan</th>
                                        <th>Lokasi</th>
                                        <th>Kategori barang</th>
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
                                    $hitungumurekonomi = $umurekonomi -> diffasCarboninterval($tanggalsekarang);
                                    @endphp

                                    @if ($histori->status==2)

                                    <tr>
                                        @if ($tanggalsekarang < $umurekonomi ) <td>
                                            </td>

                                            @if ($tambah_barang->kategori_id == 1)
                                            <td> {{$tambah_barang->nomer_inventaris}}.1.{{$hari}}.{{ $bln}}.{{$tahun}} </td>
                                            @elseif ($tambah_barang->kategori_id == 2)
                                            <td> {{$tambah_barang->nomer_inventaris}}.2.{{$hari}}.{{ $bln}}.{{$tahun}} </td>
                                            @elseif ($tambah_barang->kategori_id == 3)
                                            <td> {{$tambah_barang->nomer_inventaris}}.3.{{$hari}}.{{ $bln}}.{{$tahun}} </td>
                                            @else
                                            <td> {{$tambah_barang->nomer_inventaris}}.4.{{$hari}}.{{ $bln}}.{{$tahun}} </td>
                                            @endif


                                            <td>{{$tambah_barang->nama_brg}}</td>
                                            <td>{{$tambah_barang->tipe_brg}}</td>
                                            <td>{{$tanggal}}</td>
                                            <td>{{$tambah_barang->umur_ekonomi}}</td>
                                            <td>Expired</td>
                                            <td>{{$tambah_barang->kategori_lokasi}}</td>

                                            @if ($tambah_barang->kategori_id == 1)
                                            <td>Alat Kerja</td>
                                            @elseif ($tambah_barang->kategori_id == 2)
                                            <td>Amenities</td>
                                            @elseif ($tambah_barang->kategori_id == 3)
                                            <td>Elektronik</td>
                                            @else
                                            <td>Furniture</td>
                                            @endif



                                            @endif

                                            @endif
                                    </tr>
                                    @endforeach
                                    @endif


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END: Content-->

            @endsection