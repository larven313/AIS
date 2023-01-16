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
                                        <h3>Data Jadwal Asisten Dosen</h3>
                                        <p class="text-subtitle text-muted">
                                            Kumpulan data jadwal
                                        </p>
                                    </div>
                                    <div class="col-12 col-md-6 order-md-2 order-first">
                                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                            <ol class="breadcrumb">
                                                <li class="breadcrumb-item">
                                                    <a href="{{ url('/') }}">Dashboard</a>
                                                </li>
                                                <li class="breadcrumb-item active" aria-current="page">
                                                    Data Jadwal Asisten Dosen
                                                </li>
                                            </ol>
                                        </nav>
                                    </div>
                                </div>
                            </div>

                            <!-- Basic Tables start -->
                            <section class="section">
                                <a href="#" class="my-4 btn btn-primary text">Tambah Jadwal Asisten Dosen</a>
                                <div class="card">
                                    <div class="card-header">Data Jadwal Asisten Dosen</div>
                                    <div class="card-body">
                                        <div class="table-responsive text-center">
                                            <table class="table" id="table1">
                                                <thead>
                                                    <tr>
                                                        <th>NO</th>
                                                        <th>Nama</th>
                                                        <th>Matkul</th>
                                                        <th>Jadwal Hari</th>
                                                        <th>Jadwal Jam</th>
                                                        <th>ACTION</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($dataJadwal as $jadwal)
                                                        <tr>
                                                            <td class="text-bold-500">{{ $jadwal->idjadwal }}</td>
                                                            <td>{{ $jadwal->asdos }}</td>
                                                            <td>{{ $jadwal->matkul }}</td>
                                                            <td>{{ $jadwal->jadwal_hari }}</td>
                                                            <td>{{ $jadwal->jadwal_jam }}</td>
                                                            <td>
                                                                <a href={{ route('jadwal.detail', ['id' => $jadwal->idjadwal]) }} class="mx-2">
                                                                    <i class="badge-circle badge-circle-light-secondary font-medium-1"
                                                                        data-feather="info"></i>
                                                                </a>
                                                                <a href="#" class="mx-2">
                                                                    <i class="badge-circle badge-circle-light-secondary text-success font-medium-1"
                                                                        data-feather="edit"></i>
                                                                </a>
                                                                <a href="#" class="mx-2">
                                                                    <i class="badge-circle badge-circle-light-secondary text-danger font-medium-1"
                                                                        data-feather="trash"></i>
                                                                </a>
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
