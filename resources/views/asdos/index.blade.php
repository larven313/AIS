@extends('layout')

@section('content')
<div id="layoutSidenav_content">
    <main>
        <header class="page-header page-header-compact page-header-light border-bottom bg-white mb-3">
            <div class="container-fluid px-4">
                <div class="page-header-content">
                    <div class="row align-items-center justify-content-between pt-3">
                        <div class="col-auto mb-3">
                            <h1 class="page-header-title">
                                <div class="page-header-icon"><i data-feather="truck"></i></div>
                                Asdos List
                            </h1>
                        </div>
                        <div class="col-12 col-xl-auto mb-3">
                            <button class="btn btn-sm btn-light text-primary" type="button" data-bs-toggle="modal" data-bs-target="#addModal">
                                <i class="me-1" data-feather="plus"></i>
                                Add New Asdos
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Main page content-->
        <div class="container-fluid px-4 mt-2">
            <div class="card">
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>Nama</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>NO</th>
                                <th>Nama</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <tr>
                                <td>tes</td>
                                <td>tes</td>
                                <td>tes</td>
                            </tr>
                            <tr>
                                <td>tes</td>
                                <td>tes</td>
                                <td>tes</td>
                            </tr>
                            <tr>
                                <td>tes</td>
                                <td>tes</td>
                                <td>tes</td>
                            </tr>
                            <tr>
                                <td>tes</td>
                                <td>tes</td>
                                <td>tes</td>
                            </tr>
                            <tr>
                                <td>tes</td>
                                <td>tes</td>
                                <td>tes</td>
                            </tr>
                            <tr>
                                <td>tes</td>
                                <td>tes</td>
                                <td>tes</td>
                            </tr>
                            <tr>
                                <td>tes</td>
                                <td>tes</td>
                                <td>tes</td>
                            </tr>
                            <tr>
                                <td>tes</td>
                                <td>tes</td>
                                <td>tes</td>
                            </tr>
                            <tr>
                                <td>tes</td>
                                <td>tes</td>
                                <td>tes</td>
                            </tr>
                            <tr>
                                <td>tes</td>
                                <td>tes</td>
                                <td>tes</td>
                            </tr>
                            <tr>
                                <td>tes</td>
                                <td>tes</td>
                                <td>tes</td>
                            </tr>
                            <tr>
                                <td>tes</td>
                                <td>tes</td>
                                <td>tes</td>
                            </tr>
                            <tr>
                                <td>tes</td>
                                <td>tes</td>
                                <td>tes</td>
                            </tr>
                            <tr>
                                <td>tes</td>
                                <td>tes</td>
                                <td>tes</td>
                            </tr>
                            <tr>
                                <td>tes</td>
                                <td>tes</td>
                                <td>tes</td>
                            </tr>
                            <tr>
                                <td>tes</td>
                                <td>tes</td>
                                <td>tes</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>

    <!-- Modal -->
    @include('asdos.create')

    <!-- Footer -->
    @include('templates.footer')

</div>
@endsection