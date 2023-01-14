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
                                            Kumpulan data Presensi
                                        </p>
                                    </div>
                                    <div class="col-12 col-md-6 order-md-2 order-first">
                                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                            <ol class="breadcrumb">
                                                <li class="breadcrumb-item">
                                                    <a href="{{ url('/') }}">Dashboard</a>
                                                </li>
                                                <li class="breadcrumb-item">
                                                    <a href="{{ route('presensi') }}">Data Presensi</a>
                                                </li>
                                                <li class="breadcrumb-item active" aria-current="page">
                                                    Update Data Presensi
                                                </li>
                                            </ol>
                                        </nav>
                                    </div>
                                </div>
                                <section class="section">
                                    <div class="card">
                                        <div class="card-header">Update Data Presensi</div>
                                        <div class="card-body">
                                            <form action="/presensi/edit/{{ $present->idpresensi }}" method="POST">
                                                @csrf
                                                <div class="form-group @error('name') has-error @enderror mb-2">
                                                    <label for="nama">Nama</label>
                                                    <select name="nama" id="nama" class="form-control">
                                                        <option value="" disabled>-- Pilih Mahasiswa --</option>
                                                        @foreach ($dataMhs as $mhs)
                                                            <option value="{{ $mhs->idmhs }}" <?= ($mhs->idmhs == $present->idmhs) ? "selected" : "";?> >{{ $mhs->nama }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group mb-2">
                                                    <label for="matkul">Mata Kuliah</label>
                                                    <select name="matkul" id="matkul" class="form-control">
                                                        <option value="" disabled selected>-- Pilih Mata Kuliah --</option>
                                                        @foreach ($dataMatkul as $mk)
                                                            <option value="{{ $mk->idmatkul }}" <?= ($mk->idmatkul == $present->idmatkul) ? "selected" : "";?>>{{ $mk->nama_matkul }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group mb-2">
                                                    <label for="status">Status</label>
                                                    <select name="status" id="status" class="form-control">
                                                        <option value="" disabled>-- Pilih Status --</option>
                                                        @if ($present->status == 'H')
                                                            <option value="H" selected>Hadir</option>
                                                            <option value="I">Izin</option>
                                                            <option value="A">Alfa</option>
                                                        @elseif ($present->status == 'I')
                                                            <option value="H">Hadir</option>
                                                            <option value="I" selected>Izin</option>
                                                            <option value="A">Alfa</option>
                                                        @elseif ($present->status == 'A')
                                                            <option value="H">Hadir</option>
                                                            <option value="I">Izin</option>
                                                            <option value="A" selected>Alfa</option>
                                                        @endif
                                                        {{-- <option value="H" <?= ($present->status == $present->idmhs) ? "selected" : "";?> >Hadir</option> --}}
                                                        {{-- <option value="I" <?= ($mhs->idmhs == $present->idmhs) ? "selected" : "";?> >Izin</option> --}}
                                                        {{-- <option value="A" <?= ($mhs->idmhs == $present->idmhs) ? "selected" : "";?> >Alfa</option> --}}
                                                    </select>
                                                </div>
                                                <div>
                                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                                    <a href="{{ route('presensi') }}" class="btn btn-danger">Kembali</a>
                                                </div>
                                            </form>
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
