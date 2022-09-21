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
                            <h2 class="content-header-title float-start mb-0">Data Detail</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Inventory</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="index.html">Detail</a>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-header-right text-md-end col-md-3 col-12 d-md-block d-none">
                    <div class="mb-1 breadcrumb-right">
                    </div>
                </div>
            </div>
            <div class=" col-12">
                <div class="card">
                    <div class="card-header d-flex justify-content align-items mb-1 pb-1">
                        <img src="{{ asset('storage/' . $barang->lampiran)}}" width="300px">
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

                        @endphp
                        <div>

                            <p class="card-title-left mb-1">No Inventaris : @if ($barang->kategori_id == 1)</p>

                            {{$barang->nomer_inventaris}}.1.{{$hari}}.{{ $bln}}.{{$tahun}}
                            @elseif ($barang->kategori_id == 2)
                            {{$barang->nomer_inventaris}}.2.{{$hari}}.{{ $bln}}.{{$tahun}}
                            @elseif ($barang->kategori_id == 3)
                            {{$barang->nomer_inventaris}}.3.{{$hari}}.{{ $bln}}.{{$tahun}}
                            @else
                            {{$barang->nomer_inventaris}}.4.{{$hari}}.{{ $bln}}.{{$tahun}}
                            @endif
                            <p class="card-text">Nama Barang : {{ $barang -> nama_brg }}</p>
                            <p class="card-text">Kategori Barang : @if ($barang->kategori_id == 1)
                                Alat Kerja
                                @elseif ($barang->kategori_id == 2)
                                Kebutuhan Oprasional
                                @elseif ($barang->kategori_id == 3)
                                Elektronik
                                @else
                                Furniture
                                @endif
                            </p>
                            <p class="card-text">Jumlah Barang : {{ $barang -> jumlah_brg }}</p>
                            <p class="card-text">Harga Barang : {{ $barang -> harga_brg }}</p>
                            <p class="card-text">Lokasi Barang : {{ $barang -> kategori_lokasi }}</p>
                            <p class="card-text">Ruangan : {{ $barang -> ruangan_lokasi}}</p>
                            <p class="card-text">Lantai : {{ $barang -> lantai_lokasi }}</p>

                        </div>
                        <div class="visible-print text-center mt-3">
                            {!! QrCode::size(180)->generate("Nama Barang : $barang->nama_brg || Lokasi Barang : $barang->kategori_lokasi || $barang->ruangan_lokasi || $barang->lantai_lokasi"); !!}
                            <p><a class="btn btn-success mt-2" href="/inventory/print/ {{$barang->id}}" target="blank"><span data-feather="printer"></span></a></p>
                        </div>
                    </div>
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
                                    <th>Nama Barang</th>
                                    <th>Tipe Barang</th>
                                    <th>Tanggal Beli</th>
                                    <th>Umur Ekonomi</th>
                                    <th>Tanggal Peremajaan</th>
                                    <th>Lokasi</th>
                                    <th>Ruangan</th>
                                    <th>Lantai</th>
                                    <th>Kategori Barang</th>
                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    <td></td>

                                    @if ($barang->kategori_id == 1)
                                    <td> {{$barang->nomer_inventaris}}.1.{{$hari}}.{{ $bln}}.{{$tahun}} </td>
                                    @elseif ($barang->kategori_id == 2)
                                    <td> {{$barang->nomer_inventaris}}.2.{{$hari}}.{{ $bln}}.{{$tahun}} </td>
                                    @elseif ($barang->kategori_id == 3)
                                    <td> {{$barang->nomer_inventaris}}.3.{{$hari}}.{{ $bln}}.{{$tahun}} </td>
                                    @else
                                    <td> {{$barang->nomer_inventaris}}.4.{{$hari}}.{{ $bln}}.{{$tahun}} </td>
                                    @endif
                                    <td>{{$barang->nama_brg}}</td>
                                    <td>{{$barang->tipe_brg}}</td>
                                    <td>{{$tanggal}}</td>
                                    <td>{{$barang->umur_ekonomi}}</td>
                                    <td>{{$barang->tgl_peremajaan}}</td>
                                    <td>{{$barang->kategori_lokasi}}</td>
                                    <td>{{$barang->ruangan_lokasi}}</td>
                                    <td>{{$barang->lantai_lokasi}}</td>
                                    @if ($barang->kategori_id == 1)
                                    <td>Alat Kerja</td>
                                    @elseif ($barang->kategori_id == 2)
                                    <td>Kebutuhan Oprasional</td>
                                    @elseif ($barang->kategori_id == 3)
                                    <td>Elektronik</td>
                                    @else
                                    <td>Furniture</td>
                                    @endif


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Modal to add new record -->
        </section>

        @endsection