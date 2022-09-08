@extends('pengajuan::layouts.main')

@section('content')
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-start mb-0">Pengajuan Di Proses</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Pengajuan Biasa</a>
                                    </li>
                                    <li class="breadcrumb-item active">Pengajuan Di Proses
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>


                <section id="basic-datatable">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <table class="datatables-basic table">
                                    <thead>
                                        <tr>
                                            <th></th>

                                            <th>No</th>
                                            <th>Kategori</th>
                                            <th>Keterangan</th>
                                            <th>Jumlah</th>
                                            <th>Tanggal Pengajuan</th>
                                            <th>Divisi</th>
                                            <th>Waktu Aksi</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($pengajuanbiasas as $pengajuanbiasa)
                                        
                                        {{-- @php
                                        $historipengajuanbiasa = Modules\Pengajuan\Entities\HistoriPengajuanBiasa::select()
                                            ->where('pengajuan_biasa_id', $pengajuanbiasa->id)
                                            ->orderby('created_at')
                                            ->get()
                                            ->first();
                                        // $kategori = Modules\Pengajuan\Entities\kategoriPengajuan::select()
                                        //     ->where('pengajuan_biasa_id', $pengajuanbiasa->id)
                                        //     ->orderby('created_at', 'desc')
                                        //     ->get()
                                        //     ->first();

                                        
                                         @endphp --}}

                                        {{-- @if ($kategori->kategori == 1 || $kategori->kategori == 2 ) --}}
                                        
                                            <tr>
                                                <td></td>
                                                <td style="text-align: center">{{ $loop->iteration }}</td>
                                                <td style="text-align: center">{{ $pengajuanbiasa->kategori }}</td>
                                                <td style="text-align: center">{{ $pengajuanbiasa->keterangan }}</td>
                                                <td style="text-align: center">{{ $pengajuanbiasa->jumlah }}</td>
                                                <td style="text-align: center">{{ $pengajuanbiasa->tanggal }}</td>
                                                <td style="text-align: center">{{ $pengajuanbiasa->divisi }}</td>
                                                <td style="text-align: center"></td> 
                                                {{-- <td style="text-align: center"></td>  --}}

                                              
                                                {{-- <td style="text-align: center">

                                                    @if ($kategori->kategori == 1 )

                                                    <span
                                                    class="badge rounded-pill badge-light-success">{{ $kategori->kategori }}</span>

                                                    @elseif ($kategori->kategori == 2 )

                                                    <span
                                                    class="badge rounded-pill badge-light-success">{{ $kategori->kategori }}</span>


                                                </td> --}}
                                            
                                            </tr>
                                            
                                        @endforeach
                                    </tbody>
                                </table>
                
                            </div>
                        </div>
                    </div>
                 </section>
            </div>
        </div>
        </div>
    </div>
@endsection
