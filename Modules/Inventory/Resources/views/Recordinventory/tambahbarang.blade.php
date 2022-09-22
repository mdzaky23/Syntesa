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
              <h2 class="content-header-title float-start mb-0">Tambah Barang</h2>
              <div class="breadcrumb-wrapper">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item">Record Inventory</a>
                  </li>
                  <li class="breadcrumb-item">Tambah Barang</a>
                  </li>
                </ol>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="content-body">
        <!-- Modern Vertical Wizard -->

        <section class="modern-vertical-wizard">
          <form class="needs-validation" method="POST" action="/inventory/tambahbarang" enctype="multipart/form-data">
            @csrf
            <div class="bs-stepper vertical wizard-modern modern-vertical-wizard-example">
              <div class="bs-stepper-header">
                <div class="step" data-target="#personal-info-vertical-modern" role="tab" id="personal-info-vertical-modern-trigger">
                  <button type="button" class="step-trigger">
                    <span class="bs-stepper-box">
                      <i data-feather="user" class="font-medium-3"></i>
                    </span>
                    <span class="bs-stepper-label">
                      <span class="bs-stepper-title">Data Barang</span>
                      <span class="bs-stepper-subtitle">Masukan Data Barang</span>
                    </span>
                  </button>
                </div>
                <div class="step" data-target="#address-step-vertical-modern" role="tab" id="address-step-vertical-modern-trigger">
                  <button type="button" class="step-trigger">
                    <span class="bs-stepper-box">
                      <i data-feather="map-pin" class="font-medium-3"></i>
                    </span>
                    <span class="bs-stepper-label">
                      <span class="bs-stepper-title">Lokasi Barang</span>
                      <span class="bs-stepper-subtitle">Masukan Lokasi</span>
                    </span>
                  </button>
                </div>
              </div>
              <div class="bs-stepper-content">
                <div id="personal-info-vertical-modern" class="content" role="tabpanel" aria-labelledby="personal-info-vertical-modern-trigger">
                  <div class="content-header">
                    <h3 class="mb-0">Data Barang</h3>
                  </div>
                  <div class="row">
                    <div class="mb-1 col-md-6">
                      <label class="form-label" for="nomer_inventaris">Nomer Inventaris</label>
                      <input type="text" id="nomer_inventaris" class="form-control" name="nomer_inventaris" placeholder=" Masukan No Inventaris" value="{{$nomer_inventaris }}" />
                    </div>
                    <div class="mb-1 col-md-6">
                      <label class="form-label" for="nama_brg">Nama Barang</label>
                      <input type="text" id="nama_brg" class="form-control" name="nama_brg" placeholder=" Masukan Nama Barang" />
                    </div>
                    <div class="mb-1 col-md-6">
                      <label class="form-label" for="jumlah_brg">Jumlah barang</label>
                      <input type="string" id="jumlah_brg" class="form-control" name="jumlah_brg" placeholder=" Masukan Jumlah barang" />
                    </div>
                    <div class="mb-1 col-md-6">
                      <label class="form-label" for="merk_brg">Merk Barang</label>
                      <input type="text" id="merk_brg" class="form-control" name="merk_brg" placeholder=" Masukan Jenis Barang" />
                    </div>
                    <div class="mb-1 col-md-6">
                      <label class="form-label" for="tipe_brg">Tipe Barang</label>
                      <input type="text" id="tipe_brg" class="form-control" name="tipe_brg" placeholder=" Masukan Jenis Barang" />
                    </div>
                    <div class="mb-1 col-md-6">
                      <label class="form-label" for="harga_brg">Harga Barang</label>
                      <input type="string" id="harga_brg" class="form-control" name="harga_brg" placeholder=" Masukan Jenis Barang" />
                    </div>
                    <div class="mb-1 col-md-6">
                      <label class="form-label" for="kategori_id">Kategori Barang</label>
                      <select class="select2 w-100" id="kategori_id" name="kategori_id">
                        <option label=" "></option>
                        <option value="1">Alat Kerja</option>
                        <option value="2">Kebutuhan Oprasional</option>
                        <option value="3">Elektronik</option>
                        <option value="4">Furniture</option>
                      </select>
                    </div>
                    <div class="mb-1 col-md-6">
                      <label class="form-label" for="tgl_beli">Tanggal beli</label>
                      <input type="date" id="tgl_beli" class="form-control" name="tgl_beli" placeholder="mm/dd/yyyy" />
                    </div>
                  </div>
                  <div class=" row">
                    <div class="mb-1 col-md-6">
                      <label class="form-label" for="umur_ekonomi">Umur Ekonomi</label>
                      <select class="select2 w-100" id="umur_ekonomi" name="umur_ekonomi">
                        <option label=" "></option>
                        <option value="1">1 Bulan</option>
                        <option value="2">2 Bulan</option>
                        <option value="3">3 Bulan</option>
                        <option value="4">4 Bulan</option>
                        <option value="5">5 Bulan</option>
                        <option value="6">6 Bulan</option>
                        <option value="7">7 Bulan</option>
                        <option value="8">8 Bulan</option>
                        <option value="9">9 Bulan</option>
                        <option value="10">10 Bulan</option>
                        <option value="11">11 Bulan</option>
                        <option value="12">1 Tahun</option>
                        <option value="13">1 Tahun 1 Bulan</option>
                        <option value="14">1 Tahun 2 Bulan</option>
                        <option value="15">1 Tahun 3 Bulan</option>
                        <option value="16">1 Tahun 4 Bulan</option>
                        <option value="17">1 Tahun 5 Bulan</option>
                        <option value="18">1 Tahun 6 Bulan</option>
                        <option value="19">1 Tahun 7 Bulan</option>
                        <option value="20">1 Tahun 8 Bulan</option>
                        <option value="21">1 Tahun 9 Bulan</option>
                        <option value="22">1 Tahun 10 Bulan</option>
                        <option value="23">1 Tahun 11 Bulan</option>
                        <option value="24">2 Tahun</option>
                        <option value="25">2 Tahun 1 Bulan</option>
                        <option value="26">2 Tahun 2 Bulan</option>
                        <option value="27">2 Tahun 3 Bulan</option>
                        <option value="28">2 Tahun 4 Bulan</option>
                        <option value="29">2 Tahun 5 Bulan</option>
                        <option value="30">2 Tahun 6 Bulan</option>
                        <option value="31">2 Tahun 7 Bulan</option>
                        <option value="32">2 Tahun 8 Bulan</option>
                        <option value="33">2 Tahun 9 Bulan</option>
                        <option value="34">2 Tahun 10 Bulan</option>
                        <option value="35">2 Tahun 11 Bulan</option>
                        <option value="36">3 Tahun</option>
                        <option value="37">3 Tahun 1 Bulan</option>
                        <option value="38">3 Tahun 2 Bulan</option>
                        <option value="39">3 Tahun 3 Bulan</option>
                        <option value="40">3 Tahun 4 Bulan</option>
                        <option value="41">3 Tahun 5 Bulan</option>
                        <option value="42">3 Tahun 6 Bulan</option>
                        <option value="43">3 Tahun 7 Bulan</option>
                        <option value="44">3 Tahun 8 Bulan</option>
                        <option value="45">3 Tahun 9 Bulan</option>
                        <option value="46">3 Tahun 10 Bulan</option>
                        <option value="47">3 Tahun 11 Bulan</option>
                        <option value="48">4 Tahun</option>
                        <option value="49">4 Tahun 1 Bulan</option>
                        <option value="50">4 Tahun 2 Bulan</option>
                        <option value="51">4 Tahun 3 Bulan</option>
                        <option value="52">4 Tahun 4 Bulan</option>
                        <option value="53">4 Tahun 5 Bulan</option>
                        <option value="54">4 Tahun 6 Bulan</option>
                        <option value="55">4 Tahun 7 Bulan</option>
                        <option value="56">4 Tahun 8 Bulan</option>
                        <option value="57">4 Tahun 9 Bulan</option>
                        <option value="58">4 Tahun 10 Bulan</option>
                        <option value="59">4 Tahun 11 Bulan</option>
                        <option value="60">5 Tahun</option>
                        <option value="61">5 Tahun 1 Bulan</option>
                        <option value="62">5 Tahun 2 Bulan</option>
                        <option value="63">5 Tahun 3 Bulan</option>
                        <option value="64">5 Tahun 4 Bulan</option>
                        <option value="65">5 Tahun 5 Bulan</option>
                        <option value="66">5 Tahun 6 Bulan</option>
                        <option value="67">5 Tahun 7 Bulan</option>
                        <option value="68">5 Tahun 8 Bulan</option>
                        <option value="69">5 Tahun 9 Bulan</option>
                        <option value="70">5 Tahun 10 Bulan</option>
                        <option value="71">5 Tahun 11 Bulan</option>
                        <option value="72">6 Tahun</option>
                      </select>
                    </div>
                    <div class="mb-1 col-md-6">
                      <label class="form-label" for="tgl_peremajaan">Tanggal Peremajaan</label>
                      <input type="date" id="tgl_peremajaan" class="form-control" name="tgl_peremajaan" placeholder="mm/dd/yyyy" />
                    </div>
                    <div class="mb-1 col-md-6">
                      <label class="form-label" for="lampiran">Lampiran</label>
                      <input type="file" id="lampiran" class="form-control" name="lampiran" placeholder=" Masukan Tanggal" />
                    </div>
                  </div>
                  <div class="d-flex justify-content-between mt-3">
                    <button type="button" class="btn btn-outline-secondary btn-prev" disabled>
                      <i data-feather="arrow-left" class="align-middle me-sm-25 me-0"></i>
                      <span class="align-middle d-sm-inline-block d-none">Previous</span>
                    </button>
                    <button type="button" class="btn btn-primary btn-next">
                      <span class="align-middle d-sm-inline-block d-none">Next</span>
                      <i data-feather="arrow-right" class="align-middle ms-sm-25 ms-0"></i>
                    </button>
                  </div>
                </div>
                <div id="address-step-vertical-modern" class="content" role="tabpanel" aria-labelledby="address-step-vertical-modern-trigger">
                  <div class="content-header">
                    <h3 class="mb-0">Lokasi Barang</h3>
                  </div>
                  <div class="row">
                    <div class="mb-1 col-md-6">
                      <label class="form-label" for="kategori_lokasi">Kategori Lokasi</label>
                      <select class="select2 w-100" id="kategori_lokasi" name="kategori_lokasi">
                        <option label=" "></option>
                        <option>Kantor Sayaga</option>
                        <option>Hotel Sayaga</option>
                        <option>Tirta Sayaga</option>
                      </select>
                    </div>
                    <div class="mb-1 col-md-6">
                      <label class="form-label" for="ruangan_lokasi">Ruangan </label>
                      <input type="text" id="ruangan_lokasi" class="form-control" name="ruangan_lokasi" placeholder=" Masukan Ruangan " />
                    </div>
                  </div>
                  <div class=" row">
                    <div class="mb-1 col-md-6">
                      <label class="form-label" for="lantai_lokasi">Lantai </label>
                      <input type="text" id="lantai_lokasi" class="form-control" name="lantai_lokasi" placeholder=" Masukan Lantai " />
                    </div>
                  </div>
                  <div class="d-flex justify-content-between">
                    <button class="btn btn-primary btn-prev">
                      <i data-feather="arrow-left" class="align-middle me-sm-25 me-0"></i>
                      <span class="align-middle d-sm-inline-block d-none">Previous</span>
                    </button>
                    <button type="submit" class="btn btn-success btn-submit">Submit</button>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </section>
      </div>
    </div>
  </div>


  @endsection