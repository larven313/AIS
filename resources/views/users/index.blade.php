@extends('layout')
@section('content')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-xl px-4 mt-5">
                <div class="row" id="table-hover-row">
                    <div class="col-12">
                        {{-- Process Message --}}
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>{{ $message }}</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif

                        @if ($message = Session::get('error'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>{{ $message }}</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif

                        @if ($message = Session::get('warning'))
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <strong>{{ $message }}</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif

                        @if ($message = Session::get('info'))
                            <div class="alert alert-info alert-dismissible fade show" role="alert">
                                <strong>{{ $message }}</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif

                        @if ($errors->any())
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>Please check the form below for errors</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        @endif
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
                                                <li class="breadcrumb-item active" aria-current="page">
                                                    Data Users
                                                </li>
                                            </ol>
                                        </nav>
                                    </div>
                                </div>
                            </div>

                            <!-- Basic Tables start -->
                            <section class="section">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="d-flex justify-content-between">
                                            <p class="my-auto">Data Users</p>
                                            <a href="{{ route('users.create') }}" class="btn btn-success gap-2">
                                                <i class="fa-solid fa-plus-square"></i>
                                                Tambah Data
                                            </a>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="table-responsive">
                                            <table class="table" id="table1">
                                                <thead>
                                                    <tr>
                                                        <th>Name</th>
                                                        <th>Email</th>
                                                        <th>Role</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($dataUser as $users)
                                                        <tr>
                                                            <td class="text-bold-500">{{ $users->name }}</td>
                                                            <td>{{ $users->email }}</td>
                                                            <td>{{ $users->role }}</td>
                                                            <td>
                                                                <a href="/users/detail/{{ $users->id }}" class="mx-2">
                                                                    <i class="badge-circle badge-circle-light-secondary font-medium-1"
                                                                        data-feather="info"></i>
                                                                </a>
                                                                <a href="/users/update/{{ $users->id }}" class="mx-2">
                                                                    <i class="badge-circle badge-circle-light-secondary text-success font-medium-1"
                                                                        data-feather="edit"></i>
                                                                </a>
                                                                <a href="/users/destroy/{{ $users->id }}"
                                                                    class="mx-2 deletebutton" onclick="return confirm('Are you sure?')">
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
