@extends('layout')
@section('content')

<div id="layoutSidenav_content">
    <main>
    <div class="container-xl px-4 mt-5">
    <div class="row" id="table-hover-row">
      <div class="col-12">
        <div class="page-heading">
          <div class="page-title">
            <div class="row">
              <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Data Asdos</h3>
                <p class="text-subtitle text-muted">
                  Kumpulan data Asdos
                </p>
              </div>
              <div class="col-12 col-md-6 order-md-2 order-first">
                <nav
                  aria-label="breadcrumb"
                  class="breadcrumb-header float-start float-lg-end"
                >
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                      <a href="{{ url('/') }}">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                      Data Asdos
                    </li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>

          <!-- Basic Tables start -->
          <section class="section">
            <div class="card">
              <div class="card-header">Data Mahasiswa</div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table" id="table1">
                    <thead>
                      <tr>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Semester</th>
                        <th>Jenis Kelamin</th>
                        <th>Tempat Lahir</th>
                        <th>IPK</th>
                        <th>ACTION</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ($dataAsdos as $asdos)
                    
                    <tr>
                        <td class="text-bold-500">{{ $asdos->nim_asdos }}</td>
                        <td>{{ $asdos->nama }}</td>
                        <td>{{ $asdos->semester }}</td>
                        <td>{{ $asdos->gender }}</td>
                        <td class="text-bold-500">{{ $asdos->idprodi}}</td>
                        <td>{{ $asdos->iduser }}</td>
                        <td>
                          <a href="#"
                            ><i
                              class="badge-circle badge-circle-light-secondary font-medium-1"
                              data-feather="mail"
                            ></i
                          ></a>
                        </td>
                      </tr>
    
                    @endforeach
                      
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </section>
          <!-- Basic Tables end -->
        </div>
      </div>
    </div>
    </div>
</main>
</div>
  <!-- Hoverable rows end -->

@endsection