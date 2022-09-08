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
                       
                        <div class="mt-2">
                            <h6>Kategori        : {{$detail->kategori}}</h6>
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
                            <h6>Yang Mengajukan   : {{ $detail->user_id}}</h6>
                        </div>
                        <div class="mt-2">
                            <h6>Divisi            : {{$detail->divisi}}</h6>
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
                                                   



                                                     
             {{-- <!-- add new card modal  -->
             <div class="modal fade" id="lihatlampiran" tabindex="-1"
             aria-labelledby="addNewCardTitle" aria-hidden="true">
             <div class="modal-dialog modal-dialog-centered">
                 <div class="modal-content">
                     <div class="modal-header bg-transparent">
                         <button type="button" class="btn-close"
                             data-bs-dismiss="modal"
                             aria-label="Close"></button>
                     </div>
                     <div class="modal-body px-sm-5 mx-50 pb-5">
                         <h1 class="text-center mb-1" id="addNewCardTitle">
                             Lampiran
                         </h1>
                         <p class="text-center"></p>
                             <div class="row gy-1 gx-2 mt-75" method="POST"
                             action="/pengajuan/pengajuanBiasa">
                             @csrf
                             
                                 <iframe class="img-fluid rounded mb-75"
                                 src="{{ asset('storage/' . $detail->lampiran) }}" height="300"
                                 ></iframe>
                     </div>
                 </div>
             </div>
         </div>
         <!--/ add new card modal  --> --}}
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
            
            {{-- @foreach ($pengajuanbiasas as $pengajuanbiasa)
            @php
               $pengajuan_biasa = Modules\Pengajuan\Entities\PengajuanBiasa::select()
                ->where('id', $pengajuanbiasa->pengajuan_biasa_id)
                ->get()
                ->first(); 
            @endphp

            if($kategoripengajuan == 1 || $kategoripengajuan == 2)  --}}
            
            
            <h3 class="mb-75 mt-3 text-center">Tanggapi Pengajuan</h3>
            <div class="demo-inline-spacing mt-2">
                <div class="demo-inline-spacing mt-4">
                    <input type="hidden" name="status" id="status" value=1>
                    <button type="submit"  class="btn btn-success">Setuju</button>
                </div>

                <div class="demo-inline-spacing mt-4">
                    <input type="hidden" name="status" id="status" value=2>
                    <button type="submit" class="btn btn-danger"class="btn btn-success">Tolak</button>
                </div>    
            </form>
           
           
    @endsection


            {{-- <div class="form-check form-check-danger ">
              <input type="checkbox" class="form-check-input" id="colorCheck5" unchecked />
              <label class="form-check-label" for="colorCheck5">Danger</label>
            </div>

            <div class="form-check form-check-warning">
              <input type="checkbox" class="form-check-input" id="colorCheck4" unchecked />
              <label class="form-check-label" for="colorCheck4">Warning</label>
            </div>

            <div class="form-check form-check-info">
              <input type="checkbox" class="form-check-input" id="colorCheck6" unchecked />
              <label class="form-check-label" for="colorCheck6">Info</label>
            </div>

            </div>
             <button type="button"class="btn btn-success mt-2 col-12">Save</button> --}}
    

          
                    
              

                     <!-- add new card modal  -->
                     {{-- <div class="modal fade" id="setuju" tabindex="-1"
                     aria-labelledby="addNewCardTitle" aria-hidden="true">
                     <div class="modal-dialog modal-dialog-centered">
                         <div class="modal-content">
                             <div class="modal-header bg-transparent">
                                 <button type="button" class="btn-close"
                                     data-bs-dismiss="modal"
                                     aria-label="Close"></button>
                             </div>
                             <div class="modal-body px-sm-5 mx-50 pb-5">
                                 <h1 class="text-center mb-1" id="addNewCardTitle">
                                     Apakah Anda Yakin Untuk Menyetujui Pengajuan ?
                                 </h1>
                                 <p class="text-center"></p>

                                 <!-- form -->
                                 <div id="addNewCardValidation">
                                     {{-- class="row gy-1 gx-2 mt-75" method="POST"
                                     action="/pengajuan/HistoriBiasa"> --}}
                                     {{-- @csrf --}}

                                     {{-- <form class="col-md-12">
                                         <label class="form-label"
                                             for="catatan">Catatan</label>
                                         <textarea class="form-control" id="catatan" name="catatan" rows="3" placeholder="Catatan Anda"></textarea>
                                     </div>
                                     <input type="hidden" name="pengajuan_biasa_id"
                                         value="{{ $detail->id }}">
                                     <input type="hidden" name="status_id" value=1>
                                     <input type="hidden" name="user_id"
                                         value="{{ Auth::user()->id }}">

                                     <div class="col-12 text-center">
                                         <button type="submit"
                                             class="btn btn-primary me-1 mt-1">Yakin</button>
                                         <button type="reset"
                                             class="btn btn-outline-secondary mt-1"
                                             data-bs-dismiss="modal"
                                             aria-label="Close">
                                             Tidak
                                         </button>
                                     </div>
                                    </form>
                             </div>
                         </div>
                     </div>
                 </div>
                 <!--/ add new card modal  --> --}}


                     {{-- <!-- add new card modal  -->
                     <div class="modal fade" id="tolak" tabindex="-1"
                     aria-labelledby="addNewCardTitle" aria-hidden="true">
                     <div class="modal-dialog modal-dialog-centered">
                         <div class="modal-content">
                             <div class="modal-header bg-transparent">
                                 <button type="button" class="btn-close"
                                     data-bs-dismiss="modal"
                                     aria-label="Close"></button>
                             </div>
                             <div class="modal-body px-sm-5 mx-50 pb-5">
                                 <h1 class="text-center mb-1" id="addNewCardTitle">
                                     Apakah Anda Yakin Untuk Menolak Pengajuan ?
                                 </h1>
                                 <p class="text-center"></p>

                                 <!-- form -->
                                 <form id="addNewCardValidation"
                                     class="row gy-1 gx-2 mt-75" method="POST"
                                     action="/pengajuan/History">
                                     @csrf

                                     <div class="col-md-12">
                                         <label class="form-label"
                                             for="catatan">Catatan</label>
                                         <textarea class="form-control" id="catatan" name="catatan" rows="3" placeholder="Catatan Anda"></textarea>
                                     </div>
                                     <input type="hidden" name="pengajuan_biasa_id"
                                         value="{{ $detail->id }}">
                                     <input type="hidden" name="status_id" value=1>
                                     <input type="hidden" name="user_id"
                                         value="{{ Auth::user()->id }}">

                                     <div class="col-12 text-center">
                                         <button type="submit"
                                             class="btn btn-primary me-1 mt-1">Yakin</button>
                                         <button type="reset"
                                             class="btn btn-outline-secondary mt-1"
                                             data-bs-dismiss="modal"
                                             aria-label="Close">
                                             Tidak
                                         </button>
                                     </div>
                                 </form>
                             </div>
                         </div>
                     </div>
                 </div>
                 <!--/ add new card modal  --> --}}



                    