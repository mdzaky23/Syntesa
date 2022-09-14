@extends('pengajuan::layouts.main')

@section('content')
<!-- BEGIN: Content-->
<div class="app-content content ">
  <div class="content-overlay"></div>
  <div class="header-navbar-shadow"></div>
  <div class="content-wrapper container-xxl p-0">
    <div class="content-header row">
    </div>
    <div class="content-body"><!-- Dashboard Analytics Start -->
<section id="dashboard-analytics">
<div class="row match-height">
  <div class="content-header-left col-md-12 col-12 mb-2">
    <div class="row breadcrumbs-top">
      <div class="col-12">
        <h2 class="content-header-title float-start mb-0">Pengajuan Di Tolak</h2>
        <div class="breadcrumb-wrapper">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html"> Approval Pengajuan</a>
            </li>
            <li class="breadcrumb-item active">Pengajuan Di Tolak</a>
            </li>
          </ol>
        </div>
      </div>
    </div>

<!-- List DataTable -->
<section id="basic-datatable">
  <div class="row">
  <div class="col-12 mt-2">
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
              </tr>
            </thead> 
            <tbody> 
              <tr> 
                @foreach ($pengajuanbiasas as $pengajuanbiasa)
                                        <tr>
                                            <td></td>

                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $pengajuanbiasa->kategoripengajuan }}</td>
                                            <td>{{ $pengajuanbiasa->keterangan }}</td>
                                            <td>{{ $pengajuanbiasa->jumlah }}</td>
                                            <td>{{ $pengajuanbiasa->tanggal }}</td>
                                            <td>{{ $pengajuanbiasa->divisi }}</td>
                                            <td></td>
                                        </tr>
                                    @endforeach
              </tr>
            </tbody>
  
          </table>
        </div>
      </div>
    </div>

@endsection