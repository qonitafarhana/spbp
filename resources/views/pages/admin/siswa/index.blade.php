
@extends('layouts.admin')
@section('title','Data Siswa')

@section('content')
<!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Data Siswa</h1>
          </div>
          
          <div class="section-body">
                <div class="card">
                  <div class="card-header">
                    <a href="#" class="btn btn-icon icon-left btn-primary"><i class="far fa-edit"></i> Tambah Siswa</a>

                  </div>
                  <div class="card-body">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">NISN</th>
                          <th scope="col">Nama Siswa</th>
                          <th scope="col">Kelas</th>
                          <th scope="col">Jenis Kelamin</th>
                          <th scope="col">Aksi</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <th scope="row">1</th>
                          <td>111111</td>
                          <td>Farhanakey</td>
                          <td>III-A</td>
                          <td> Perempuan</td>
                          <td>
                          <a class="btn btn-warning">Edit</a>
                          <a class="btn btn-danger">Hapus</a>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                    
                  </div>
                </div>              
          </div>
          
        </section>
      </div>    
@endsection

