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
                        $bulan = Carbon\Carbon::parse($barang->tanggal_beli)->format('m');
                        $tahun = Carbon\Carbon::parse($barang->tanggal_beli)->format('Y');
                        $tanggal = Carbon\Carbon::parse($barang->tanggal_beli)->format('d-m-Y');
                        @endphp
                        <div>
                            <h1 class="card-title-left mb-1">No Inventaris : {{$barang->nomer_inventaris}}.IN.SWB.{{ $bulan}}.{{$tahun}}</h1>
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
                            {!! QrCode::size(180)->generate($barang->kategori_lokasi); !!}
                            <p><a class="btn btn-success mt-2" href="/inventory/print/ {{$barang->id}}" target="blank"><span data-feather="printer"></span></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endsection