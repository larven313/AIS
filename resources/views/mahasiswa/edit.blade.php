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
              <h3>Data Mahasiswa</h3>
              <p class="text-subtitle text-muted">
                Tambah Mahasiswa
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

  <!-- // Basic multiple Column Form section start -->
  <section id="multiple-column-form">
    <div class="row match-height">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Edit Mahasiswa</h4>
          </div>
          <div class="card-content">
            <div class="card-body">
              <form class="form" data-parsley-validate action="{{ route('mahasiswa.update',$dataMahasiswa['idmhs']) }}" method="POST">
                @csrf
                <div class="row">
                  <div class="col-md-6 col-12">                    
                    <div class="form-group mandatory">
                      <label for="first-name-column" class="form-label"
                        >NIM</label
                      >
                      <input
                        type="text"
                        id="first-name-column"
                        class="form-control {{ $errors->first('inp_nim') }}"
                        placeholder="NIM Mahasiswa"
                        value="{{ $dataMahasiswa['nim_mhs'] }}"
                        name="inp_nim"
                        data-parsley-required="true"
                      />
                    </div>
                    @error('inp_nim')
                    <div class="alert alert-danger alert-dismissible show fade">
                      {{ $message }}
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @enderror
                  </div>
                  <div class="col-md-6 col-12">
                    <div class="form-group">
                      <label for="last-name-column" class="form-label"
                        >Nama</label
                      >
                      <input
                        type="text"
                        id="last-name-column"
                        class="form-control {{ $errors->first('inp_nama') }}"
                        placeholder="Nama Lengkap"
                        value="{{ $dataMahasiswa['nama'] }}"
                        name="inp_nama"
                        data-parsley-required="true"
                      />
                    </div>
                    @error('inp_nama')
                    <div class="alert alert-danger alert-dismissible show fade">
                      {{ $message }}
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @enderror
                  </div>
                  <div class="col-md-6 col-12">
                    <div class="form-group">
                      <label for="city-column" class="form-label"
                        >Alamat</label
                      >
                      <input
                        type="text"
                        id="city-column"
                        class="form-control {{ $errors->first('inp_alamat') }}"
                        placeholder="Masukkan alamat. alamat default adalah Jakarta"
                        value="{{ $dataMahasiswa['alamat'] }}"
                        name="inp_alamat"
                        data-parsley-restricted-city="Jakarta"
                        data-parsley-required="true"
                      />
                    </div>
                    @error('inp_alamat')
                    <div class="alert alert-danger alert-dismissible show fade">
                      {{ $message }}
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @enderror
                  </div>
                  <div class="col-md-6 col-12">
                    <div class="form-group">
                      <label for="gender" class="form-label"
                        >Gender</label
                      >
                      <select name="inp_gender" id="gender" class="form-select">
                        <option value="{{ $dataMahasiswa['gender'] }}" hidden>{{ $dataMahasiswa['gender'] == "L" ? "Laki-laki" : "Perempuan" }}</option>
                        <option value="L">Laki-laki</option>
                        <option value="P">Perempuan</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-md-6 col-12">
                    <div class="form-group mandatory">
                      <label for="prodi" class="form-label"
                        >Prodi</label
                      >
                      <select name="inp_prodi" id="idprodi" class="form-select">
                        
                        @if ($dataMahasiswa->idprodi != null)
                        <option hidden value="{{ $dataMahasiswa->idprodi }}">{{ $dataJoin->nama_prodi }}</option>
                        @else
                            <option hidden>- Belum menghubungkan akun -</option>
                        @endif
                          @foreach ($prodi as $item)
                            <option value="{{ $item->idprodi }}">{{ $item->nama_prodi }}</option>
                          @endforeach
                      </select>
                    </div>
                  </div>
                  <div class="col-md-6 col-12">
                    <div class="form-group mandatory">
                      <label for="iduser" class="form-label">User</label>
                      <select name="inp_user" id="iduser" class="form-select {{ $errors->first('inp_user') ? "is-invalid" : "" }}">
                        @if ($dataMahasiswa->iduser != null)
                        <option value="{{ $dataJoin->iduser }}" hidden>{{ $dataJoin->username }}</option>
                        @else
                            <option hidden>- Belum menghubungkan akun -</option>
                        @endif

                        @foreach ($user as $item)
                        <option value="{{ $item->iduser }}">{{ $item->username }}</option>
                        @endforeach
                      </select>
                    </div>
                    @error('inp_user')
                    <div class="alert alert-danger alert-dismissible show fade">
                      {{ $message }}
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @enderror
                  </div>
                <div class="row">
                  <div class="col-12 d-flex justify-content-end">
                    <button
                      type="submit"
                      class="btn btn-primary me-1 mb-1"
                    >
                      Submit
                    </button>
                    <a href="{{ url()->previous() }}"
                      class="btn btn-light-secondary me-1 mb-1"
                    >
                      Kembali
                    </a>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- // Basic multiple Column Form section end -->
      </div>
    </div>
  </div>
  </div>
</main>
@endsection