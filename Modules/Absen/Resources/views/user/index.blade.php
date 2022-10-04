@extends('absen::layouts.main')

@section('content')


<!-- BEGIN: Content-->
<div class="app-content content ">
  <div class="content-overlay"></div>
  <div class="header-navbar-shadow"></div>
  <div class="content-wrapper container-xxl p-0">
    <div class="content-header row">
    </div>
      <div class="content-body">
<!-- Menu Atas -->      
<div class="col-12 order-0 order-md-1">
      <!-- User Pills -->
      <ul class="nav nav-pills mb-2">
        <li class="nav-item">
          <a class="nav-link active" href="/user">
            <i data-feather="user" class="font-medium-3 me-50"></i><span class="fw-bold">User</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/absen/jabatan">
            <i data-feather="star" class="font-medium-3 me-50"></i><span class="fw-bold">Jabatan</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/absen/divisi">
            <i data-feather="trello" class="font-medium-3 me-50"></i><span class="fw-bold">Divisi</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/absen/golongan">
            <i data-feather="codepen" class="font-medium-3 me-50"></i><span class="fw-bold">Golongan</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/absen/pendidikan">
            <i data-feather="award" class="font-medium-3 me-50"></i><span class="fw-bold">Pendidikan</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/absen/uangtunjangan">
            <i data-feather="credit-card" class="font-medium-3 me-50"></i><span class="fw-bold">Uang tunjangan</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/absen/jenispegawai">
            <i data-feather="user-check" class="font-medium-3 me-50"></i><span class="fw-bold">Jenis</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/absen/gajipokok">
            <i data-feather="dollar-sign" class="font-medium-3 me-50"></i><span class="fw-bold">Gaji Pokok</span></a>
        </li>
      </ul>
<!-- menu bawah -->

<!-- Company Table Card -->
<div class="col-lg-12 col-12">
  <div class="card card-company-table">
    <div class="card-body p-0">
      <div class="card-body">
        <h2 class="fw-bolder mb-4">Data User</h2>
           
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
              <th>Name</th>
              <th>Email</th>
              <th>Password</th>
              <th>Action</th>              
            </tr>
          </thead>

          <tbody>
          @if(!empty($users))
          @foreach($users as $user)

            <tr>
              <td></td>
              <td></td>

              <td>
                  <h5>{{ $loop->iteration }}</h5>
              </td>

              <td>
                <div class="d-flex align-items-center">
                  <div>
                    <div class="fw-bolder">{{ $user->name }}</div>
                  </div>
                </div>
              </td>
              
              <td>
                <div class="d-flex align-items-center">
                  <div>
                    <div class="fw-bolder">{{ $user->email }}</div>
                  </div>
                </div>
              </td>

              <td>
                <div class="d-flex align-items-center">
                  <div>
                    <div class="fw-bolder">{{ $user->password }}</div>
                  </div>
                </div>
              </td>

              <td>
                <div class="d-flex align-items-center">
                  <div>
                    <div class="fw-bolder">
                        <a href="/user/{{ $user->id }}/edit" type="button" class="btn btn-icon btn-warning">
                            <span data-feather="edit"></span>
                        </a>
                    </div>
                  </div>
                </div>
              </td>
            </tr>
          @endforeach
          @endif
          </tbody>
        </table>
      </div>
    </div>
  </div>
</section>
<!--/ Basic table -->

      </div>
    </div>
  </div>
</div>
<!--/ Company Table Card -->


  <!-- list and filter end -->
</section>
<!-- users list ends -->

        </div>
      </div>
    </div>
    <!-- END: Content-->

  

@endsection
