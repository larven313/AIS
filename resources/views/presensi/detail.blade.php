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
                                        <h3>Data Presensi</h3>
                                        <p class="text-subtitle text-muted">
                                            Kumpulan data presensi
                                        </p>
                                    </div>
                                    <div class="col-12 col-md-6 order-md-2 order-first">
                                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                            <ol class="breadcrumb">
                                                <li class="breadcrumb-item">
                                                    <a href="{{ url('/') }}">Dashboard</a>
                                                </li>
                                                <li class="breadcrumb-item">
                                                    <a href="{{ route('users') }}">Data Presensi</a>
                                                </li>
                                                <li class="breadcrumb-item active" aria-current="page">
                                                    Detail Data Presensi
                                                </li>
                                            </ol>
                                        </nav>
                                    </div>
                                </div>
                                <section class="section">
                                    <div class="card">
                                        <div class="card-header">Detail Data Presensi</div>
                                        <div class="card-body">
                                            @csrf
                                            <div class="mb-2">
                                                <label for="name">Nama</label>
                                                <input type="text" name="name" class="form-control" id="name"
                                                    value="{{ $dataMhs->nama }}" disabled>
                                            </div>
                                            <div class="mb-2">
                                                <label for="matkul">Mata Kuliah</label>
                                                <input type="text" name="matkul" class="form-control" id="matkul"
                                                    value="{{ $dataMatkul->nama_matkul }}" disabled>
                                            </div>
                                            <div class="mb-2">
                                                <label for="pertemuan">Pertemuan</label>
                                                @if ($dataKhs == null)
                                                    <input type="text" name="pertemuan" class="form-control"
                                                        id="pertemuan" value="Data KHS Belum Ada" disabled>
                                                @else
                                                    <input type="text" name="pertemuan" class="form-control"
                                                        id="pertemuan" value="{{ $dataKhs->pertemuan }}" disabled>
                                                @endif
                                            </div>
                                            <div class="mb-2">
                                                <label for="status">Status</label>
                                                <input type="text" name="status" class="form-control" id="status"
                                                    value="{{ $dataPresensi->status }}" disabled>
                                            </div>
                                            <div>
                                                <a href="{{ route('presensi') }}" class="btn btn-danger">Kembali</a>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
@endsection
