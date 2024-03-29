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
                                $hari = Carbon\Carbon::parse($barang->tgl_beli)->format('d');
                                $bulan = Carbon\Carbon::parse($barang->tgl_beli)->format('m');
                                $tahun = Carbon\Carbon::parse($barang->tgl_beli)->format('y');
                                $tanggal = Carbon\Carbon::parse($barang->tgl_beli)->format('d-m-Y');
                                $tanggalsekarang = Carbon\Carbon::now();
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
                                @endphp

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
                                    <td>{{$barang->umur_ekonomi}} Bulan</td>
                                    <td>{{$barang->tgl_peremajaan}}</td>
                                    <td>{{$barang->kategori_lokasi}}</td>
                                    <td>{{$barang->ruangan_lokasi}}</td>
                                    <td>{{$barang->lantai_lokasi}}</td>
                                    @if ($barang->kategori_id == 1)
                                    <td>Alat Kerja</td>
                                    @elseif ($barang->kategori_id == 2)
                                    <td>Amenities</td>
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


                                @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </section>

        @endsection