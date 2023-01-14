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
                                            Kumpulan data users
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
                                                    Detail Data Users
                                                </li>
                                            </ol>
                                        </nav>
                                    </div>
                                </div>
                                <section class="section">
                                    <div class="card">
                                        <div class="card-header">Detail Data Users</div>
                                        <div class="card-body">
                                            @csrf
                                            <div class="mb-2">
                                                <label for="name">Name</label>
                                                <input type="text" name="name" class="form-control" id="name"
                                                    value="{{ $users->name }}" disabled>
                                            </div>
                                            <div class="mb-2">
                                                <label for="email">Email</label>
                                                <input type="text" name="email" class="form-control" id="email"
                                                    value="{{ $users->email }}" disabled>
                                            </div>
                                            <div class="mb-2">
                                                <label for="role">Role</label>
                                                <input type="text" name="role" class="form-control" id="role"
                                                    value="{{ $users->role }}" disabled>
                                            </div>
                                            <div>
                                                <a href="{{ route('users') }}" class="btn btn-danger">Kembali</a>
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
