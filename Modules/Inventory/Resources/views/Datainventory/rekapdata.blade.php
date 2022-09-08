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
                                    <th>Jumlah Barang</th>
                                    <th>Harga Barang</th>
                                    <th>Tanggal Beli</th>
                                    <th>Umur Ekonomi</th>
                                    <th>Tanggal Peremajaan</th>
                                    <th>Lampiran</th>
                                    <th>Lokasi</th>
                                    <th>Ruangan</th>
                                    <th>Lantai</th>
                                    <th>Kategori Barang</th>
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
                                $array_bln = [
                                '01' => 'I',
                                '02' => 'II',
                                '03' => 'III',
                                '04' => 'IV',
                                '05' => 'V',
                                '06' => 'VI',
                                '07' => 'VII',
                                '08' => 'VIII',
                                '09' => 'IX',
                                '10' => 'X',
                                '11' => 'XI',
                                '12' => 'XII',
                                ];
                                $bln =$array_bln[$bulan];
                                @endphp

                                <tr>
                                    <td></td>

                                    <td> {{$barang->nomer_inventaris}}/IN/SWB/{{ $bln}}/{{$tahun}} </td>
                                    <td>{{$barang->nama_brg}}</td>
                                    <td>{{$barang->tipe_brg}}</td>

                                    <td>{{$barang->jumlah_brg}}</td>
                                    <td>{{$barang->harga_brg}}</td>
                                    <td>{{$barang->tgl_beli}}</td>

                                    <td>{{$barang->umur_ekonomi}}</td>
                                    <td>{{$barang->tgl_peremajaan}}</td>
                                    <td>
                                        <a class="btn btn-success" target="blank" href="{{ asset('storage/' . $barang->lampiran)}}"> <span data-feather="eye"> </span></a>
                                    </td>
                                    <td>{{$barang->kategori_lokasi}}</td>
                                    <td>{{$barang->ruangan_lokasi}}</td>
                                    <td>{{$barang->lantai_lokasi}}</td>
                                    <td>{{$barang->kategori_brg}}</td>

                                    @endforeach
                                    @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div> -->
            <!-- Modal to add new record -->
            <div class=" modal modal-slide-in fade" id="modals-slide-in">
                <div class="modal-dialog sidebar-sm">
                    <form class="add-new-record modal-content pt-0">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">×</button>
                        <div class="modal-header mb-1">
                            <h5 class="modal-title" id="exampleModalLabel">New Record</h5>
                        </div>
                        <div class="modal-body flex-grow-1">
                            <div class="mb-1">
                                <label class="form-label" for="basic-icon-default-fullname">Full Name</label>
                                <input type="text" class="form-control dt-full-name" id="basic-icon-default-fullname" placeholder="John Doe" aria-label="John Doe" />
                            </div>
                            <div class="mb-1">
                                <label class="form-label" for="basic-icon-default-post">Post</label>
                                <input type="text" id="basic-icon-default-post" class="form-control dt-post" placeholder="Web Developer" aria-label="Web Developer" />
                            </div>
                            <div class="mb-1">
                                <label class="form-label" for="basic-icon-default-email">Email</label>
                                <input type="text" id="basic-icon-default-email" class="form-control dt-email" placeholder="john.doe@example.com" aria-label="john.doe@example.com" />
                                <small class="form-text"> You can use letters, numbers & periods </small>
                            </div>
                            <div class="mb-1">
                                <label class="form-label" for="basic-icon-default-date">Joining Date</label>
                                <input type="text" class="form-control dt-date" id="basic-icon-default-date" placeholder="MM/DD/YYYY" aria-label="MM/DD/YYYY" />
                            </div>
                            <div class="mb-4">
                                <label class="form-label" for="basic-icon-default-salary">Salary</label>
                                <input type="text" id="basic-icon-default-salary" class="form-control dt-salary" placeholder="$12000" aria-label="$12000" />
                            </div>
                            <button type="button" class="btn btn-primary data-submit me-1">Submit</button>
                            <button type="reset" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
        <!-- </tr>
                            </thead>
                            <tbody>
                                @foreach ($barangs as $barang )
                                <tr>
                                    <td> {{$barang->nomer_inventaris}} </td>
                                    <td>
                                        <div class="visible-print text-center">
                                            {!! QrCode::size(60)->generate(Request::url()); !!}
                                        </div>
                                    </td>
                                    <td>{{$barang->nama_brg}}</td>
                                    <td>{{$barang->tipe_brg}}</td>

                                    <td>{{$barang->kategori_brg}}</td>
                                    <td>{{$barang->jumlah_brg}}</td>
                                    <td>{{$barang->tgl_beli}}</td>

                                    <td>{{$barang->umur_ekonomi}}</td>
                                    <td>{{$barang->tgl_peremajaan}}</td>
                                    <td>{{$barang->kategori_lokasi}}</td>
                                    <td>{{$barang->ruangan_lokasi}}</td>
                                    <td>{{$barang->lantai_lokasi}}</td> -->
        <!-- <td>{{$barang->lampiran}}</td> -->
        <!-- </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- </section> -->
        <!-- 
    </div>
    </div>
    </div> -->

        @endsection