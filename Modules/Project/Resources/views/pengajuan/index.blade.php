@extends('project::layouts.main')

@section('content')
    <!-- BEGIN: Content-->

    <body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click"
        data-menu="vertical-menu-modern" data-col="">
        <div class="app-content content ">
            <div class="content-overlay"></div>
            <div class="header-navbar-shadow"></div>
            <div class="content-wrapper container-xxl p-0">
                <div class="content-header row">
                    <div class="content-header-left col-md-9 col-12 mb-2">
                        <div class="row breadcrumbs-top">
                            <div class="col-12">
                                <h2 class="content-header-title float-start mb-0">Data Project</h2>
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
                                            <th></th>
                                            <th>No</th>
                                            <th>No. Project</th>
                                            <th>Nama Project</th>
                                            <th>Pemegang Project</th>
                                            <th>Tanggal Project</th>
                                            <th>Sales Order</th>
                                            <th>Deskripsi</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @if (!empty($projects))
                                            @foreach ($projects as $project)
                                                <tr>
                                                    <td> </td>
                                                    <td> </td>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $project->no_project }} </td>
                                                    <td> {{ $project->nama_project }}</td>
                                                    <td>{{ $project->pemegang_project }} </td>
                                                    <td>{{ $project->tgl_project }} </td>
                                                    <td>
                                                        {{-- @php
                                                        $sales = Modules\Project\Entities\Project::select()->get();
                                                        $countSales=$sales->count();
                                                        $salesKosong=$project->project()->whereNull('sales_order')->count();
                                                    @endphp
                                                         @if ($countsales>0) --}}
                                                         @if ($project->sales_order)
                                                        <a href="{{ asset('storage/' . str_replace('public/', '', $project->sales_order)) }}"
                                                            target="blank" class="btn btn-outline-primary">Lihat</a>    
                                                        @else
                                                        <a href="#"
                                                            target="blank" class="btn btn-outline-danger">Lihat</a>   
                                                        @endif 
                                                    </td>
                                                    <td>{{ $project->deskripsi }} </td>
                                                    <td>

                                                        @if ($project->status == "Perubahan")
                                                        <span class="badge rounded-pill badge-light-danger">Perubahan</span>
                                                        @elseif ($project->status == "Normal")
                                                        <span class="badge rounded-pill badge-light-info">Normal</span>
                                                        @endif
                                                


                                                    </td>
                                                    <td>
                                                        @php
                                                            $lihat = Modules\Project\Entities\Lampiran::select()
                                                                ->where('project_id', $project->id);
                                                            $countLihat=$lihat->count();
                                                            $lampiranKosong=$project->lampiran()->whereNull('dokumen')->count();
                                                        @endphp
                                                        @if ($countLihat>0)
                                                            <a href="/project/pengajuan/"{{ $project->id }}
                                                                class="btn btn-icon 
                                                                @if ($lampiranKosong>0)
                                                                    btn-danger
                                                                @else
                                                                    btn-info
                                                                @endif
                                                                " data-bs-toggle="modal"
                                                                data-bs-target="#lampiran_{{ $project->id }}"><span
                                                                    data-feather="eye"></span></a>
                                                            
                                                        @else
                                                            <a href="/project/pengajuan/"{{ $project->id }}
                                                                class="btn btn-icon btn-danger" data-bs-toggle="modal"
                                                                data-bs-target="#lampiran_{{ $project->id }}"><span
                                                                    data-feather="eye"></span></a>
                                                        @endif
                                                            
                                                            <a href="/project/lihat/{{ $project->id }}"
                                                                class="btn btn-icon btn-primary"><span
                                                                    data-feather="book-open"></span></a>
                                                            <a href="{{ route('pengajuan.edit', $project->id) }}"
                                                                class="btn btn-icon btn-warning"><span
                                                                    data-feather="edit"></span></a>
                                                            <form action="/project/pengajuan/{{ $project->id }}"
                                                                method="POST" class="d-inline">
                                                                @method('delete')
                                                                @csrf
                                                                <button class="btn btn-icon btn-danger border-0"
                                                                    onclick="return confirm('Hapus ?')"><span
                                                                        data-feather="trash-2"></span></button>
                                                            </form>
                                                        
                                                    </td>
                                                </tr>

                                                <div class="modal fade" id="lampiran_{{ $project->id }}" tabindex="-1"
                                                    aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">

                                                            <div class="modal-header">
                                                                <h5 class="modal-title">Lampiran</h5>
                                                                <button type="button" class="btn-close"
                                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>

                                                            <div class="modal-body">
                                                                @foreach ($project->lampiran as $lampiran)
                                                                    <div> {{ $lampiran->kategori }}

                                                                        @if ($lampiran->dokumen != '')
                                                                            <div> <a href="/project/lampiran/{{ $lampiran->id }}"
                                                                                    class="btn btn-primary mb-1  btn-sm"
                                                                                    target="blank">Lihat
                                                                                    Lampiran </a>
                                                                                <a class="btn btn-primary mb-1 btn-sm"
                                                                                    data-bs-toggle="collapse"
                                                                                    href="#biru"
                                                                                   >
                                                                                    Note
                                                                                </a>

                                                                                <div class="collapse" id="biru">
                                                                                    <div class="d-flex p-1 border">

                                                                                        <span>
                                                                                            {{ $lampiran->keterangan }}
                                                                                        </span>
                                                                                    </div>
                                                                                </div>



                                                                            </div>
                                                                            <hr>
                                                                        @else
                                                                            <div> <a href="#"
                                                                                    class="btn btn-danger mb-1  btn-sm"
                                                                                    target="blank">Lihat
                                                                                    Lampiran </a>
                                                                                <a class="btn btn-primary mb-1 btn-sm"
                                                                                    data-bs-toggle="collapse"
                                                                                    href="#">
                                                                                    Note
                                                                                </a>

                                                                                <div class="collapse" id="red">
                                                                                    <div class="d-flex p-1 border">

                                                                                        <span>
                                                                                            {{ $lampiran->keterangan }}
                                                                                        </span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <hr>
                                                                        @endif

                                                                    </div>
                                                                @endforeach
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </section>
            </div>
        </div>

    </body>
@endsection
