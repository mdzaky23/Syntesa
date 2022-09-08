@extends('inventory::layouts.main')

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="">

    @section('content')

    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-start mb-0">Data Detail</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Inventory</a>
                                    </li>
                                    <li class="breadcrumb-item"><a href="index.html">Detail</a>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-header-right text-md-end col-md-3 col-12 d-md-block d-none">
                    <div class="mb-1 breadcrumb-right">
                    </div>
                </div>
            </div>
            <div class=" col-6">
                <div class="card">
                    <div class="card-header d-flex justify-content align-items-start mb-1 pb-1">
                        <div>
                            <h1 class="card-title mb-1">No Inventaris : {{ $nomer_inventaris }}</h1>
                            <h1 class="card-title mb-1">Nama Barang : {{ $barang -> nama_brg }}</h1>
                            <p class="card-text">Kategori Barang :{{ $barang -> kategori_brg }}</p>
                            <a class="btn btn-success" href="/inventory/print" target="blank"><span data-feather="printer"></span></a>
                        </div>

                        <div class="visible-print text-center">
                            {!! QrCode::size(200)->generate(Request::url()); !!}
                        </div>
                        <!-- <i data-feather="more-vertical" class="font-medium-3 cursor-pointer"></i> -->
                    </div>

                </div>
            </div>
        </div>

        @endsection