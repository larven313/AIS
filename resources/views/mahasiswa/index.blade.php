@extends('layout')
@section('content')

<div id="layoutSidenav_content">
  
    <main>
    <div class="container-xl px-4 mt-5">
    <div class="row" id="table-hover-row">
      <div class="col-12">
        @if (session('status'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          {{ session('status') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        <div class="page-heading">
          <div class="page-title">
            <div class="row">
              <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Data Mahasiswa</h3>
                <p class="text-subtitle text-muted">
                  Kumpulan data mahasiswa
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
                      Data Mahasiswa
                    </li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>

          <!-- Basic Tables start -->
          <section class="section">
            <div class="row match-height">
              <div class="col-12">
            <div class="card">
              <div class="card-header">
                <div class="row">
                  <div class="col-md-6">Data Mahasiswa</div>
                  <div class="col-md-6 text-end">
                   <a href="{{ route("mahasiswa.create") }}"><button type="button" class="btn btn-sm btn-primary">Tambah</button></a>
                  </div>
                </div>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table" id="table1">
                    <thead>
                      <tr>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Prodi</th>
                        <th>Jenis Kelamin</th>
                        <th>Alamat</th>
                        <th>ACTION</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ($students as $student)
                    
                    <tr>
                        <td class="text-bold-500">{{ $student->nim_mhs }}</td>
                        <td>{{ $student->nama }}</td>
                        <td>{{ $student->prodi }}</td>
                        <td>
                         @if ($student->gender == 'L')
                             {{ "Laki-laki" }}
                         @else
                             {{ "Perempuan" }}
                         @endif
                          
                        </td>
                        <td class="text-bold-500">{{ $student->alamat }}</td>
                        <td>
                          <a href="{{ route('mahasiswa.edit',$student->idmhs) }}" class="btn btn-sm btn-warning"
                          > Edit</a
                        >
                        <a href="{{ route('mahasiswa.destroy',$student->idmhs) }}" class="btn btn-sm btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus?')"
                        > Delete</a
                      >
                        </td>
                      </tr>
    
                    @endforeach
                      
                    </tbody>
                  </table>
                </div>
              </div>
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