@extends('pengajuan::layouts.main')

@section('content')

@if ($role==2 || $role==5 || $role==8)
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

                                            <th style="text-align: center">No</th>
                                            <th style="text-align: center">Kategori</th>
                                            <th style="text-align: center">Keterangan</th>
                                            <th style="text-align: center">Jumlah</th>
                                            <th style="text-align: center">Tanggal Pengajuan</th>
                                            <th style="text-align: center">Divisi</th>
                                            <th style="text-align: center">Waktu Aksi</th>
                                            <th style="text-align: center">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($pengajuanbiasas as $pengajuanbiasa)
                                        
                                        @php
                                         $histori = Modules\Pengajuan\Entities\HistoriPengajuanBiasa::select()
                                            ->where('pengajuan_biasa_id', $pengajuanbiasa->id)
                                            ->orderby('created_at','desc')
                                            ->get()
                                            ->first();

                                        $pengajuan_biasa =  Modules\Pengajuan\Entities\PengajuanBiasa::select()
                                        ->where('id', $histori->pengajuan_biasa_id)
                                        ->get()
                                        ->first();

                                        $kategori = Modules\Pengajuan\Entities\kategori_pengajuan::select()
                                            ->where('kategori', $pengajuan_biasa->kategori)
                                            ->get()
                                            ->first();
                                        $divisi = Modules\Pengajuan\Entities\Divisi::select()
                                            ->where('divisi', $pengajuan_biasa->divisi)
                                            ->get()
                                            ->first();
                                        $status = Modules\Pengajuan\Entities\StatusPengajuan::select()
                                            ->where('status', $histori->status)
                                            ->get()
                                            ->first();
                                            $jabatan = Modules\Pengajuan\Entities\KeteranganJabatan::select()
                                          ->where('jabatan', $histori->jabatan)
                                          ->get()
                                          ->first();
                                        
                                        
                                         @endphp

                                        @if ($histori->status==1)

                                            <tr>
                                                <td></td>
                                                <td style="text-align: center">{{ $loop->iteration }}</td>

                                                @if ($kategori->kategori==1)
                                                <td style="text-align: center"> <span class="badge rounded-pill badge-light-primary">{{ $kategori->keterangan }} </span> </td>

                                                @elseif ($kategori->kategori==2)
                                                <td style="text-align: center"> <span class="badge rounded-pill badge-light-info">{{ $kategori->keterangan }} </span> </td>
                                                
                                                @endif

                                                <td style="text-align: center">{{ $pengajuan_biasa->keterangan }}</td>
                                                <td style="text-align: center">{{ $pengajuan_biasa->jumlah }}</td>
                                                <td style="text-align: center">{{ $pengajuan_biasa->tanggal }}</td>
                                                <td style="text-align: center">{{ $divisi->keterangan }}</td>
                                                <td style="text-align: center">{{ $histori->updated_at }}</td> 
                                                
                                                @if($histori->status==1)
                                                    @if($jabatan->jabatan==2 || $jabatan->jabatan==5 || $jabatan->jabatan==8 )
                                                        <td style="text-align: center">
                                                            <span
                                                            class="badge rounded-pill badge-glow bg-primary"> {{ $status->keterangan }} {{ $jabatan->keterangan }} </span> </td> 
                                                    @elseif($jabatan->jabatan==3 || $jabatan->jabatan==6 || $jabatan->jabatan==9)
                                                        <td style="text-align: center">
                                                            <span
                                                            class="badge rounded-pill badge-glow bg-success"> {{ $status->keterangan }}  {{ $jabatan->keterangan }}</span> </td>
                                                @endif
                                                @endif
                                            
                                            </tr>
                                            @endif
                                        @endforeach
                                    </tbody>
                                </table>
                </section>
            </div>
        </div>
    </div>
@endif
@endsection
