@extends('project::layouts.main')

@section('content')

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click"
data-menu="vertical-menu-modern" data-col="">
        <!-- BEGIN: Content-->
        <div class="app-content content ">
            <div class="content-overlay"></div>
            <div class="header-navbar-shadow"></div>
            <div class="content-wrapper container-xxl p-0">
                <div class="content-header row">
                </div>
                <div class="content-body">
                    <section class="invoice-preview-wrapper">
                        <div class="row invoice-preview">
                            <!-- Invoice -->
                            <div class="col-xl-12 col-md-8 col-12">
                                <div class="card invoice-preview-card">
                                    <div class="card-body invoice-padding pb-0">
                                        <!-- Header starts -->
                                        <div
                                            class="d-flex justify-content-center flex-md-row flex-column invoice-spacing mt-0">
                                            <div>

                                                <div class="logo-wrapper">
                                                    @foreach ($projects as $project)
                                                        <h3 class="text" style="text-align:center">PT SAYAGA WISATA BOGOR
                                                        </h3>
                                                        <h3 class="text" style="text-align:center">
                                                            {{ $project->nama_project }}
                                                        </h3>
                                                        <h3 class="text" style="text-align:center">No. Project :
                                                            {{ $project->no_project }}</h3>
                                                    @endforeach
                                                </div>


                                            </div>

                                        </div>
                                        <!-- Header ends -->
                                    </div>

                                    <hr class="invoice-spacing" />

                                    <!-- Invoice Description starts -->
                                    <h4 class="card-title text-center">Biaya</h4>
                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th class="py-1">Kategori</th>
                                                    <th class="py-1">Item</th>
                                                    <th class="py-1">Ket. Jumlah</th>
                                                    <th class="py-1">Ket. Waktu</th>
                                                    <th class="py-1">Biaya Satuan/Hari</th>
                                                    <th class="py-1">Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                @if (!empty($biayas))
                                                    @foreach ($biayas as $biaya)
                                                        {{-- @php
                                           $project = Modules\Pengajuan\Entities\Project::select()
                                                    ->where('id', $biaya->id)
                                                    ->get()
                                                    ->first();                                                    
                                        @endphp --}}
                                                        <tr>
                                                            <td>{{ $biaya->kategori }} </td>
                                                            <td> {{ $biaya->item }}</td>
                                                            <td>{{ $biaya->jumlah }} </td>
                                                            <td>{{ $biaya->waktu }} </td>
                                                            <td>{{ $biaya->biaya_satuan }} </td>
                                                            <td>{{ $biaya->total_biaya }} </td>

                                                        </tr>
                                                    @endforeach
                                                @endif
                                            </tbody>
                                            <tfoot>
                                                <tr style="background-color: blue;">
                                                    <th class="py-1">Jumlah</th>
                                                    <th></th>
                                                    <th></th>
                                                    <th></th>
                                                    <th></th>
                                                    <th>{{ $jumlah_biaya }}</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>

                                    {{-- <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th class="py-1">Jumlah</th>
                                            </tr>
                                        </thead>
                                    </table>
                                </div> --}}
                                    <!-- Invoice Description ends -->
                                    <h4 class="card-title text-center mt-2">Pendapatan</h4>
                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th class="py-1">Kategori</th>
                                                    <th class="py-1">Item</th>
                                                    <th class="py-1">Ket. Jumlah</th>
                                                    <th class="py-1">Ket. Waktu</th>
                                                    <th class="py-1">Pendapatan Satuan/Hari</th>
                                                    <th class="py-1">Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if (!empty($pendapatans))
                                                    @foreach ($pendapatans as $pendapatan)
                                                        {{-- @php
                                       $project = Modules\Pengajuan\Entities\Project::select()
                                                ->where('id', $biaya->id)
                                                ->get()
                                                ->first();                                                    
                                    @endphp --}}
                                                        <tr>
                                                            <td>{{ $pendapatan->kategori }} </td>
                                                            <td> {{ $pendapatan->item }}</td>
                                                            <td>{{ $pendapatan->jumlah }} </td>
                                                            <td>{{ $pendapatan->waktu }} </td>
                                                            <td>{{ $pendapatan->pendapatan_satuan }} </td>
                                                            <td>{{ $pendapatan->total_pendapatan }} </td>

                                                        </tr>
                                                    @endforeach
                                                @endif
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr style="background-color: blue;">
                                                    <th class="py-1">Jumlah</th>
                                                    <th></th>
                                                    <th></th>
                                                    <th></th>
                                                    <th></th>
                                                    <th>{{ $jumlah_pendapatan }}</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                    <div class="row">
                                        <!-- accepted payments column -->
                                        <div class="col-5">
                                        </div>
                                        <!-- /.col -->
                                        <div class="col-7">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <br>
                                                    <tr>
                                                        <th class="py-1">Laba</th>
                                                        <th class=text-right>:</th>
                                                        <td class=text-left>{{ $laba }}</td>
                                                    </tr>
                                                    <tr>
                                                        <th class="py-1">Persentase</th>
                                                        <th class=text-right>:</th>
                                                        <td class=text-left>{{ $persentase }} %</td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                        <!-- /.col -->
                                    </div>
                                    <!-- /.row -->
                                    <div>
                                        <div class="filter-container p-0 row">
                                            <div class="filtr-item col-sm-2 py-1" data-category="1"
                                                data-sort="white sample">
                                                <p style="text-align:center">Diajukan Oleh :</p>
                                                <div class="visible-print text-center">
                                                    {!! QrCode::size(100)->generate(Request::url()); !!}
                                                 
                                                </div>
                                                <p style="text-align:center;">Marcella</p>
                                            </div>

                                            <div class="filtr-item col-sm-2 py-1">
                                                <p style="text-align:center">Disetujui Oleh :</p>
                                                <p style="text-align:center;">Marcella</p>
                                            </div>
                                        </div>


                                    </div>
                                    <div class="col md-3 mb-2 ml-2">
                                        <a href="{{ url('/project/print/' . $project->id) }}" target="blank"
                                            class="btn btn-primary float-end mx-1"> Print
                                         
                                        </a>
                                        <div class="modal-size-sm d-inline-block float-end">
                                            <!-- Button trigger modal -->
                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#small">
                                                Riwayat
                                            </button>
                                            <!-- Modal -->
                                            <div
                                              class="modal fade text-start"
                                              id="small"
                                              tabindex="-1"
                                           
                                            >
                                              <div class="modal-dialog modal-dialog-centered modal-sm">
                                                <div class="modal-content">
                                                  <div class="modal-header">
                                                    <h4 class="modal-title" id="myModalLabel19">Riwayat</h4>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                  </div>
                                                  <div class="modal-body">
                                                    @if ($project->historyProject()->count()>0)
                                                        @foreach ($project->historyProject as $h)
                                                            <p>
                                                                <a href="/project/lihathistory/{{ $h->id }}">Perubahan {{ $loop->iteration }} - {{ $h->created_at }}</a>
                                                            </p>
                                                        @endforeach
                                                    @endif
                                               
                                                  </div>
                                                 
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                    </div>
                                    
                                    <!-- /Invoice -->
                                    <div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
        <!-- END: Content-->
    </body>
    {{-- <script type="text/javascript">
    window.print();
    </script> --}}
@endsection
