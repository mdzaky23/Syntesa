@extends('pengajuan::layouts.main')

@section('content')
    <!-- BEGIN: Content-->
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-start mb-0">Pengajuan Masuk</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="index.html">Approval Pengajuan</a>
                                    </li>
                                    <li class="breadcrumb-item active"><a href="#">Pengajuan Masuk </a>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Basic table -->
                <section id="basic-datatable">
                    <div class="row">
                        <div class="col-12 mt-2">
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
                                            <th style="text-align: center">Yang Mengajukan</th>
                                            <th style="text-align: center">Divisi</th>
                                            <th style="text-align: center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                       @foreach ($pengajuanbiasas as $pengajuanbiasa)
                                       @php
                                       $historipengajuanbiasa = Modules\Pengajuan\Entities\HistoriPengajuanBiasa::select()
                                           ->where('pengajuan_biasa_id', $pengajuanbiasa->id)
                                           ->orderby('created_at')
                                           ->get()
                                           ->first();

                                        // if ($user_id==1 ){
                                        //     {{ $user->name }}
                                        // }
                                        @endphp
                                            <tr>
                
                                                <td>
                                                    <button type="button"
                                                        class="btn btn-icon btn-icon btn-flat-success">
                                                        <i data-feather="eye"></i>
                                                    </button>
                                                </td>

                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $pengajuanbiasa->kategori }}</td>
                                                <td>{{ $pengajuanbiasa->keterangan }}</td>
                                                <td>{{ $pengajuanbiasa->jumlah }}</td>
                                                <td>{{ $pengajuanbiasa->tanggal }}</td>
                                                <td>{{ $pengajuanbiasa->user_id}}</td>
                                                <td>{{ $pengajuanbiasa->divisi }}</td>
                                               


                                            <td>
                                                <div class="demo-inline-spacing">

                                                    <a type="button" class="btn btn-outline-primary round"
                                                        href="{{ url('pengajuan/HistoriBiasa/' . $pengajuanbiasa->id)}}">Detail</a>
                                                    </a>
                                                </div>
                                            </td>

                                        </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
@endsection
