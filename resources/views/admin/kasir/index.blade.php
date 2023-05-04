@extends('layouts.admin')

@section('content')

<div class="content">
<div class="card">
    <div class="card-header">
      <h3 class="card-title">DATA KASIR</h3>
        <div class="card-tools">
        <form action="/kasir/search" class="form-inline" method="GET">
        <input type="search" name="search" class="form-control float-right" placeholder="Isikan Nama">
                    
        <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
        </div>
        </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>Email</th>
                      <th>Password</th>
                      <th>Nama</th>
                      <th>Alamat</th>
                      <th>No_hp</th>
                      <th>Opsi</th>
                      <th><a href="/kasir/create" class="btn btn-primary">Tambah</a></th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($kasir as $kasir)

                     <tr>
                     <td>{{$kasir->email}}</td>
                      <td>{{$kasir->password}}</td>
                      <td>{{$kasir->nama}}</td>
                      <td>{{$kasir->alamat}}</td>
                      <td>{{$kasir->no_hp}}</td>
                      <td> <a href="/kasir/{{$kasir->id}}/delete" class="btn btn-danger" onclick="return confirm('Apakah Yakin Dihapus? {{$kasir->nama}} ');"> Hapus </a>
                      <a href="/kasir/{{$kasir->id}}/edit" class="btn btn-warning">Edit</a></td>
                      <td></td>
                    </tr>
                    @endforeach
                    
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        @endsection
</div>