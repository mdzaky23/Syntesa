@extends('inventory::layouts.main')

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="">

    @section('content')
    <div class="app-content content ">
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
                                    <th>Lampiran</th>
                                    <th>Detail</th>
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
                                $tanggalsekarang = Carbon\Carbon::now();
                                @endphp
                                @if ($tanggalsekarang < $barang->tgl_peremajaan )
                                    <tr>


                                        <td></td>
                                        @if ($barang->kategori_id == 1)
                                        <td> {{$barang->nomer_inventaris}}.1.{{ $bulan}}.{{$tahun}} </td>
                                        @elseif ($barang->kategori_id == 2)
                                        <td> {{$barang->nomer_inventaris}}.2.{{ $bulan}}.{{$tahun}} </td>
                                        @elseif ($barang->kategori_id == 3)
                                        <td> {{$barang->nomer_inventaris}}.3.{{ $bulan}}.{{$tahun}} </td>
                                        @else
                                        <td> {{$barang->nomer_inventaris}}.4.{{ $bulan}}.{{$tahun}} </td>
                                        @endif
                                        <td>{{$barang->nama_brg}}</td>
                                        <td>{{$barang->tipe_brg}}</td>
                                        <td>{{$barang->tgl_beli}}</td>
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
                                        <td>
                                            <a class="btn btn-success" target="blank" href="{{ asset('storage/' . $barang->lampiran)}}">Lihat</a>
                                        </td>
                                        <td>
                                            <a class="btn btn-secondary" href="/inventory/tambahbarang/{{$barang->id}}">Detail</a>
                                        </td>
                                    </tr>
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