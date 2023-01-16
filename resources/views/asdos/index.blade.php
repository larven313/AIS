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
                                        <h3>Data Asisten Dosen</h3>
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
                                <a href="#" class="my-4 btn btn-primary text">Tambah Asisten Dosen</a>
                                <div class="card">
                                    <div class="card-header">Data Asisten Dosen</div>
                                    <div class="card-body">
                                        <div class="table-responsive text-center">
                                            <table class="table" id="table1">
                                                <thead>
                                                    <tr>
                                                        <th>NIM</th>
                                                        <th>Nama</th>
                                                        <th>Semester</th>
                                                        <th>Jenis Kelamin</th>
                                                        <th>Jurusan</th>
                                                        <th>ACTION</th>
                                                    </tr>
                                                </thead>
                                                <tbody class="table-center">
                                                    @foreach ($dataAsdos as $asdos)
                                                        <tr>
                                                            <td class="text-bold-500">{{ $asdos->nim_asdos }}</td>
                                                            <td>{{ $asdos->nama }}</td>
                                                            <td>{{ $asdos->semester }}</td>
                                                            <td>{{ $asdos->gender }}</td>
                                                            <td>{{ $asdos->prodi }}</td>
                                                            <td>
                                                                <a href="{{ route('asdos.detail', ['id' => $asdos->idasdos]) }}" class="mx-2">
                                                                    <i class="badge-circle badge-circle-light-secondary font-medium-1" data-feather="info"></i>
                                                                </a>
                                                                <a href="#" class="mx-2">
                                                                    <i class="badge-circle badge-circle-light-secondary text-success font-medium-1" data-feather="edit"></i>
                                                                </a>
                                                                <a href="{{ route('asdos.delete', ['id' => $asdos->idasdos]) }}" class="mx-2">
                                                                    <i class="badge-circle badge-circle-light-secondary text-danger font-medium-1" data-feather="trash"></i>
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
