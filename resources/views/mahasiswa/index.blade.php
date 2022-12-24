@extends('layout')
@section('content')

<div id="layoutSidenav_content">
    <main>
    <div class="container-xl px-4 mt-5">
    <div class="row" id="table-hover-row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Data Mahasiswa</h4>
          </div>
          <div class="card-content">
            <div class="card-body">
              <p>
                Add
                <code class="highlighter-rouge">.table-hover</code> to
                enable a hover state on table rows within a
                <code class="highlighter-rouge">&lt;tbody&gt;</code>.
              </p>
            </div>
            <!-- table hover -->
            <div class="table-responsive">
              <table class="table table-hover mb-0">
                <thead>
                  <tr>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Prodi</th>
                    <th>Jenis Kelamin</th>
                    <th>Tempat Lahir</th>
                    <th>IPK</th>
                    <th>ACTION</th>
                  </tr>
                </thead>
                <tbody>
                @foreach ($students as $student)
                
                <tr>
                    <td class="text-bold-500">{{ $student->nim }}</td>
                    <td>{{ $student->nama }}</td>
                    <td>{{ $student->prodi }}</td>
                    <td>{{ $student->gender }}</td>
                    <td class="text-bold-500">{{ $student->tmp_lahir }}</td>
                    <td>{{ $student->ipk }}</td>
                    <td>
                      <a href="#"
                        ><i
                          class="badge-circle badge-circle-light-secondary font-medium-1"
                          data-feather="mail"
                        ></i
                      ></a>
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
    </div>
</main>
</div>
  <!-- Hoverable rows end -->

@endsection