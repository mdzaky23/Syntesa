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
                            <h2 class="content-header-title float-start mb-0">Detail Pengajuan</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="/pengajuan/pengajuanBiasa/create">Pengajuan Masuk</a>
                                    </li>
                                    <li class="breadcrumb-item active"><a href="#">Detail Pengajuan</a>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
             
                <div class="col-sm-12">
                    <div class="card">
                      <div class="card-header">
                        <h3 class="mb-75 ">Detail Pengajuan</h3>
                      </div>
               
                      <div class="card-body">
                        <p class="card-text">
                       
                            @php
                            $kategori = Modules\Pengajuan\Entities\kategori_pengajuan::select()
                                 ->where('kategori', $detail->kategori)
                                 ->get()
                                 ->first();
                             $divisi = Modules\Pengajuan\Entities\Divisi::select()
                                 ->where('divisi', $detail->divisi)
                                 ->get()
                                 ->first();
                             $user = App\Models\User::select()
                                 ->where('id', $detail->user_id)
                                 ->get()
                                 ->first();
                             @endphp

                        <div class="mt-2">
                            <h6>Kategori        : {{$kategori->keterangan}}</h6>
                        </div>
                        <div class="mt-2">
                            <h6>Keterangan        : {{$detail->keterangan}}</h6>
                        </div>
                        <div class="mt-2">
                            <h6>Jumlah            : {{$detail->jumlah}}</h6>
                        </div>
                        <div class="mt-2">
                            <h6>Tanggal Pengajuan : {{$detail->tanggal}}</h6>
                        </div>
                        <div class="mt-2">
                            <h6>Yang Mengajukan   : {{ $user->keterangan}}</h6>
                        </div>
                        <div class="mt-2">
                            <h6>Divisi            : {{$divisi->keterangan}}</h6>
                        </div>
                        <div class="mt-2">
                            <h6>Catatan           : {{$detail->catatan}}</h6>
                        </div>
                   <hr class="mt-3">


                        <h3 class="mb-75 mt-5">Detail Lampiran</h3>
                        
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <table class="datatables-basic table">
                                            <thead>
                                               
                                                <tr>
                                                    <th></th>
                                                    <th>No</th>
                                                    <th>Nama Lampiran</th>
                                                    <th>Lampiran</th>
                                                </tr>
                                                <tbody>
                                                    @foreach ($pengajuanlampirans as $pengajuanlampiran)
                                                    @php
                                                       $pengajuan_biasa = Modules\Pengajuan\Entities\LampiranPengajuanBiasa::select()
                                                                ->where('id', $pengajuanlampiran->pengajuan_biasa_id)
                                                                ->get()
                                                                ->first();                                                    
                                                    @endphp
                                                <tr>
                                                    <td></td>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $pengajuanlampiran->note_lampiran }}</td>
                                                   
                                                <td> <div class="demo-inline-spacing align=center">
                                                    <a type="button" class="btn btn-icon btn-outline-primary" target="blank" href="{{ asset('storage/' . $pengajuanlampiran->lampiran) }}">
                                                      <i data-feather="eye"></i>
                                                    </a>
                                                     </td>
                                                    </tr>
                                                @endforeach
                                                </div>
                                                </tbody>
                                            </thead>
                                        </table>
                                    </div>
                            </div>
                 <hr>

            <form method="POST" action="/pengajuan/HistoriBiasa/ {{  $detail->id }}" >
            @csrf
            @method('put');
            
            <h3 class="mb-75 mt-3 text-center">Tanggapi Pengajuan</h3>
            <div class="demo-inline-spacing mt-2">
                <div class="demo-inline-spacing mt-4">
                    <input type="hidden" name="status" id="status" value=1>
                    <input type="hidden" name="jabatan" id="jabatan" value=3>
                    <button type="submit"  class="btn btn-primary">Setuju</button>
                </div>

                <div class="demo-inline-spacing mt-4">
                    <input type="hidden" name="status" id="status" value=2>
                    <input type="hidden" name="jabatan" id="jabatan" value=3>
                    <button type="submit" class="btn btn-danger">Tolak</button>
                </div>    
            </form>
           
           
@endsection



                    