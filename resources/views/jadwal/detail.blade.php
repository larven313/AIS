@extends('layout')
@section('content')
    <!-- Hoverable rows -->
    <div id="layoutSidenav_content">
        {{-- Main Page --}}
        <main>
            <div class="container-xl px-4 mt-5">
                <div class="row" id="table-hover-row">
                    <div class="col-12">
                        <div class="page-heading">
                            <div class="page-title">
                                <div class="row">
                                    <div class="col-12 col-md-6 order-md-1 order-last">
                                        <h3>Detail Asdos</h3>
                                        <p class="text-subtitle text-muted">
                                            Kumpulan data asdos
                                        </p>
                                    </div>
                                    <div class="col-12 col-md-6 order-md-2 order-first">
                                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
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
                                <div class="card text-bg-dark mb-3">
                                    <div class="card-header">Praktikum: {{$dataJadwal->nama_matkul}}</div>
                                    <div class="card-body">
                                      <p class="card-title">Nama: {{$dataJadwal->nama}}</p>
                                      <p class="card-title">NIM: {{$dataJadwal->nim_asdos}}</p>
                                      <p class="card-title">Jurusan: {{$dataJadwal->nama_prodi}}</p>
                                      <p class="card-text">Jumlah SKS: {{$dataJadwal->sks}} SKS</p>
                                      <p class="card-text">Jadwal Hari: {{$dataJadwal->jadwal_hari}}</p>
                                      <p class="card-text">Jadwal Jam: {{$dataJadwal->jadwal_jam}}</p>
                                    </div>
                                  </div>
                            </section>
                            <!-- Basic Tables end -->
                        </div>
                    </div>
                </div>
            </div>
        </main>
        {{-- End Main Page --}}
    </div>
    <!-- Hoverable rows end -->
@endsection
