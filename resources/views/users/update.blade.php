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
                                        <h3>Data Users</h3>
                                        <p class="text-subtitle text-muted">
                                            Kumpulan data Users
                                        </p>
                                    </div>
                                    <div class="col-12 col-md-6 order-md-2 order-first">
                                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                                            <ol class="breadcrumb">
                                                <li class="breadcrumb-item">
                                                    <a href="{{ url('/') }}">Dashboard</a>
                                                </li>
                                                <li class="breadcrumb-item">
                                                    <a href="{{ route('users') }}">Data Users</a>
                                                </li>
                                                <li class="breadcrumb-item active" aria-current="page">
                                                    Update Data Users
                                                </li>
                                            </ol>
                                        </nav>
                                    </div>
                                </div>
                                <section class="section">
                                    <div class="card">
                                        <div class="card-header">Update Data Users</div>
                                        <div class="card-body">
                                            <form action="/users/edit/{{ $users->id }}" method="POST">
                                                @csrf
                                                <div class="form-group @error('name') has-error @enderror mb-2">
                                                    <label for="name">Name</label>
                                                    <input type="text" name="name" class="form-control" id="name"
                                                        placeholder="Masukkan Nama" value="{{ $users->name }}">
                                                    @error('name')
                                                        <span
                                                            class="help-block
                                                        text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div class="form-group @error('email') has-error @enderror mb-2">
                                                    <label for="email">Email</label>
                                                    <input type="email" name="email" class="form-control" id="email"
                                                        placeholder="Masukkan Email" value="{{ $users->email }}">
                                                    @error('email')
                                                        <span
                                                            class="help-block
                                                        text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                {{-- <div class="form-group @error('password') has-error @enderror mb-2">
                                                    <label for="password">Password</label>
                                                    <input type="password" pattern=".{8,}" name="password"
                                                        class="form-control" id="password" placeholder="Masukkan Password"
                                                        value="{{ old('password') }}">
                                                    @error('password')
                                                        <span
                                                            class="help-block
                                                        text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div
                                                    class="form-group @error('password_confirmation') has-error @enderror mb-2">
                                                    <label for="password_confirmation">Konfirmasi Password</label>
                                                    <input type="password" pattern=".{8,}" title="Minimal 8 Characters"
                                                        name="password_confirmation" class="form-control"
                                                        id="password_confirmation"
                                                        placeholder="Masukkan Konfirmasi Password"
                                                        value="{{ old('password_confirmation') }}">
                                                    @error('password_confirmation')
                                                        <span
                                                            class="help-block
                                                        text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div> --}}
                                                <div class="form-group @error('role') has-error @enderror mb-2">
                                                    <label for="role">Role</label>
                                                    <select name="role" id="role" class="form-control">
                                                        <option value="" disabled>-- Pilih Role --</option>
                                                        @if ($users->role == 'admin')
                                                            <option value="admin" selected>Admin</option>
                                                            <option value="asdos">Asdos</option>
                                                            <option value="mahasiswa">Mahasiswa</option>
                                                        @elseif($users->role == 'asdos')
                                                            <option value="admin">Admin</option>
                                                            <option value="asdos" selected>Asdos</option>
                                                            <option value="mahasiswa">Mahasiswa</option>
                                                        @elseif($users->role == 'mahasiswa')
                                                            <option value="admin">Admin</option>
                                                            <option value="asdos">Asdos</option>
                                                            <option value="mahasiswa" selected>Mahasiswa</option>
                                                        @endif
                                                    </select>
                                                    @error('role')
                                                        <span
                                                            class="help-block
                                                        text-danger">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                                <div>
                                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                                    <a href="{{ route('users') }}" class="btn btn-danger">Kembali</a>
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
